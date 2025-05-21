<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #666;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Daftar Film</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Sutradara</th>
                <th>Tahun Rilis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM film";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_film'] . "</td>";
                echo "<td>" . $row['judul'] . "</td>";
                echo "<td>" . $row['sutradara'] . "</td>";
                echo "<td>" . $row['tahun_rilis'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

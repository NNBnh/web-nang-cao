<?php
require_once("config.php");
require_once("functions/functions.php");
require_once("classes/dbConnection.php");
?>
<h1>Danh sách người dùng</h1>
<table class="table" id="tblUser">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name/Email</th>
            <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dbConnection = new dbConnection();
        $conn = $dbConnection->getConnection();

        $sql = "SELECT id, name, password FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $stt = 0;
            while ($row = $result->fetch_assoc()) {
                $stt++; ?>
                <tr>
                    <th scope="row">
                        <?= $stt ?>
                    </th>
                    <td>
                        <?= $row["id"] ?>
                    </td>
                    <td>
                        <?= $row["name"] ?>
                    </td>
                    <td>
                        <?= $row["password"] ?>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </tbody>
</table>
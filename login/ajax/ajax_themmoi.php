<?php
require_once("../functions/functions.php");
require_once("../classes/dbConnection.php");

$message = "";
$error = "";

$action = getValue("action", "POST", "str", "");
if ($action != "") {
    // Lay POST Value
    $inputID = getValue("inputID", "POST", "int", 0);
    $inputEmail = getValue("inputEmail", "POST", "str", "");
    $inputPassword = getValue("inputPassword", "POST", "str", "");

    if ($inputID > 0 && $inputEmail != "" && $inputPassword != "") {
        // Insert SQL
        $dbConnection = new dbConnection();
        $conn = $dbConnection->getConnection();

        $sql = 'INSERT INTO users(id, name, password) VALUES (' . $inputID . ', "' . $inputEmail . '", "' . $inputPassword . '")';
        // echo $sql;
        if ($conn->query($sql) === true) {
            $message = '<tr>
                            <th scope="row">#</th>
                            <td>' . $inputID . '</td>
                            <td>' . $inputEmail . '</td>
                            <td>' . $inputPassword . '</td>
                        </tr>';
            echo $message;
            exit();
        } else {
            echo "error";
        }
        
        $conn->close();
    } else {
        echo "error";
    }
} else {
    echo "error";
}

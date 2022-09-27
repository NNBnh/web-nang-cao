<?php
function getValue($inputName, $method, $dataType, $defaultVal)
{
    $returnVal = $defaultVal;
    switch ($method) {
        case "POST":
            if (isset($_POST[$inputName])) {
                $returnVal = $_POST[$inputName];
            }
            break;
        default: // GET / khac
            if (isset($_GET[$inputName])) {
                $returnVal = $_GET[$inputName];
            }
            break;
    }

    switch ($dataType) {
        case "int":
            $returnVal = intval($returnVal);
            break;
        case "double":
            $returnVal = doubleval($returnVal);
            break;
        case "str":
            $returnVal = trim($returnVal);
            break;
        default:
            $returnVal = intval($returnVal);
            break;
    }
    return $returnVal;
}

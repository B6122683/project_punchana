<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $conn = new mysqli("localhost", "root", "", "punchana");

    $result = $conn->query("SELECT name_proj, name_manage, phone_proj FROM project");

    $outp = "[";
    while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        if ($outp != "[") {$outp .= ",";}
        $outp .= '{"Name":"'  . $rs["name_proj"] . '",';
        $outp .= '"Manager":"'   . $rs["name_manage"]        . '",';
        $outp .= '"Phone":"'. $rs["phone_proj"]     . '"}';
    }
    $outp .="]";

    $conn->close();

    echo($outp);
?>
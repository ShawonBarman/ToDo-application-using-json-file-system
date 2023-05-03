<?php

    $todoName = $_POST["todo_name"] ?? '';
    if ($todoName){
        if (file_exists('todo.json')){
            $json = file_get_contents('todo.json'); //get data from json file
            $jsonArray = json_decode($json, true); //translate data from json to associative array

            unset($jsonArray[$todoName]);

            file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
        }
    }
    header("Location: index.php");
?>
<?php
    // Insert Item Into database
    require "phpProj01.php";
    if (isset($_POST['submit'])) {
        $task = $_POST['myTask'];
        $insert = $conn->prepare("INSERT INTO tasks(name) VALUES (:name)");
        $insert->execute([':name' => $task]);
        
        header("location: phpProj02.php");
    }

    // delete Item from database
    // require "phpProj01.php";
    if (isset($_GET['del_id'])) {
        $id = $_GET['del_id'];
        $delete = $conn->prepare("DELETE FROM tasks WHERE id=:id");
        $delete->execute([':id' => $id]);
        header("location: phpProj02.php");
    }

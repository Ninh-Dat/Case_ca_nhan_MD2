<?php

use App\Controller\NoteController;
use App\Controller\TypeNoteController;


require "vendor/autoload.php";

$noteController = new NoteController();
$typeController = new TypeNoteController();
$page = $_GET["page"] ?? "";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<?php
include_once "App/View/layout/nav.php"
?>

<!--<a href="index.php">Home</a>-->
<!--<a href="index.php?page=type_note-list">Note_pyte</a>-->
<!--<a href="index.php?page=note-list">Note</a>-->
<div class="container">
<?php
switch ($page) {
    case "type_note-list":
        $typeController->getALl();
        break;
    case "type_note-detail":
        $typeController->getDetail($_GET["id"]);
        break;
    case "type_note-delete":
        $typeController->delete($_GET["id"]);
        break;
    case "type_note-create":
        $typeController->createTypeNote();
        break;
    case "type_note-update":
        $typeController->updateTypeNote();
        break;
    case "note-list":
        $noteController->getALl();
        break;
    case "note-detail":
        $noteController->getDetail($_GET["id"]);
        break;
    case "note-delete":
        $noteController->delete($_GET["id"]);
        break;
    case "note-create":
        $noteController->createNote($_POST);
        break;
    case "note-update":
        $noteController->updateNote();
        break;
    default;
}
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>

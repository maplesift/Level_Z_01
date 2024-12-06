<?php
include_once "db.php";


$Ad->save($_POST);

to("../admin.php?do=ad");

// $_POST['img'];
// $text=$_POST['text'];
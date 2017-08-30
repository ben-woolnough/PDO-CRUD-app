<?php
echo 'test';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location: index.php');
    exit();
}

include 'connect.php';

include 'Crud.php';
$crud = new Crud($db);

if ($crud->delete($id)) {
    header('location: index.php?del-success');
} else {
    header('location: index.php?del-fail');
}

?>
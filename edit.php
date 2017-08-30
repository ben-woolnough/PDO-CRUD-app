<?php

if (! isset($_POST['submit'])) {

    header('location: index.php');
    exit();
}

$id = $_POST['id'];
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

include 'connect.php';

include 'Crud.php';
$crud = new Crud($db);

if ($crud->update($id, $firstname, $lastname, $email, $phone)) {
    header('location: index.php?update-success');
} else {
    header('location: index.php?update-fail');
}


?>
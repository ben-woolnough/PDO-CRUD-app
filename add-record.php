<?php include 'include/header.php'; ?>
<?php include 'connect.php'; ?>


<?php
if (isset($_POST['submit'])) {

    include 'Crud.php';
    $crud = new Crud($db);

    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if ($crud->create($firstname, $lastname, $email, $phone)) {
        header('location: add-record.php?success');
    } else {
        header('location: add-record.php?fail');
    }
}
?>

<div class="container">
  <form method="post">
    <div class="form-group">
      <label for="first-name">First name</label>
      <input type="text" name="first-name" class="form-control" id="first-name" placeholder="Enter first name" required="required">
    </div>
    <div class="form-group">
      <label for="last-name">Last name</label>
      <input type="text" name="last-name" class="form-control" id="last-name" placeholder="Enter last name" required="required">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" required="required">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include 'include/footer.php' ?>
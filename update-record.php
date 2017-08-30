<?php include 'include/header.php'; ?>
<?php include 'connect.php'; ?>


<?php
if (isset($_GET['id'])) {

    include 'Crud.php';
    $crud = new Crud($db);

    $id = $_GET['id'];

    if ($results = $crud->getById($id)) {

        $firstname = $results[0]['firstname'];
        $lastname = $results[0]['lastname'];
        $email = $results[0]['email'];
        $phone = $results[0]['phone'];

    } else {
        header('location: index.php?edit-fail');
        exit();
    }
}
?>

<div class="container">
  <form action="edit.php" method="post">
    <div class="form-group">
      <label for="first-name">First name</label>
      <input type="text" name="first-name" class="form-control" id="first-name" placeholder="Enter first name" required="required" value="<?php echo $firstname ?>">
    </div>
    <div class="form-group">
      <label for="last-name">Last name</label>
      <input type="text" name="last-name" class="form-control" id="last-name" placeholder="Enter last name" required="required" value="<?php echo $lastname ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" value="<?php echo $email ?>">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" required="required" value="<?php echo $phone ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include 'include/footer.php' ?>
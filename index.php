<?php include 'include/header.php'; ?>
<?php include 'include/alerts.php' ?>
<?php include 'connect.php'; ?>

<div class="container">
  <table class="table">
    <thead class="thead-inverse">
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

<?php
$stmt = $db->query("SELECT * FROM users");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $id = htmlentities($row['id']);
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $email = htmlentities($row['email']);
    $phone = htmlentities($row['phone']);

    echo '
      <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $firstname . '</td>
        <td>' . $lastname . '</td>
        <td>' . $email . '</td>
        <td>' . $phone . '</td>
        <td><a class="btn btn-outline-info" href="update-record.php?id=' . $id . '">Edit</a></td>
        <td><a class="btn btn-outline-danger" href="delete.php?id=' . $id . '">&times</a></td>
      </tr>';
}
?>

    </tbody>
  </table>
</div>

<?php include 'include/footer.php' ?>
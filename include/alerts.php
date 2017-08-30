<?php if (isset($_GET['del-success'])) : ?>
  <div class="container">
    <div class="alert alert-success" role="alert">
      Record deleted!
    </div>
  </div>
<?php endif; ?>

<?php if (isset($_GET['del-fail'])) : ?>
  <div class="container">
    <div class="alert alert-danger" role="alert">
      Error deleting record.
    </div>
  </div>
<?php endif; ?>

<?php if (isset($_GET['update-success'])) : ?>
  <div class="container">
    <div class="alert alert-success" role="alert">
      Record updated!
    </div>
  </div>
<?php endif; ?>

<?php if (isset($_GET['update-fail'])) : ?>
  <div class="container">
    <div class="alert alert-danger" role="alert">
      Error updating record.
    </div>
  </div>
<?php endif; ?>

<?php if (isset($_GET['create-success'])) : ?>
  <div class="container">
    <div class="alert alert-success" role="alert">
      Record created!
    </div>
  </div>
<?php endif; ?>

<?php if (isset($_GET['create-fail'])) : ?>
  <div class="container">
    <div class="alert alert-danger" role="alert">
      Error creating record.
    </div>
  </div>
<?php endif; ?>
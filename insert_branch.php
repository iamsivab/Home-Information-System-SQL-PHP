
<?php

include "connection.php";

$conn_id = dream_connect()
	or Die("Connection failed");

?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="phpcoding">
    <section class="headeroption">
    <h3 style="color:black;" align="center">Insert Branch Information Into Branch Operations</h3>
    <ul class="b">
    <h3 style="color:green;" align="center">Insert your Branch Information</h3> 
    </ul>
    </section>
    </div>

<div class="row">
<div class="col-md-8">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
<div class="card card-body">
<form name = "InsertForm" method = "GET" action = "insert_branch_end.php">
<div class="form-group">
      <input type="text" class="form-control" name="Bno" placeholder="Bno (Example: B5)" required>
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Street" placeholder="Street (Example: 22 Deer Rd)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Area" placeholder="Area (Example: Sidcup)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="City" placeholder="City  (Example: London)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Pcode" placeholder="Pcode (Example: SW1 4EH)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Tel_No" placeholder="Tel_No (Example: 0171-886-1212)">
</div>
<br>
<div class="form-group">
      <input type="text" class="form-control" class="form-control" name="Fax_No" placeholder="Fax_No (Example: 0171-886-1214)">
</div>
<br>
<input type="submit" name="submit" class="btn btn-success btn-block" value="Submit">
</form>
</div>
</div>
</div>
</main>

<?php include('footer.php'); 
?>
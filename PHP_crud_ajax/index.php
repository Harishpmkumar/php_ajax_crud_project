<?php
require_once("config.php");

$sql = "select * from crud";
$result = ($conn->query($sql));
if ($result) {
  $rows = $result->fetch_all(MYSQLI_ASSOC);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- bootstrap5 cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- custom css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="form-container">
    <h2 class="text-center">Form</h2>
    <form id="submitForm">
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <input type="text" name="id" id="id" hidden>
      <div class="mb-3">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
      <button type="button" class="btn btn-primary" id="submit">Submit</button>
      <button type="button" class="btn btn-warning" id="update">Update</button>
    </form>
  </div>


  <table class="table table-bordered mt-5" id="myTable">
    <h2 class="text-center mt-5">Registered Data</h2>
    <thead>
      <tr>
        <th>sno</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sno = 0;
      if (!empty($rows))
        foreach ($rows as $row) {
      ?>
        <tr>

          <td><?php echo ++$sno; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><span class="btn btn-success edit" data-id="<?= $row['id'] ?>">Edit</span></td>
          <td><span class="btn btn-danger delete" data-id="<?= $row['id'] ?>">Delete</span></td>

        </tr>
      <?php } ?>
    </tbody>
  </table>


  <!-- jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- custom script -->
  <script src="script.js"></script>
</body>

</html>
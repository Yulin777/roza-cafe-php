<!DOCTYPE html>

<html lang="en">

<head>

<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div class="table-responsive">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">First Name </th>
        <th scope="col">Last Name</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require_once "../config.php";

      $i=0;
      // Prepare an insert statement
      $sql = "SELECT * FROM users";
      if ($result = mysqli_query($link, $sql)) {

          while ($row = mysqli_fetch_row($result))
          {
             echo "<tr><th scope='row'>".++$i."</th>";
             printf("<td>%s</td>", $row[0]);
             printf("<td>%s</td>", $row[1]);
             printf("<td>%s</td>", $row[2]);
             printf("<td>%s</td>", $row[3]);
             echo "</tr>";
          }

          }

      ?>

    </tbody>
  </table>

</div>
</body>
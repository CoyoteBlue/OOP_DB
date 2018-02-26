<?php
  include 'includes/dbh.inc.php';
  include 'includes/user.inc.php'
  include 'includes/viewuser.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OOP - Database Connect</title>
</head>
<body>
  <h2>OOP connect to MySQL Database</h2>

<?php
  $users = new ViewUser();
  $users->showAllUsers();
?>

</body>
</html>

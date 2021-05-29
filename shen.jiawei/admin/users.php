<!DOCTYPE html>
<html lang="en">
<head>
  <?php $title = "User Admin" ?>
  <?php include "../parts/head.php" ?>
</head>
<body>
  <?php include "navbar.php" ?>
  <div class="card soft container">
    <?php
      $users = json_decode(file_get_contents("users.json"));
      if (isset($_GET["id"])) {
        echo <<<HTML
          <a href="users.php">Back</a>
        <div class="material-input">
          <input type="text" placeholder=" " value="{$users[$_GET['id']]->name}"/>
          <label>Name</label>
        </div>
        <div class="material-input">
          <input type="text" placeholder=" " value="{$users[$_GET['id']]->type}"/>
          <label>Type</label>
        </div>
        <div class="material-input">
          <input type="text" placeholder=" " value="{$users[$_GET['id']]->email}"/>
          <label>Email</label>
        </div>
        HTML;
      } else {
        for ($i = 0; $i < count($users); $i++) {
          echo <<<HTML
            <li><a href="users.php?id=$i">{$users[$i]->name}</a></li>
          HTML;
        }
      }
    ?>
  </div>
</body>
</html>
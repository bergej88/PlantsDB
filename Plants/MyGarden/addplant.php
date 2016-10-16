<?php
  $db = new PDO("mysql:dbname=bergej88; host=localhost",
                "bergej88", "plantDatabase");

  $states = $db->query ("SELECT Name FROM States");
 ?>


<!DOCTYPE html>
<html>
<head>
</head>
    <body>
      <form action="" method="post">
        <div>
          <label>Date Planted:</label><br>
          <input type="date" name="dateplanted">
        </div>
        <div>
          <label>State Planted:</label><br>
          <select name="state">
          <?php
            foreach ($states as $state) { ?>
                      <option value="<?= $state["Name"] ?>" ><?=$state["Name"]?></option>
          <?php  } ?>
        </div>
      </form>
    </body>
</html>

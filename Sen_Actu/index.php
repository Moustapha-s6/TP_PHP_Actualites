<?php include("./config.php");
$ver = "SELECT * FROM article";
$vex = $bdd->query($ver);
$vor = $vex->rowCount();
?>
<!DOCTYPE html>
<html>
<?php include("./pages/head.php") ?>
<body>
  <header>
    <div id="entete">
      <div class="entete">
        <h1>ACTUALITES POLYTECHNICIENNES</h1>
      </div>
      
    </div>
    <?php include("./pages/sidebar.php") ?>
  </header>

  <?php include("./pages/content.php") ?>
</body>
</html>
<?php
if (isset($_GET['id'])) {
  $ids = $_GET['id'];
?>
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1 class="text-black"><?php echo $c ?></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="sub-bread"><i class="fa fa-angle-right"></i> <?php echo $p ?></li>
      <li><i class="fa fa-angle-right"></i> <?php echo $c ?></li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-outline">
          <div class="card-header bg-blue">
            <h5>Vue<a href="./?page=module" class="btn btn-success pull-right"><i class="fa fa-plus-square"></i> Ajouter</a></h5>
          </div>
          <div class="info-box">
            <h4 class="text-black">Table</h4>
            <?php
            $sql = "SELECT * FROM module where id='" . $ids . "'";
            $exe = $bdd->query($sql);
            $row = $exe->rowcount();
            if ($row != 0) {
              ($line = $exe->FETCH(PDO::FETCH_ASSOC));
              extract($line);
              $nom = $line['nom_module'];
              $cap = $line['diminutif'];
              $detail = $line['detail'];
              $date_enreg = $line['date_enreg'];
              $url = $line['url'];
            } elseif ($row == 0) {
              echo "<script type='text/javascript'>
alert('pas d'enregistrement sur ce numero');
window.location.href='./../../?page=module&C=lister';
</script>";
              die();
            }
            ?>
            <div>
              <strong>Nom : </strong><?php echo $nom; ?>
              <br>
              <strong>Caption : </strong><?php echo $cap; ?>
              <br>
              <strong>Detail : </strong><?php echo $detail; ?>
              <br>
              <strong>URL : </strong><?php echo $url; ?>
              <br>
              <strong>Date d'enregistrement : </strong><?php echo $date_enreg; ?>
              <br>
            </div>
          </div>
        </div>
      </div>



    <?php
  } elseif (!isset($_GET['id'])) {
    echo "<script type='text/javascript'>
alert('numero inconnue');
window.location.href='./../../?app=module&lister';
</script>";
    die();
  }
    ?>
    </div>
  </div>
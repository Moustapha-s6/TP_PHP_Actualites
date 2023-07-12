<?php
if (isset($_GET['id'])) {
  $nom_cat = "";
  $cap = "";
  $detail = "";
  $ids = $_GET['id'];
  $sql = "SELECT * FROM categorie WHERE id='" . $ids . "'";
  $exe = $bdd->query($sql);
  $row = $exe->rowcount();
  if ($row != 0) {
    ($line = $exe->FETCH(PDO::FETCH_ASSOC));
    extract($line);
    $nom_cat = $line['nom_cat'];
    $cap = $line['captions'];
    $detail = $line['detail'];
  }
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
            <h5 class="text-white m-b-0">Modifier<a href="./?page=categorie&c=lister" class="btn btn-success pull-right"><i class="fa fa-tasks"></i> lister </a></h5>
          </div>
          <div class="card-body">
            <form action="./exe/edit/update_Categorie.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $ids; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Nom categorie</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $nom_cat; ?>" name="nom_cat">
              </div>
              <div class="form-group">
                <label for="Capt">Caption</label>
                <input type="Caption" class="form-control" id="exampleInputEmail1" value="<?php echo $cap; ?>" name="captions">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Detail</label>
                <textarea class="form-control" id="exampleInputEmail1" value="<?php echo $detail; ?>" name="detail"></textarea>
              </div>
              <button type="submit" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Modifier</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
} elseif (!isset($_GET['id'])) {
}
?>
<!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1><?php echo $p ?></h1>
  <ol class="breadcrumb">
    <li><a href="./">Home</a></li>
    <li class="sub-bread"><i class="fa fa-angle-right"></i> <?php echo $p ?></li>
    <li><i class="fa fa-angle-right"></i> <?php echo $c ?></li>
  </ol>
</div>
<!-- Main content -->
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-outline">
        <div class="card-header bg-primary">
          <h5 class="text-white m-b-0">Formulaire de module
            <a href="./?page=acces&c=lister" class="btn btn-success pull-right"><i class="fa fa-tasks"></i> Lister </a>
          </h5>
        </div>
        <div class="card-body">
          <form action="./exe/add/submit_Acces.php" method="post">
            <div class="form-group">
              <label for="Capt">Groupe : </label>
              <select class="form-control" id="" name="groupe">
                <?php
                $sql = "SELECT * FROM groupe WHERE etat = 1 order by nom_groupe ASC ";
                $exe = $bdd->query($sql);
                $row = $exe->rowCount();
                if ($row != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $nom = $line['nom_groupe'];
                    $ids = $line['id_groupe'];
                    echo "<option value='$ids'> $nom </option>";
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="Capt"> Module : </label>
              <select class="form-control" id="" name="module">
                <?php
                $sql = "SELECT * FROM module WHERE etat = 1 order by nom_module ASC ";
                $exe = $bdd->query($sql);
                $row = $exe->rowCount();
                if ($row != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $nom = $line['nom_module'];
                    $ids = $line['id'];
                    echo "<option value='$ids'> $nom </option>";
                  }
                }
                ?>
              </select>
            </div>
            <button type="submit" class="btn btn-success "><i class="fa fa-floppy-o"></i> Enregistré </button>
            <button type="reset" class="btn btn-danger "><i class="fa fa-remove"></i> Effacer </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
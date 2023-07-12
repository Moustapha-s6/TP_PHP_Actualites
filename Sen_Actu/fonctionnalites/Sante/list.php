<!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1 class="text-black"><?php echo $p ?></h1>
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
          <h5>Liste des enregistrements<a href="./?page=groupe" class="btn btn-success pull-right"><i class="fa fa-plus-square"></i> Ajouter</a></h5>
        </div>
        <div class="info-box">
          <h4 class="text-black">Table</h4>
          <div class="table-responsive">
            <table id_groupe="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Caption</th>
                  <th>Date enregistrement</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $requete = "SELECT*FROM groupe WHERE deletable='0'order by id_groupe ASC";
                $exe = $bdd->query($requete);
                $nbre = $exe->rowcount();
                if ($nbre != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $id_groupe = $line['id_groupe'];
                    $nom = $line['nom_groupe'];
                    $cap = $line['caption_groupe'];
                    $date = $line['date_enreg']; ?>
                    <tr>
                      <td> <?php echo $id_groupe ?></td>
                      <td><?php echo $nom ?> </td>
                      <td><?php echo $cap ?></td>
                      <td> <?php echo $date ?></td>
                      <td>
                        <a href="./?page=groupe&c=voir&id_groupe=<?php echo $id_groupe ?>" class="btn btn-success">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="./?page=groupe&c=modifier&id_groupe=<?php echo $id_groupe; ?>" class="btn btn-primary">
                          <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="./exe/delete/delete_Groupe.php?id_groupe=<?php echo $id_groupe; ?>" class="btn btn-danger" id_groupe="delete" onclick="return confirmer()">
                          <i class="fa fa-trash">
                            <input type="hidden" name="delete" value="<?php echo $id_groupe; ?>" class="del">
                          </i>
                        </a>
                        <a href="./exe/state/state_Groupe.php?id_groupe=<?php echo $id_groupe; ?>">
                          <?php if ($etat == 0) {
                            echo "<div class='btn btn-danger'><i class='fa fa-thumbs-down'></i></div>";
                          } elseif ($etat == 1) {
                            echo "<div class='btn btn-success'><i class='fa fa-thumbs-up'></i></div>";
                          }
                          ?>
                        </a>
                      </td>
                    </tr>
                <?php }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function confirmer() {
      if (confirm(" confirmez-vous la suppression"))
        return true;
      else
        return false;
    }
  </script>
</div>
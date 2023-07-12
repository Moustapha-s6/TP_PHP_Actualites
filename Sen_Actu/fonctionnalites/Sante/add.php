 <h2> Les Dernières Actualités </h2>
 <?php $requete = "SELECT*FROM article WHERE categorie='2' order by id ASC";
                $exe = $bdd->query($requete);
                $nbre = $exe->rowcount();
 if ($nbre != 0) {
                  while ($line = $exe->FETCH(PDO::FETCH_ASSOC)) {
                    extract($line);
                    $titre = $line['titre'];
                    $contenu = $line['contenu'];
                ?>

<h2>  </h2>

<tr>
  <td>

  <a href="./?page=sport&c=voir&id=<?php echo $id ?>">
    <div class="actu">
          <h4 class="title"><?php echo $titre ?></h4>
          <p class="description"><?php echo $contenu ?></p> 
      </div>
  </a>
  </td>
</tr>

 <?php }
  } ?>

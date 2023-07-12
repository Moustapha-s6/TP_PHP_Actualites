<?php
if (isset($_GET['id'])) {
  $ids = $_GET['id'];
?>
 

<h2> Les Dernières Actualités </h2>
 <?php  
                $sql = "SELECT * FROM article where id='" . $ids . "'";
                $exe = $bdd->query($sql);
                $row = $exe->rowcount();
               if ($row != 0) {
              ($line = $exe->FETCH(PDO::FETCH_ASSOC));
              extract($line);
                    $titre = $line['titre'];
                    $contenu = $line['contenu'];
                    } elseif ($row == 0) {
              echo "<script type='text/javascript'>
                   alert('pas d'enregistrement sur ce numero');
                   window.location.href='./../../?page=sport&C=lister';
                   </script>";
              die();
            }
                ?>

<h2>  </h2>

<tr>
  <td>

  <a href="">
    <div >
          <h4 class="title"><?php echo $titre ?></h4>
          <p class="description"><?php echo $contenu ?></p> 
      </div>
  </a>
  </td>
</tr>


          
    <?php
  } elseif (!isset($_GET['id'])) {
    echo "<script type='text/javascript'>
alert('numero inconnue');
window.location.href='./../../?app=sport&lister';
</script>";
    die();
  }
    ?>
    
<?php require_once "includes/db.php" ?>
<?php require_once "includes/header.php" ?>


    <?php require_once "includes/nav.php" ?>


    <div class="container">

        <div class="row">
        
          
            <div class="col-md-8">
            <?php

$query = "select * from makale";
$data =mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($data))
{
    $baslik = $row['baslik'];
    $yazar = $row['yazar'];
    $tarih = $row['tarih'];
    $icerik = $row['icerik'];
    $resim = $row['resim'];

?>


               

          
                <h2>
                    <a href="#"><?php echo $baslik  ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $yazar; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $tarih; ?></p>
                <hr>
                <img class="img-responsive" src=  "imgs/<?php echo $resim  ?>" alt="">
                <hr>
                <p><?php echo $icerik; ?></p>
                

                <hr>

           

               

         
<?php


}


?>
   </div>

            <?php require_once "includes/side_bar.php" ?>


        <hr>

  
        <?php require_once "includes/footer.php" ?>
    
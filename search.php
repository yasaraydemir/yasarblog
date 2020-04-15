<?php require_once "includes/db.php" ?>
<?php require_once "includes/header.php" ?>

    <!-- Navigation -->
    <?php require_once "includes/nav.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        
            <!-- Blog Entries Column -->
            <div class="col-md-8">
        
      

<?php

if(isset($_POST['btn_search']))
{
    $Search = $_POST['search'];
    $sql = "select * from makale where baslik like '%$Search%'";
    $result = mysqli_query($con,$sql);

if(mysqli_num_rows($result))
{

while($row = mysqli_fetch_assoc($result))
{
    $baslik = $row['baslik'];
    $yazar = $row['yazar'];
    $tarih = $row['tarih'];
    $icerik = $row['icerik'];
    $resim = $row['resim'];

?>


                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
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
                <a class="btn btn-primary" href="#">Read More <span class="glyph icon glyphicon-chevron-right"></span></a>

                <hr>

           <?php
           
        }
    }
else
     {
         echo "<h2> Arama Bulunamadı</h2>";
     }          
    }
         
    




?>
   </div>
            <!-- Blog Sidebar Widgets Column -->
            <?php require_once "includes/side_bar.php" ?>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php require_once "includes/footer.php" ?>
    
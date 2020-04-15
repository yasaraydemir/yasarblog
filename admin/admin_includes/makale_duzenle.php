<?php require_once ('./admin_includes/header.php'); ?>




    <?php require_once ('./admin_includes/nav.php'); ?>

<?php 

if(isset($_GET['p_id']))
{

    $makale_id = $_GET['p_id'];
    $sql = "select * from makale where id='$makale_id'";
    $result = mysqli_query($con,$sql);
   
    while($row = mysqli_fetch_assoc($result))
    {
        
        $makale_id = $row['id'];
        $makale_baslik = $row['baslik'];

        $makale_onay = $row['onay'];
        $makale_yazar = $row['yazar'];
        
        $makale_icerik = $row['icerik'];
        $img = $row['resim'];
        
       
        
    }
} 

if(isset($_POST['btn_makale']))
{
    $makale_basligi = $_POST['baslik'];

$makale_onay = $_POST['onay'];
$makale_yazari = $_POST['yazar'];

$makale_icerik = $_POST['icerik'];

$Post_Image = $_FILES['image']['name'];
$Post_Temp = $_FILES['image']['tmp_name'];

if(empty($Post_Image))
{
    $query = " select * from makale where id='makale_id'";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        $Post_Image = $row['resim'] ;
    }
}
$sql = "update makale set  baslik='$makale_basligi', yazar='$makale_yazari',  icerik='$makale_icerik', resim='$Post_Image', onay='$makale_onay' , tarih=now() where id='$makale_id'";
$result = mysqli_query($con,$sql);

if($result)
{
    header("location: ./makaleler.php");
    move_uploaded_file($Post_Temp, "../imgs/$Post_Image");
}

}



                
?>
    
     

            <div class="container-fluid">

         
                <div class="row">
                    <div class="col-lg-12">
                       
                    <div class="container-fluid">

         
<div class="row">
    <div class="col">
    <form action="" method="POST" enctype="multipart/form-data" >
    <div class="form-group">
    <label>  Makale Başlığı</label>
    <input type="text" name="baslik" placeholder="Makale Başlığı" class="form-control mb-2" value="<?php echo $makale_baslik ?>">
    </div>
  
    <div class="form-group">
    <label>  Makale Onay Durumu</label>
    <input type="text" name="onay" placeholder="Makale Onay Durumu" class="form-control mb-2" value="<?php echo $makale_onay ?>">
    </div>
    <div class="form-group">
    <label>  Makale Yazarı</label>
    <input type="text" name="yazar" placeholder="Makale yazarı" class="form-control mb-2" value="<?php echo $makale_yazar ?>">
    </div>
    
    <div class="form-group">
    <label>  Makale İçeriği</label>
    <textarea name="icerik" class="form-control" id="" cols="30" rows="10" value=""><?php echo $makale_icerik ?></textarea>
    </div>
    <div class="form-group">
    <label>  Makale Resmi</label>
    <img width="200" height="200" class="img-responsive" src="../imgs/<?php echo $img; ?>">
    <input type="file" name="image" placeholder="Makale Resmi" class="form-control mb-2">
    </div>
    <div class="form-group">
    <button class="btn btn-success" type="submit" name="btn_makale">Makale Düzenle </button>
    </div>
</form>
                    </div>
                    </div>
                </div>
    
                </div>
      

        </div>
   


            <?php require_once('./admin_includes/footer.php') ?>
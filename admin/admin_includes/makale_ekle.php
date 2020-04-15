<?php require_once ('./admin_includes/header.php'); ?>



    <?php require_once ('./admin_includes/nav.php'); ?>


    <?php 


if(isset($_POST['btn_makale']))
     {

$makale_basligi = $_POST['makale_basligi'];

$makale_onay = $_POST['makale_onay'];
$makale_yazari = $_POST['makale_yazari'];

$makale_icerik = $_POST['makale_icerik'];

$Post_Image = $_FILES['image']['name'];
$Post_Temp = $_FILES['image']['tmp_name'];
$sql = "insert into makale (baslik,yazar,tarih,icerik,resim,onay) values ('$makale_basligi','$makale_yazari', now() ,'$makale_icerik','$Post_Image','$makale_onay')";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Veriler Veritabanına Başarıyla Yüklendi";
move_uploaded_file($Post_Temp, "../imgs/$Post_Image");
}
else
{
    echo " sıkıntı var";
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
    <input type="text" name="makale_basligi" placeholder="Makale Başlığı" class="form-control mb-2">
    </div>
  
    <div class="form-group">
    <label>  Makale Onay Durumu</label>
    <input type="text" name="makale_onay" placeholder="Makale Onay Durumu" class="form-control mb-2">
    </div>
    <div class="form-group">
    <label>  Makale Yazarı</label>
    <input type="text" name="makale_yazari" placeholder="Makale yazarı" class="form-control mb-2">
    </div>
    
    <div class="form-group">
    <label>  Makale İçeriği</label>
    <textarea name="makale_icerik" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
    <label>  Makale Resmi</label>
    <input type="file" name="image" placeholder="Makale Resmi" class="form-control mb-2">
    </div>
    <div class="form-group">
    <button class="btn btn-success" type="submit" name="btn_makale">Makale Ekle </button>
    </div>
</form>
                    </div>
                    </div>
                </div>
    
                </div>
      

        </div>
   


            <?php require_once('./admin_includes/footer.php') ?>
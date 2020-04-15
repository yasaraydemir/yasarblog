<?php require_once ('./admin_includes/header.php'); ?>

<body>

    <div id="wrapper">


    <?php require_once ('./admin_includes/nav.php'); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

         
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           
                            <small>Yazar</small>
                        </h1>


                        <div class="col-lg-6">
                        <?php 

if(isset($_POST['btn_menu']))
{
    if($_POST['menu'] == "")
    {
        echo ' <p class="alert alert-danger">Lütfen Menü ismi giriniz</p>';
    }
    else
   { 
   $Ekle_Menu = $_POST ['menu'];
   $query= "insert into menu (menuisim) values ('$Ekle_Menu')";
   mysqli_query($con,$query);
}}

?>
                    <form action="" method="POST">
                    <div class="form-group">
                    <label>  Yeni Menü Ekle</label>
                    <input type="text" name="menu" placeholder="menu" class="form-control mb-2">
                    </div>
                    <div class="form-group">
                    <button class="btn btn-success" type="submit" name="btn_menu">Menu Ekle </button>
                    </div>
</form>
<?php 

if(isset($_GET['Edit']))
{
$Edit_id = $_GET['Edit'];
$sql = " select * from menu where id = '$Edit_id'";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);

?>
                    <form action="update.php" method="POST" >
                    <div class="form-group">
                    <label>  Yeni Menü Ekle</label>
                    <input type="text" name="edit_menu" value="<?php echo $data['menuisim']; ?>" placeholder="menu" class="form-control mb-2">
                    <input type="hidden" name="edit_id" value="<?php echo  $data['id'];?>">
                    </div>
                    <div class="form-group">
                    <button class="btn btn-success pt-2" type="submit" name="btn_edit_menu">Değiştir </button>
                    </div>
                    </form>


<?php 
}


?>

                    </div>



                    <div class="col-lg-6">
                    <table class="table table-bordered">
                    <tr>
                    <th style="width: 20%"> Menu id </th>
                    <th style="width: 50%"> Menu Adı </th>
                    <th style="width: 20%" colspan="2"> Operasyon </th>
                    </tr>
                    <?php
                    $sql = "select * from menu";
                    $result = mysqli_query($con,$sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {    
                        ?>
                        <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['menuisim']; ?> </td>
                        <td> <a href="menu.php?Del=<?php  echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a> </td>
                        <td> <a href="menu.php?Edit=<?php  echo $row['id']; ?>" class="btn btn-success"><span class="fa fa-edit"></span></a> </td>

                        </tr>
                        <?php
                        }
                        if(isset($_GET['Del']))
                        {
                            $Del = $_GET['Del'];
                            $Sql = "delete from menu where id='$Del'";
                            $result = mysqli_query($con,$Sql);
                           
                           
                            if ($result)
                            {
                                header("location: menu.php");
                            }
                        }
                        ?>
                    </div>
                    </div>
                </div>
    
                </div>
      

        </div>
   


            <?php require_once('./admin_includes/footer.php') ?>
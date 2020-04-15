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
<?php


if(isset($_GET['opt']))
{
$opt = $_GET['opt'];

}
else
{
    $opt = '';

}

switch($opt)
{
    case 'makale_ekle.php':
        require_once('admin_includes/makale_ekle.php');
    break;
    case 'makale_duzenle.php':
        require_once('admin_includes/makale_duzenle.php');
    break;
    default:
    require_once('admin_includes/makalegoruntule.php');
break;
}

?>








    
                    </div>
                    </div>
                </div>
    
                </div>
      

        </div>
   
</body>

            <?php require_once('./admin_includes/footer.php') ?>
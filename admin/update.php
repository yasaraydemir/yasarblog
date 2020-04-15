<?php

require_once('./admin_includes/header.php');
if(isset($_POST['btn_edit_menu']))
{
    $up_id = $_POST['edit_id'];
    $up_menu = $_POST['edit_menu'];

    echo "this is id ".$up_id. " " . "This is cato".$up_menu;

    $sql = "update menu set menuisim='$up_menu' where id ='$up_id'";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo '<p class="alert alert-success"> Menu Güncellendi : ) </p>';
        header("location:menu.php");
    }
    else
    {
        echo " sıkıntı var";
    }
}





?>
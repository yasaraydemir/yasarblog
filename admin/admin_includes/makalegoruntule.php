<table class= "table table-stripped">
<tr>
<td>id</td>
<td>baslik</td>
<td>yazar</td>
<td>tarih</td>
<td>icerik</td>
<td>resim</td>
<td colspan="2">operasyon</td>
</tr>
<tr>
<?php 

$query = "select * from makale";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
    $old = $row['resim'];
?>
<td><?php echo $row['id']?></td>
<td><?php echo $row['baslik']?></td>
<td><?php echo $row['yazar']?></td>
<td><?php echo $row['tarih']?></td>
<td><?php echo $row['icerik']?></td>
<td><img width="100" height="100" class="img-responsive" src="../imgs/<?php echo $row['resim']?>"></td>
<td><a href="makaleler.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
<td><a href="makaleler.php?opt=makale_duzenle.php&p_id=<?php echo $row['id']; ?>" class="btn btn-success"><span class="fa fa-edit"></span></a></td>

</tr>   
<?php 

}


?>
</table>
<?php

if(isset($_GET['del']))
{
    $Del_ID = $_GET['del'];
    $sql = " delete from makale where id='$Del_ID'";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        unlink("../imgs/$old");
        header("location:makaleler.php");
    }
}

?>
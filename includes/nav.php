


<?php require_once "includes/db.php" ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php

$query = " select * from  menu";
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_assoc($result))
{
    $menuisim = $row['menuisim'];
    echo "<li>
    <a href='#'>{$menuisim}</a>
</li>";
}

?>
                    <li><a href="admin">Admin</li>
                    </ul>
                    </div>
                    </div>
                    </nav>
                  
    </nav>
<?php session_start(); ?>
<!DOCTYPE html>
    <?php

    $index = true;
            include ("header.php");
            include ("php/connect.php");
        ?>

    <div id="mainContent">

        <div id="sideBar">
            
             <?php
            include ("php/login.php");
            ?>

        </div><!-- end of sidebar -->

        <div id="content" class="stiched">

            
             <div class='class'>
  

<?php


$getFlags=mysqli_query($con, "SELECT * FROM flags f INNER JOIN classes c ON c.ID=f.objectID
    WHERE f.flagtype='classes' 
    AND c.creatorID='$_SESSION[ID]' 
    ");


while($row = mysqli_fetch_array($getFlags))
  {
    echo $row['name'] . " " . $row['ID']. " " . $row['flagID'];
}



?>

  </div><!-- end of class -->
        
        </div><!-- end of content -->


        <div class="clearfix"></div>

    </div>
<?php

$time = '15%3A30';
$times = explode("%3A", $time);
echo $times[0] . ":" .  $times[1]. ":00";

            include ("footer.php");
        ?>

        </div>
        <!-- End site content -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
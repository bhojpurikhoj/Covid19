
<?php
include "config.php";

?>
<!doctype html>
<html>
    <head><title>Admin - Add Covid19 Details</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    </head>
<body>            


    <form action="add.php" method="post" class="collection z-depth-1 teal deep-purple white">
           <div class="input-field col s12">
   <input type="hidden" name = "field2"  class="validate"  id="icon_prefix"/> Title
<input type="text" name = "field3"  class="materialize-textarea"  id="icon_prefix1"><br/>
Image Url
<input type="text" name = "field7"  class="materialize-textarea"  id="icon_prefix1"><br/>
News<textarea name = "field4"  class="validate"  id="icon_prefix3"  style="height:300px;"></textarea><br/>
News : <input type="hidden" name = "field5"  class="validate"  id="icon_prefix3" value="<?php echo date("Y-m-d");?>"><?php echo date("Y-m-d");?><br/>

    <input value="Post" type="submit" style="border:0;padding:3px;" class="badge red white-text">
</form>


      </div>
     

<?php
include "config.php";
?><?php
$query = "SELECT * FROM coivd";
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $cid = $row["cid"];
        $total = $row["total"];
        $recovery = $row["recovery"];
        $death = $row["death"];
     }
   ?>
 
      <ul class="collection">
        <li class="collection-header chip"><img src="https://bhojpurikhoj.com/api/v10/favicon.png" alt="Contact Person">Covid 19 </li>
        <li class="collection-item">Total Case<span class="badge black white-text">
<?php echo $total; ?></span></li>
        <li class="collection-item">Recovered<span class="badge green white-text">
<?php echo $recovery; ?></span></li>
        <li class="collection-item">Death<span class="badge red white-text">
<?php echo $death; ?></span></li>
      </ul>
      </div>
     

<?php
 $result->free();
} 
?>

</body>
</html>

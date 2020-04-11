<?php
include "config.php";
?>
<!doctype html>
<html>
    <head><title>Covid 19 Update</title>
  <!--Import Google Icon Font--><?php include('header.php');?>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    </head>
<body>            


    <form action="add.php" method="post" class="collection z-depth-1 teal deep-purple white">
           <div class="input-field col s12">
Total Case
   <input type="text" name = "field2"  class="validate"  id="icon_prefix"/> <br/>Recover
<input type="text" name = "field3"  class="validate"  id="icon_prefix1"/> <br/>
Death<input type="text" name = "field4"  class="validate"  id="icon_prefix3"/><br/>
Updated : <input type="hidden" name = "field5"  class="validate"  id="icon_prefix3" value="<?php echo date("Y-m-d");?>"><?php echo date("Y-m-d");?><br/>

    <input type="submit" style="border:0;padding:3px;" class="badge red white-text">
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
        <li class="collection-header chip"><img src="https://bhojpurikhoj.com/api/v10/favicon.png" alt="Contact Person">Covid 19 <a href=https://bhojpurikhoj.com/api/covid19/admin/post.php><span class="badge red white-text chip">Add Post</span></li></a>
        <li class="collection-item">Total Case<span class="badge black white-text">
<?php echo $total; ?></span></li>
        <li class="collection-item">Recovered<span class="badge green white-text">
<?php echo $recovery; ?></span></li>
        <li class="collection-item">Death<span class="badge red white-text">
<?php echo $death; ?></span></li>
      </ul>
      </div>
      <div class="col s6"><div class="chip">
   Source : Bhojpurikhoj.Com
    <i class="close material-icons">close</i>
  </div>
      </div>

<?php
 $result->free();
} 
?>
</body>
</html>

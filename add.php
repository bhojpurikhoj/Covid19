<?php include('config.php');?>



<html>
    <head><title>Admin - Covid 19 Update</title>
  <!--Import Google Icon Font--><?php include('header.php');?>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    </head>
<body>            

    
<?php
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
        <li class="collection-header chip"><img src="https://bhojpurikhoj.com/api/v10/favicon.png" alt="Contact Person">Covid 19 <span class="badge green white-text chip">Updated Successfuly</span>
    <i class="close material-icons">close</i></li>
        <li class="collection-item">Total Case<span class="badge black white-text">
<?php echo $total; ?></span></li>
        <li class="collection-item">Recovered<span class="badge green white-text">
<?php echo $recovery; ?></span></li>
        <li class="collection-item">Death<span class="badge red white-text">
<?php echo $death; ?></span></li>
      </ul>
      </div>
      <div class="col s12"><a href="https://bhojpurikhoj.com/api/covid19/admin/home.php"><span class="badge red white-text chip">Back to Update</span></a>
      </div>

<?php
 $result->free();
} 
?>

 <script type="text/javascript" src="/api/covid19/js/materialize.min.js"></script>

</body>
</html>

<?php
$field2 = $mysqli->real_escape_string($_POST['field2']);
$field3 = $mysqli->real_escape_string($_POST['field3']);
$field4 = $mysqli->real_escape_string($_POST['field4']);
 $field5 = $mysqli->real_escape_string($_POST['field5']);
$query = "INSERT INTO coivd (total, recovery, death, updated)
            VALUES ('{$field2}','{$field3}','{$field4}','{$field5}')";
 
$mysqli->query($query);
$mysqli->close();

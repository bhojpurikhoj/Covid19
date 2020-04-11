 <?php header("Content-Type: text/html;charset=UTF-8"); ?>
<!DOCTYPE HTML>
<HTML LANG="hi">
    <head><meta http-equiv="content-type" content="text/html; charset=utf-8">
 <title>Live : Covid 19</title>
  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <body class="row">  

<div class="spacer"></div>
     <?php include('config.php');?>
<?php
$query = "SELECT * FROM coivd";
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $cid = $row["cid"];
        $total = $row["total"];
        $recovery = $row["recovery"];
        $death = $row["death"];
        $updated = $row["updated"];
                
     }
   ?>  <div class="mobile-content row title_black"  style=""><div class="bg-grey">
<div class="tw-card searchContainer col s12 m12 l12 xl12" id=""><div class="title_head_white"> 
कोविड 19 <span class="tag" style="background:red;color:white;font-weight:bold;">
    LIVE UPDATES
     </span>
<span class="title_icon"><i class="fas fa-arrow-right"></i>

</span> </div><div class="card-wrpper"><div class="card__content-wrapper "><div> <div class="card horizontal card__header--rm-margin row-height "><div class="card-stacked"><div class="card-content"><div class="tag" style="background:black;width:95%;font-size:16px;">Total Case : <?php echo $total; ?></div><br>
<div class="tag" style="background:green;width:65%;font-size:15px;">Recovery : <?php echo $recovery; ?></div><br>
<div class="tag" style="background:red;width:45%;font-size:14px;">Death : <?php echo $death; ?></div><div></div></div></div></div> </div></div></div><div class="card_footer"><?php echo $updated; ?>  - सौ. स्वास्थ्य एवं परिवार कल्याण मंत्रालय
    
</div></div>

 </div>
   
   </div>
   
  <?php
 $result->free();
} 
?>

</body>
</html>

  

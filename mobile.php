 <?php header("Content-Type: text/html;charset=UTF-8"); ?>
<!DOCTYPE HTML>
<HTML LANG="hi">
    <head><meta http-equiv="content-type" content="text/html; charset=utf-8">
 <title>Live : Bhojpurikhoj.Com Live News Center</title>
  <!--Import Google Icon Font--><?php include('meta-data.php');?>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <?php include('header.php');?>
    <body class="row">  
    
    
    
    

<nav class="" id="nav_pwa_static">
      <div class="navbar-header">
        
        <a class="navbar-brand cbutton cbutton--effect-novak" alt="Logo" href="https://bhojpurikhoj.com">            <img alt="logo" src="https://bhojpurikhoj.com/api/v10/300x180-Logo.png" alt="" >   
        </a>
        <div class="nav_right">

         

          <a target="_blank" href="" class="language_header">
            <span class="support_button_span"> Live <i class="fa fa-tv fa-fw fa-lg m-r-3"></i></span>  
          </a>


          <label class="notification_icon"> 
            <input id="subscribeButton" type="checkbox" data-toggle="toggle">
          </label>

        </div>
      </div>
      <div id="notification_articles" style="width:100%;float:left;"> </div>
      <div class="header_bar_category">
        <a class="" href="https://bhojpurikhoj.com/" style="padding-right:4px;"> <img alt="home" style="width:16px;margin: -1px 0 -2px 0px;" src="https://mcmscache.epapr.in/mcms/417/56ff2195dc7e14585b3537b29d02b1b356a27588.png"> </a>     
        
        <a href="https://bhojpurikhoj.com/">पहिला पन्ना</a>
            
            <a href="https://bhojpurikhoj.com/filmynews/"> भोजपुरी सिनेमा </a>
                
                <a href="https://bhojpurikhoj.com/national/">भारत</a>
                <a href="https://bhojpurikhoj.com/states/">सगरो देश</a>
                <a href="https://bhojpurikhoj.com/indepth"> सोच विचार </a>
                <a href="https://bhojpurikhoj.com/sports">खेल दुनिया </a>
                <a href="https://bhojpurikhoj.com/literature"> भोजपुरिया साहित्य </a>   
                </div>



    </nav>

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

<div class="tw-card searchContainer col s12 m12 l12 xl12" id=""><div class="title_head_white"> 
 <span class="tag" style="background:red;color:white;font-weight:bold;">
    LIVE
     </span>
<span class="title_icon" style="color:red;"><i class="fas fa-arrow-right"></i>

</span> </div>
<?php
            include("config_data.php");

            $rowperpage = 20;
            $row = 0;

            // Previous Button
            if(isset($_POST['but_prev'])){
                $row = $_POST['row'];
                $row -= $rowperpage;
                if( $row < 0 ){
                    $row = 0;
                }
            }

            // Next Button
            if(isset($_POST['but_next'])){
                $row = $_POST['row'];
                $allcount = $_POST['allcount'];

                $val = $row + $rowperpage;
                if( $val < $allcount ){
                    $row = $val;
                }
            }
        ?>
  
            <?php
            
            // count total number of rows
            $sql = "SELECT * COUNT(id) AS cntrows FROM live";
            $result = mysqli_query($con,$sql);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];
            // selecting rows
            $sql = "SELECT * FROM live  ORDER BY ID DESC limit $row,".$rowperpage;
            $result = mysqli_query($con,$sql);
            $sno = $row + 1;
            while($fetch = mysqli_fetch_array($result)){
                $title = $fetch['title'];
                $news = $fetch['news'];
                $updated = $fetch['updated'];
                $img = $fetch["img"];
                ?>
                
                
                <div class="card-wrpper"><div class="card__content-wrapper "><div> <div class="card horizontal card__header--rm-margin"><div class="card-stacked"><div class="card-content"><a href="#"  target="_new" class="m-r-15 text-inverse-lighter" style="color:black;"><i class="fa fa-clock fa-fw fa-lg m-r-3"></i></a> <div class="tag" style="background:white;border:1px solid red;color:black;border-radius:15px;font-size:16px;"><?php echo timeपहिलेClaculator ($updated, date("Y-m-d H:i:s")); ?></div><h4 style="font-size:20px;margin-top:3px;margin-bottom:3px;"><?php echo $title; ?></h4><div class="story_live"><?php
 
if(file_exists('<?php echo $img; ?>')) {
    $image = '<?php echo $img; ?>';
} else {
    $image = 'www.yourdomain.com/img/defaultuser.jpg';
}
 
echo '<img src="<?php echo $image; ?>" alt="" height="120px" width="120px">';
 
?><img src="<?php echo $img; ?>"><?php echo $news; ?></div><div></div></div></div></div> </div></div><div class="card_footer" style="background:white;border-top:1px solid #ddd;margin-bottom:30px;padding:10px;"><a href="https://www.facebook.com/sharer.php?t=<?php echo $news; ?>&u=https%3A%2F%2Fbhojpurikhoj.com" target="_new" class="m-r-15 text-inverse-lighter" style="color:#3b5998;"><i class="fa fa-facebook fa-fw fa-lg m-r-3"></i> Like</a>
               <a href="https://twitter.com/intent/tweet?text=<?php echo $news; ?> https%3A%2F%2Fbhojpurikhoj.com #Breaking_News #Live_Update #FightAgainstCorona #Corona_Update"  target="_new" class="m-r-15 text-inverse-lighter" style="color:#00acee;"><i class="fa fa-twitter fa-fw fa-lg m-r-3"></i> Twitter</a> 
               <a href="whatsapp://send?text=<?php echo $news; ?> https%3A%2F%2Fbhojpurikhoj.com" data-action="share/whatsapp/share"  target="_new" class="m-r-15 text-inverse-lighter" style="color:#075E54;"><i class="fa fa-whatsapp fa-fw fa-lg m-r-3"></i>
            Whatsapp</a>
    
</div></div>
               
                    
             
 
    
    <?php
                $sno ++;
            }
            ?>   


<div class="title_footer">&copy 2020 Bhojpurikhoj.Com | The Bhojpuria Media</div>
 <?php

/*
PHP  SCRIPT (function / snippet)

NAME: Php time पहिले calculation function

It is a very nice PHP time पहिले function.

You can give this function any date of the past and it will return output like :
2 minutes पहिले
5 hours पहिले
8 montha पहिले
3 years पहिले


*/


function timeपहिलेClaculator($date){ 

// Store provided date properly
    $timeToUse = strtotime($date); 
	
	// This is the current time
    $currentTime = time(); 
	
	// Here we calculate the difference i.e. the "the time पहिले"
    $timeपहिले = $currentTime - $timeToUse; 
	
	// If time पहिले is less than 60 seconds
    if($timeपहिले < 60){ 
        $roundedTime = round($timeपहिले); 
        $seconds = ($roundedTime == 1)?"second":"सेकेण्ड"; 
        return "$roundedTime $seconds पहिले"; 
		
		// I it is in minutes, i.e. time पहिले is less than an hour
    }elseif($timeपहिले < 3600){ 
        $roundedTime = round($timeपहिले / 60); 
        $minutes = ($roundedTime == 1)?"minute":"मिनट"; 
        return "$roundedTime $minutes पहिले"; 
		
		// If time पहिले is in hours i.e. less than a day
    }elseif($timeपहिले >= 3600 && $timeपहिले < 86400){ 
        $roundedTime = round($timeपहिले / 60 / 60); 
        $h = ($roundedTime == 1)?"hour":"घंटे"; 
        return "$roundedTime $h पहिले"; 
		
		// If time पहिले is in days i.e. less than a month
    }elseif($timeपहिले >= 86400 && $timeपहिले < 2629743.83){ 
        $roundedTime = round($timeपहिले / 60 / 60 / 24); 
        $d = ($roundedTime == 1)?"day":"दिन"; 
        return "$roundedTime $d पहिले"; 
		
		// If time पहिले is in months
    }elseif($timeपहिले >= 2629743.83 && $timeपहिले < 31556926){ 
        $roundedTime = round($timeपहिले / 60 / 60 / 24 / 30.4375); 
        $months = ($roundedTime == 1)?"month":"महीना"; 
        return "$roundedTime $months पहिले"; 
		
		// Finally if the event happened years पहिले
    }else{ 
        $roundedTime = round($timeपहिले / 60 / 60 / 24 / 365); 
        $years = ($roundedTime == 1)?"year":"years"; 
        return "$roundedTime $years पहिले"; 
    } 
} 

?>  
   <script type="text/javascript" src="/api/covid19/js/materialize.min.js"></script>
</body>
</html>

  
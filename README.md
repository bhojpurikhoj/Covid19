# Covid19
Covid 19 Information Updated using MYSQL and PHP With An Simple Script made by Blogpress Team. Demo https://bhojpurikhoj.com/live/mobile.php

#Read Care Full
1. index.php - This file show all details.
2. config.php - This file required your current database details like host_name,username,password,database name
3. admin.php - This is an simple admin file to add all details of Cvoid 19 (Total Case, Recovery, Death, and Updated Date and Time
 Example :
     Total Case
   <input type="text" name = "field2"  class="validate"  id="icon_prefix"/> <br/>Recover
<input type="text" name = "field3"  class="validate"  id="icon_prefix1"/> <br/>
Death<input type="text" name = "field4"  class="validate"  id="icon_prefix3"/><br/>
Updated : <input type="hidden" name = "field5"  class="validate"  id="icon_prefix3" value="<?php echo date("Y-m-d");?>"><?php echo date("Y-m-d");?><br/>

4. add.php - This file insert data in Mysql Table. (this file attached with admin.php)
 Example:
    $query = "INSERT INTO coivd (total, recovery, death, updated)
            VALUES ('{$field2}','{$field3}','{$field4}','{$field5}')";
            



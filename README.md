# Covid19
Covid 19 Information Updated using MYSQL and PHP With An Simple Script made by Blogpress Team. Demo https://bhojpurikhoj.com/live/mobile.php

#Read Care Full
1. index.php - This file show all details.
 Code : Fetching details like if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $cid = $row["cid"];
        $total = $row["total"];
        $recovery = $row["recovery"];
        $death = $row["death"];
        $updated = $row["updated"];
2. config.php - This file required your current database details like host_name,username,password,database name
3. admin.php - This is an simple admin file to add all details of Cvoid 19 (Total Case, Recovery, Death, and Updated Date and Time)
4. add.php - This file insert data in Mysql Table. (this file attached with admin.php)
 Example:
    $query = "INSERT INTO coivd (total, recovery, death, updated)
            VALUES ('{$field2}','{$field3}','{$field4}','{$field5}')";
            



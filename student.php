<!-- Including Header -->
<?php 
include_once 'resources/header.php';

function Getdata($username){
  require("dbconn.php");
  $result = mysql_query(" SELECT * FROM `accounts` WHERE `username` = '$username' ") or trigger_error(mysql_error()); 
  return $result;
 }

?>
<section id="company-title">
    <div>
        <img src="images/logo.jpeg" alt="">
    </div>
</section>
<div id="dashboard-container">
    <div class="row menu-wrapper" style="width:100% !important;margin:0;padding:0;">
        <div class="col col-2">
            <div class="menu-list">
                <ul class="menu">
                    <li><a href="student.php"><button type="button" class="block">Dashboard</button></a></li>
                    <li><a href="student-lessons.php"><button type="button" class="block">Lessons</button></a></li>
                    <li><a href="student-class.php"><button type="button" class="block">Classes</button></a></li>
                    <li><a href="student-edit.php"><button type="button" class="block">Edit Profile</button></a></li>
                </ul>


            </div>
s
        </div>



         <div class="col col-10 dasboard-items">
         <div class="item">
                <h2> My Classes</h2>
                <h3>
                    <?php 
                    include_once 'resources/header.php';
                    $query = 'SELECT count(*) c FROM class_registrations WHERE u_id = 2;';
                    $result = $conn->query($query);
                        $row = mysqli_fetch_array($result);
                        $total = $row[0];
                        echo $total;
                       ?>
                </h3>

            </div>
            <div class="item">
                <h2>Total Lessons</h2>
                <h3>50</h3>

            </div>
          
      
            


         </div>

    

</div>

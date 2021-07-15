<!-- Including Header -->
<?php 
include_once 'resources/header.php';
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>


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
        </div>
             <div class="col col-10 content-panel">            
                <div>
                   <div class="login-form" autocomplete="off">
                        <form class="">

                            <?php 
                                include_once 'resources/header.php';
                                
                                   
                                   $query = 'SELECT * 
                                              FROM students
                                              WHERE u_id = 2;';

                                   $result = $conn->query($query);

                                   if (!$result) {
                                        printf("Error: %s\n", mysqli_error($conn));
                                        exit();
                                    }

                                    while($row = mysqli_fetch_array($result)){
                                    
                                     echo    "<div class='form-group'>
                                <h4>Full Name:</h4><input type='text' name='full_name' id='full_name' class='form-control' value=".$row['full_name'].">
                            </div>
                            <div class='form-group'>
                                <h4>Email:</h4><input type='text' name='email' id='email' class='form-control' autocomplete='off'value=".$row['email'].">
                            </div>
                            <div class='form-group'>
                                <h4>Birthday:</h4><input type='text' name='bod' id='bod' class='form-control' autocomplete='off' value=".$row['dob'].">
                            </div>
                            <div class='form-group'>
                                <h4>Contact Number:</h4><input type='text' name='phone' id='phone' class='form-control' autocomplete='off' value=".$row['phone'].">
                            </div>
                            <div class='form-group'>
                                <h4>Address:</h4><input type='text' name='address' id='address' class='form-control' autocomplete='off' value=".$row['address'].">
                            </div>
                            <div class='form-group'>
                                <h4>Gender:</h4>
                                <select id='gender' name='gender' class='form-control' selected=".$row['gender']."> 
                                    <option value='male'>male</option>
                                    <option value='female'>female</option>
                                </select>
                            </div>
                            <input type='button' name='Update' id='update' class='btn btn-primary' value='Update'>
                            <div id='result'></div>";

                                    }
                                    ?>
                           
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>

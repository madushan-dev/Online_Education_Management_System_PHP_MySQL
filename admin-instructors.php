<!-- Including Header -->
<?php 
include_once 'resources/header.php';
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
                <li><a href="admin.php"><button type="button" class="block">Dashboard</button></a></li>
                    <li><a href="admin-registrations.php"><button type="button" class="block">Registrations</button></a></li>
                    <li><a href="admin-students.php"><button type="button" class="block">Students</button></a></li>
                    <li><a href="admin-instructors.php"><button type="button active" class="block active">Instructors</button></a></li>
                    <li><a href="admin-classes.php"><button type="button" class="block">Classes</button></a></li>
                    <li><a href="admin-classes.php"><button type="button" class="block">Messages</button></a></li>
                </ul>


            </div>

        </div>



             <div class="col col-10 content-panel">
            
                <div>
                    <table class="table table-block ">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Instructor Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            
                            $instructor_query='SELECT * FROM users,instructors WHERE users.u_type="instructor" AND users.u_id =instructors.u_id';
                            $query_result=mysqli_query($conn,$instructor_query);
                            $num=mysqli_num_rows($query_result);
                            $count=0;
                            while ($row = mysqli_fetch_assoc($query_result)) {
                                $count++
                                ?>
                            <tr>
                            <td><?php echo $count?></td>
                            <td><?php echo $row['u_name']?></td>
                            <td><?php echo $row['full_name']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['address']?></td>
                            <td>Edit | Delete</td>
                            
                         <?php }?>

                        </tbody>
                    </table>
                </div>
            




                </div>

    

</div>
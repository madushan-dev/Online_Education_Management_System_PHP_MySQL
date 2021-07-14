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
                    <li><a href="admin-registrations.php"><button type="button" class="block active">Registrations</button></a></li>
                    <li><a href="admin-students.php"><button type="button" class="block">Students</button></a></li>
                    <li><a href="admin-instructors.php"><button type="button" class="block">Instructors</button></a></li>
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
                            <th scope="col">Date</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Payment Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                 $query='SELECT * FROM class_registrations,users,classes WHERE users.u_id = class_registrations.u_id AND classes.c_id=class_registrations.c_id';
                                 $query_result=mysqli_query($conn,$query);
                                 $num=mysqli_num_rows($query_result);
                                 $count=0;
                                 while ($row = mysqli_fetch_assoc($query_result)) {
                                     $count++
                                     ?>
                            


                            <tr>
                            <td><?php echo $count?></td>
                            <td><?php echo $row['date']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['u_name']?></td>
                            <td><?php echo $row['fee']?></td>
                            <td><?php echo $row['status']?></td>
                            <td>Edit | Delete</td>
                            
                            </tr>
                            
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            




                </div>

    

</div>
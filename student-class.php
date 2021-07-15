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
                    <li><a href="student.php"><button type="button" class="block">Dashboard</button></a></li>
                    <li><a href="student-lessons.php"><button type="button" class="block">Lessons</button></a></li>
                    <li><a href="student-class.php"><button type="button" class="block">Classes</button></a></li>
                    <li><a href="student-edit.php"><button type="button" class="block">Edit Profile</button></a></li>
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
                            <th scope="col">Student Name</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Grade</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include_once 'resources/header.php';
                                
                                   
                                   $query2 = 'SELECT r.reg_id , c.name as cname , r.date as date , s.full_name as sname, c.grade as grade 
                                   FROM class_registrations r 
                                        join classes c
                                            on r.c_id=c.c_id
                                        join students s
                                            on s.u_id=r.u_id
                                   WHERE r.u_id = 2;';

                                   $result = $conn->query($query2);

                                   if (!$result) {
                                        printf("Error: %s\n", mysqli_error($conn));
                                        exit();
                                    }

                                    while($row = mysqli_fetch_array($result))
                                    {
                                   

                                        echo "<tr>";
                                        echo "<td>" . $row['reg_id'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['sname'] . "</td>";
                                        echo "<td>" . $row['cname'] . "</td>";
                                        echo "<td>" . $row['grade'] . "</td>";
                                        echo "</tr>";
                                
                                    }
                                
                                
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            <?php 
                               /* include_once 'resources/header.php';
                                $query1 = 'SELECT c_id FROM class_registrations;';
                                $id = $conn->query($query1);
                                $query2 = 'SELECT * FROM classes WHERE c_id=".$id.";';
                                $result = $conn->query($query2);

                                

                                while($row = mysql_fetch_array($result))
                                {
                                    echo '<p>'.$row['column'].' </p>';
                                }*/

                                
            ?>





                </div>

    

</div>

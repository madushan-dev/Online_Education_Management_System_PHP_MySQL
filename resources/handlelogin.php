
<?php 
#Including DB Connection

include_once 'db.php';
$u_name = $_POST['uname'];
$password = $_POST['password'];

$query="SELECT * FROM users WHERE u_name='$u_name' AND password='$password'";
$result= mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
$row =mysqli_fetch_assoc($result);
$type=$row['u_type'];

if($num==1){
    echo $type;
}
else{
    echo "Incorrect Details";
}


?>

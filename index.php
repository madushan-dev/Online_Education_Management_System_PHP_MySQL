<!-- Including Header -->
<?php 
include_once 'resources/header.php';
?>

<section id="login-section" class="flex-column">
    <div class="container login-box">
        <div class="company flex-column">
            <img src="images/logo.jpeg" alt="">
  
        </div>

        <div class="login-form" autocomplete="off">
            <form class="">
                <div class="form-group">
              
                    <input type="text" name="u_name" id="u_name" class="form-control" placeholder="Enter your student ID" autocomplete="off">
                </div>
                <div class="form-group">
                  
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                </div>
            
                <input type="button" name="login" id="login" class="btn btn-primary" value="Log In">
                <div id="result"></div>
            </form>
           
        </div>
    </div>
    <div id="copyright"><p>© 2021 Group 01. Dep. ICT Faculty of Technology. All Rights Reserved.</p></div>
</section>



<!-- Login Handling Script -->


<script>


$(document).ready(function(){


    $('#login').click(function(){
        uname =  $('#u_name').val();
        password = $("input[name=password]").val();    

        if(uname != '' && password != '' )
         {
        
            $.ajax({
                url:"resources/handlelogin.php",
                method:"post",
                data:{uname:uname,password:password},
                dataType:"text",
                success:function(data)
                {
         
                    if ($.trim(data) == "admin") {
            
                        window.location.href = "admin.php";
                    }

                    else if($.trim(data) == "instructor"){
                        window.location.href = "instructor.php";
                    }

                    else if($.trim(data) == "student"){
                        window.location.href = "student.php";
                    }
                    else{
                    $('#result').html(data);
                }
                }
            });
     
         }
         else{
           
        }
     
    });
     
});

</script>
<?php 
include_once 'resources/footer.php';
?>



</body>


</html>
<?php
    include("connection/cn.php");
    if(isset($_POST['submit']))
    {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone_no=$_POST['phone_no'];
            $password=$_POST['password'];
            $resume=$_FILES['resume']['name'];
            if($name =="" || $email == "" || $phone_no == "" || $password == "" || $resume =="")
            {?>
              <script>
              alert("All fields are required");
              </script><?php    
            }
            else{
            $ins=mysqli_query($con,"insert into registration (`name`, `email`, `phone_no`, `resume`, `password`) values ('$name','$email','$phone_no','$resume','$password')");
            if($ins)
            {
                    move_uploaded_file($_FILES['resume']['tmp_name'],'resume/'.$resume);
                    header('location: login.php');
            }
        }

    }
?>
<html>
  <head>
  <link rel="stylesheet" href="Css/loginform.css">
  </head>
    <body>
    <?php include 'HDHtml/header.html' ?>
    <form method="post" enctype="multipart/form-data">
    <div class="box">
    <h1>Registration</h1>

    <input type="text" name="name"  class="email" placeholder="Name" />
    <input type="email" name="email"  class="email" placeholder="Email" />
    <input type="number" name="phone_no"  class="email" placeholder="Phone No" />

    <input type="password" name="password"  class="password"  placeholder="Password"/>
   
     <input type="file" name="resume"  class="email" />
    <input type="submit" name="submit" value="Submit" class="btn" >

    
    </div> 
    
    </form>  
    <br>
    <br>
    <br>
    <?php include 'HDHtml/footer.html' ?> 

    </body>

</html>

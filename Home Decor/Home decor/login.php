<?php 
session_start();
    include("connection/cn.php");
    if(isset($_POST['signin'])){
            $uname=$_POST['uname'];
            $password=$_POST['password'];

            if($uname=="" || $password=="")
            { ?>
            <script>
                alert("All Fields are Required");
                </script>
               
                <?php
            }else {

                if($uname=="admin@gmail.com")
                {
                        $sel=mysqli_query($con,"select * from admin where email='$uname' and password='$password'");
                        $fet=mysqli_fetch_array($sel);
                        $id=$fet['id'];
                        if($fet['email']==$uname)
                        {

                            $_SESSION['email']=$uname;
                            header('location: index.php');

                        }
                        else{
                            echo "Invalid user name and Password";
                        }
                }else {
                    $sel=mysqli_query($con,"select * from registration where email='$uname' and password='$password' and status=1");
                    $fet=mysqli_fetch_array($sel);
                    $id=$fet['id'];
                    if($fet['email']==$uname)
                    {

                        $_SESSION['email']=$uname;
                        $_SESSION['id']=$fet['id'];
                        header('location: index.php');

                    }
                    else{
                        echo "Invalid user name and Password or not activated Account";
                    }
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
    <form method="post">
    <div class="box">
    <h1>Login</h1>

    <input type="text" name="uname"  class="email" />
    
    <input type="password" name="password"  class="password" />
    
    <input type="submit" name="signin" value="Sign In" class="btn" >

    <input type="reset" id="btn2">
    <a href="registration.php">Registration for Designer</a>
    </div> 
    
    </form> 
    <br>
    <br>
    <br>
    <br>
    <br> 
    <?php include 'HDHtml/footer.html' ?> 

    </body>
</html>
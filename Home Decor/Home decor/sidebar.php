<?php 
// session_start();
?>
<html>
    <head>
    <style>
        .sidebar{
            width: 240px;
            height: 1300px;
            position:absolute;
            z-index: 1;
            left: 0;
            padding-right: 5px;
            background-image: url(Images/adminslidbar.png);
            background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
            overflow-x: hidden;
            padding-top: 20px;
            margin-top:10px;
            margin-left:10px;
          }
          i{
            margin-left:5px;
          }
          #dash{
            margin-left:47px;
          }
          #login{
            margin-left:101px;
          }
          #comm{
            margin-left:58px;
          }
          #photo{
            margin-left:20px;
          }
          .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
          }
          
          .sidebar a:hover 
          {
            color:black;
          }
    </style>
    </head>
    <body>
        <nav>
            <div class="sidebar">
            <li>
                <a  href="index.php">
                  <span >Dashboard</span>
                  <i class="fa fa-home" id="dash"></i>
                </a>
              </li>

              <?php if(@$_SESSION['email']=="admin@gmail.com"){?>
                <li >
                  <a  href="designers_list.php">
                    <span>Designers List</span>
                    <i class="fa fa-picture-o"></i>
                  </a>
                </li>
             <?php }else{ ?>
           
              <li >
                <a  href="photogallery.php">
                  <span>PhotoGallery</span>
                  <i class="fa fa-picture-o"id="photo" ></i>
                </a>
              </li>
              <li >
                <a href="aboutus.php">
                  <span>About Us</span>
                  <i class="fa fa-commenting" id="comm"></i>
                </a>
              </li>
              <?php 
             }
             ?>
             <li>
             <?php
              if(@!$_SESSION['email']){
            ?>
                <a  href="login.php">
                  <span>Login</span>
                  <i class="fa fa-sign-in" id="login"></i>
                </a>
              
        <?php }else {
          ?>
                <a  href="logout.php">
                  <span>Logout</span>
                  <i class="fa fa-sign-out" id="comm"></i>
                </a>
              
          <?php   } ?>
           </li>
            </div>
            </nav>
    </body>
</html>
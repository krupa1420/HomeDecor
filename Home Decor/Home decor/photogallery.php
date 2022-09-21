<?php 
session_start();
include("connection/cn.php");
@$id=$_SESSION['id'];
if(isset($_POST['submit']))
{
    
    $count=count($_FILES['photo']['name']);

    for($i=0;$i<$count;$i++)
    {
        $imagename=$_FILES['photo']['name'][$i];
        $ins=mysqli_query($con,"insert into photo (`rid`,`name`) values ('$id','$imagename')");

        move_uploaded_file($_FILES['photo']['tmp_name'][$i],'upload/'.$imagename);
    }
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $del=mysqli_query($con,"delete from photo where id=$id");
    header('location: photogallery.php');
}
?>
<html>
    <head>
    <head>
    <title>photogallery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="istyle.css">
    <style>
    div.gallery 
    {
        color:black;
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 230px;
        height:300;
        font-family:cursive;
        margin-top:20px;
    }

    div.gallery:hover {
        border: 1px solid red;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 20px;
        text-align: center;

    }
</style>
        </style>
  </head>
    </head>
    <body style="color:black;">
    <?php include 'HDHtml/header.html' ?>
    <?php include 'sidebar.php' ?> 
               
                <div class="photo" >
                
                <?php if(@!$_SESSION['email']) {?>
                 <?php  
                            $s=mysqli_query($con,"select * from registration where status=1");
                         while($fet123=mysqli_fetch_array($s))
                         {
                             $ids=$fet123['id'];?>
                    <?php
                        $select=mysqli_query($con,"select * from photo where rid=$ids order by id desc");
                        while($rw=mysqli_fetch_array($select)){
                    ?>
                    
                    <div class="gallery">
                        <a target="_blank" href="upload/<?php echo $rw['name']; ?>">
                            <img src="upload/<?php echo $rw['name']; ?>" alt="Designs" width="600" height="400">
                        </a>
                        <div class="desc">Name : <?php echo $fet123['name'];?><br> Email : <?php echo $fet123['email'];?><br> Phone no : <?php echo $fet123['phone_no'];?> </div>
                    </div>
                            <?php }}?>
                <?php } else {?>
                <p id="hellop" align=center>Photo Upload</p>
               <form  method="post" enctype="multipart/form-data">
                <table border="2" style="color:black; " align=center width="95%" border="2" cellspacing="50%"  style="border-spacing: 15px;"> 
                    <tr>
                        <th>Upload Images</th>
                        <th><input type="file" multiple name="photo[]"></th>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> 
                            <input type="submit" name="submit" value="Submit">
                        </td>
                    </tr>
                </table>
                </form>
                <br>
                <br>
                <table border="2" style="color:black;" align="center" width="95%" > 
                    <tr>
                        <th>#</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $sel1=mysqli_query($con,"select * from photo where rid=$id");
                        $i=1;
                     while($row=mysqli_fetch_array($sel1)) {?>
                      <tr>
                        <th><?php echo $i; ?></th>
                        <th><img src="upload/<?php  echo $row['name'];?>" width="100px" height="100px" ></th>
                        <th><a href="photogallery.php?id=<?php echo $row['id']; ?>">Delete</a></th>
                    </tr>
                    <?php $i++; } ?>
                  
                </table>
                <?php } ?>



            </div> 

            <?php include 'HDHtml/footer.html' ?> 

    </body>

</html>
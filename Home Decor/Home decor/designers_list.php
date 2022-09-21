<?php 
session_start();
include("connection/cn.php");

if(@$_GET['status'])
{
    $status=$_GET['status'];
    $id=$_GET['id'];
    $update=mysqli_query($con,"update registration set status='$status' where id=$id");
    header('location: designers_list.php');

}
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <title>Index Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="istyle.css">
  </head>
<body style="color:white">
    <?php include 'HDHtml/header.html' ?>
    <?php include 'sidebar.php' ?>
    <div class="ddata">
    <br>
    <p id="hello" align=center>Designer Data</p>
    <table class="table" align=center width="95%" border="2" cellspacing="50%"  style="border-spacing: 15px;">
        <tr>
            <th>Id </th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <!--<th>Password</th>-->
            <th>Resume</th>
            <th>Status</th>
        </tr>
        <?php 
            $sel=mysqli_query($con,"select * from registration");
            $i=1;
            while($row=mysqli_fetch_array($sel)){
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone_no']; ?></td>
                <!--<td><?php echo $row['password']; ?></td>-->
                <td><a target="_blank" href="resume/<?php echo $row['resume']; ?>" ><?php echo $row['resume'] ?></a></td>
                <!--<td><a href="_blank" src="upload/<?php  echo $row['resume'];?>"<?php echo $row['resume'] ?> width="100px" height="100px" ></a></td>-->
                <td>
                    <?php if($row['status']==0){ ?>
                            <a href="designers_list.php?status=1&id=<?php echo $row['id']; ?>">Active</a>
                            <a href="designers_list.php?status=2&id=<?php echo $row['id']; ?>">Decline</a>
                    <?php }?>
                    <?php if($row['status']==1){ ?>
                        <a href="designers_list.php?status=2&id=<?php echo $row['id']; ?>">Decline</a>
                    <?php }?>
                    <?php if($row['status']==2){ ?>
                        <a href="designers_list.php?status=1&id=<?php echo $row['id']; ?>">Active</a>
                    <?php }?>
                </td>
            </tr>
        <?php  $i++;} ?>
    </table>
    
</div> 

  <?php include 'HDHtml/footer.html' ?>
</body>
</html> 
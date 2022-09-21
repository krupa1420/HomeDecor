<?php session_start(); ?>
<!DOCTYPE html>
<html lang=en>
<head>
    <title>Index Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="istyle.css">
  </head>
<body >
    <?php include 'HDHtml/header.html' ?>
    <?php include 'sidebar.php' ?>
    <div class="aside">
    <br>
    <p id="hello" align=center>INTERIOR DESIGN -- FURNISHING YOUR HOME</p>
    <table align=center>
    <tr>
    <td rowspan="2" class="image1" ></td>
    <td><img  class="image2" src="Images/img.jpg"> </td>
    </tr>
    <tr>
    <td><img  class="image2" src="Images/img0.jpg"></td>
    </tr>
    </table>

    <ul id="info" align=center>
    <li>
    <strong> You know </strong> that how  it feels like when you walk into a well designed
    room. You can sense how everything feels well integrated and put together. It feels 
    just right.</li><li> You can achieve that effect in your own home  by contacting  designers over here.
    you're on your way to creating a beautiful home.</li><li> Save time , money and is really headache
    to visit the place and compare all. So here you gets best option to pick among all designers.</li>
    </ul>


<div id="polaroid">
    <table align=center>
    <tr>
    <td><img  class="image2" src="Images/img6.jpg"></td>
    <td><img  class="image2" src="Images/img7.jpg"></td>
    <td><img  class="image2" src="Images/img8.jpg"></td>
    </table>
    <br>
    <table align=center>
    <tr>
    <td><img  class="image2" src="Images/img1.jpg"><br></td><br>
    <td><img  class="image2" src="Images/img2.jpg"></td><br>
    <td><img  class="image2" src="Images/img3.jpg"></td>
    </table>

</div>

</div>   
  <?php include 'HDHtml/footer.html' ?>
</body>
</html> 
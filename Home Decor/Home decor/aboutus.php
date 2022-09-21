    <html>
    <head>
    <style>
        .aboutus{
           color:hotpink;
           font-size: 35px; 
           margin-top: 10px; 
           margin-left: 5px;
           position: center;
           
        }
        .misscm{
           color:hotpink;
           font-size: 35px;
           margin-left: 5px;
        }
        #ainfo{
            color:black;
            background-color:white;
            opacity:0.7;
            font-size: 30px; 
            margin-left: 30px;
            height:150px;
           width:1000px;
           
        }
        .imgb{
            margin-left: 250px;
            height: 1300px;
        }
        .img{
            align:center;
            position: relative;
            margin-left:100px;
            

        }
        
    </style>
    </head>
    <body>
    <?php include 'HDHtml/header.html' ?>
    <?php include 'sidebar.php' ?> 
    <br>
    <div class="imgb">
    <div  class="aboutus" align=center>About us</div>
    <p id="ainfo" align=center>Designed by Shah Bansari
    <br>We are just students of GCET and this is something releated to our lessons hope you liked my project.</p>
    <div class="misscm" align=center>Mission</div>
    <p id="ainfo" align=center>Is to share you designers names,their project and information to make you design your home more beautifuly. <br>
        Using this website user can Save time and money.
So here user gets best option to pick among all designers.
</p>
    <img class="img" align=center src="Images/img.jpg">


    </div> 

    <?php include 'HDHtml/footer.html' ?> 
    </body>
</html>
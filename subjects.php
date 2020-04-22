<?php include_once("navbar.html"); ?>

<html>
    <head>
    <title>Computer Subjects</title>
    <link rel="stylesheet" type="text/css" href="sem.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

        <style>
            body{
    background-image: url('background.jpg');
    background-size:cover;
    background-attachment: fixed;
 }
    h1{
    margin-top: 100px;
}
.b0 {
margin:auto;
}

.b1{
margin:auto;
margin-top: 10px;
}

.btn{
    height:100px;
}
        </style>
    </head>
    <body>
        <h1 class="font">SELECT YOUR SUBJECT</h1>
            <br>
            
           <a href="web-book.php"><button class="btn b0"><b>Web Application Development</b></button></a>
           <a href="ajava.php"><button class="btn b1"><b>Advanced JAVA</b></button></a>
			<a href="dot-net.php"><button class="btn b1"><b>DOT NET</b></button></a>
			<a href="se.php"><button class="btn b1"><b>Software Engineering</b></button></a>
			<a href="toc.php"><button class="btn b1"><b>Theory Of Computation</b></button></a>
			
        </body>
   </html>
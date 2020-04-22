<?php include_once("navbar.html"); ?>
<html>
<head>
    <title>Contact us page</title>
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
</head>
<style>
     body{
    background-image: url('background.jpg');
    background-size:cover;
    background-attachment: fixed;
 }
    .main{
        margin: auto;
    }
    .font {
        font-family: 'IM Fell Great Primer SC', serif;
        font-size: 30px;
        text-align: center;
        font-weight: bold;
        font-style: italic;
        text-transform:uppercase;
    }

    .btn {
        display: block;
        text-transform: uppercase;
        font-size: 20px;
        padding: 10px 10px;
        color: white;
        background-color: black;
        width: 300px;
        height: 70px;
        transition: 0.5;
        border: none;
    }
    .btn:hover{
    background-color:crimson;
    color:white;
    }
    .b0 {
    margin:auto;
}
.b1 {
    margin:auto;
    margin-top:15px;
}
</style>
<body>
    <a href="admin_login.html"><p style="float:right; margin-top:0px">Log-out</p></a>
    <h1 class="font" style="text-decoration:underline">Admin Panel</h1>
    <h3 class="font">Welcome Admin</h3>
    <h3 class="font">Here you can Add Delete or Update the books From Below</h3>
    <div class="main">
        <a href="view_book.php" style="text-decoration:none"><button class="btn b0">View Your Database</button></a>
        <a href="insert_book.php" style="text-decoration:none"><button class="btn b1">Add Books</button></a>
        <a href="delete_book.php" style="text-decoration:none"><button class="btn b1">Delete Book</button></a>
        <a href="update.php" style="text-decoration:none"><button class="btn b1">Update Books</button></a>
    </div>
</body>
</html> 



<?php include_once("navbar.html"); ?>

<?php   
$con = mysqli_connect("localhost","root","","mydb")  or die("Connection Error: " . mysqli_error($conn));
if(isset($_GET["submit"]))
{
   if(!empty($_GET["isbn"]))
   {
       $isbn = $_GET["isbn"];
       header("Location: update_book.php?isbn=$isbn");
   }
}

?>

<html>
<head>
    <title>Update Book</title>
    <link rel="stylesheet" type="text/css" href="con_style.css" />
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
</head>
<style>
.success{
     font-family: 'IM Fell Great Primer SC', serif;
     font-size:30px;
     font-style:italic;
     text-align: center;
     font-color:crimson;
     margin-top:100px;
     }
     body{
    background-image: url('background.jpg');
    background-size:cover;
    background-attachment: fixed;
 }
</style>
<body>
    <h1>Update Books</h1>
    <h3>Enter the <span class="success">ISBN Number</span> of the book to be Modified</h3> 
    <table class="contact-box">
                <form  method="get">
                    <tr>
                        <td>
                    <label>ISBN No:</label>
                        </td>
                        <td>
                    <input class="t" type="text" name="isbn" placeholder="Enter unique isbn number" />
                        </td>
                 </tr>
                 
                 <tr>
        <td>
                    <button class="b1" type="submit" name="submit" style="margin-top:20px;">Submitk</button>
    </td>
    </tr>
                </form>
                </table>


    
</body>
</html>
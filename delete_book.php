<?php include_once("navbar.html"); ?>

<?php   
$con = mysqli_connect("localhost","id12293297_root","meet@123","id12293297_booksourcehub")  or die("Connection Error: " . mysqli_error($conn));
if(isset($_POST["submit"]))
{
   if(!empty($_POST["isbn"]))
   {
       $isbn = $_POST["isbn"];
       $delete_query = "DELETE FROM books WHERE isbn='$isbn'";
       $Execute = mysqli_query($con,$delete_query);
       if($Execute)
       {
        echo "<h1>Record of the Book Has Been Deleted</h1>"; 
	   }
   }
}

?>

<html>
<head>
    <title>Contact us page</title>
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
     }
     body{
    background-image: url('background.jpg');
    background-size:cover;
    background-attachment: fixed;
 }
</style>
<body>
    <a href="admin_login.html"><p style="float:right">Log-out</p></a>
    <h1>Delete Books</h1>
    <h3>Enter the <span class="success">ISBN Number</span> of the book to be deleted permanently</h3>
   
    <table class="contact-box">
                <form action="delete_book.php" method="post">
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
                    <button class="b1" type="submit" name="submit" style="margin-top:20px;">Delete Book</button>
    </td>
    </tr>
                </form>
                </table>


    
</body>
</html>

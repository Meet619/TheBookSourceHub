<?php include_once("navbar.html"); ?>

<?php   
$con =mysqli_connect("localhost","root","","mydb")  or die("Connection Error: " . mysqli_error($conn));
    $update_isbn = $_GET['isbn'];
       $query = "SELECT * FROM books WHERE isbn=$update_isbn";
       $Execute = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($Execute))
       {
            $up_isbn = $row["isbn"];
             $title = $row["title"];
             $author = $row["author"];
             $descript = $row["descript"];
             $pubname = $row["pubname"];
	   }

?>


<?php   
$con = mysqli_connect("localhost","root","","mydb")  or die("Connection Error: " . mysqli_error($conn));
if(isset($_POST["update"]))
{
       $isbn = $_POST['isbn'];
       $title = $_POST["title"];
       $author = $_POST["author"];
       $descript = $_POST["descript"];
       $pubname = $_POST["pubname"];

       $query = "UPDATE books SET isbn='$isbn' , title='$title' , author='$author' ,
       descript='$descript' , pubname='$pubname' WHERE isbn='$isbn'";

       $Execute = $con->query($query);
       if($Execute)
       {
        echo '<h1>Record of the Book Has Been Updated </h1>';
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
h1{
    top:100px;
}
body{
    background-image: url('background.jpg');
    background-size:cover;
    background-attachment: fixed;
 }
</style>
<body>
  
    <h1>Update Books</h1>
    <h3>Hey! Admin...</h3>
    <h3>You can directly Update your books by just modifying the books data</h3>
     <table class="contact-box">
                <form action="update_book.php" method="post">
                    <tr>
                        <td>
                    <label>ISBN No:</label>
                        </td>
                        <td>
                    <input class="t" type="text" name="isbn" value="<?php  echo $update_isbn ?>" placeholder="Enter unique isbn number" />
                        </td>
                    </tr>
                    <tr>
                    <td>
                    <label>Title :</label>
    </td>
    <td>
                    <input class="t" type="text" name="title"  value="<?php  echo $title ?>" placeholder="Title of the book" />
    </td>
    </tr>

    <tr>
        <td>
                    <label>Author :</label>
    </td>
    <td>
                    <input class="t" type="text" name="author" value="<?php  echo $author ?>"  placeholder="Enter Author name" />
    </td>
    </tr>

    <tr>
        <td>
                    <label>Description :</label>
    </td>
    <td>
                    <input class="t" type="text" name="descript" value="<?php  echo $descript ?>" placeholder="Description of book" />
    </td>
    </tr>

    <tr>
        <td>
                    <label>Publication :</label>
    </td>
    <td>
                    <input class="t" type="text" name="pubname"  value="<?php echo $pubname ?>" placeholder="Enter publication name" />
    </td>
    </tr>

    <tr>
        <td>
                    <button class="b1" type="submit" name="update" style="margin-top:20px;">Update Book</button>
            </td>
    </tr>
                </form>
                </table>



</body>
</html>

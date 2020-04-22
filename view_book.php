<?php include_once("navbar.html"); ?>
<html>
<head>
<title>View Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	 body{
    background-image: url('background.jpg');
    background-size:cover;
    background-attachment: fixed;
 }

</style>
</head>
<body>
   <a href="admin_login.html"><p style="float:right">Log-out</p></a>
<table class="w3-table-all" style="  border-collapse: collapse;">
	<caption style="font: bold 50px 'IM Fell Great Primer SC', serif; color:crimson; padding-bottom:15px;top:150px">View From Database</cation>
		<tr class="w3-light-grey w3-hover-black" style="width=100%;">
			<th>ISBN NO.</th>
			<th>Title</th>
			<th>Author</th>
			<th>Description</th>
			<th>Publication</th>				
		</tr>
<?php 
$con = mysqli_connect("localhost","id12293297_root","meet@123","id12293297_booksourcehub")  
or die("Connection Error: " . mysqli_error($conn));
$view_query = "SELECT * FROM books";
$Execute = mysqli_query($con,$view_query);
while($row = mysqli_fetch_array($Execute))
{
	  $isbn = $row["isbn"];
       $title = $row["title"];
       $author = $row["author"];
       $descript = $row["descript"];
       $pubname = $row["pubname"];
?>
<tr class="w3-light-grey w3-hover-blue" >
<td><?php echo $isbn; ?><td>
<td><?php echo $title; ?><td>
<td><?php echo $author; ?><td>
<td><?php echo $descript; ?><td>
<td><?php echo $pubname; ?><td>
</tr>

<?php } ?>

</table>
</body>
</html>
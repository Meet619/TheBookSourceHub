<?php 
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$textarea=$_POST['text'];

$mail_to="meet0619@gmail.com";
$headers= "From :".$email;
$txt = "You have recievced email from ".$name."\n\n"."$textarea";
mail($mail_to, $subject,$txt,$headers);
header("Location:contact.php?mailsend");
echo "success";
}
?>

<?php 
$conn = mysqli_connect("localhost","id12293297_root","meet@123","id12293297_booksourcehub") or die("Connection Error: " . mysqli_error($conn));
mysqli_query($conn,"INSERT INTO contact (name,subject,email,textarea) VALUES ('" .$name. "','" .$subject. "','" .$email. "','" .$textarea. "')");
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your contact information is saved successfully";
echo "<h1>$message</h1>";
}
?>


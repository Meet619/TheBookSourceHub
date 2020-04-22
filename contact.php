<?php include_once("navbar.html"); ?>

<html>
<head>
    <title>Contact us page</title>
    <link rel="stylesheet" type="text/css" href="con_style.css" />
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
    <style>
         body{
    background-image: url('background.jpg');
    background-size:cover;
    background-attachment: fixed;
 }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <h3>Hey! Buddy...</h3>
    <h3>Share your Experience and ask any give your feedback here</h3>
   
    <table class="contact-box">
                <form action="cserver.php" method="post">
                    <tr>
                        <td>
                    <label>Name</label>
                        </td>
                        <td>
                        <input class="t" type="text" name="name" placeholder="Enter your name here" />
                        </td>
                 </tr>
                 <tr>
                        <td>
                    <label>Subject</label>
                        </td>
                        <td>
                        <input class="t" type="text" name="subject" placeholder="subject" />
                        </td>
                 </tr>
                 
                 <tr>
                        <td>
                    <label>Email</label>
                        </td>
                        <td>
                        <input class="t" type="email" name="email" placeholder="Enter your email here" />
                        </td>
                 </tr>
                 <tr>
                        <td>
                    <label>TextArea</label>
                        </td>
                        <td>
                        <textarea name="text" style="border:2px solid black; font-size: 20px;
                   border-radius: 23px 23px;" rows="8" cols="60" placeholder="Enter the Message  here"></textarea>
                        </td>
                </tr>

                 <tr>
        <td>
                    <button class="b1" type="submit" name="submit">Submit</button>
    </td>
    </tr>
                </form>
                </table>



</body>
</html>
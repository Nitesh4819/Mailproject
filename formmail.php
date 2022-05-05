<!doctype html>
<html lang="en">
  <head>
    <title>form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    


</head>
  <body>
      
  <form method="post" action="">
  Email<input type="email" name="email" class=" inp form-control" placeholder="enter email" id="email">
  </div>
 <div class="mb-3">
              
      subject<input type="text" name="subject" class=" inp form-control" placeholder="subject" id="pass">
            </div>


            
              Message<textarea name="message" cols="30"  rows="2"> </textarea>
          
           <input type="submit" name="sub">
            
            </form>
      </body>
</html>



<?php  

if(isset($_POST['sub']))
{
$to="niteshsingh4819@gmail.com";
$subject=$_POST['subject'];
$message=$_POST['message'];
$from=$_POST['email'];
$headers="From:$from";
mail($to,$subject,$message,$headers);
echo "mail sent";
} 
?>
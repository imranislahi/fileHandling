<?php
 
  if (isset($_POST['submit'])) {
  	  $file = "writed.txt"; // String of data to be written
      $data = $_POST['story']; // Open the file for writing
      $handle = fopen($file, "a") or die("ERROR: Cannot open the file."); // Write data to the file
      $cont = fwrite($handle, $data); // Closing the file handle
      fclose($handle);
     echo "Data written to the file successfully.";
     
     //for mail
     $email = $_POST['email'];
     // send email
     if(mail($email, "File Handling", "You are use fread function to write the file"))
     {
  	   echo "mail send successfully";
     }
  }

  //file-get-contents
  if (isset($_POST['submit2'])) {
  	$file = "writed.txt";
    $data = $_POST['story'];
    $con = file_get_contents($file, $data) or die("ERROR: cannot write the file");
    echo "Data writen to the file successfully";

    //for mail
    $email = $_POST['email'];
     // send email
     if(mail($email, "File Handling", "You are use file_get_content to write the file"))
     {
  	   echo "mail send successfully";
     }

  }

  //file-put-content method
  if (isset($_POST['submit3'])) {
  	 $file = "writed.txt";
     $data = $_POST['story'];
     $con = file_put_contents($file, $data, FILE_APPEND) or die("ERROR: cannot write the file");
    echo "Data writen to the file successfully";

    $email = $_POST['email'];
     if(mail($email, "File Handling", "You are use the file_put_content to write the file."))
     {
  	   echo "mail send successfully";
     }

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>write</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <form action="" method="post" style="margin-left: 300px;">
   	<label for="story">Tell us your story:</label>

    <textarea id="story" name="story" rows="5" cols="33">
    
    </textarea>
    <p>Enter Your Email: <input type="email" name="email"></p>
    <button type="submit" name="submit">fread</button>
    <button type="submit" name="submit2">file_get_contents</button>
    <button type="submit" name="submit3">file_put_contents()</button>
   </form>
</body>
</html>
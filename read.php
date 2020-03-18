<?php
//fread method
if (isset($_POST['submit'])) {
  $file="data.txt";// Check the existence of file
  if(file_exists($file))
  {
  // Attempt to open the file
  $handle=fopen($file,"r") or die("ERROR: Cannot open the file.");
  // Read fixed number of bytes from the file
  $content=fread($handle, filesize($file));
  // Closing the file handle
  fclose($handle);
  // Display the file content
  echo $content;
  // from mail
  $email = $_POST['email'];
 // $msg = wordwrap($msg,70);

  // send email
  if(mail($email, 'File Handling', 'Youe use fread function for read the file'))
  {
    echo "mail send";
  }
  
  }
  else
  {
   echo"ERROR: File does not exist.";
  }
}


//Readfile method
if (isset($_POST['submit1'])) {
  $file1 = "data.txt";
  if (file_exists($file1)) {
    $content1 = readfile($file1) or die("ERROR: cannot open the file.");
    //for mail
    $email = $_POST['email'];
    if (mail($email, "File Handling", 'You are use readfile method to read the file.')) {
      echo "mail send";
    }
  }
  else
  {
    echo"ERROR: File does not exist.";
  }
}

//file-get-content method
if (isset($_POST['submit2'])) {
  $file2="data.txt";// Check the existence of file
   if(file_exists($file2)){
   // Reading the entire file into a string
    $content2=file_get_contents($file2) or die("ERROR: Cannot open the file.");
   // Display the file content
     echo$content2;
        $email = $_POST['email'];
    if (mail($email, "File Handling", 'You are use file_get_contents method to read the file.')) {
      echo "mail send";
    }
     }
   else
   {
      echo"ERROR: File does not exist.";
   }
}

//file function method
if (isset($_POST['submit3'])) {
  $file="data.txt";
// Check the existence of file
if(file_exists($file))
{
// Reading the entire file into an array
$arr=file($file) or die("ERROR: Cannot open the file.");
foreach($arr as $line)
{
echo$line;
}
$email = $_POST['email'];
    if (mail($email, "File Handling", "You are use file function to read the file.")) {
      echo "mail send";
    }
}
else{echo"ERROR: File does not exist.";}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>file-handling</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <form action="" method="post">
    <label for="story">Tell us our story:</label>

    <!-- <textarea id="story" name="story" rows="5" cols="33"> -->
        
    <!-- </textarea> -->
    <p>Enter Your Email: <input type="email" name="email"></p>
    <button type="submit" name="submit">fread</button>
    <button type="submit" name="submit1">readfile</button>
    <button type="submit" name="submit2">file_get_contents</button>
    <button type="submit" name="submit3">file_put_contents()</button>
   </form>
</body>
</html>
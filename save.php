 <html>
 <?php
 $name = $_POST["contact_name"];
 $email = $_POST["contact_email"];
 $subject = $_POST["contact_subject"];
 $message = $_POST["contact_message"];
 
 $number_of_files = fopen("savefiles/number_of_files.txt", "r");
 $num = fread($number_of_files , "100");
 fclose($number_of_files);
 $myfile = fopen("savefiles/$num.txt", "x");
 fwrite($myfile ,"name: " . $name . "\nemail: " . $email . "\nsubject: " . $subject . "\nmessage: " . $message);
 fclose($myfile);
 $number_of_files2 = fopen("savefiles/number_of_files.txt", "w");
 $num ++;
 fwrite($number_of_files2 , $num);
 fclose($number_of_files2);
 header('Location: index.html');
 exit;
 ?>
 </html>
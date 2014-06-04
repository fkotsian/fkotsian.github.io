$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'frankkotsianas@gmail.com';
$subject = 'Contact from ' + $name;
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: contact@frankkotsianas.com';
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
mail($to, $subject, $message) or die('Error sending Mail'); 
echo "Your email was sent!";
}
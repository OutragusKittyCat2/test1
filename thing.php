?php
if(isset($_POST['submit']))
{
echo 'error';
}

$input = $_POST['input']

if(empty($input)||)
{
  echo 'input is needed';
  exit;
}

$email_from = 'evenandaddy@gmail.com'
$email_subject = "test"
$email_body = "$input"
$to = "ezoumas06@gmail.com"
$headers = "hi"

mail($to,$email_subject,$email_body,$headers)

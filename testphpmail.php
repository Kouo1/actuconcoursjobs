<?PHP
//$sender = 'noreply@actuconcoursjobs.com';
/*$sender = 'contact_info@actuconcoursjobs.com';
//$recipient = 'kouo.sylvain@yahoo.com';
$recipient = 'fedoungr@yahoo.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;


if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}*/

       function envoyerMailPHP($from, $recipient, $subject, $message, $headers )
                  {
                  if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
                  }
?>
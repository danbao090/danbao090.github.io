<?php
$action=$_REQUEST['action'];
if ($action=="") /** display the contact form */
{
?>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="fields">
    <div class="field half">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" />
    </div>
    <div class="field half">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" />
    </div>
    <div class="field">
      <label for="message">Message</label>
      <textarea name="message" id="message" rows="5"></textarea>
    </div>
  </div>
  <ul class="actions">
    <input type="submit" value="Send"><input type="reset" value="Clear">
  </ul>
<?php
}
else/* send the submitted data */
}
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
if (($name=="")||($email=="")||($message==""))
{
echo "All fields are required, please fill <a href=\"\">the form</a> again.";
}
else
$from="From: $name\r\nReturn-path: $email";
$subject="Message sent using your contact form";
mail("youremail@yoursite.com", $subject, $message, $from);
echo "Email sent!";
}
}
?>

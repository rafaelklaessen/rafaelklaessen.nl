<?php
// Email to send mails to
$to = "rafael@rafaelklaessen.nl";
$nameErr = $emailErr = $subjectErr = $msgErr = "";
$name = $email = $subject = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required.";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $nameErr = "Not a valid name.";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required.";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format.";
    }
  }

  $subject = test_input($_POST["subject"]);

  if (empty($_POST["msg"])) {
    $msgErr = "A message is required.";
  } else {
    $msg = test_input($_POST["msg"]);
  }

  if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($msgErr)) {
    $msg = wordwrap($msg, 70);
    $msg = '
      ' . $name . ' has sent you an email:
      ' . $msg . '
      You can contact him/her on ' . $email;
    mail($to, $subject, $msg);
    echo 'success';
  } else {
    $errors = array();
    if (!empty($nameErr)) {
      $errors['nameErr'] = $nameErr;
    }
    if (!empty($emailErr)) {
      $errors['emailErr'] = $emailErr;
    }
    if (!empty($subjectErr)) {
      $errors['subjectErr'] = $subjectErr;
    }
    if (!empty($msgErr)) {
      $errors['msgErr'] = $msgErr;
    }
    echo json_encode($errors);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

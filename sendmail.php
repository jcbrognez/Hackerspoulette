<?php
  $dest = $email;
  $sujet = "Email of confirmation";
  $corp = "Hello, we have received your message.";
  $headers = "From: VotreGmailId@gmail.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email sent with success to $dest ...";
  } else {
    echo "Failure of sending email ...";
  }
?>
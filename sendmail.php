<?php
  $dest = "jcbrognez@gmail.com";
  $subj = "Email of confirmation";
  $corp = "Hello, we have received your message.";
  $headers = "From: hackers@poulette.com";

  if (mail($dest, $subj, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
  // mail ($to, $subj, $corp, $headers);
  // echo "Email sent with success to $to ...";

?>
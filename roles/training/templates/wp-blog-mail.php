<?php
 $to_email = "{{ target_email_user.stdout }}@{{ target_domain }}";
 $subject = "Hot deskmates near you";
 $body = "Bro";
 $headers = "From: cubicitytest@gmail.com";
 if ( mail($to_email, $subject, $body, $headers)) {
 echo("");
 } else {
 echo("Email sending failed...");
  }
?>

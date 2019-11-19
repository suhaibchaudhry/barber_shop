<?php
  $data = "First Name: " . $_POST['firstname'] . "\n" . "Last Name: " . $_POST['lastname'] . "\n" . "Barber: " . $_POST['barber'] . "\n" . "Date: " . $_POST['barber-appointment'] . "\r\n";
  $fp = fopen('data.txt', 'a');
  fwrite($fp, $data);
  fclose($fp);
  header("Location: confirmation.html");
?>

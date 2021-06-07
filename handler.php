<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $organism = $_POST['organism'];
  $training = $_POST['training'];
  $validation = $_POST['validation'];
  $model = $_POST['model'];
  $trainingannotations = $_POST['trainingannotations'];
  $validationannotations = $_POST['validationannotations'];
  $description = $_POST['description'];

  $email_from = 'sashimi@shawntylerschwartz.com';

  $email_to = 'shawn.t.schwartz@gmail.com';

  $email_subject = "New sashimi Model Submission!";

  $email_body = "You have received a new sashimi model submission request from the user $name.\n".
                          "Here is the request:\n 
                          Name: $name \n
                          Email: $visitor_email \n
                          Organism: $organism \n
                          Training Set Size: $training images \n
                          Validation Set Size: $validation images \n
                          Model URL (.h5): $model \n
                          Training Annotations URL (.json): $trainingannotations \n
                          Validation Annotations URL (.json): $validationannotations \n
                          Other Notes/Description: $description.\n";
                          
                          
$headers = "From: $email_from \r\n";
mail($email_to,$email_subject,$email_body,$headers);
header('Location: success.html');
?>
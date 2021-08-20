 <?php


   if (isset($_POST['submit'])) {
      $name = trim(htmlspecialchars($_POST['name']));
      $email = trim(htmlspecialchars($_POST['email']));
      $subject = trim(htmlspecialchars($_POST['subject']));
      $number = trim(htmlspecialchars($_POST['number']));
      $message = trim(htmlspecialchars($_POST['message']));

      $to = "moamen.ali107@gmail.com";
      $subject = "New Message from website";
      $message = $message;
      $headers = "From: $email";

      echo "<pre>";
      print_r($_POST);
      echo "</pre>";

      mail($to, $subject, $message, $headers);
      var_dump($res);
   }
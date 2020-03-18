  <?php 
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      require_once 'assets/PHPMailer-master/src/Exception.php';
      require_once 'assets/PHPMailer-master/src/PHPMailer.php';
      require_once 'assets/PHPMailer-master/src/SMTP.php';

      $to = "diopk038@gmail.com";
      $surname = "Bambam";
   //   $upass =$password;
     // echo !extension_loaded('openssl')?"Not Available":"Available";
      $mess="Bonjour Mr".$surname."Bienvenu dans notre application de vent en ligne et vous pouvez discutez avec les vendeurs";
      //$token=sha1($to.$surname.$upass);
    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
   // $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Host = 'tls://smtp.gmail.com';
  //  $mail->Port = 25;
    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = true;
    $mail->Port = 587; // TLS only
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    //$mail->SMTPAuth = true;
    $mail->Username = "libanegamal@gmail.com";
    $mail->Password = "Passer@1";
    $mail->setFrom("libanegamal@gmail.com", "BANLIEUAUTO");
    $mail->addAddress($to, "Mr".$surname);
    $mail->Subject = "ACTIVATION COMPTE \t\t".strtoupper($surname);
    $mail->msgHTML($mess); 
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,

    $mail->AltBody = $mess;
  //  $mail->addAttachment('assets/img/auly_attach.png'); //Attach an image file

    if(!$mail->send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
       // echo "Message sent!";
        //$this->session->set_flashdata('message', 'Check in your email for email verification mail');
         //$this->load->view('email_verification');
    }
     
    echo "</div>";




   ?>
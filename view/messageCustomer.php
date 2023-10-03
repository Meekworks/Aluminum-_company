        <?php 
            $maineg = new  mainClass();
           //$DBinfo = $maineg->Targeted_information('jobs','id',$_GET['MessageSend']);
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Send Mail</h6>
            </div>
            <!-- <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=Catery" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                  <div class="col-lg-8 col-xl-8">
                        <div class="card">
                          <div class="card-body">
                              <div class="media align-items-center mb-4">
                                 <!-- <div class="media-body">
                                      <h4 class="mb-0"> Details</h4>
                                </div> -->
                              </div>
                                <form action="#" method="POST">

                            <!-- <p>Receiver:<input type="text" value="<?php //echo $DBinfo['id']?>" class="form-control" name="receiver"></p> -->
                            <p>Receiver:<input type="text" class="form-control" name="receiver"></p>

                            <p>Subject:<input type="text" value="" class="form-control" name="subject"></p>


                            <p>Message:<textarea class="form-control" name="message" style="height:250px;"></textarea></p>
                            <p><input type="submit" class="btn btn-primary form-control" value="Send Mail" name="snd"></p>
                            </form>
                            </div>
                        </div>  
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

     <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
           

<?php


if (isset($_POST['snd'])){
    $receiver =$_POST['receiver'];
    $subject = $_POST['subject'];
    $message = trim($_POST['message']);
    
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';


$mail = new PHPMailer;
// $mail->SMTPDebug = 3;                               // Enable verbose debug output
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'maxicioninvest.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@maxicioninvest.com';                 // SMTP username
$mail->Password = 'CfFaG6XE?g+d';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also 
$mail->Port = 465;

$mail->setFrom('admin@maxicioninvest.com','Maxicion Invest Admin');
$mail->addAddress($receiver);     // Add a recipient

//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;

$mail->Body    = '
<div class="header" style="background-color:#002e5b;;color:white; padding:15px;"><h2>Maxicion Invest</h2></div>
<div id="me" style="background-color:#F5F5F5; height:auto;width:auto; padding:18px;">
<p style="font-size:17px;">'.nl2br($message).'</p></div>';


$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
     echo '<script> swal("success","Message Delievered","success");</script>';
}

}

?>
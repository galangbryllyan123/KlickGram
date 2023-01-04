<?php
// Script by Denny Irawan

if(!$username) {
	header('location:../login.php');
} ?>

<?php if (isset($_POST['tiket'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "salimajah01@gmail.com"; // Tempat email Admin
$headers = "MIME-Version: 1.0" . "rn";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "rn";
$headers .= 'From: Codingku <noreply@codingku.info>'."rn" . 'Reply-To: '.$name.' <'.$email.'>'."rn";
@mail($to, $subject, $message, $headers);
if(@mail) {
 echo "E-Mail berhasil dikirim kepada Admin!"; 
}} ?>
<!-- Row-->
                    <div class="row">
                        
                        <!-- col -->
                        <div class="col-md-12">
          <div class="panel panel-info">
            <div class="panel-heading"> Tiket Komplain
              <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
<form class="form-horizontal" method="POST">
		                    <div class="form-group">
		                      <label class="col-md-12">Username</label>
		                      <div class="col-md-12">
  <input type="text" class="form-control" value="<?php echo $username; ?>" readonly>
		                      </div>
		                    </div>
 <div class="form-group">
		                      <label class="col-md-12">Email</label>
		                      <div class="col-md-12">
  <input type="email" class="form-control" name="email" required>
		                      </div>
		                    </div>
 <div class="form-group">
		                      <label class="col-md-12">Subject</label>
		                      <div class="col-md-12">
  <input type="text" class="form-control" name="subject" required>
		                      </div>
		                    </div>
<div class="form-group">
		                      <label class="col-md-12">Pesan</label>
		                      <div class="col-md-12">
<textarea name="message" class="form-control" cols="100" rows="5" placeholder="Username Akun :
No Orderan :
Status Orderan :
Masalah : "></textarea>
 </div>
 <br>
<div class="form-group m-b-0">
		                      <div class="col-md-12">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="tiket">Kirim Tiket !</button>
		                      </div>
		                    </div>
</form>
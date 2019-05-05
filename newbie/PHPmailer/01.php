<?php 
	include 'class.phpmailer.php';
	$mail = new PHPMailer();
	
//	echo '<pre>';
//	print_r($mail);
//	echo '</pre>';
	
	//Thiết lập thông tin người gửi và email của người gửi
	$mail->setFrom('tringuyen20101998bb@gmail.com', 'Nguyễn Trí');
	
	//Thiết lập thông tin người gửi và email của người nhận
	$mail->AddAddress('nguyentri20101998bb@gmail.com', 'Nguyễn Trí');

	//Thiết lập tiêu đề mail
	$mail->Subject = "Test PHP mailer";

	//Thiết lập charset
	$mail->Charset = 'utf-8';

	//Thiết lập nội dung
	$mail->Body = "Test thử xem có gửi được không";

	if($mail->Send() == false)
		echo 'Error: '. $mail->ErrorInfo;
	else 
		echo 'Thành công';
?> 
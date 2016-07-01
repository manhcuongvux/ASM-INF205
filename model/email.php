<?php
include("class.phpmailer.php");
include("class.pop3.php");
include("class.smtp.php");

echo $tieude = $_POST['tieude'];
echo $noidung = $_POST['noidung'];
// $lop = $_POST['class'];

// $conn = mysql_connect("localhost","root","") or die ("Khong ket noi duoc CSDL");
// mysql_select_db("test_excel",$conn) or die ("Khong mo duoc CSDl email");

// $query = "SELECT * FROM danh_sach_sv where class = '$lop' ";
// $result = mysql_query($query);
// $a = mysql_num_rows($result);
// echo"<pre>";
// var_dump($a);
// while($row = mysql_fetch_array($result))
// {

// 	if($row['Email']=="")
// 	{
// 		echo "Khong co email nao trong CSDL";
// 	}
// 	else
// 	{ 
// 		for($i=0; $i<=$a; $i++);
// 		{
			$mail = new PHPMailer();
			$mail->IsSMTP();// Simple Mail Transfer Protocol
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->Username = "ntcongthang@gmail.com"; //Địa chỉ mail gửi
			$mail->Password = "Ntcongthang@/Skype0983468971"; //Mật khẩu của địa chỉ mail gửi
			$mail->FromName = "CongThang"; //ten admin
			$mail->AddAddress('ntcongthang@gmail.com');//địa chỉ mail  nhận
			$mail->IsHTML(true);
			$mail->Subject = $tieude ;
			$mail->Body = $noidung;

			if($mail->Send() == true)
			{
				echo "ban da gui thanh cong cho </br>"; 
				header("Location:../controller/usercontroller.php");			}
			else
			{
				echo "Loi khong gui duoc mail"; 
			}

// 		} 
// 	}
// }
?>
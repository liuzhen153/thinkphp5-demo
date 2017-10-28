<?php
namespace app\index\controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\POP3;
use PHPMailer\PHPMailer\SMTP;

// 系统邮件发送函数举例
class Index
{

	public function send_mail() {
		$mail = new PHPMailer(true);                              // 允许异常信息抛出
		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // 允许调试信息输出
		    $mail->isSMTP();                                      // 使用 SMTP 方式

		    $mail->Host = 'mail.example.com';  				      // 邮箱的SMTP服务器地址，一般可以在你的邮箱设置里找到
		    $mail->SMTPAuth = true;                               // 开启STMP授权
		    $mail->Username = 'service@example.com';              // 你的邮箱地址
		    $mail->Password = '';                           	  // 你的SMTP密钥，在邮箱设置里能设置
		    $mail->SMTPSecure = 'tls';                            // 国内QQ邮箱等一般都用SSL，这个也是在邮箱设置里找到
		    $mail->Port = 587;                                    // 端口号，这个可以在你的邮箱设置里找到

		    //Recipients
		    $mail->setFrom('service@example.com', 'Mailer');        //填写发送人地址和姓名，姓名可选
		    $mail->addAddress('liuzhen-153@163.com', 'Joe User');   // 添加一个接收者，姓名可选，你可以用此方式添加多个接收者
		    //$mail->addAddress('ellen@example.com');               // 举例，再添加一个接收者
		    $mail->addReplyTo('service@example.com', 'Information');  //设置本邮件被回复时接收邮件的邮箱和标题备注，可选
		    // $mail->addCC('cc@example.com');						//添加抄送
		    // $mail->addBCC('bcc@example.com');				    //添加私密抄送

		    //Attachments
		    // $mail->addAttachment('/var/tmp/file.tar.gz');         // 添加附件
		    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // 添加附件时指定名称

		    //Content
		    $mail->isHTML(true);                                    // 使用HTML的形式发送本邮件
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

}

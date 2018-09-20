<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * This class is responsbil for any mail going out of the system
 */
class minative_Mail extends minative {

	public function __construct() {

	}

	//---------------------------- Mail system settings ----------------------------//

	public function mailset() {
		$mailsettings_get = $this -> settingsarray_bygroup('mailsettings');
		foreach ($mailsettings_get as $key => $value) {
			$mailsettings[$value['setname']] = $value['value'];
		}
		return $mailsettings;
	}

	//---------------------------- Send mail function ----------------------------//

	public function send_mail($reciver_mail = '', $mail_subj = '', $body_content = '') {

		if ($this -> mailset()['mailmethod'] == "phpmail") {

			$header = $this -> mail_header($mail_subj);
			$mail_template = $this -> mail_template($body_content);

			$sendmail = $this -> phpmail_method($reciver_mail, $mail_template, $header);

			if ($sendmail) {
				return TRUE;
			} else
				return;

		} elseif ($this -> mailset()['mailmethod'] == "smtp") {

			$header = $this -> mail_header($mail_subj);
			$mail_template = $this -> mail_template($body_content);

			$sendmail = $this -> smtp_method($reciver_mail, $mail_template, $header);

			if ($sendmail) {
				return TRUE;
			} else
				return;

		}

	}

	//---------------------------- Phpmail function method ----------------------------//

	public function phpmail_method($reciver_mail = '', $mail_template = '', $header = '') {

		if (mail($reciver_mail, $mail_template, $header)) {
			return TRUE;
		} else
			return;

	}

	//---------------------------- Smtp method ----------------------------//

	public function smtp_method($reciver_mail = '', $mail_template = '', $header = '') {

		require_once ('smtp/PHPMailerAutoload.php');

		$smtp_server = $this -> mailset()['smtpserver'];
		$smtp_user = $this -> mailset()['smtpuser'];
		$smtp_pass = $this -> mailset()['smtppass'];
		$smtp_port = $this -> mailset()['smtport'];
		$smtp_auth_req = $this -> mailset()['smtpauthreq'];
		$smtp_auth_type = $this -> mailset()['smtpauthrtype'];

		global $error;
		
		$mail = new PHPMailer();
		
		$mail -> IsSMTP();
		
		$mail -> SMTPDebug = 0;
		
		$mail -> SMTPAuth = true;
		
		$mail -> SMTPSecure = $smtp_auth_type;
		
		$mail -> Host = $smtp_server;
		$mail -> Port = $smtp_port;
		$mail -> Username = $smtp_user;
		$mail -> Password = $smtp_pass;
		
		$mail -> SetFrom($this->mailset()['sendermail'], $this->mailset()['maildefsubj']);
		$mail -> Subject = $this->mailset()['maildefsubj'];
		$mail -> Body = $mail_template;
		$mail -> AddAddress($reciver_mail);
		if (!$mail -> Send()) {
			$error = 'Mail error: ' . $mail -> ErrorInfo;
			return false;
		} else {
			$error = 'Message sent!';
			return true;
		}

	}

	//---------------------------- Prepare mail template ----------------------------//

	public function mail_template($body_content = '') {

		$body_header = htmlspecialchars_decode(stripslashes($this -> mailset()['defaultmailheader']));
		$body_footer = htmlspecialchars_decode(stripslashes($this -> mailset()['defaultmailfooter']));
		$body_default = htmlspecialchars_decode(stripslashes($this -> mailset()['defaultmailbody']));
		$body_css = $this -> mailset()['defaultmailcss'];
		$name = "mina";

		$message_content = '<html><head><style>';
		$message_content .= $body_css;
		$message_content .= '</style></head><body>';
		$message_content .= $body_header;
		$message_content .= str_replace('{$message_content}', $body_content, (str_replace('{$name}', $name, $body_default)));
		$message_content .= $body_footer;
		$message_content .= '</body></html>';

		return $message_content;
	}

	//---------------------------- Prepare mail header ----------------------------//

	public function mail_header($mail_subj = '') {

		$sendermail = $this -> mailset()['sendermail'];
		$maildefsubj = $this -> mailset()['maildefsubj'];

		$headers = "From: " . $sendermail . "\r\n";
		$headers .= "Subject: " . $maildefsubj . " - " . $mail_subj . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		return $headers;
	}

}

$minative_Mail = new minative_Mail();
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

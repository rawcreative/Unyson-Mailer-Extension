<?php if (!defined('FW')) die('Forbidden');

function fw_ext_mailer_send_mail($to, $subject, $message)
{
	return fw()->extensions->get('mailer')->send($to, $subject, $message);
}
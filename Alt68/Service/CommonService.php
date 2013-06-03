<?php

/*
 * Description of CommonService
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Service;

use Alt68\Sys\BaseService;
use \Smarty;

/**
 * This class is a common service layer.
 */
class CommonService extends BaseService {

    public static function getConfigValue($configValue) {
        $config = require './Alt68/config/config.php';
        return isset($config[$configValue]) ? $config[$configValue] : null;
    }

    /**
     * Create a own parameterized Smarty object
     * 
     * @return \Smarty Return a parameterized Smarty object
     */
    public static function getMySmarty() {
        $config = self::getConfigValue('smarty');

        require_once($config['smartyDir'] . 'Smarty.class.php');

        $smarty = new Smarty();

        $smarty->setTemplateDir($config['templateDir']);
        $smarty->setCompileDir($config['compileDir']);
        $smarty->setCacheDir($config['cacheDir']);
        $smarty->setConfigDir($config['configDir']);

        return $smarty;
    }

    /**
     * Send a smtp mail
     * 
     * This function was found at: http://www.web-development-blog.com/archives/send-e-mail-messages-via-smtp-with-phpmailer-and-gmail/
     *      
     * @param type $to To
     * @param type $from From
     * @param type $from_name From name
     * @param type $subject Subject
     * @param type $body Body
     * @param type $is_gmail Send mail via Gmail?
     * @return string|boolean If not true return an error message
     */
    public static function smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail = true) {

        require_once './vendor/phpmailer/class.phpmailer.php';
        $adminemail = self::getConfigValue('adminemail');
        
        $mail = new \PHPMailer();
        $mail->IsSMTP();
//        $mail->SMTPDebug  = 2;
        $mail->SMTPAuth = true;
        if ($is_gmail) {
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = $adminemail['email'];
            $mail->Password = $adminemail['password'];
        } else {
            $mail->Host = 'smtp.sendgrid.net';
            $mail->Port = 587;
            $mail->Username = 'your username';
            $mail->Password = 'your password';
        }
        $mail->SetFrom($from, $from_name);
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        $mail->AddAddress($to);
        if (!$mail->Send()) {
            $error = 'Mail error: ' . $mail->ErrorInfo;
            return $error;
        } else {
            return true;
        }
    }

}

?>

<?php

class Mail extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);


    $this->load->library('email');

        
        // $config = array(
        //     'useragent' => 'PHPMailer',
            
        //     'smtp_conn_options' => array(
        //         'ssl' => array(
        //             'verify_peer' => false,
        //             'verify_peer_name' => false,
        //             'allow_self_signed' => true
        //         )
        //     ),
        //         'protocol'  => '',
        //         'smtp_host' =>,
        //         'smtp_crypto' => ',
        //         'smtp_po,
        //         'smtpdebug' => ,
        //         'smtp_user' => 
        //         'smtp_pass' => '
        //         'mailtype'  => ,
        //         'charset'   => ,
        //         'priority'  => 
        //     );
        $config['smtp_conn_options'] = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
        $this->email->initialize($config);
        // $this->email->set_mailtype("html");
        // $this->email->set_newline("\r\n");   

}

    public function index2()
    {
    	$message = 'CI Mail Test !';
        $mail_message = $message;
        $this->email->to(');
        $this->email->from();
        $this->email->subject('');
        $this->email->message($mail_message);
        $send = $this->email->send();  
        if($send){
        	echo "Mail Send Success.";
        }
        else
        {
        	echo "Failed!";
        }
    }

public function index()
    {
    // $config['useragent']        = '            // Mail engine switcher: 'CodeIgniter' or 'PHPMailer'
    // $config['protocol']         = '                   // 'mail', 'sendmail', or 'smtp'
    // $config['mailpath']         = '
    // $config['smtp_host']        = 
    // $config['smtp_auth']        =                      // Whether to use SMTP authentication, boolean TRUE/FALSE. If this option is omited or if it is NULL, then SMTP authentication is used when both $config['smtp_user'] and $config['smtp_pass'] are non-empty strings.
    // $config['smtp_user']        = 
    // $config['smtp_pass']        = 
    // $config['smtp_port']        = 
    // $config['smtp_timeout']     = ;                       // (in seconds)
    // $config['smtp_crypto']      = ;                    // '' or 'tls' or 'ssl'
    // $config['smtp_debug']       = ;                        // PHPMailer's SMTP debug info level: 0 = off, 1 = commands, 2 = commands and data, 3 = as 2 plus connection status, 4 = low level data output.
    // $config['debug_output']     = ;                       // PHPMailer's SMTP debug output: 'html', 'echo', 'error_log' or user defined function with parameter $str and $level. NULL or '' means 'echo' on CLI, 'html' otherwise.
    // $config['smtp_auto_tls']    =                     // Whether to enable TLS encryption automatically if a server supports it, even if `smtp_crypto` is not set to 'tls'.
    // $config['smtp_conn_options'] =                 // SMTP connection options, an array passed to the function stream_context_create() when connecting via SMTP.
    // $config['wordwrap']         = 
    // $config['wrapchars']        = 
    // $config['mailtype']         =                  // 'text' or 'html'
    // $config['charset']          =                     // ' i.e. the character set of the site.
    // $config['validate']         = 
    // $config['priority']         =                         // 1, 2, 3, 4, 5; on PHPMailer useragent NULL is a possible option, it means that X-priority header is not set at all, see https://github.com/PHPMailer/PHPMailer/issues/449
    // $config['crlf']             =                      // "\r\n" or "\n" or "\r"
    // $config['newline']          =                      // "\r\n" or "\n" or "\r"
    // $config['bcc_batch_mode']   = 
    // $config['bcc_batch_size']   = 
    // $config['encoding']         =                  // The body encoding. For CodeIgniter: '8bit' or '7bit'. For PHPMailer: '8bit', '7bit', 'binary', 'base64', or 'quoted-printable'.

    // // DKIM Signing
    // $config['dkim_domain']      = '';                       // DKIM signing domain name, for exmple 'example.com'.
    // $config['dkim_private']     = '';                       // DKIM private key, set as a file path.
    // $config['dkim_private_string'] = '';                    // DKIM private key, set directly from a string.
    // $config['dkim_selector']    = '';                       // DKIM selector.
    // $config['dkim_passphrase']  =                       // DKIM passphrase, used if your key is encrypted.
    // $config['dkim_identity']    =                     // DKIM Identity, usually the email address used as the source of the email.
    $config['smtp_conn_options'] = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
    $this->email->initialize($config);
    // $this->email->set_mailtype("html");
    // $this->email->set_newline("\r\n");


    // $this->load->library('email');

    $subject = ;
    $message = '
        <p></p>

        <!-- Attaching an image example - an inline logo. -->
        <p>" /></p>
    ';

    // Get full html:
    $body = '<head>
        <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower($config['charset']) . '" />
        <title>' . html_escape($subject) . '</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
    ' . $message . '
    </body>
    </html>';
    // Also, for getting full html you may use the following internal method:
    //$body = $this->email->full_html($subject, $message);

    // Attaching the logo first.
    // $file_logo =  // Change the path accordingly
    // The last additional parameter is set to true in order
    // the image (logo) to appear inline, within the message text:
    // $this->email->attach($file_logo, 'inline', null, '', true);
    // $cid_logo = $this->email->get_attachment_cid($file_logo);
    // $body = str_replace('cid:logo_src', 'cid:'.$cid_logo, $body);
    // End attaching the logo.


    // $this->email->set_smtp_conn_options(array(
    //             'ssl' => array(
    //                 'verify_peer' => false,
    //                 'verify_peer_name' => false,
    //                 'allow_self_signed' => true
    //             )
    //         )
    // );
    $result = $this->email
        ->from()
        ->reply_to()    // Optional, an account where a human being reads.
        ->to()
        ->subject($subject)
        ->message($body)
        ->send();

    var_dump($result);
    echo '<br />';
    echo $this->email->print_debugger();

    exit;
        }

         

}



?>


<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol']     = 'mail'; // Set the mail protocol
$config['smtp_host']    = 'smtp.gmail.com'; // Set your SMTP host
$config['smtp_port']    = '587'; // Set your SMTP port
$config['smtp_user']    = 'anuragingle2002@gmail.com'; // Set your SMTP username
$config['smtp_pass']    = ''; // Set your SMTP password
$config['mailpath'] = '/usr/sbin/sendmail';

$config['mailtype']     = 'html'; // Set the email format to HTML
$config['charset']      = 'utf-8'; // Set the character set
$config['newline']      = "\r\n"; // Set the newline character

// Additional email configuration settings can be added as needed

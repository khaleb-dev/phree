<?php
/*
 * Utility
 * By Khaleb O'Brien (Caleb Uche aka weired_coder)
 * 234 810 3174 565
 * ebukauche52@gmail.com
 * www.data-phreak.blogspot.com
 * March 2020
*/

/**
 * This is the main utility class which is used for validation, tokenization, sending mails, error logging, etc.
*/
class Utility
{
	
	#application variables
	#{
		const APPLICATION_TITLE 		= 	'Unical-CS';

		const APPLICATION_NAME			=	'CS-Unical';

		const APPLICATION_DOMAIN		=	'https://unical-cs.com';
		
	#}

	public function __construct()
	{}

	// This function generates random tokens using md5 encryption
	public static function Generate_Random_Token()
	{
		$string = md5(uniqid(rand(), true));

		return $string;
	}

	// This function generates random token of 5 characters
	public static function createSalt()
	{
		$string = md5(uniqid(rand(), true));

		return substr($string, 0, 3);
	}

	// This function generates random strings
	public static function random_strings($length_of_string)
	{
		$str_result = '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjklmnpqrstuvwxyz';

		return substr(str_shuffle($str_result), 0, $length_of_string); 
	}

	// This function is used to remove unwanted characters from a string
	public static function sanitize($data, $to_lowercase = false)
	{
		$str =  ($to_lowercase)? strtolower(strip_tags($data)) : strip_tags($data);
		
		$str = str_replace('<', '-', $str);
		$str = str_replace('>', '-', $str);
		$str = str_replace('</', '-', $str);
		$str = str_replace('javascript', '-', $str);
		$str = str_replace('script', '-', $str);
		
		return $str;
	}

	// This function is used to generate barcode
	public static function generate_barcode($data, $width =180, $height=80)
	{
		$service = 'https://barcode.tec-it.com/barcode.ashx?data='.$data.'&code=Code128&dpi=96&dataseparator=';

		return '<img src="'.$service.'" width='.$width.' height='.$height.' alt="Barcode By TEC-IT" />';
	}

	// This funtion is used to send HTML emails
    public static function send_mail($to, $subject, $message)
	{
		$to      	= $to;
		$subject 	= $subject;
		$headers	= "MIME-Version: 1.0" . "\r\n";
		$headers   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers   .= 'Reply-To: info@domain.com' . "\r\n";
		$headers   .= 'From: <info@domain.com>' . "\r\n";
		$headers   .= 'X-Mailer: PHP/' . phpversion();

		$message = $message;		

		mail($to, $subject, $message, $headers);
	}

	// This function is used to log server error messages to a file on the server
	public static function Log_error_msg($code, $message, $file, $line){
		$msg = "------------------------------------------------\n";
		$msg .= 'Error occured in: ' . $file . ' at line: ' . $line . ', error code '  . "{". $code . "}" . ', error msg: ' . "{" . $message . "}" . "\n";
		//$msg .= $trace . "\n";
		error_log($msg);
	}
	
	// This function is used to log database error messages to a file on the server
	public static function Log_DBerror_msg($message, $err_code, $file, $line){
		$msg = "------------------------------------------------\n";
		$msg .= 'Error occured in: ' . $file . ' at line: ' . $line . ', error code '  . "{". $err_code . "}" . ', error msg: ' . "{" . $message . "}" . "\n";
		error_log($msg);
	}

	// This function validates an Integer
	public static function validateInt($intVariable)
	{
		if ($intVariable != '' && is_int($intVariable))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// This function validates a floating point value
	public static function validateFloat($floatVariable)
	{
		if ($floatVariable != '' && is_float($floatVariable))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// This function validates a string
	public static function validateString($stringVariable)
	{
		if ($stringVariable != '' && is_string($stringVariable))
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}

	// This function validates a boolean
	public static function validateBoolean($boolVariable)
	{
		if ($boolVariable != '' && is_bool($boolVariable))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// This function validates a variable
	public static function validateEmail($emailVariable)
	{
		if ($emailVariable != '' && filter_var($emailVariable, FILTER_VALIDATE_EMAIL))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// This function validates a username
	public static function validateUsername($usernameVariable)
	{
		if ($usernameVariable != '' && preg_match("/^[a-zA-Z0-9]*$/", $usernameVariable))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// This function validates a url
	public static function validateUrl($urlVariable)
	{
		if ($urlVariable != '' && preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $urlVariable))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// This function is used to count words in a string
	public static function wordCount($string, $word_limit = 10)
    {
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
}

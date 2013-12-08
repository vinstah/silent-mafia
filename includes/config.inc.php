<?php #-config.inc.php
/* * Configuration file does the following things:
	* - Has site settings in one location.
	* - Stores URLs and URIs as constants.
	* - Sets how errors will be handled.
	* - Establishes a connection to the database.
	
	#Save this file as config.inc.php and
		place it in your Web directory (in an
		includes subfolder).
*/


 # ******************** #
 # ***** SETTINGS ***** #
 
//Errors are emailed here
$contact_email = 'someone@some.com';

//determin if working on local server or live 
if(stristr($_SERVER['HTTP_HOST'], 'local') ||
	stristr($_SERVER['HTTP_HOST'], '127')) {
		$local = true;
}else{ $local = false;}

 // Determine location of files and the URL of the si
 // Allow for development on different servers.
 if($local){
 	
 	//always debug when local
 	$debug = true;
 	
 	//define constants
	define ('BASE_URI', 'H:/VIN/silentMVC/www/');
	define ('BASE_URL', 'http://127.0.0.1:800/');
	
	
 }else{
 	define ('BASE_URI', '/path/to/live/html/folder/');
 	define ('BASE_URL', 'http://www.example.com/');
 
 }
 
 /* 
 	* Most important setting...
 	* The $debug variable is used to set error management.
 	* To debug a specific page, do this:
	$debug = TRUE;
		require_once('./includes/config.inc.php');
 	* on that page.
 	*
 	* To debug the entire site, do
 	$debug = TRUE;
 	* before this next conditional.
 */
 
 // Assume debugging is off. 
if(!isset($debug)) {
	$debug = FALSE;
}

# **************************** #
# ***** ERROR MANAGEMENT ***** #

// Create the error handler.
function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {
 global $debug, $contact_email;
 // Build the error message.
 	$message = "An error occurred in script '$e_file' on"
 	." line $e_line: \n<br />$e_message\n<br/>";
 // Add the date and time.
 	$message .= "Date/Time: " . date('n-j-Y H:i:s') . "\n<br />";
 // Append $e_vars to the $message.
 	$message .= '<pre class="error">' . print_r ($e_vars, 1) . "</pre>\n<br />";
 if ($debug) { // Show the error.
 	 echo '<p class="error">' . $message . '</p>';
 } else { 
 // Log the error:
 //error_log ($message, 1, $contact_email, 'FROM: webmaster@gmail.com'); // Send email.
 // Only print an error message if the error isn't a notice or strict.
 if ( ($e_number != E_NOTICE) && ($e_number < 2048)) {
 echo '<p class="error">A system error occurred. We apologize for the
inconvenience.</p>';
 }

 } // End of $debug IF.

 } // End of my_error_handler() definition.

 // Use my error handler:
// set_error_handler ('my_error_handler');

 # ***** ERROR MANAGEMENT ***** #
 # **************************** #


# ************************** #
# ***** DATABASE STUFF ***** #
// Connect to the database:
//set to your own specific mysql access account
$dbc = new MySQLi('localhost', 'root', 'lampp', 'silentmafia') or die();
//trigger_error("Could not connect to the database!\n<br />MySQL Error: " .
//mysqli_connect_error());
global $dbc;

// Create a function for escaping the data.
function escape_data ($data) {
 // Need the connection:
 global $dbc;
 // Address Magic Quotes.
 if (ini_get('magic_quotes_gpc')) {
 $data = stripslashes($data);
 }
 // Trim and escape:
 return $dbc->real_escape_string(strip_tags(trim($data)));
} // End of escape_data() function.
# ***** DATABASE STUFF ***** #
# ************************** #
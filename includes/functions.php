<?php
function site_url()
{
	return sprintf
	(
	    "%s://%s/PremierLeagueMagazin",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
  	);
}
function site_url_img()
{
	return sprintf
	(
	    "%s://%s/PremierLeagueMagazin/img",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME']
  	);
}

function print_notices() 
{
	if (Messages::getMessages()):
		foreach (Messages::getMessages() as $message):
			echo '<div class="alert alert-' . $message['code'] . '">' . $message['message'] . '</div>';
		endforeach;
		Messages::clearMessages();
	endif;
}
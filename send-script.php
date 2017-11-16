<?php
mail( $mailToSend, 'Wiadomość ze strony - ' . date( "d-m-Y" ), $message, $headers ) ) {
	$return['status'] = 'ok';
}

<?php
/*
Plugin Name: RSK Form Plugin
Plugin URI: http://rsandk.com
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Ann Foley
*/

function html_form_code() {


	echo '<form class="form-horizontal" role="form" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';

	echo '<div class="form-group">';
	echo '<label for="name" class="col-sm-2 control-label">Name</label>';
	echo '<div class="col-sm-10">';
	echo '<input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="'  . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" class="form-control" id="name" placeholder="First & Last Name"/>'; 
	echo '</div>';
	echo '</div>';

	echo '<div class="form-group">';
	echo '<label for="email" class="col-sm-2 control-label">Email</label>';
	echo '<div class="col-sm-10">';
	echo '<input type="email" class="form-control" id="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" placeholder="example@domain.com"/>';
	echo '</div>';
	echo '</div>';

	echo '<div class="form-group">';
	echo '<label for="subject" class="col-sm-2 control-label">subject</label>';
	echo '<div class="col-sm-10">';
	echo '<input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />';
	echo '</p>';
	echo '<p>';

	echo '<div class="form-group">';
	echo' <label for="message" class="col-sm-2 control-label">Message</label>';
	echo '<div class="col-sm-10">';
	echo '<textarea rows="10" cols="35"  class="form-control" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>';
	echo '</div>';
	echo '</div>';

	// echo '<div class="form-group">';
	// echo '<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>';
	// echo '<div class="col-sm-10">';
	// echo '<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">';
	// echo '</div>';
	// echo '</div>';

	echo '<div class="form-group">';
	echo '<div class="col-sm-10 col-sm-offset-2">';
	echo '<input  id="submit" type="submit" name="cf-submitted" value="Send" class="btn btn-primary">';
	echo '</div>';
	echo '</div>';

	// echo '<div class="form-group">';
	// echo '<div class="col-sm-10 col-sm-offset-2">';
	//  // alert here
	// echo '</div>';
	// echo '</div>';
	echo '</form>';

}

function deliver_mail() {

	// if the submit button is clicked, send the email
	if ( isset( $_POST['cf-submitted'] ) ) {

		// sanitize form values
		$name    = sanitize_text_field( $_POST["cf-name"] );
		$email   = sanitize_email( $_POST["cf-email"] );
		$subject = sanitize_text_field( $_POST["cf-subject"] );
		$message = esc_textarea( $_POST["cf-message"] );

		// get the blog administrator's email address
		$to = get_option( 'admin_email' );

		$headers = "From: $name <$email>" . "\r\n";

		// If email has been process for sending, display a success message
		if ( wp_mail( $to, $subject, $message, $headers ) ) {
			echo '<div>';
			echo '<p>Thanks for contacting me, expect a response soon.</p>';
			echo '</div>';
		} else {
			echo 'An unexpected error occurred';
		}
	}
}

function cf_shortcode() {
	ob_start();
	deliver_mail();
	html_form_code();

	return ob_get_clean();
}

add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );

?>
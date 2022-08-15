<?php

function ailleron_disable_rest_endpoints( $access ) {
	if( ! is_user_logged_in() ) {
		  return new WP_Error( 'rest_cannot_access', __( 'Only logged users are able to call REST API.', 'disable-json-api' ), array( 'status' => rest_authorization_required_code() ) );
	}
    return $access;                                                            
  }           

add_filter( 'rest_authentication_errors', 'ailleron_disable_rest_endpoints' );
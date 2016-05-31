<?php
/**
 * WP-Members API Functions
 * 
 * This file is part of the WP-Members plugin by Chad Butler
 * You can find out more about this plugin at http://rocketgeek.com
 * Copyright (c) 2006-2016  Chad Butler
 * WP-Members(tm) is a trademark of butlerblog.com
 *
 * @package WP-Members
 * @subpackage WP-Members API Functions
 * @author Chad Butler 
 * @copyright 2006-2016
 *
 * Functions included:
 * - wpmem_redirect_to_login
 * - wpmem_is_blocked
 * - wpmem_login_url
 * - wpmem_register_url
 * - wpmem_profile_url
 * - wpmem_current_url
 * - wpmem_fields
 * - wpmem_gettext
 * - wpmem_use_custom_dialog
 * - wpmem_user_has_role
 * - wpmem_create_membership_number
 */


/**
 * Redirects a user to defined login page with return redirect.
 *
 * @since 3.0.2
 * @since 3.1.1 Moved to API.
 */
function wpmem_redirect_to_login() {
	if ( ! is_user_logged_in() && wpmem_is_blocked() ) {
		$redirect_to  = urlencode( wpmem_current_url() );
		$url = add_query_arg( 'redirect_to', $redirect_to, wpmem_login_url() );
		wp_redirect( $url );
		exit();
	}
	return;
}


/**
 * Checks if content is blocked (replaces wpmem_block()).
 *
 * @since 3.1.1
 *
 * @global object $wpmem The WP-Members object class.
 * @return bool   $block True if content is blocked, false otherwise.
 */
function wpmem_is_blocked() {
	global $wpmem;
	return $wpmem->is_blocked();
}


/**
 * Wrapper to get the login page location.
 *
 * @since 3.1.1
 *
 * @global object $wpmem
 * @return string The login page url.
 */
function wpmem_login_url() {
	global $wpmem;
	return $wpmem->user_pages['login'];
}


/**
 * Wrapper to get the register page location.
 *
 * @since 3.1.1
 *
 * @global object $wpmem
 * @return string The register page url.
 */
function wpmem_register_url() {
	global $wpmem;
	return $wpmem->user_pages['register'];
}


/**
 * Wrapper to get the profile page location.
 *
 * @since 3.1.1
 *
 * @global object $wpmem
 * @return string The profile page url.
 */
function wpmem_profile_url() {
	global $wpmem;
	return $wpmem->user_pages['profile'];
}


/**
 * Returns the current full url.
 *
 * @since 3.1.1
 * 
 * @global object  $wp
 * @param  boolean $slash Trailing slash the end of the url (default:true).
 * @return string  $url   The current page full url path.
 */
function wpmem_current_url( $slash = true ) {
	global $wp;
	$url = home_url( add_query_arg( array(), $wp->request ) );
	return ( $slash ) ? trailingslashit( $url ) : $url;
}


/**
 * Wrapper to get form fields.
 *
 * @since 3.1.1
 *
 * @global object $wpmem
 * @return array  $fields The form fields.
 */
function wpmem_fields( $form = false ) {
	global $wpmem;
	return $wpmem->fields;
}


/**
 * Wrapper to return a string from the get_text function.
 *
 * @since 3.1.1
 *
 * @global object $wpmem The WP_Members object class.
 * @param  string $str   The string to retrieve.
 * @return string $str   The localized string.
 */
function wpmem_gettext( $str ) {
	global $wpmem;
	return $wpmem->get_text( $str );
}


/**
 * Wrapper to use custom dialog.
 *
 * @since 3.1.1
 *
 * @param  array  $defaults Dialog message defaults from the wpmem_msg_dialog_arr filter.
 * @param  string $tag      The dialog tag/name.
 * @param  array  $dialogs  The dialog settings array (passed through filter).
 * @return array  $dialogs  The dialog settings array (filtered).
 */
function wpmem_use_custom_dialog( $defaults, $tag, $dialogs ) {
	$defaults['msg'] = __( $dialogs[ $tag ], 'wp-members' );
	return $defaults;
}


/**
 * Checks if user has a particular role.
 *
 * Utility function to check if a given user has a specific role. Users can
 * have multiple roles assigned, so it checks the role array rather than using
 * the incorrect method of current_user_can( 'role_name' ). The function can
 * check the role of the current user (default) or a specific user (if $user_id
 * is passed).
 *
 * @since 3.1.1
 *
 * @global object  $current_user Current user object.
 * @param  string  $role         Slug of the role being checked.
 * @param  int     $user_id      ID of the user being checked (optional).
 * @return boolean $has_role     True if user has the role, otherwise false.
 */
function wpmem_user_has_role( $role, $user_id = false ) {
	global $current_user, $wpmem;
	$has_role = false;
	if ( $user_id ) {
		$user = get_userdata( $user_id );
	}
	if ( is_user_logged_in() && ! $user_id ) {
		$user = ( isset( $current_user ) ) ? $current_user : wp_get_current_user();
	}
	return ( in_array( $role, $user->roles ) ) ? true : $has_role;
}


/**
 * Creates a membership number.
 *
 * @since 3.1.1
 *
 * @param  array  $args
 * @return string $membersip_number
 */
function wpmem_create_membership_number( $args ) {
	global $wpmem;
	return $wpmem->api->generate_membership_number( $args );
}

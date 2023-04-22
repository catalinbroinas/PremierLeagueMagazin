<?php
/**
 * Auth
 */
class Auth
{
	public static $user = null;

	public static function init() {
		self::setCurrentUser();
	}

	public static function setCurrentUser() {
		self::$user = Session::get('email');
	}

	public static function getCurrentUser() {
		return self::$user;
		
	}

	public static function isLoggedIn() {
		if ( self::getCurrentUser() ) {
			return true;
		}

		return false;
	}

	public static function setUser($user) {
		Session::set('email', $user);
	}

	public static function deleteUser($user_id) {
	}

	public static function updateUser($user_id) {
	}

	public static function currentUserHasRole($role) {
		$user = self::getCurrentUser();
		if ( $role == $user['role'] ) {
			return true;
		}

		return false;
	}
}

Auth::init();

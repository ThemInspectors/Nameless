<?php 
/*
 *	Made by Partydragen
 *  http://partydragen.com/
 *
 *  Modified by Samerton
 *  http://worldscapemc.co.uk
 *
 *  License: MIT
 */

// Settings for the Members addon

// Ensure user is logged in, and is admin
if($user->isLoggedIn()){
	if($user->canViewACP($user->data()->id)){
		if($user->isAdmLoggedIn()){
			// Can view
		} else {
			Redirect::to('/admin');
			die();
		}
	} else {
		Redirect::to('/');
		die();
	}
} else {
	Redirect::to('/');
	die();
}

// Display information first
?>
<h3>Addon: Members List</h3>
Authors: Partydragen, modified by Samerton<br />
Version: 1.1.2<br />
Description: Adds a page where users can check all registered members<br />
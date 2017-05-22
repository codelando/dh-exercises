<?php
	// Start a session (or resume the existing session). The session will live until destroyed.
	session_start();

	// Initialize session counter if it doesn't exists
	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 0;
	}

	// Initialize background color if it doesn't exists
	if (!isset($_SESSION['bgColor'])) {
		$_SESSION['bgColor'] = 'transparent';
	}
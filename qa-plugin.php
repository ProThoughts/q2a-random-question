<?php

/*
	Plugin Name: Random Question
	Plugin URI: https://github.com/bluegenel/q2a-random-question
	Plugin Description: Random Question
	Plugin Version: 1.0
	Plugin Date: 2016-12-25
	Plugin Author: Richard Hulston
	Plugin Author URI: http://www.richardhulston.com
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.4

*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_module('widget', 'q2a-random-question.php', 'q2a_random_question', 'Random Question');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
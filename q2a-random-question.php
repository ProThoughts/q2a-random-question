<?php

class q2a_random_question {

    function allow_template($template) {
        $allow = false;

        switch ($template) {
            case 'account':
            case'activity':
            case'admin':
            case'ask' :
            case'categories' :
            case'custom' :
            case'favorites':
            case'feedback' :
            case'hot' :
            case'ip' :
            case'login':
            case'message':
            case'qa' :
            case'question':
            case'questions':
            case'register' :
            case'search' :
            case'tag' :
            case'tags' :
            case'unanswered':
            case'updates' :
            case'user' :
            case'users' :
                $allow = true;
                break;
        }

        return $allow;
    }

    function allow_region($region) {
        return true;
    }
    function output_widget() {
		$random_question = qa_db_read_one_assoc( 
			qa_db_query_sub('SELECT * FROM ^posts WHERE type=$ 
			ORDER BY rand() 
			LIMIT 1', 
			'Q'), 
				true );
					echo "<h4 style='text-align: center;'>Random Question:</h4>";
					//replace yourwebsite with your website
			          echo "<h4 style='text-align: center;'><a href='http://www.yourwebsite.com/" . $random_question['postid'] . "'>" . $random_question['title'] . "</a></h4>";
	}

}


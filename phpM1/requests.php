<?php

function request_get($_PM_url, $_PM_data){
    $_PM_TEXT = file_get_contents($_PM_url."?".$_PM_data);
    return $_PM_TEXT;
}
function request_post($_PM_url, $_PM_data){
    $headers = stream_context_create
    (
        array
        (
	        'http' => array
            (
		        'method' => 'POST',
	        	'header' => 'Content-Type: application/x-www-form-urlencoded' . PHP_EOL,
		        'content' => $_PM_data,
            ),
        )
    );
    $_PM_TEXT = file_get_contents($_PM_url, false, $headers);
    return $_PM_TEXT;
}
?>
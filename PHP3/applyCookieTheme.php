<?php 
	if (isset($_COOKIE['theme']))
	{
		echo '<style type="text/css">
        body {'.
			$_COOKIE['theme'].' '.
			$_COOKIE['font'].' '.
			$_COOKIE['fontColor']. '
        }
        </style>';
	}
?>
<?php

include_once('../private/app/init.php');

include_once(VIEWS_DIECTORY.'header.php');

// var_dump($page);
include_once(VIEWS_DIECTORY.$router[$page][0]);

include_once(VIEWS_DIECTORY.'footer.php');

?>
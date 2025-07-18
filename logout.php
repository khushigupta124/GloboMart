<?php
session_start();
session_unset();
session_destroy();
header('Location: final_login_page.html');
exit();
?> 
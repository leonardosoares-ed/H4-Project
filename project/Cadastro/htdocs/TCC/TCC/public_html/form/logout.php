<?php
session_start();
session_destroy();
header('Location: http://localhost/public_html1/site_Health4Car/');
exit();
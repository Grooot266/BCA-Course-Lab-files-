<?php
session_start();
//destroying session
session_destroy();
echo "This session is completely destroyed. ";
session_commit();
?>

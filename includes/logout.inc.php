<?php





session_start();
session_unset();
session_destroy();
 // going back to fron page, display users when loging out
 header("location: ../index.php?error=none");
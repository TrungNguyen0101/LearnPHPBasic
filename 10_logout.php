<?php
session_start();
session_destroy();
header('location: ./10_sessions.php'); // 
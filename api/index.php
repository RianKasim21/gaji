<?php
var_dump(getenv('DB_HOST'), isset($_SERVER['DB_HOST']), isset($_ENV['DB_HOST']));
exit;
<?php
require 'vendor/autoload.php';

use App\AppLogger;

$logger = new AppLogger();

$logger->logInfo('This is a test info message');


$logger->logError('This is a test error message');

echo "Logging test complete. Check logs/app.log and logs/error.log for entries.\n";

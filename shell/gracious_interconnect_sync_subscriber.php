<?php

require_once(getcwd() . 'app/code/local/Gracious/Interconnect/Console/SyncSubscriberCommand.php');

$command = new Gracious_Interconnect_Console_SyncSubscriberCommand();
$command->run();
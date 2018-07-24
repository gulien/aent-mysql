#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

use TheAentMachine\AentApplication;
use TheAentMachine\AentMysql\Command\StartEventCommand;

$application = new AentApplication();

$application->add(new StartEventCommand());

$application->run();

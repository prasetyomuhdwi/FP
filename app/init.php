<?php

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Database.php';

require_once('controllers/middleware/Auth.php');
require_once('controllers/middleware/User.php');
require_once('controllers/middleware/Validate.php');

require_once __DIR__ . '/../views/templates/component/ErrorsComp.php';
require_once __DIR__ . '/../views/templates/component/PageComp.php';
require_once __DIR__ . '/../views/templates/component/SignUpIn.php';

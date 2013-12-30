<?php
global $PATH;

require_once 'controllers/ControllerFacade.php';
require_once 'utilities/Utilities.php';
require_once 'utilities/path.php';
require_once 'views/ViewFacade.php';

require_once($PATH['doctrine_path'] . '/Doctrine.php');

spl_autoload_register(array('Doctrine', 'autoload'));
spl_autoload_register(array('Doctrine', 'modelsAutoload'));

spl_autoload_register(array('Utilities', 'autoload'));

ViewFacade::getInstance()->toGui('Error');
<?php

global $PATH;

require_once './sleeping/controllers/ControllerFacade.php';
require_once './sleeping/utilities/Utilities.php';
require_once './sleeping/utilities/path.php';
require_once './sleeping/views/ViewFacade.php';

require_once($PATH['doctrine_path'] . 'Doctrine.php');

spl_autoload_register(array('Doctrine', 'autoload'));
spl_autoload_register(array('Doctrine', 'modelsAutoload'));

spl_autoload_register(array('Utilities', 'autoload'));

//$doctrine = UDoctrine::getInstance();
//setto i path di default come la struttura delle classi del progetto

//avvio l'applicazione
//getenv("VCAP_SERVICES");
ViewFacade::getInstance()->start();
<?php

//system folder
define('SYSTEM_DIR', DOCROOT.'/system');

//core folder
define('CORE_DIR', SYSTEM_DIR.'/core');

//project folder
define('PROJECT_DIR', SYSTEM_DIR.'/project');

//core libraries folder
define('CORE_LIBRARIES_DIR', CORE_DIR.'/libraries');

//project config folder
define('CONFIG_DIR', PROJECT_DIR.'/config');

//project controllers folder
define('CONTROLLERS_DIR', PROJECT_DIR.'/controllers');

//project libraries folder
define('LIBRARIES_DIR', PROJECT_DIR.'/libraries');

//project models folder
define('MODELS_DIR', PROJECT_DIR.'/models');

//project views folder 
define('VIEWS_DIR', PROJECT_DIR.'/views');

//load the libraries
require_once(CORE_LIBRARIES_DIR.'/request.class.php');
require_once(CORE_LIBRARIES_DIR.'/router.class.php');
require_once(CORE_LIBRARIES_DIR.'/config.class.php');
require_once(CORE_LIBRARIES_DIR.'/url.class.php');
require_once(CORE_LIBRARIES_DIR.'/view.class.php');
require_once(CORE_LIBRARIES_DIR.'/presenter.class.php');
require_once(CORE_LIBRARIES_DIR.'/db.class.php');
require_once(CORE_LIBRARIES_DIR.'/model.class.php');
require_once(CORE_LIBRARIES_DIR.'/paginator.class.php');


require_once(MODELS_DIR.'/moviesList.model.php');
require_once(MODELS_DIR.'/moviesList.object.php');
require_once(MODELS_DIR.'/movies.model.php');
require_once(MODELS_DIR.'/movies.object.php');
//require_once(MODELS_DIR.'/actorsList.model.php');
//require_once(MODELS_DIR.'/actorsList.object.php');
//require_once(MODELS_DIR.'/actors.model.php');
//require_once(MODELS_DIR.'/actors.object.php');

//load the config file
config::load();


// $files = scandir(MODELS_DIR);
// foreach($files as $file)
// {
//     if($file == '.' || $file == '..') continue;
//     if(pathinfo($filename, PATHINFO_EXTENSION) == '.php')
//     {
//         require_once MODELS_DIR . '/'. $file;
//     }
// }
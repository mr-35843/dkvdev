<?php
/*
    The configuration object holds critical values for the application such as the featured products and more.
    Without a valid configuration the application WILL NOT FUNCTION. There for, do not mess with it unless you know 
    what you are doing or your willing to spend the hours required for debugging.

    The configuration is read as JSON, converted to a stdobj and used throughout the application.
    Constant values for this script are declared in: localhost/constants.php and must be loaded
    before initializing this script. Without those constants, this class break.

    The default location for the config file is: localhost/data/cfg.json
    
    Good luck!
*/
class Config{
    
    public $file;

    function __construct(){
        $cfgRequest = file_get_contents(DATA_FOLDER."cfg.json");
            if(!$cfgRequest){die("Error loading: cfg.json");}
        
        $this->file = json_decode($cfgRequest);
    }
}
?>

    <?php

     class Application extends \Phalcon\Mvc\Application
     {
    
    	/**
    	 * Register the services here to make them general or register
    	 * in the ModuleDefinition to make them module-specific
    	 */
    	protected function _registerServices()
    	{
    
    	}
    
    	/**
    	 * This method registers all the modules in the application
    	 */
    	public function main()
    	{
    		$this->registerModules(array(
    			'frontend' => array(
    				'className' => 'Multiple\Frontend\Module',
    				'path' => '../apps/frontend/Module.php'
    			),
    			'backend' => array(
    				'className' => 'Multiple\Backend\Module',
    				'path' => '../apps/backend/Module.php'
    			)
    		));
    	}
    }
    
    $application = new Application();
    $application->main();




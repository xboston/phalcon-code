
    <?php

    $loader = new \Phalcon\Loader();

    $loader->registerDirs(
        array(
            __DIR__ . $config->application->controllersDir,
            __DIR__ . $config->application->pluginsDir,
            __DIR__ . $config->application->libraryDir,
            __DIR__ . $config->application->modelsDir,
        )
    )->register();


<?php
require_once('autoload.php');

// instantiate the loader
     $loader = new \Psr4AutoloaderClass;

     // register the autoloader
     $loader->register();

     // register the base directories for the namespace prefix
     $loader->addNamespace('Application', './Application');
    // $loader->addNamespace('Foo\Bar', '/path/to/packages/foo-bar/tests');

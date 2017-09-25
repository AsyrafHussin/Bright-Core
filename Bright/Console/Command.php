<?php

namespace Bright\Console;

use \Symfony\Component\Console\Application;
use \Bright\Console\ServeCommand;

/**
 * Command
 */
class Command
{
    protected $consoleApplication = null;
    
    public function __construct()
    {
        $name = "Bright Framework";
        $version = "0.1";
        $this->consoleApplication = new Application($name,$version);
    }

    public function registerCommand()
    {
        $this->consoleApplication->add(new ServeCommand());
    }

    public function run()
    {
        $this->consoleApplication->run();
    }
}    
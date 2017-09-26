<?php

namespace Bright\Console;

use \Symfony\Component\Console\Application;
use \Bright\Console\ServeCommand;

/**
 * Command
 */
class Command
{
    /**
     * Parameters for console application
     * @var object
     */
    protected $consoleApplication = null;
    
    /**
     * Class constructor
     *
     * @param object $consoleApplication Parameters for console application
     *
     * @return void
     */
    public function __construct()
    {
        $name = "Bright Framework";
        $version = "0.1";
        $this->consoleApplication = new Application($name,$version);
    }

    /**
     * Register all commands for console application
     *
     * @return void
     */
    public function registerCommand()
    {
        $this->consoleApplication->add(new ServeCommand());
    }

    /**
     * Run console application
     *
     * @return void
     */
    public function run()
    {
        $this->consoleApplication->run();
    }
}    
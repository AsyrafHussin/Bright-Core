<?php

namespace Bright\Console;

/**
 * Command
 */
class Command
{
    protected $consoleApplication = null;
    
    public function __construct()
    {
        $this->consoleApplication = new \Symfony\Component\Console\Application;
    }

    public function registerCommand()
    {
        $this->consoleApplication->add(new \Bright\Console\ServeCommand);
    }

    public function run()
    {
        $this->consoleApplication->run();
    }
}    
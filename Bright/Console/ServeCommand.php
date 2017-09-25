<?php

namespace Bright\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ServeCommand extends Command
{
    /**
     * In this method setup command, description and its parameters
     */
    protected function configure()
    {
        $this->setName('serve');
        $this->setDescription('Serve the application on the PHP development server.');
    }

    /**
     * Here all logic happens
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // default port
        $port = 8000;

        echo "\033[33m Bright Development Server started \n \033[0mListening on http://localhost:".$port."\n";
        shell_exec('php -S localhost:'.$port.' public/index.php');

        // return value is important when using CI
        // to fail the build when the command fails
        // 0 = success, other values = fail
        return 0;
    }
}
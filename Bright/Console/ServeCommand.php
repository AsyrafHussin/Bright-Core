<?php

namespace Bright\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

final class ServeCommand extends Command
{
    /**
     * In this method setup command, description and its parameters
     */
    protected function configure()
    {
        $this->setName('serve');
        $this->setDescription('Serve the application on the PHP development server.');
        $this->addOption('host',
                          null,InputOption::VALUE_REQUIRED,
                          'Development Server host listening',
                          'localhost'
                        );        
        $this->addOption('port',
                          null,InputOption::VALUE_REQUIRED,
                          'Development Server port listening',
                          8000
                        );
    }

    /**
     * Here all logic happens
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // get host
        $host = $input->getOption('host');

        // get port
        $port = $input->getOption('port');

        echo '\033[33m Bright Development Server started \n \033[0mListening on http://'.$host.':'.$port.'\n';
        shell_exec('php -S '.$host.':'.$port.' public/index.php');

        // 0 = success, other values = fail
        return 0;
    }
}
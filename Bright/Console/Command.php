<?php

namespace Bright\Console;

/**
 * Command
 */
class Command
{
    /**
     * Run php build-in webserver
     *
     * @param array  $args Parameters (--port)
     *
     * @return void
     */
    public static function serve($args = null)
    {
        // default port
        $port = 8000;
        
        if(strpos($args, '--port') !== false){
            $port = substr($args, strpos($args, "=") + 1);  
        }

        echo "\033[33m Bright Development Server started \n \033[0mListening on http://localhost:".$port."\n";
        shell_exec('php -S localhost:'.$port.' public/index.php');
    }


    /**
     * Display command not found error
     *
     * @param array  $args Command name
     *
     * @return void
     */
    public static function commandNotFound($args = null)
    {
        echo "\033[31m Command \"".$args."\" is not found \n \033[0mRun \033[32m\"php bright list\" \033[0mfor list all available command. \n";
    }    

    /**
     * Display all available command
     *
     * @param array  $args Command name
     *
     * @return void
     */
    public static function listCommand($args = null)
    {
        echo "\033[33mUsage:\033[0m \n php bright [command] [options] \n\n";
        echo "\033[33mAvailable commands:\033[0m \n";
        echo "\033[32mlist\033[0m     Lists commands\n";
        echo "\033[32mserve\033[0m    Serve the application on the PHP development server\n\n";
        echo "\033[33mOptions:\033[0m \n";
        echo "\033[36mserve\033[0m\n";
        echo "\033[32m --port[=PORT]\033[0m  The port to serve the application on. \033[33m[default: 8000]\033[0m\n";
    }
}    
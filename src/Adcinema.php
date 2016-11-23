<?php
/**
 * Helper para hacer stream
 * 
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @author Ing. Eduardo Ortiz
 * 
 */
namespace Adteam\Core\Thirdpart\Adcinema;

use Zend\Console\Adapter\AdapterInterface;
use Zend\Console\ColorInterface;
use ZF\Console\Route;

class Adcinema
{
    public function __invoke(Route $route, AdapterInterface $console)
    {
        $name = $route->getMatchedParam('name');
        $console->write("Hello, ");
        $console->write("$name", ColorInterface::LIGHT_GREEN);
        $console->writeLine("!");
    }           
}

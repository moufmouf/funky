<?php


namespace TheCodingMachine\Funky\Fixtures;


use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * @Factory(nameFromMethodName=true)
     */
    public static function testFactory(LoggerInterface $logger, ContainerInterface $container, int $foo, $bar) : string
    {
        return get_class($logger).$foo.$bar;
    }
}
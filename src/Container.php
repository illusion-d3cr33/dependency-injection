<?php

namespace Illusion\DependencyInjection;

use Exception;
use Illusion\DependencyInjection\Contracts\ContainerInterface;

final class Container implements ContainerInterface
{
    /**
     * store service filter
     * @var array
     */
    private array $map;

    /**
     * set service
     * @param string $id
     * @param object $service
     */
    public function set(string $id, object $service)
    {
        $this->map[$id] = $service;
    }

    /**
     * get service
     * @param string $id
     */
    public function get(string $id)
    {
        if ( key_exists($id, $this->map) ) {
            return $this->map[$id];
        }

        return throw new Exception('service not found');
    }

    /**
     * check specific service can be initialized
     * @param string $id
     */
    public function initialize(string $id)
    {
        return key_exists($id, $this->map);
    }
}
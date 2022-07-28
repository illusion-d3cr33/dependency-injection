<?php

namespace Illusion\DependencyInjection\Contracts;

interface ContainerInterface
{
    /**
     * set service
     * @param string $id
     * @param object $service
     */
    public function set(string $id, object $service);

    /**
     * get service
     * @param string $id
     */
    public function get(string $id);

    /**
     * check specific service can be initialized
     * @param string $id
     */
    public function initialize(string $id);
}
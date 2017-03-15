<?php

/**
 * Copyright (c) 2010-2017 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Interfaces\Bag;

/**
 * Bag interface to describe a bag container public method.
 * Should be implemented on every container.
 */
interface BagInterface
{
    /**
     * If bag container have given key.
     *
     * @param  string|int
     * @return bool
     */
    public function has($key);

    /**
     * Get bag container value for given key.
     * If key not exists, must throw an BagKeyNotFoundException
     *
     * @param  string|int $key
     * @return mixed
     * @throws Exception\BagKeyNotFoundException
     */
    public function get($key);

    /**
     * Set value for a given key.
     * Must return current bag container instance.
     *
     * @param  string|int $key
     * @param  mixed $value
     * @return static
     */
    public function set($key, $value);

    /**
     * Remove key from bag container.
     * If key not exists, must throw an BagKeyNotFoundException
     *
     * @param  string|key $key
     * @return static
     * @throws Exception\BagKeyNotFoundException
     */
    public function remove($key);
}
<?php

/**
 * This file is part of the FOSElasticaBundle project.
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Configuration;

class TypeConfig
{
    /**
     * @var array
     */
    private $config;

    /**
     * @var array
     */
    private $mapping;

    /**
     * @var string
     */
    private $name;

    public function __construct($name, array $mapping, array $config = array())
    {
        $this->config = $config;
        $this->mapping = $mapping;
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    public function getModel()
    {
        return isset($this->config['persistence']['model']) ?
            $this->config['persistence']['model'] :
            null;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

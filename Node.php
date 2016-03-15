<?php

    namespace tree;

    require_once 'NodeInterface.php';

    class Node implements NodeInterface
    {

        private $value;

        public function __construct($value)
        {
            $this->value = $value;
        }

        final public function getValue()
        {
            return $this->value;
        }
    }

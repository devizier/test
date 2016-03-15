<?php

    namespace tree;

    interface NodeInterface
    {
        public function __construct($value);

        public function getValue();
    }
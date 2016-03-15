<?php

    namespace tree;

    require_once 'TreeInterface.php';

    class Tree extends Node implements TreeInterface
    {
        private $childs;

        public function addChild(NodeInterface $child)
        {
            $this->childs[] = $child;
        }

        public function getChildren()
        {
            return $childs->childs;
        }
    }

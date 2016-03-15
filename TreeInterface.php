<?php

    namespace tree;

    interface TreeInterface
    {
        public function addChild(NodeInterface $child);

        public function getChildren();
    }

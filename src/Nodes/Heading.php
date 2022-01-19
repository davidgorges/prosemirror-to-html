<?php

namespace ProseMirrorToHtml\Nodes;

class Heading extends Node
{
    protected $nodeType = 'heading';

    public function tag()
    {
        return [
            [
                'tag' => "h{$this->node->attrs->level}",
                'attrs' => ['class' => 'text-xl font-medium'],
            ],
        ];
    }
}

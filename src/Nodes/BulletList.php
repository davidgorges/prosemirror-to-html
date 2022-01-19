<?php

namespace ProseMirrorToHtml\Nodes;

class BulletList extends Node
{
    protected $nodeType = 'bulletList';
    protected $tagName = 'ul';

    public function tag()
    {
        return [
            [
                'tag' => "ul",
                'attrs' => ['class' => 'list-disc list-inside pl-4']
            ],
        ];
    }
}

<?php
/**
 *
 *
 *
 *
 */

namespace p2ee\partletsMagentoBridge\Partlet;

use p2ee\BaseRequirements\Requirements\RequestDataRequirement;
use p2ee\partletsMagentoBridge\SilexPartlet;

class EmptyContainer extends SilexPartlet
{

    /**
     * @var string
     */
    protected $content;

    public function collect()
    {
        yield [
            new RequestDataRequirement('content')
        ];
    }


    public function getTemplate()
    {
        return 'empty.twig';
    }


    public function getData()
    {
        return [
            'content' => $this->content
        ];
    }
} 
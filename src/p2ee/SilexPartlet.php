<?php
namespace p2ee\partletsMagentoBridge;

use p2ee\Partlets\Partlet;
use p2ee\partletsMagentoBridge\Partlet\EmptyContainer;

abstract class SilexPartlet extends Partlet
{

    public function getContainerPartlet()
    {
        return EmptyContainer::class;
    }

    public function getBaseNamespace()
    {
        return __NAMESPACE__ . '\Components';
    }

    public function getRootFolder()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'Components';
    }

    public function getTemplate()
    {
        return $this->getFilePart('twig');
    }

    public function getStyle()
    {
        return $this->getFilePart('css');
    }
}
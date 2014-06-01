<?php

return array(
    Symfony\Component\HttpFoundation\Request::class => [
        'provider' => [
            'class' => \p2ee\partletsMagentoBridge\InjectorProvider\CurrentRequestProvider::class
        ]
    ],
    \p2ee\Preparables\Preparer::class               => [
        'provider' => [
            'class' => \p2ee\partletsMagentoBridge\InjectorProvider\PreparerProvider::class
        ]
    ]
);
<?php

require __DIR__ . '/src/p2ee/partletsMagentoBridge/Block/Example.php';

$app = new Silex\Application();

$app->register(new \Silex\Provider\TwigServiceProvider(), array(
'twig.path' => __DIR__.'/src/res/twig',
));

$app->register(new \p2ee\partletsMagentoBridge\SilexProvider\InjektorProvider(), [
'rg.injektor.config' => __DIR__.'/src/res/config/dic_config.php',
'rg.injector.factories' => __DIR__.'/generated/'
]);

$app->register(new \p2ee\partletsMagentoBridge\SilexProvider\PartletServiceProvider(), [
'partlets.baseNamespace' => '\p2ee\partletsMagentoBridge\Partlet',
]);


$app->error(function (\Exception $e, $code) {
        switch ($code) {
            case 404:
                $message = 'The requested page could not be found.';
                break;
            default:
                $message = 'We are sorry, but something went terribly wrong. :
                <pre>
                '.$e.'
                </pre>';
        }

        return new \Symfony\Component\HttpFoundation\Response($message);
    });

Mage::register('silex_partlets', $app);


<?php namespace adrianfalleiro\TwigDebugPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Twig_SimpleFunction;

/**
 * Class TwigDebugPlugin
 * Provides additional Twig functions for debugging
 *
 * @package adrianfalleiro\TwigDebugPlugin
 * @author Adrian Falleiro
 */
class TwigDebugPlugin extends Plugin
{

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array An array of filters
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('dd', function ($object) {
                dump($object);
                die();
            }),
            new Twig_SimpleFunction('dump', function ($object) {
                dump($object); 
            }),
        ];
    }

}

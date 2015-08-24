<?php

namespace Papi\Digster;

class Extensions extends \Twig_Extension {

    /**
     * Get functions.
     *
     * @return array
     */

    public function getFunctions() {
        $callables = [
            'get_field'  => 'papi_get_field',
            'get_option' => 'papi_get_option'
        ];

        foreach ( $callables as $fn => $callable ) {
            $callables[$fn] = new \Twig_SimpleFunction( $fn, $callable );
        }

        return $callables;
    }

    /**
     * Get the extension name.
     *
     * @return string
     */

    public function getName() {
        return 'papi-digster-extensions';
    }

}

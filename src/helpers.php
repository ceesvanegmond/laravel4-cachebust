<?php

if ( ! function_exists('cachebust'))
{
    /**
     * cb
     * 
     * @param mixed $args Description.
     *
     * @access public
     * @return mixed Value.
     */
    function cachebust($resource, $alt = null, $attributes = array())
    {
        return App::make('cachebust')->cacheBust($resource);
    }
}

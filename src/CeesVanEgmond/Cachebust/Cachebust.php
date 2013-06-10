<?php namespace CeesVanEgmond\Cachebust;

use Illuminate\Support\Facades\File;

/**
* Cachebust
*
* @uses     
*
* @category Category
* @package  Package
* @author   Cees van Egmond
*/
class Cachebust {

    /**
     * cacheBust
     * 
     * @param mixed $file Description.
     *
     * @access public
     * @return mixed Value.
     */
	public function cacheBust($file)
    {
    	$fullpath = public_path() . '/' . ltrim($file, '/');

        if (  ! \File::exists( $fullpath )) {
        	return $file;
        }

		$pathinfo = pathinfo($fullpath);
    	$versioned = '.'.\File::lastModified( $fullpath ).'.';

    	$path = str_replace( public_path(), '', $pathinfo['dirname'] ) .'/';
    	$path .= str_replace('.', $versioned, $pathinfo['basename'] );

    	return $path;
    }
}
<?php namespace App\Cart;


use Illuminate\Support\Facades\Facade;

/**
 * Description of CartFacade
 *
 * @author woody
 */
class CartFacade extends Facade {
    
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}

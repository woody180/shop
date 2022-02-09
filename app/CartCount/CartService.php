<?php

namespace App\CartCount;

use App\Models\Cart;
use App\Models\User;

class CartService 
{
    public function greet()
    {
        $user = User::first();
        $qnt = 0;
        foreach ($user->cart()->get() as $val) $qnt += $val->quantity;
        return $qnt;
    }
}

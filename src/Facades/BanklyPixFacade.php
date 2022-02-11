<?php

namespace WeDevBr\Bankly\Facades;

use Illuminate\Support\Facades\Facade;

class BanklyPixFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bankly_pix';
    }
}
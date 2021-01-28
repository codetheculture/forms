<?php

namespace CodeTheCulture\Forms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodeTheCulture\Forms\Forms
 */
class FormsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'forms';
    }
}

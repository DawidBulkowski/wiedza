<?php
namespace App\Validators;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

abstract class ValidatorBase
{
    protected static $obj = null;
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public abstract function validator(array $data);
    

    /**
     * metoda Metoda odpalająca walidację
     *
     * @param  mixed $data
     * @return void
     */
    public static function validate(array $data) {
        
        $obj = self::getInstance();

        return $obj->validator($data);
    }
    
    
    /**
     * singleton
     *
     * @return void
     */
    final public static function getInstance()
    {
        static $instances = array();

        $calledClass = get_called_class();

        if (!isset($instances[$calledClass])) {
            $instances[$calledClass] = new $calledClass();
        }

        return $instances[$calledClass];
    }
}

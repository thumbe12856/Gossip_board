<?php namespace Lib;

use Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Http\Exception\HttpResponseException;

class Utils {

    public function __construct() {
    }

    public static function guardValidateFail(callable $guard_function) {
        try {
            return call_user_func($guard_function);
        } catch(ValidationException $e) {
            throw new HttpResponseException(response()
                ->json(['result' => 'validation fail',
                       'message' => $e->errors()->getMessages()], 422));
        }
    }

    /**
     *
     * @param $data [array] Data to validate
     * @param $rule [array] Rule for validator
     * @exception ValidationException Throw when data not valid
     */
    public static function validate(array $data, array $rule) {
        $validator = Validator::make($data, $rule);
        if($validator->fails()) {
            throw new ValidationException($validator->messages());
        }
    }
}

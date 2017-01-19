<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Exceptions\BeeperException;
use Config;
use Validator;

abstract class Request extends FormRequest
{

    public function __construct()
    {
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function response(array $errors)
    {
        $errorCode = config('custom_code.params_invalid.code');
        throw new BeeperException(head($errors)[0], $errorCode, null, 'warning');
    }
}

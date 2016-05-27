<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ProjetoValidator extends LaravelValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'descricao' => 'required|min:5'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'descricao' => 'required|min:5'
        ],
   ];

}
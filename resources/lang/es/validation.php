<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida.',
    'after'                => 'El :attribute debe ser una fecha posterior a :date.',
    'alpha'                => 'El :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El :attribute sólo puede contener letras, números y guiones.',
    'alpha_num'            => 'El :attribute sólo puede contener letras y números.',
    'array'                => 'El :attribute debe ser una matriz.',
    'before'               => 'El :attribute debe ser una fecha antes de: date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute  debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute  debe estar entre :min y :max characters.',
        'array'   => 'El :attribute debe estar entre :min and :max items.',
    ],
    'boolean'              => 'El :attribute field must be true or false.',
    'confirmed'            => 'El :attribute no coinciden.',
    'date'                 => 'El :attribute is not a valid date.',
    'date_format'          => 'El :attribute does not match the format :format.',
    'different'            => 'El :attribute and :other must be different.',
    'digits'               => 'El :attribute must be :digits digits.',
    'digits_between'       => 'El :attribute must be between :min and :max digits.',
    'email'                => 'El :attribute must be a valid email address.',
    'exists'               => 'El selected :attribute is invalid.',
    'filled'               => 'El :attribute Se requiere campo.',
    'image'                => 'El :attribute must be an image.',
    'in'                   => 'El selected :attribute is invalid.',
    'integer'              => 'El :attribute must be an integer.',
    'ip'                   => 'El :attribute must be a valid IP address.',
    'json'                 => 'El :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'El :attribute may not be greater than :max.',
        'file'    => 'El :attribute may not be greater than :max kilobytes.',
        'string'  => 'El :attribute may not be greater than :max characters.',
        'array'   => 'El :attribute may not have more than :max items.',
    ],
    'mimes'                => 'El :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'El :attribute must be at least :min.',
        'file'    => 'El :attribute must be at least :min kilobytes.',
        'string'  => 'El :attribute must be at least :min characters.',
        'array'   => 'El :attribute must have at least :min items.',
    ],
    'not_in'               => 'El selected :attribute is invalid.',
    'numeric'              => 'El :attribute must be a number.',
    'regex'                => 'El :attribute format is invalid.',
    'required'             => 'El :attribute es obligatorio.',
    'required_if'          => 'El :attribute field is required when :other is :value.',
    'required_unless'      => 'El :attribute field is required unless :other is in :values.',
    'required_with'        => 'El :attribute field is required when :values is present.',
    'required_with_all'    => 'El :attribute field is required when :values is present.',
    'required_without'     => 'El :attribute field is required when :values is not present.',
    'required_without_all' => 'El :attribute field is required when none of :values are present.',
    'same'                 => 'El :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'El :attribute must be :size.',
        'file'    => 'El :attribute must be :size kilobytes.',
        'string'  => 'El :attribute must be :size characters.',
        'array'   => 'El :attribute must contain :size items.',
    ],
    'string'               => 'El :attribute must be a string.',
    'timezone'             => 'El :attribute must be a valid zone.',
    'unique'               => 'El :attribute has already been taken.',
    'url'                  => 'El :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

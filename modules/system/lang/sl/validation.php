<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => "Atribut :attribute mora biti sprejet.",
    "active_url"       => "Atribut :attribute ni veljaven URL.",
    "after"            => "Atribut :attribute mora biti datum kasnejši od :date.",
    "alpha"            => "Atribut :attribute lahko vsebuje samo črke.",
    "alpha_dash"       => "Atribut :attribute lahko vsebuje samo črke, številke in pomišljaje.",
    "alpha_num"        => "Atribut :attribute lahko vsebuje samo črke in številke.",
    "array"            => "Atribut :attribute mora biti polje.",
    "before"           => "Atribut :attribute mora biti datum pred :date.",
    "between"          => [
        "numeric" => "Atribut :attribute mora biti med :min - :max.",
        "file"    => "Atribut :attribute mora biti med :min - :max kilobajti.",
        "string"  => "Atribut :attribute mora biti med :min - :max znaki.",
        "array"   => "Atribut :attribute mora imeti število elementov med :min - :max.",
    ],
    "confirmed"        => "Potrditev atributa :attribute se ne ujema.",
    "date"             => "Atribut :attribute ni veljaven datum.",
    "date_format"      => "Atribut :attribute se ne ujema z obliko :format.",
    "different"        => "Atributa :attribute in :other morata biti različna.",
    "digits"           => "Atribut :attribute mora biti :digits mestna številka.",
    "digits_between"   => "Atribut :attribute mora biti med :min in :max mestna številka.",
    "email"            => "Oblika atributa :attribute ni veljavna.",
    "exists"           => "Izbrani atribut :attribute ni veljaven.",
    "image"            => "Atribut :attribute mora biti slika.",
    "in"               => "Izbrani atribut :attribute ni veljaven.",
    "integer"          => "Atribut :attribute mora biti celo število.",
    "ip"               => "Atribut :attribute mora biti veljaven IP naslov.",
    "max"              => [
        "numeric" => "Atribut :attribute ne sme biti večji od :max.",
        "file"    => "Atribut :attribute ne sme biti večji od :max kilobajtov.",
        "string"  => "Atribut :attribute ne sme biti daljši od :max znakov.",
        "array"   => "Atribut :attribute ne sme imeti več kot :max znakov.",
    ],
    "mimes"            => "Atribut :attribute mora biti datoteka vrste: :values.",
    "extensions"       => "Atribut :attribute mora imeti končnico: :values.",
    "min"              => [
        "numeric" => "Atribut :attribute mora biti vsaj :min.",
        "file"    => "Atribut :attribute mora biti vsaj :min kilobajtov.",
        "string"  => "Atribut :attribute mora biti vsaj :min znakov.",
        "array"   => "Atribut :attribute mora imeti vsaj :min elementov.",
    ],
    "not_in"           => "Izbrani atribut :attribute ni veljaven.",
    "numeric"          => "Atribut :attribute mora biti številka.",
    "regex"            => "Oblika atributa :attribute ni veljavna.",
    "required"         => "Polje :attribute je zahtevano.",
    "required_if"      => "Polje :attribute je zahtevano, ko je :other :value.",
    "required_with"    => "Polje :attribute je zahtevano, ko je prisotno polje :values.",
    "required_without" => "Polje :attribute je zahtevano, ko polje :values ni prisotno.",
    "same"             => "Atributa :attribute in :other se morata ujemati.",
    "size"             => [
        "numeric" => "Atribut :attribute mora biti :size.",
        "file"    => "Atribut :attribute mora biti :size kilobajtov.",
        "string"  => "Atribut :attribute mora biti :size znakov.",
        "array"   => "Atribut :attribute mora vsebovati število elementov :size.",
    ],
    "unique"           => "Atribut :attribute je že zaseden.",
    "url"              => "Oblika atributa :attribute ni veljavna.",

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

    'custom' => [],

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

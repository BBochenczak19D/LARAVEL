<?php

    declare(strict_types=1);

    namespace App\Http\Controllers\User;

    use App\Http\Controllers\Controller;

    class ShowAddress extends Controller
    {
        public function __invoke(int $id)
        {

            $address = [
                'postCode' => "41-231",
                'street' => "Legnicka",
                'city' => "Zabrze",
                'woj' => "Slask"
            ];

            return view('user.address',[
                'address' => $address
            ]);
        }
    };



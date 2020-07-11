<?php

namespace Coingecko;

class Coingecko
{
    public function __construct()
    {
    }

    public function get_response($id)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.coingecko.com/api/v3/coins/" . $id);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
       return $server_output;
    }
}


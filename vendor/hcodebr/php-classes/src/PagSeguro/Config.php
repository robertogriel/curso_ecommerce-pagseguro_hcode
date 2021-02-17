<?php

namespace Hcode\PagSeguro;

class Config {

    const SANDBOX = true;

    const SANDBOX_EMAIL = "rgrielfilho@gmail.com";
    const PRODUCTION_EMAIL = "rgrielfilho@gmail.com";
    const SANDBOX_TOKEN = "F914055E2F4A4CCA83736C7328D11E6B";
    const PRODUCTION_TOKEN = "AGORA NÃO";

    const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

    public static function getAuthentication():array
    {

        if (Config::SANDBOX === true)
        {
            return [
                "email"=>Config::SANDBOX_EMAIL,
                "token"=>Config::SANDBOX_TOKEN
            ];
        } else {
            return [
                "email"=>Config::PRODUCTION_EMAIL,
                "token"=>Config::PRODUCTION_TOKEN
            ];
        }

    }

    public static function getUrlSessions():string
    {
        return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
    }
}
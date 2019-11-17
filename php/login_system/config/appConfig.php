<?php

    $GLOBALS[Constanst::GONFIG_ARRAY_NAME] = array(
        Constanst::APP_ENV => getenv(Constanst::APP_ENV),
        Constanst::DATABASE_ARRAY_NAME => array(
            Constanst::DATABASE_HOST        => getenv(Constanst::DATABASE_HOST),
            Constanst::DATABASE_DRIVER      => getenv(Constanst::DATABASE_DRIVER),
            Constanst::DATABASE_USERNAME    => getenv(Constanst::DATABASE_USERNAME),
            Constanst::DATABASE_PASSWORD    => getenv(Constanst::DATABASE_PASSWORD),
            Constanst::DATABASE_NAME        => getenv(Constanst::DATABASE_NAME)
        ),
        Constanst::REMEBER => array(
            "cookie_name"   => Constanst::COOKIE_NAME,
            "cookie_expiry" => Constanst::COOKIE_EXPIRY
        ),
        "session" => array(
            "session_name" => Constanst::SESSION_NAME
        ),
        "logger" => array(
            "engine" => new BrowserConsoleLogger()
        )
    );

?>
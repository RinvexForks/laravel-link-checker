<?php

return [

    /**
     * The base url of your app. Leave this empty to use
     * the url configured in config/app.php.
     */
    'url' => '',

    /**
     * The profile determining which links need to be checked.
     */
    'defaultProfile' => Spatie\LinkChecker\CheckAllLinks::class,

    /**
     * The reporter determining what needs to be done when the
     * the crawler has visited a link.
     */
    'defaultReporter' => Spatie\LinkChecker\Reporters\LogBrokenLinks::class,

    /**
     * Configuration regarding the used reporters.
     */
    'reporters' => [

        'mail' => [
            
            /**
             * The from address to be used by the mail reporter.
             */
            'fromAddress' => '',
            
            /**
             * The to address to be used by the mail reporter.
             */
            'toAddress' => '',
        ]
    ]
];

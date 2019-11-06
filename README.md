# DiscordLog plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require ahmyi/cakephp_discord_log
```


## CakePHP config/app.php

```
    'Log' => [
        'debug' => [
            'className' => 'Ahmyi\DiscordLog\Log\Engine\DiscordLog',
            'path' => LOGS,
            'file' => 'debug',
            'url' => env('LOG_DEBUG_URL', null),
            'scopes' => false,
            'webhook' => WEBHOOK_URL
        ],
        'error' => [
            'className' => 'Ahmyi\DiscordLog\Log\Engine\DiscordLog',
            'path' => LOGS,
            'file' => 'error',
            'url' => env('LOG_ERROR_URL', null),
            'scopes' => false,
            'levels' => [ 'error', 'critical', 'alert', 'emergency'],
            'webhook' => WEBHOOK_URL
        ]
    ],
```

## Discord webhook

You can refer on how to create a webhook [here](https://support.discordapp.com/hc/en-us/articles/228383668-Intro-to-Webhooks).


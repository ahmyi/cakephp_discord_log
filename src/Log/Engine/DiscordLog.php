<?php

namespace Ahmyi\DiscordLog\Engine;

use Cake\Log\Engine\BaseLog;
use Cake\Http\Client;

class DiscordLog extends BaseLog
{
	protected $_webhook = "";

	public function __construct($options = [])
    {

    	if(!isset($options['webhook'])) {
    		throw new \Exception("Webhook missing parameter");
    	} 
    	$this->_webhook = $options['webhook'];
        parent::__construct($options);

    }

    public function log($level, $message, array $context = [])
    {
        // Write to the database.

		$http = new Client();

		$http->post($this->_webhook,json_encode([
			'content' => $message,
			'username' => $level
		]),
  		['type' => 'json']);

    }
}
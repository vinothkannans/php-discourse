<?php

namespace Vinkas\Discourse;

use Vinkas\Discourse\Traits\API as TraitAPI;
use Vinkas\Discourse\Traits\Topic;

class API
{

  use TraitAPI, Topic;

  function __construct($domain, $ssl, $api_key, $api_username) {
    $this->setUrl($domain, $ssl);
    $this->setQueryParams($api_key, $api_username);
  }

}

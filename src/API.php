<?php

namespace Vinkas\Discourse;

use Vinkas\Discourse\Traits\API as TraitAPI;

class API
{

  use TraitAPI;

  function __construct($domain, $ssl, $api_key, $api_username) {
    $this->setUrl($domain, $ssl);
    $this->setQueryParams($api_key, $api_username);
  }

}

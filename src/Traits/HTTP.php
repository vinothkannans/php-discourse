<?php

namespace Vinkas\Discourse\Traits;

/**
*
*/
trait HTTP
{

  private $url;

  protected function getUrl() {
    return $this->url;
  }

  protected function setUrl($domain, $ssl) {
    $protocol = $ssl ? 'https' : 'http';
    $this->url = sprintf('%s://%s', $protocol, $domain);
    $this->client = new \GuzzleHttp\Client(['base_uri' => $this->url]);
  }

  private $client;
  protected function getClient() {
    return $this->client;
  }

}

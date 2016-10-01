<?php

namespace Vinkas\Discourse\Traits;

trait API
{

  use HTTP;

  protected function request($path, $queryParams = null, $method = "GET") {
    if ($queryParams == null) {
      $queryParams = array();
    }
    $queryParams = array_merge($this->getQueryParams(), $queryParams);
    $params = ['query' => $queryParams];
    $res = $this->getClient()->request($method, $path, $params);
    if ($res->getStatusCode() == 200) {
      $body = $res->getBody();
      $json = json_decode($body);
      return $json;
    }
    return null;
  }

  protected $queryParams;

  protected function getQueryParams() {
    return $this->queryParams;
  }

  protected function setQueryParams($api_key, $api_username) {
    $this->queryParams = array();
    $this->queryParams['api_key'] = $api_key;
    $this->queryParams['api_username'] = $api_username;
  }

}

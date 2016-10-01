<?php

namespace Vinkas\Discourse\Traits;

trait Topic
{

  public function getLatestTopics() {
    return $this->request('/latest.json');
  }

  public function getTopTopics() {
    return $this->request('/top.json');
  }

  public function createTopic($title, $raw, $category) {
    $params = ['title' => $title, 'raw' => $raw, 'category' => $category];
    return $this->request('/posts', $params, 'POST');
  }

}

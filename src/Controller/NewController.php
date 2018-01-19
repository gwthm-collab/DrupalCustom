<?php
namespace Drupal\this_is_new\Controller;
class NewController {
  public function newMethod() {
    return array(
     // '#type' => 'markup',
      '#markup' => 'Created My First New Module in drupal 8',
    );
  }
}
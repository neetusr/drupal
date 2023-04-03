<?php

namespace Drupal\hello\Controller;

class HelloController {
  public function content() {
    $output = array();
    $output['hello'] = array(
      //Drupal's t() function is used to translate phrases.
      '#markup' => 'Hello World!', //Change this line to
      //'#markup' => t('Hello World!'),
      //which will allow the text to be translated.
    );
    return $output;
  } 
} 
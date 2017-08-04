<?php

namespace Drupal\login_redirect\Controller;

use Drupal\Core\Controller\ControllerBase;


class login_redirectController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function build_body() {

    header("Location: http://practice.dev/node/9");
   return;
    }

}

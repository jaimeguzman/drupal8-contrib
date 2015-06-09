<?php

/**
 * @file
 * Contains \Drupal\Core\Session\AnonymousUserSession.
 */

namespace Drupal\Core\Session;

/**
 * An account implementation representing an anonymous user.
 * @deprecated in Drupal 8.0.x, will be removed before Drupal 8.0.0
 */
class AnonymousUserSession extends UserSession {

  /**
   * Constructs a new anonymous user session.
   *
   * Intentionally don't allow parameters to be passed in like UserSession.
   */
  public function __construct() {
  }

}

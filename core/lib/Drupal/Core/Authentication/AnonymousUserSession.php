<?php
/**
 * Created by PhpStorm.
 * User: jaimeguzman
 * Date: 09-06-15
 * Time: 10:56
 */

namespace Drupal\Core\Authentication;

/**
 * An account implementation representing an anonymous user.
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

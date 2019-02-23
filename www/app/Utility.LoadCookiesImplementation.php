<?php
namespace PlayerConnect\Utility;

/**
 * Cookies Implementation — Implementation of AbstractCookiesMarshaller
 * Functions to allow the reading and writing of Cookies via a JSON.
 */
class Cookies extends AbstractCookiesMarshaller {

  /**
   * Gets the specified COOKIE variable by cookie name.
   * Returns NULL when the cookie doesn't exist.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  public static function Get(string $name) {
    return isset($_SESSION[$name])? $_SESSION[$name]: NULL;
  }

  /**
   * Sets a new COOKIE variable by cookie name and value.
   *
   * @param string|int $key (name) of the variable.
   * @param string|int $value of the variable.
   * @return NULL when successful.
   **/
  public static function Set(string $key, $value) {
    $_SESSION[$key] = $value;
    return NULL;
  }
}

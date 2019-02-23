<?php
namespace PlayerConnect\Utility;

/**
 * Abstract Cookies Marshaller — Outlines the static class' functions
 * Functions to allow the reading and writing of Cookies via a JSON.
 */
abstract class AbstractCookiesMarshaller {

  /**
   * Gets the specified COOKIE variable by cookie name.
   * Returns NULL when the cookie doesn't exist.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  abstract public static function Get(string $name);

  /**
   * Sets a new COOKIE variable by cookie name and value.
   *
   * @param string|int $key (name) of the variable.
   * @param string|int $value of the variable.
   * @return NULL when successful.
   **/
  abstract public static function Set(string $key, $value);
}

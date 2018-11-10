<?php
namespace Karting\Utility;

use Karting\Utility\Cookies;

/**
 * Response Implementation — Implementation of AbstractResponseMarshaller
 * Allows the writing of COOKIE values as validated types.
 */
class Response extends AbstractResponseMarshaller {

  /**
   * Sets the specified COOKIE variable validated as a STRING type.
   *
   * @param string|int $name of the variable.
   * @param string $value of the variable.
   * @return NULL when successful.
   **/
  public static function COOKIE_String(string $name, string $value) {
    Cookies::Set($name, (string)$value);
    return NULL;
  }

  /**
   * Sets the specified COOKIE variable validated as a INT type.
   *
   * @param string|int $name of the variable.
   * @param int $value of the variable.
   * @return NULL when successful.
   **/
  public static function COOKIE_Number(string $name, int $value) {
    Cookies::Set($name, (int)$value);
    return NULL;
  }

  /**
   * Sets the specified COOKIE variable validated as a FLOAT type.
   *
   * @param string|int $name of the variable.
   * @param float $value of the variable.
   * @return NULL when successful.
   **/
  public static function COOKIE_Float(string $name, float $value) {
    Cookies::Set($name, (float)$value);
    return NULL;
  }

  /**
   * Sets the specified COOKIE variable validated as a BOOLEAN type.
   *
   * @param string|int $name of the variable.
   * @param boolean $value of the variable.
   * @return NULL when successful.
   **/
  public static function COOKIE_Boolean(string $name, boolean $value) {
    Cookies::Set($name, (boolean)$value);
    return NULL;
  }

  /**
   * Sets the specified COOKIE variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @param string $value of the variable.
   * @return NULL when successful.
   **/
  public static function COOKIE_IP4(string $name, string $value) {
    Cookies::Set($name, (string)$value);
    return NULL;
  }

  /**
   * Sets the specified COOKIE variable encoded as Base64 of any type.
   *
   * @param string|int $name of the variable.
   * @param string $value of the variable.
   * @return NULL when successful.
   **/
  public static function COOKIE_Base64(string $name, string $value) {
    Cookies::Set($name, (string)$value);
    return NULL;
  }
}

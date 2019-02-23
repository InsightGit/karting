<?php
namespace PlayerConnect\Utility;

/**
 * Abstract Response Marshaller — Outlines the static class' functions
 * Allows the writing of COOKIE values as validated types.
 */
abstract class AbstractResponseMarshaller {

  /**
   * Sets the specified COOKIE variable validated as a STRING type.
   *
   * @param string|int $name of the variable.
   * @param string $value of the variable.
   * @return NULL when successful.
   **/
  abstract public static function COOKIE_String(string $name, string $value);

  /**
   * Sets the specified COOKIE variable validated as a INT type.
   *
   * @param string|int $name of the variable.
   * @param int $value of the variable.
   * @return NULL when successful.
   **/
  abstract public static function COOKIE_Number(string $name, int $value);

  /**
   * Sets the specified COOKIE variable validated as a FLOAT type.
   *
   * @param string|int $name of the variable.
   * @param float $value of the variable.
   * @return NULL when successful.
   **/
  abstract public static function COOKIE_Float(string $name, float $value);

  /**
   * Sets the specified COOKIE variable validated as a BOOLEAN type.
   *
   * @param string|int $name of the variable.
   * @param boolean $value of the variable.
   * @return NULL when successful.
   **/
  abstract public static function COOKIE_Boolean(string $name, boolean $value);

  /**
   * Sets the specified COOKIE variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @param string $value of the variable.
   * @return NULL when successful.
   **/
  abstract public static function COOKIE_IP4(string $name, string $value);

  /**
   * Sets the specified COOKIE variable encoded as Base64 of any type.
   *
   * @param string|int $name of the variable.
   * @param string $value of the variable.
   * @return NULL when successful.
   **/
  abstract public static function COOKIE_Base64(string $name, string $value);
}

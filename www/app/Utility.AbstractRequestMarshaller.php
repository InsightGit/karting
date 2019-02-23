<?php
namespace PlayerConnect\Utility;

/**
 * Abstract Request Marshaller — Outlines the static class' functions
 * Allows the reading of GET, POST, or COOKIE values as validated types.
 */
abstract class AbstractRequestMarshaller {

  /**
   * Gets the specified GET variable validated as a STRING type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  abstract public static function GET_String(string $name);

  /**
   * Gets the specified GET variable validated as a INT type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return int Returns the matching variable.
   **/
  abstract public static function GET_Number(string $name);

  /**
   * Gets the specified GET variable validated as a FLOAT type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return float Returns the matching variable.
   **/
  abstract public static function GET_Float(string $name);

  /**
   * Gets the specified GET variable validated as a BOOLEAN type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return boolean Returns the matching variable.
   **/
  abstract public static function GET_Boolean(string $name);

  /**
   * Gets the specified GET variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  abstract public static function GET_IP4(string $name);

  /**
   * Gets the specified GET variable decoded from Base64 of any type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  abstract public static function GET_Base64(string $name);

  /**
   * Gets the specified POST variable validated as a STRING type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  abstract public static function POST_String(string $name);

  /**
   * Gets the specified POST variable validated as a INT type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return int Returns the matching variable.
   **/
  abstract public static function POST_Number(string $name);

  /**
   * Gets the specified POST variable validated as a FLOAT type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return float Returns the matching variable.
   **/
  abstract public static function POST_Float(string $name);

  /**
   * Gets the specified POST variable validated as a BOOLEAN type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return boolean Returns the matching variable.
   **/
  abstract public static function POST_Boolean(string $name);

  /**
   * Gets the specified POST variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  abstract public static function POST_IP4(string $name);

  /**
   * Gets the specified POST variable decoded from Base64 of any type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  abstract public static function POST_Base64(string $name);

  /**
   * Gets the specified COOKIE variable validated as a STRING type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  abstract public static function COOKIE_String(string $name);

  /**
   * Gets the specified COOKIE variable validated as a INT type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return int Returns the matching variable.
   **/
  abstract public static function COOKIE_Number(string $name);

  /**
   * Gets the specified COOKIE variable validated as a FLOAT type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return float Returns the matching variable.
   **/
  abstract public static function COOKIE_Float(string $name);

  /**
   * Gets the specified COOKIE variable validated as a BOOLEAN type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return boolean Returns the matching variable.
   **/
  abstract public static function COOKIE_Boolean(string $name);

  /**
   * Gets the specified COOKIE variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  abstract public static function COOKIE_IP4(string $name);

  /**
   * Gets the specified COOKIE variable decoded from Base64 of any type.
   * Returns NULL when it doesn't exist or type mismatch occurs.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  abstract public static function COOKIE_Base64(string $name);
}

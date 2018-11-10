<?php
namespace Karting\Utility;

use Karting\Utility\Cookies;

/**
 * Request Implementation — Implementation of AbstractRequestMarshaller
 * Allows the reading of GET, POST, or COOKIE values as validated types.
 */
class Request extends AbstractRequestMarshaller {

  /**
   * Gets the specified GET variable validated as a STRING type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  public static function GET_String(string $name) {
    if (!empty($name) && isset($_GET[$name]))
      return (string)$_GET[$name];
    return NULL;
  }

  /**
   * Gets the specified GET variable validated as a INT type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return int Returns the matching variable.
   **/
  public static function GET_Number(string $name) {
    if (!empty($name) && isset($_GET[$name]) &&
        ctype_digit((string)$_GET[$name]))
      return (int)$_GET[$name];
    return NULL;
  }

  /**
   * Gets the specified GET variable validated as a FLOAT type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return float Returns the matching variable.
   **/
  public static function GET_Float(string $name) {
    if (!empty($name) && isset($_GET[$name]) &&
        is_numeric((string)$_GET[$name]))
      return (float)$_GET[$name];
    return NULL;
  }

  /**
   * Gets the specified GET variable validated as a BOOLEAN type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return boolean Returns the matching variable.
   **/
  public static function GET_Boolean(string $name) {
    if (!empty($name) && !empty($_GET[$name]) &&
        preg_match('/(true|false)/', $_GET[$name]))
      return (string)$_GET[$name] === 'true'? TRUE: FALSE;
    return NULL;
  }

  /**
   * Gets the specified GET variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  public static function GET_IP4(string $name) {
    if (!empty($name) && !empty($_GET[$name]) &&
      filter_var($_GET[$name], FILTER_VALIDATE_IP,
        FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE |
        FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6))
      return (string)$_GET[$name];
    return NULL;
  }

  /**
   * Gets the specified GET variable decoded from Base64 of any type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  public static function GET_Base64(string $name) {
    if (!empty($name) && !empty($_GET[$name])) {
      $stream = $_GET[$name];
      return base64_encode(base64_decode($stream, TRUE)) === $stream?
        base64_decode($stream): NULL;
    } else {
      return NULL;
    }
  }

  /**
   * Gets the specified POST variable validated as a STRING type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  public static function POST_String(string $name) {
    if (!empty($name) && isset($_POST[$name]))
      return (string)$_POST[$name];
    return NULL;
  }

  /**
   * Gets the specified POST variable validated as a INT type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return int Returns the matching variable.
   **/
  public static function POST_Number(string $name) {
    if (!empty($name) && isset($_POST[$name]) &&
        ctype_digit((string)$_POST[$name]))
      return (int)$_POST[$name];
    return NULL;
  }

  /**
   * Gets the specified POST variable validated as a FLOAT type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return float Returns the matching variable.
   **/
  public static function POST_Float(string $name) {
    if (!empty($name) && isset($_POST[$name]) &&
        is_numeric((string)$_POST[$name]))
      return (float)$_POST[$name];
    return NULL;
  }

  /**
   * Gets the specified POST variable validated as a BOOLEAN type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return boolean Returns the matching variable.
   **/
  public static function POST_Boolean(string $name) {
    if (!empty($name) && !empty($_POST[$name]) &&
        preg_match('/(true|false)/', $_POST[$name]))
      return (string)$_POST[$name] === 'true'? TRUE: FALSE;
    return NULL;
  }

  /**
   * Gets the specified POST variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  public static function POST_IP4(string $name) {
    if (!empty($name) && !empty($_POST[$name]) &&
      filter_var($_POST[$name], FILTER_VALIDATE_IP,
        FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE |
        FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6))
      return (string)$_POST[$name];
    return NULL;
  }

  /**
   * Gets the specified POST variable decoded from Base64 of any type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  public static function POST_Base64(string $name) {
    if (!empty($name) && !empty($_POST[$name])) {
      $stream = $_POST[$name];
      return base64_encode(base64_decode($stream, TRUE)) === $stream?
        base64_decode($stream): NULL;
    } else {
      return NULL;
    }
  }

  /**
   * Gets the specified COOKIE variable validated as a STRING type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  public static function COOKIE_String(string $name) {
    if (!empty($name) && !is_null(Cookies::Get[$name]))
      return (string)Cookies::Get[$name];
    return NULL;
  }

  /**
   * Gets the specified COOKIE variable validated as a INT type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return int Returns the matching variable.
   **/
  public static function COOKIE_Number(string $name) {
    if (!empty($name) && !is_null(Cookies::Get[$name]) &&
        ctype_digit((string)Cookies::Get[$name]))
      return (int)Cookies::Get[$name];
    return NULL;
  }

  /**
   * Gets the specified COOKIE variable validated as a FLOAT type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return float Returns the matching variable.
   **/
  public static function COOKIE_Float(string $name) {
    if (!empty($name) && !is_null(Cookies::Get[$name]) &&
        is_numeric((string)Cookies::Get[$name]))
      return (float)Cookies::Get[$name];
    return NULL;
  }

  /**
   * Gets the specified COOKIE variable validated as a BOOLEAN type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return boolean Returns the matching variable.
   **/
  public static function COOKIE_Boolean(string $name) {
    if (!empty($name) && !is_null(Cookies::Get[$name]) &&
        preg_match('/(true|false)/', Cookies::Get[$name]))
      return (string)Cookies::Get[$name] === 'true'? TRUE: FALSE;
    return NULL;
  }

  /**
   * Gets the specified COOKIE variable validated as a IPv4/6 address.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return string Returns the matching variable.
   **/
  public static function COOKIE_IP4(string $name) {
    if (!empty($name) && !is_null(Cookies::Get[$name]) &&
      filter_var(Cookies::Get[$name], FILTER_VALIDATE_IP,
        FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE |
        FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6))
      return (string)Cookies::Get[$name];
    return NULL;
  }

  /**
   * Gets the specified COOKIE variable decoded from Base64 of any type.
   * Returns NULL when it doesn't exist or type mismatch occures.
   *
   * @param string|int $name of the variable.
   * @return mixed Returns the matching variable.
   **/
  public static function COOKIE_Base64(string $name) {
    if (!empty($name) && !is_null(Cookies::Get[$name])) {
      $stream = Cookies::Get[$name];
      return base64_encode(base64_decode($stream, TRUE)) === $stream?
        base64_decode($stream): NULL;
    } else {
      return NULL;
    }
  }
}

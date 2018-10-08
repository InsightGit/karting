<?php
declare(strict_types=1);
class Request {
  public static function GET_String(string $param) {
    if (!empty($param) && isset($_GET[$param]))
      return (string)$_GET[$param];
    return NULL;
  }
  public static function GET_Number(string $param) {
    if (!empty($param) && isset($_GET[$param]) &&
        ctype_digit((string)$_GET[$param]))
      return (int)$_GET[$param];
    return NULL;
  }
  public static function GET_Float(string $param) {
    if (!empty($param) && isset($_GET[$param]) &&
        is_numeric((string)$_GET[$param]))
      return (float)$_GET[$param];
    return NULL;
  }
  public static function GET_Boolan(string $param) {
    if (!empty($param) && !empty($_GET[$param]) &&
        preg_match('/(true|false)/', $_GET[$param]))
      return (string)$_GET[$param] === 'true'? TRUE: FALSE;
    return NULL;
  }
  public static function GET_IP4(string $param) {
    if (!empty($param) && !empty($_GET[$param]))
      return (string)$_GET[$param];
  }
  public static function GET_Base64(string $param) {
    if (!empty($param) && !empty($_GET[$param]))
      return (string)$_GET[$param];
  }//base64_encode(base64_decode($data, true)) === $data
  public static function GET_Stream(string $param) {
    if (!empty($param) && !empty($_GET[$param]))
      return (string)$_GET[$param];
  }
}

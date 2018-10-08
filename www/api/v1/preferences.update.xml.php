<?php
require_once(__DIR__.'/../../shared/configurations.php');
var_dump( Request::POST_Float('a'));
exit;
if (empty(Request::POST_String('preferences[language_code]'))) {
  $language_code = Request::POST_String('preferences[language_code]');
  Response::Cookie_String('language_code', $language_code);
}
if (empty(Request::POST_Number('preferences[timezone]'))) {
  $timezone = Request::POST_Number('preferences[timezone]');
  Response::Cookie_Number('timezone', $timezone);
}
if (empty(Request::POST_String('preferences[region_code]'))) {
  $region_code = Request::POST_String('preferences[region_code]');
  Response::Cookie_String('region_code', $region_code);
}
if (empty(Request::POST_String('preferences[domain]'))) {
  $domain = Request::POST_String('preferences[domain]');
  Response::Cookie_String('domain', $domain);
}
if (empty(Request::POST_IP4('preferences[ip_address]'))) {
  $ip_address = Request::POST_IP4('preferences[ip_address]');
  Response::Cookie_IP4('ip_address', $ip_address);
}
$response->startElement('result');
  $response->startElement('status');
    $response->writeElement('id', 0);
    $response->writeElement('message', 'Successful completion');
  $response->endElement();
  $response->startElement('response');
    $response->startElement('preferences');
    $response->writeAttribute('language_code', $language_code? $language_code: '');
    $response->writeAttribute('timezone', $timezone? $timezone: '');
    $response->writeAttribute('region_code', $region_code? $region_code: '');
    $response->writeAttribute('domain', $domain? $domain: '');
    $response->writeAttribute('ip_address', $ip_address? $ip_address: '');
    $response->endElement();
  $response->endElement();
$response->endElement();
$response->endDocument();
$response->flush();

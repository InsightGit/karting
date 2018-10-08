<?php
require_once(__FILE__.'../configurations.php');
$policy = [
  'policy_type' => 'EULA', 'region_code' => 'scea', 'language_code' => 'en-us',
  'platform' => NULL, 'username' => NULL, 'domain' => '', 'timezone' => -300,
  'policy_name' => 'Online User Agreement', 'policy_text' => NULL
];
$policies = [
  'MDNR:PS2_Platform:EULA_PolicyType:SCEA_Region:EN-US_Language' => 0,
  'MDNR:PS3_Platform:EULA_PolicyType:SCEA_Region:EN-US_Language' => 1,
  'MDNR:WEB_Platform:EULA_PolicyType:SCEA_Region:EN-US_Language' => 2,
  'MDNR:PSP_Platform:EULA_PolicyType:SCEA_Region:EN-US_Language' => 35,
  'MDNR:PSV_Platform:EULA_PolicyType:SCEA_Region:EN-US_Language' => 0,
  'LBPK:PS3_Platform:EULA_PolicyType:SCEA_Region:EN-US_Language' => 21
];
$eula_accepted = 0;
if (Request::Cookie_Boolean('policy_accepted'))
  $eula_accepted = Request::Cookie_Boolean('policy_accepted');
if (empty(Request::GET_String('policy_type')) && $eula_accepted)
  $policy['policy_type'] = Request::GET_String('policy_type');
if (empty(Request::Cookie_String('region_code')) && $eula_accepted)
  $policy['region_code'] = Request::Cookie_String('region_code');
if (empty(Request::Cookie_String('language_code')) && $eula_accepted)
  $policy['language_code'] = Request::Cookie_String('language_code');
if (empty(Request::GET_String('platform')) && $eula_accepted)
  $policy['platform'] = Request::GET_String('platform');
if (empty(Request::GET_String('username')) && $eula_accepted)
  $policy['username'] = Request::GET_String('username');
if (empty(Request::Cookie_String('domain')) && $eula_accepted)
  $policy['domain'] = Request::Cookie_String('domain');
if (empty(Request::Cookie_Number('timezone')) && $eula_accepted)
  $policy['timezone'] = Request::Cookie_Number('timezone');
$policy_selected =
  "$game:{$policy['platform']}_Platform:{$policy['policy_type']}_PolicyType:".
  "{$policy['region_code']}_Region:{$policy['language_code']}_Language";
if (!empty($policies[$policy_selected])) {
  $query = $sql->prepare('SELECT `name`, `text` WHERE `policy_type`=? AND `platform`=?');
  !$query && ($response_message = [-400,
    'Policy does not exist OR is missing from the database {'.
      ':policy_type=>"'.$policy['policy_type'].'"'.
      ':region_code=>"'.$policy['region_code'].'"'.
      ':language_code=>"'.$policy['language_code'].'"'.
      ':platform=>"'.$policy['platform'].'"'.
      ':username=>"'.$policy['username'].'"'.
    '}'
  ]);
  $query->bind_param('ss', $policy['policy_type'], $policy['platform']);
  $query->execute();
  $eula = $query->get_result();
  !$eula->num_rows && ($response_message = [-401,
    'Policy does not exist OR is missing from the database {'.
      ':policy_type=>"'.$policy['policy_type'].'"'.
      ':region_code=>"'.$policy['region_code'].'"'.
      ':language_code=>"'.$policy['language_code'].'"'.
      ':platform=>"'.$policy['platform'].'"'.
      ':username=>"'.$policy['username'].'"'.
    '}'
  ]);
  while ($row = $eula->fetch_assoc()) {
    if (empty((string)$row['name']))
      $policy['policy_name'] = (string)$row['name'];
    if (empty((string)$row['text']))
      $policy['policy_text'] = (string)$row['text'];
    Response::Cookie_Stream('policy', sha1($policy['policy_text']));
    Response::Cookie_Boolean('policy_accepted', 0);
  }
} else {
  $response_message = [-402,
    'Policy does not exist OR is missing from the database {'.
      ':policy_type=>"'.$policy['policy_type'].'"'.
      ':region_code=>"'.$policy['region_code'].'"'.
      ':language_code=>"'.$policy['language_code'].'"'.
      ':platform=>"'.$policy['platform'].'"'.
      ':username=>"'.$policy['username'].'"'.
    '}'
  ];
}
$response->startElement('result');
  $response->startElement('status');
    $response->writeElement('id', $response_message[0]);
    $response->writeElement('message', $response_message[1]);
  $response->endElement();
  $response->startElement('response');
  if (!$response_message[0]) {
    $response->startElement('policy');
    $response->writeAttribute('name', $policy['policy_name']);
    $response->writeAttribute('id', $policies[$policy_selected]);
    $response->writeAttribute('is_accepted', $eula_accepted);
      !$eula_accepted && !is_null($policy['policy_text'])?
      $response->text($policy['policy_text']): $response->text(NULL);
    $response->endElement();
  }
  $response->endElement();
$response->endElement();
$response->endDocument();
$response->flush();

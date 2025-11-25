<?php 
ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
//try{
$soapclient = new SoapClient('https://nedunew.unionbankofindia.co.in/xmds.php?wsdl&v=7'); 
$response = $soapclient->RegisterDisplay('5iSUwd','54:47:41:05:A2:80','test','Android',1,5,'Android','54:47:41:05:A2:80','a2e22d4c6d73c56931c82f335b4b5384',
  'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA7OVMFnzKbd0bHh9qEbD9uJ1W6sccI7vz YoZgc7s0Upm7skDc4XfmKfxhIxrEADSRxBy7mc1jv0zZlI/MQoMKqlUdTi6spvW6XnooytVbLQdS66HuuC3NadeY2zrCeDfS3wZ/l9cAucWVkDrcnG3USG10ei63SAh0QvEUYrkqNEwzScskqV+q8laN /KAiDw8RE4mFmpVNE3/N0qtnwXxKE6CY0Gr6L7KpTIJDOxJqpI6eHhxOQRS+IMTyWD31iLvN/J8+xhTuwr80ZOZekTcHe0Qu+eLTTzmNW2Sxksj86L5M1XpiRMURb709LEE0X4lQNPDs0bdvQ4A0GK/o PBDfdwIDAQAB\n');
//$response =$soapclient->RequiredFiles('5iSUwd','F4:ED:5F:55:AE:D2');
//$response =$soapclient->Schedule('5iSUwd','9d3415edbfac4200');
// $response =$soapclient->GetFile('5iSUwd','457350eece0cd8e0',1163,'layout',0,'673');
print_r($response);exit;

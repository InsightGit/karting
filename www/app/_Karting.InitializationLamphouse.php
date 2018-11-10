<?php
declare(strict_types = 1);
error_reporting(-1);
$_ROOT = $_SERVER['DOCUMENT_ROOT'];

require_once "$_ROOT/app/Utility.AbstractCookiesMarshaller.php";
require_once "$_ROOT/app/Utility.LoadCookiesImplementation.php";
require_once "$_ROOT/app/Utility.AbstractRequestMarshaller.php";
require_once "$_ROOT/app/Utility.LoadRequestImplementation.php";
require_once "$_ROOT/app/Utility.AbstractResponseMarshaller.php";
require_once "$_ROOT/app/Utility.LoadResponseImplementation.php";

//$app = new Karting\Foundation\Application(
//  dirname(__DIR__)
//);


header('Content-Type: application/xml');
$response = new XMLWriter();
$response->openURI('php://output');
$response->setIndentString('  ');
$response->startDocument('1.0','UTF-8');
$response->setIndent(TRUE);

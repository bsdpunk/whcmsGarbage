<?php
/**
 * WHMCS Sample API Call
 *
 * @package    WHMCS
 * @author     WHMCS Limited <development@whmcs.com>
 * @copyright  Copyright (c) WHMCS Limited 2005-2016
 * @license    http://www.whmcs.com/license/ WHMCS Eula
 * @version    $Id$
 * @link       http://www.whmcs.com/
 */

// API Connection Details
$whmcsUrl = "https://www.yourcompany.tld/online/";
//https://www.contina.com/manage/";
//https://www.yourdomain.com/path/to/whmcs/";
$username = "yours";
$password = "yours";
#echo($password);
#echo(md5($password));
#exit();
// Set post values
$postfields = array(
    'username' => $username,
    'password' => md5($password),
    'action' => 'GetClientsProducts',
//    'fetchStatus' => 'false',
    'responsetype' => 'json',
);

// Call the API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
#echo(http_build_query($postfields));
$response = curl_exec($ch);
if (curl_error($ch)) {
    die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
}
curl_close($ch);

// Decode response
$jsonData = json_decode($response, true);
// Dump array structure for inspection
//var_dump($jsonData);
print_r($response);

<?php
/* WHMCS SMS Addon with GNU/GPL Licence
 *
 * https://epoint.com.bd 
 *
 * Licence: GPLv3 (http://www.gnu.org/licenses/gpl-3.0.txt)
 * */
if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

require_once("api.php");
$api = new epointsms();
$lists = $api->getLists();

foreach($lists as $lists){
    add_hook($lists['hook'], 1, $lists['function'], "");
}
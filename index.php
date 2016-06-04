<?php
/**
* Alternate Easy To Use SteamAPI using PHP & Official SteamAPI.
* @author Om Bhende a.k.a at0mic
* Thanks for downloading from github!
*/
$config = array(
  "api_key" => "Steam API Key",
  "info" => "at0mic's official api server (v1.0.0)"
);
$steamid = $_GET['id']; // ?id=<player id>
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $config['api_key'] . "&steamids=$steamid";
$steamArray = json_decode(file_get_contents($url), true);
foreach ($steamArray['response']['players'] as $plr) {
  print_r($plr); // Returns API Array
}
?>

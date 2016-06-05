<?php
$config = array(
  "api_key" => "DD5A34C764F215A0B238A3CF3D6F8FB2",
);
$steamid = $_GET['id'];
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $config['api_key'] . "&steamids=$steamid";
$steamArray = json_decode(file_get_contents($url), true);
foreach ($steamArray['response']['players'] as $plr) {
$json = json_encode($plr);
$arr = json_decode($json);
print_r($arr);
}
?>

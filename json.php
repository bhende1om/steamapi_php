<?php
$config = array(
  "api_key" => "Steam API",
);
$steamid = $_GET['id'];
$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $config['api_key'] . "&steamids=$steamid";
$steamArray = json_decode(file_get_contents($url), true);
foreach ($steamArray['response']['players'] as $plr) {
echo json_encode($plr);
}
?>

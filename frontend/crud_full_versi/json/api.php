<?php 
$content = file_get_contents("http://api.football-data.org/v1/competitions/426/teams");
$data = json_decode($content);
$teams = $data->teams;
foreach ($teams as $team) {
    $id = explode("/", $team->_links->self->href);
    $club_id = $id[5];
    $getPlayer = file_get_contents("http://api.football-data.org/v1/teams/{$club_id}/players");
    $dataPlayer = json_decode($getPlayer);
    echo $team->name;
    echo "<br>";
    $dataPlayers = $dataPlayer->players;
    echo "<ul>";
    foreach ($dataPlayers as $player) {
        echo "<li>" . $player->name . " (".$player->jerseyNumber.") - " . $player->position ."</li>";
    }
    echo "</ul>";
    echo "<br>";
}

 ?>
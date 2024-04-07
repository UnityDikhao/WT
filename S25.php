<?php
function createCricketXML() {
    $cricketXML = new SimpleXMLElement('<CricketTeam></CricketTeam>');
    $teamAustralia = $cricketXML->addChild('Team');
    $teamAustralia->addAttribute('country', 'Australia');
    $teamAustralia->addChild('player', '');
    $teamAustralia->addChild('runs', '');
    $teamAustralia->addChild('wicket', '');

    $cricketXML->asXML('cricket.xml');
}

function addElementsToCricketXML() {
    $cricketXML = simplexml_load_file('cricket.xml');
    $teamIndia = $cricketXML->addChild('Team');
    $teamIndia->addAttribute('country', 'India');

    $players = array(
        array('player' => 'Virat Kohli', 'runs' => '11000', 'wicket' => '5'),
        array('player' => 'Rohit Sharma', 'runs' => '9000', 'wicket' => '3'),
        array('player' => 'Jasprit Bumrah', 'runs' => '500', 'wicket' => '100')
    );

    foreach ($players as $player) {
        $playerNode = $teamIndia->addChild('player', $player['player']);
        $playerNode->addChild('runs', $player['runs']);
        $playerNode->addChild('wicket', $player['wicket']);
    }

    $cricketXML->asXML('cricket.xml');
}

if (!file_exists('cricket.xml')) {
    createCricketXML();
}

addElementsToCricketXML();

echo "cricket.xml file created and updated successfully!";
?>

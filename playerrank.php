<?php
class LeagueTable
{

	public function __construct($players)
    {
		$this->standings = array();
		foreach($players as $index => $p)
        {
			$this->standings[$p] = array
            (
                'index' => $index,
                'games_played' => 0, 
                'score' => 0
            );
        }
	}
		
	public function recordResult($player, $score)
    {
		$this->standings[$player]['games_played']++;
		$this->standings[$player]['score'] += $score;
	}
	
	public function playerRank($rank)
    {
        $scores = array();
        $games = array();
        $index = array();

        foreach($this->standings as $key => $player) {

            $scores[$key] = $player['score'];
            $games[$key] = $player['games_played'];
            $index[$key] = $player['index'];

        }

        array_multisort($scores, SORT_DESC, $games, SORT_ASC, $index, SORT_ASC, $this->standings);

        $result = array_keys($this->standings);
        return $result[$rank-1];
        
	}
}
      
$table = new LeagueTable(array('Mike','Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo '<pre>';
print_r( $table->playerRank(1));
echo '</pre>';
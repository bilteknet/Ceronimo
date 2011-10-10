<?php
include 'library/datalayer.php';

// Ýþlem Kontrolü :
$action = $_GET['action'];
$user_id = $_GET['user_id'];

$datalayer = new datalayer();
if($action == 'GameCheck'){
$gameCheck = $datalayer->gameCheck($user_id);
if(!$gameCheck)
{
$xml= "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<GameData>
<currentGame>false</currentGame>
</GameData>
";
echo $xml;



}
else
{
$gameData = $datalayer->getCurrentGameData($user_id);
//print_r($gameData);
$game_id = $gameData['game_id'];
  $cstep = $gameData['current_step'];





if(!$gameData['selected_box'] == 0){ $s_box = $gameData['selected_box']; }
if($cstep == '6' || $cstep == '11' || $cstep == '15' || $cstep == '19' || $cstep == '21' || $cstep == '22' ||  $cstep == '23' || $cstep == '24' || $cstep == '25')
    {
$end_value = $datalayer->getOffer($cstep,$user_id,$game_id);
if(strpos($end_value[0],'|no')){ 

$xml = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
	<GameData>
       <currentGame id = \"$game_id\" current_step = \"$cstep\" selected_box = \"$s_box\">";

}else{
$xml = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
	<GameData>
       <currentGame id = \"$game_id\" current_step = \"$cstep\" selected_box = \"$s_box\"  offer_value=\"$end_value[0]\" offer_no=\"$cstep\">";

}
	 
	   
	   
}else{
	  $xml = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
	<GameData>
       <currentGame id = \"$game_id\" current_step = \"$cstep\" selected_box = \"$s_box\">";}
for($i = 0 ; $i < 27 ; $i++)
{
	if($gameData['box'.$i.'_'.'status'] == 0)
	{
		 $xml.= '<box'.$i.'>false</box'.$i.'>';
	}
	else
	{
		$xml.= '<box'.$i.'>'.$gameData['box'.$i.'_'.'value'].'</box'.$i.'>';
	}

}
   $xml.="</currentGame></GameData>";
        echo $xml;
}

}

if($action == 'StartNewGame')
{
// Açýk oyunlara bak.

$gameCheck = $datalayer->gameCheck($user_id);
if(!$gameCheck)
{


$boxValue = $datalayer->boxValue();
$save = $datalayer->startNewGame($user_id,$boxValue);
        if(!$save){
        $xml= "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
        <GameData>
        <currentGame>false</currentGame>
        </GameData>";
        echo $xml;

        }
        else
        {
            $gameid = mysql_insert_id();
            $xml= "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
        <GameData>
        <currentGame id= '$gameid'>true</currentGame>
        </GameData>";
            echo $xml;
        }

}
else
{
    $gameData = $datalayer->getCurrentGameData($user_id);
 // print_r($gameData);
  $game_id = $gameData['game_id'];
  $cstep = $gameData['current_step'];
  $xml = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
	<GameData>
       <currentGame id = \"$game_id\" current_step = \"$cstep\">";
for($i = 0 ; $i < 25 ; $i++)
{
	if($gameData['box'.$i.'_'.'status'] == 0)
	{
		 $xml.= '<box'.$i.'>false</box'.$i.'>';
	}
	else
	{
		$xml.= '<box'.$i.'>'.$gameData['box'.$i.'_'.'value'].'</box'.$i.'>';
	}

}
   $xml.="</currentGame></GameData>";
        echo $xml;
        //print_r($xmlData);
}





}

?>

<?php

class Thesaurus
{
    private $thesaurus;

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
        $find = false;
        $array = array();
        foreach ($this->thesaurus as $key => $value) {
            if($key == $word) {
                $array["word"] = $key;
                $array["synonyms"] = $value;
                $find = true;
            }
        }
        if(!$find) {
            $array["word"] = $word;
            $array["synonyms"] = array();
        }
        return json_encode($array);
    }
}

$thesaurus = new Thesaurus(
    array 
        (
            "buy" => array("purchase"),
            "big" => array("great", "large")
        )); 

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");


?>
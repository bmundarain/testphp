<?php

class FileOwners
{
    public static function groupByOwners($files)
    {

        $result = array();
        foreach($files as $file) {
            $result[$file] = array_keys($files, $file);
        }
            

        return $result;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

echo '<pre>';
var_dump(FileOwners::groupByOwners($files));
echo '</pre>';

if("01a4" != "001a4") echo 'true';

if("01e4" == "001e4") echo 'true';

echo "<br><----Octal printing----------><br>";

$i = 016;
echo $i.' instead of 16';

?>
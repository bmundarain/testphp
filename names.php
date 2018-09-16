<?php

class Names
{
    public static function find_common($array1, $array2)
    {
        $resultado = array_merge($array1, $array2);

        echo '<pre>';
        print_r($resultado);
        echo '</pre>';


        return array_unique($resultado);
    }
}

$names = Names::find_common(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
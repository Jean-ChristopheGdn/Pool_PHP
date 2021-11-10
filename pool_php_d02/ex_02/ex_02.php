<?php 



function my_create_map (...$array)
{
    $arr = array ();

    foreach ($array as $value)
        {
            if ($value == NULL || count ($value) < 2)
                {
                    echo ("The given arguments aren't valid." . PHP_EOL);
                    return (NULL);
                }

            $arr[$value[0]] = $value[1];
        }

    return ($arr);
}
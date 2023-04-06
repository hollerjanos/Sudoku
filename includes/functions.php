<?php

function randomNumberGenerator(int $length = 1) : string
{
    $result = "";
    $characters = "0123456789";

    for ($index = 0; $index < $length; $index++)
    {
        $randomNumber = $characters[rand(0, strlen($characters) - 1)];

        if ($index == 0 && $randomNumber == 0)
            while ($randomNumber == 0)
                $randomNumber = $characters[rand(0, strlen($characters) - 1)];

        $result .= $randomNumber;
    }
    return $result;
}

function randomTextGenerator(int $length = 1) : string
{
    $result = "";
    $characters = "abcdefghijklmnopqrstuvwxyz";

    for ($index = 0; $index < $length; $index++)
    {
        $randomNumber = $characters[rand(0, strlen($characters) - 1)];

        if ($index == 0 && $randomNumber == 0)
            while ($randomNumber == 0)
                $randomNumber = $characters[rand(0, strlen($characters) - 1)];

        $result .= $randomNumber;
    }
    return $result;
}

function randomStringGenerator(int $length = 1) : string
{
    $result = "";
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";

    for ($index = 0; $index < $length; $index++)
    {
        $randomNumber = $characters[rand(0, strlen($characters) - 1)];

        if ($index == 0 && $randomNumber == 0)
            while ($randomNumber == 0)
                $randomNumber = $characters[rand(0, strlen($characters) - 1)];

        $result .= $randomNumber;
    }
    return $result;
}
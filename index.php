<?php

//==============================
// Including header
//==============================

require_once("includes/header.php");

//==============================
// Content
//==============================

echo "\t\t<table>\n";

for ($row = 0; $row < 9; $row++)
{
    echo "\t\t\t<tr id=\"$row\">\n";
    for ($column = 0; $column < 9; $column++)
    {
        echo "\t\t\t\t<td id=\"$row$column\"></td>\n";
    }
    echo "\t\t\t</tr>\n";
}
echo "\t\t</table>\n";

//==============================
// Including footer
//==============================

require_once("includes/footer.php");
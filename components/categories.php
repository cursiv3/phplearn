<?php

function map_categories($category, $idx)
{
    if ($idx == 0) {
        echo "<div class='active-category category-button'>{$category}</div>";
    } else {
        echo "<div class='category-button'>{$category}</div>";
    }
}

function categories($cateArr)
{
    array_map(map_categories, $cateArr, array_keys($cateArr));
}

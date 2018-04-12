<?php

function map_categories($category)
{
    echo '<div class="category-button">' . $category . '</div>';
}

function categories($cateArr)
{
    echo '<div class="category-container">';
    array_map(map_categories, $cateArr);
    echo '</div>';
}

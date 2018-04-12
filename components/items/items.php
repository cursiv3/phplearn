<?php
function map_items($item)
{
    echo '<li>' . $item . '</li>';
}

function items($itemsArr)
{
    echo '<div class="items-container"><ul>';
    array_map(map_items, $itemsArr);
    echo '</ul></div>';
}

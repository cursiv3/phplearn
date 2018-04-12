<html>

    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div class="app-parent-container">
<?php
include "./components/categories/categories.php";
include "./components/items/items.php";
include "./get_data.php";

//$users = get_data('users', data needed here);
$categories = get_data('items', 'category');
$items = get_data('items', 'body');

echo categories($categories);
echo items($items);
?>
        </div>
    </body>
</html>
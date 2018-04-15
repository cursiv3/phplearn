<?php
include "./components/categories.php";
include "./helpers/get_data.php";
include "./helpers/get_items_json.php";

$categories = get_data('items', 'category');
$items = get_data('items', 'body');

?>

<html>

    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>

        <div class="app-parent-container">
            <div id="categ-button-parent" class='category-container'>
                <?php echo categories($categories) ?>
            </div>
            <div class="items-container">
                <ul id="items-list-ul">
                </ul>
            </div>
        </div>

        <script src="./js/list_view.js"></script>
        <script src="./js/filter_list.js"></script>
        <script src="./js/cate_btn_view.js"></script>
        <script>
            var categories = <?php echo json_encode($categories); ?>;
            var items = <?php get_items_json();?>;
            var active_category = categories[0];

            // set initial view
            filter_list(items, active_category, list_view);

            // event listener setup for category buttons
            var abc = document.getElementById('categ-button-parent');
            abc.addEventListener("click", function(evt) {
                active_category = evt.target.textContent;
                // if statment so it doesn't fire if parent el clicked
                if (evt.target.className !== 'category-container') {
                    filter_list(items, active_category, list_view);
                    cate_btn_view(evt.target);
                }
            });
        </script>

    </body>
</html>
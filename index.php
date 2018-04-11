<html>
    <body>
        <div>
        <?php
            include "./components/categories/categories.php";
            include "./components/items/items.php";
            
            echo categories();
            echo items();
        ?>
        </div>
    </body>
</html>
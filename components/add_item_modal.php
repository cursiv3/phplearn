<div class="modal-container hide-modal">
    <div class="modal-opaque-background"></div>
    <div class="modal-dialog-box">
    <div class="modal-close-btn" onclick="hide_modal()">X</div>
        <form action="../helpers/post_data.php" method="post">
            <p><strong>Category</strong></p>
            <input type="text" name="category" placeholder="Enter a category" required />
            <br/>
            <p><strong>Item</strong></p>
            <input type="text" name="item" placeholder="Enter an item" required />
            <br />
            <button type="submit">Add Item</button>
        </form>
    </div>
</div>
<script src="./js/hide_modal.js"></script>
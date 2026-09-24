<div class="sidebar-main">
    <div class="menu-category-list">
        <div class="toggle-cat-wrap">
            <p class="cat-toggle">
                <span class="cat-icon">
                    <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;">
                        <path d="M5 7h14"></path>
                        <path d="M5 12h9"></path>
                        <path d="M5 17h11"></path>
                    </svg>
                </span>
                <span class="toggle-title">Category</span>
                <span class="toggle-icon"></span>
            </p>
        </div>
        <ul class="product-cat-list thunk-product-cat-list" data-menu-style="vertical">
            <?php foreach ($this->_categories as $category) {
                if ($category['category_type'] != 'products') continue;
            ?>
                <li class="cat-item cat-item-<?= $category['id'] ?>"><a href="/product-category/<?= $category['slug'] ?>/"><?= $category['title'] ?></a>
                </li>
            <?php } ?>

        </ul>
    </div>
</div>
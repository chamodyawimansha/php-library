<div class="sidebar">
    <div id="search-form">
        <form id="search-form" method="POST" action="<?php echo SITE_HOME; ?>books/find">
            <input class="full-width" type="text" placeholder="Book Title" id="book-title" required>
            <input class="button-primary" type="submit" value="Search">
        </form>
    </div>

    <div class="options-menu">
        <a class="button" href="<?php echo SITE_HOME . "book/new"; ?>">New Book</a>
        <a class="button" href="<?php echo SITE_HOME . "category/index"; ?>">Categories</a>
    </div>
</div>
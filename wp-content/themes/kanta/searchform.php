<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <input type="search" placeholder="Поиск" name="s" value="<?php echo get_search_query() ?>" required>
    <input type="submit" class="al-search-black">
</form>
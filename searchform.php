<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="sidebar__form">
                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="sidebar__input" placeholder="Поиск...">
                <button type="submit" id="searchsubmit" aria-label="searh" class="sidebar__search-button"><i class="icon-search"></i></button>
            </form>
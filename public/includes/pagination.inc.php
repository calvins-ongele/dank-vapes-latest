<nav class="woocommerce-pagination" aria-label="Product Pagination">
    <ul class="page-numbers">

        <?php
        $currentPage  = max(1, (int) ($_GET['pg'] ?? 1));
        $totalPerPage = max(1, (int) ($this->_company['user_loop_sequence'] ?? 24));
        $totalCount   = max(0, (int) ($this->data['count'] ?? 0));

        $totalPages = (int) ceil($totalCount / $totalPerPage);

        // Nothing to paginate
        if ($totalPages > 1) {

            // How many page numbers to show around the current page
            $window = 2;

            /*
             * Build the pages we want to display.
             *
             * Example with 81 pages and current page 40:
             * 1 ... 38 39 40 41 42 ... 81
             */
            $pages = [];

            // Always show first page
            $pages[] = 1;

            // Pages around current page
            $start = max(2, $currentPage - $window);
            $end   = min($totalPages - 1, $currentPage + $window);

            // Ellipsis after first page
            if ($start > 2) {
                $pages[] = '...';
            }

            for ($i = $start; $i <= $end; $i++) {
                $pages[] = $i;
            }

            // Ellipsis before last page
            if ($end < $totalPages - 1) {
                $pages[] = '...';
            }

            // Always show last page
            if ($totalPages > 1) {
                $pages[] = $totalPages;
            }


            // Previous 
            if ($currentPage > 1) {
                ?> 
                <li><a class="prev page-numbers" href="<?= CustomFunctions::formatDynamicUrl('pg', (string) ($currentPage - 1)) ?>">←</a></li>
                <?php
            }


            // Page numbers
            foreach ($pages as $page) {

                if ($page === '...') {
                    ?>
                    <li><span class="page-numbers dots">…</span></li>
                    <?php
                    continue;
                }

                ?>
               
                <li>
                    <a aria-label="Page <?= $page ?>"
                    <?= ($currentPage == $page) ? 'aria-current="page"' : "" ?>
                    class="page-numbers" href="<?= CustomFunctions::formatDynamicUrl('pg', (string) $page) ?>"><?= $page ?>
                    </a></li>
                <?php
            }


            // Next
            if ($currentPage < $totalPages) {
                ?>
                <li><a class="next page-numbers" href="<?= CustomFunctions::formatDynamicUrl('pg', (string) ($currentPage + 1)) ?>">Next</a></li>
                 
                <?php
            }

        }
        ?>

    </ul>
</nav>
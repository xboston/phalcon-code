<a href="/robots/search">Первая</a>
<a href="/robots/search?page=<?= $page->before; ?>">Предыдущая</a>
<a href="/robots/search?page=<?= $page->next; ?>">Следующая</a>
<a href="/robots/search?page=<?= $page->last; ?>">Последняя</a>

<?php echo "Вы на странице ", $page->current, " из ", $page->total_pages; ?>


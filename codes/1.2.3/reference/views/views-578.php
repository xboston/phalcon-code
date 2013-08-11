<div class="categories">
<?php

    foreach (Categories::find("status = 1") as $category) {
       echo "<span class='category'>", $category->name, "</span>";
    }

?>
</div>


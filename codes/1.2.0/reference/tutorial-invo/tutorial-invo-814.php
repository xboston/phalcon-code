<?php foreach ($page->items as $product) { ?>
    <tr>
        <td><?= $product->id ?></td>
        <td><?= $product->getProductTypes()->name ?></td>
        <td><?= $product->name ?></td>
        <td><?= $product->price ?></td>
        <td><?= $product->active ?></td>
        <td><?= Tag::linkTo("products/edit/" . $product->id, 'Edit') ?></td>
        <td><?= Tag::linkTo("products/delete/" . $product->id, 'Delete') ?></td>
    </tr>
<?php } ?>


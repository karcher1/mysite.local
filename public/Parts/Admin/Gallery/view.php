<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>image</th>
        <th>category name</th>
        <th>category id</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($data as $gallery_item): ?>
        <tr>
            <td><?= $gallery_item['id'] ?></td>
            <td><?= $gallery_item['name'] ?></td>
            <td><?= $gallery_item['image'] ?></td>
            <td><?= $gallery_item['categoryName'] ?></td>
            <td><?= $gallery_item['categoryId'] ?></td>
            <td><a href="/gallery/update?id=<?= $gallery_item['id'] ?>">Update</a></td>
            <td><a href="/gallery/delete?id=<?= $gallery_item['id'] ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

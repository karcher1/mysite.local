<h1>Gallery Controller - View</h1>
<a href="/gallery/create">
    Create
</a>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            image
        </th>
        <th>
            category name
        </th>
        <th>
            category id
        </th>
        <th>
            Update
        </th>
        <th>
            Delete
        </th>
    </tr>
    <?php foreach ($data as $gallery_item): ?>
        <tr>
            <td>
                <?= $gallery_item['id'] ?>
            </td>
            <td>
                <?= $gallery_item['name'] ?>
            </td>
            <td>
                <?= $gallery_item['image'] ?>
            </td>
            <td>
                <?= $gallery_item['categoryName'] ?? 'N/A' ?>
            </td>
            <td>
                <?= $gallery_item['categoryId'] ?? 'N/A' ?>
            </td>
            <td>
                <a href="/gallery/update?id=<?= $gallery_item['id'] ?>">
                    Update
                </a>
            </td>
            <td>
                <a href="/gallery/delete?id=<?= $gallery_item['id'] ?>">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

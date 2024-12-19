<h1>Admin GalleryCategory - View</h1>
<a href="/gallerycategory/create">Create</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td>
                <a href="/gallerycategory/update?id=<?= $category['id'] ?>">Update</a>
                <a href="/gallerycategory/delete?id=<?= $category['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

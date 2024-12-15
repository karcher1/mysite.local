<h1>Admin PostCategory - View</h1>
<a href="/admin/postcategory/create">Create</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($data as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td><?= $category['description'] ?></td>
            <td>
                <a href="/admin/postcategory/update?id=<?= $category['id'] ?>">Update</a>
                <a href="/admin/postcategory/delete?id=<?= $category['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Post Categories</h1>
<a href="/post-category/create">Create Category</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td>
                <a href="/post-category/update?id=<?= $category['id'] ?>">Update</a>
                <a href="/post-category/delete?id=<?= $category['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Admin Post - View</h1>
<a href="/admin/post/create">Create</a>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($data as $post): ?>
        <tr>
            <td><?= $post['id'] ?></td>
            <td><?= $post['title'] ?></td>
            <td><?= $post['content'] ?></td>
            <td><?= $post['author'] ?></td>
            <td>
                <a href="/admin/post/update?id=<?= $post['id'] ?>">Update</a>
                <a href="/admin/post/delete?id=<?= $post['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

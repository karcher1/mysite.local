<h1>Post - View</h1>
<a href="/post/create">Create</a>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post['id'] ?></td>
            <td><?= $post['title'] ?></td>
            <td><?= $post['content'] ?></td>
            <td>
                <a href="/post/update?id=<?= $post['id'] ?>">Update</a>
                <a href="/post/delete?id=<?= $post['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

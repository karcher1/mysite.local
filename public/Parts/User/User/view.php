<h1>User Controller - View</h1>
<a href="/user/create">Create</a>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['created_at'] ?></td>
            <td><a href="/user/update?id=<?= $user['id'] ?>">Update</a></td>
            <td><a href="/user/delete?id=<?= $user['id'] ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Admin User - View</h1>
<a href="/admin/user/create">Create</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($data as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['role'] ?></td>
            <td>
                <a href="/admin/user/update?id=<?= $user['id'] ?>">Update</a>
                <a href="/admin/user/delete?id=<?= $user['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

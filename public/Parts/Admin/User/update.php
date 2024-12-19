<h1>Update User</h1>
<form method="post" action="/admin/user/update?id=<?= $data['id'] ?>">
    <label>Name: <input type="text" name="name" value="<?= $data['name'] ?>"></label><br>
    <label>Email: <input type="email" name="email" value="<?= $data['email'] ?>"></label><br>
    <label>Role: <input type="text" name="role" value="<?= $data['role'] ?>"></label><br>
    <button type="submit">Save</button>
</form>

<h1>Update PostCategory</h1>
<form method="post" action="/admin/postcategory/update?id=<?= $data['id'] ?>">
    <label>Name: <input type="text" name="name" value="<?= $data['name'] ?>"></label><br>
    <label>Description: <textarea name="description"><?= $data['description'] ?></textarea></label><br>
    <button type="submit">Save</button>
</form>

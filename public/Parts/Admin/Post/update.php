<h1>Update Post</h1>
<form method="post" action="/admin/post/update?id=<?= $data['id'] ?>">
    <label>Title: <input type="text" name="title" value="<?= $data['title'] ?>"></label><br>
    <label>Content: <textarea name="content"><?= $data['content'] ?></textarea></label><br>
    <label>Author: <input type="text" name="author" value="<?= $data['author'] ?>"></label><br>
    <button type="submit">Save</button>
</form>

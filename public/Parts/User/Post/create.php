<h1>Create Post</h1>
<form method="POST" action="/post/create">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea>
    <br>
    <button type="submit">Create</button>
</form>

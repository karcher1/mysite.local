<h1>Create Gallery Item</h1>
<form method="POST" action="/gallery/create">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="image">Image:</label>
    <input type="text" id="image" name="image" required><br><br>

    <label for="category_id">Category ID:</label>
    <input type="number" id="category_id" name="category_id" required><br><br>

    <button type="submit">Create</button>
</form>

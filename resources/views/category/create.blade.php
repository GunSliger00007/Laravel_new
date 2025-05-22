<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Category Create</h1>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <label for="name">Title</label>
        <input type="text" name="title" placeholder="Enter the title">
        <br>
        <label for="slug">slug</label>
        <input type="text" name="slug" placeholder="Enter the slug">
        <br>
        <label for="rank">rank</label>
        <input type="number" name="rank" placeholder="Enter the rank">
        <br>
        <label for="image_file">image</label>
        <input type="file" name="image_file" placeholder="Enter the title">
        <br>
        <label for="description">description</label>
        <textarea name="description" id="description"></textarea>
        <br>

        <label for="status">status</label>
        <input type="radio" name="status" value="1">Active
        <input type="radio" name="status" value="0">Deactive
        <br>
        <button>Save category</button>
    </form>
</body>
</html>

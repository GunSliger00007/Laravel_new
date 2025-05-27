<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Edit</title>
</head>
<body>
<h1>Category Edit</h1>
<form action="{{ route('category.update',$category->id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH" />
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $category->title }}" placeholder="Enter title">
    @error('title')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <label for="slug">Slug</label>
    <input type="text" name="slug" value="{{ $category->slug }}" placeholder="Enter slug">
    @error('slug')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <label for="rank">Rank</label>
    <input type="number" name="rank" value="{{ $category->rank }}" placeholder="Enter rank">
    @error('rank')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <label for="image_file">Image</label>
    <input type="file" name="image_file">
    @error('image_file')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <label for="description">Description</label>
    <textarea name="description" id="description">{{$category->description}}</textarea>
    <br>
    <label for="status">Status</label>
    @if ($category->status == 1)
        <input type="radio" name="status" value="1" checked>Active
        <input type="radio" name="status" value="0">De-Active
    @else
        <input type="radio" name="status" value="1">Active
        <input type="radio" name="status" value="0" checked>De-Active
    @endif

    <br>
    <input type="submit" name="update" value="Update Category">
</form>
</body>
</html>

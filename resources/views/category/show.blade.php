<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Category</title>
</head>
<body>

<center><h1>Category Details</h1></center>

<table border="1" align="center" width="50%" cellpadding="10" cellspacing="0">
    <tr>
        <th>Title</th>
        <td>{{ $category->title }}</td>
    </tr>
    <tr>
        <th>Slug</th>
        <td>{{ $category->slug }}</td>
    </tr>
    <tr>
        <th>Rank</th>
        <td>{{ $category->rank }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td style="color: {{ $category->status == 1 ? 'green' : 'red' }}">
            {{ $category->status == 1 ? 'Active' : 'Deactive' }}
        </td>
    </tr>
    


</table>

<div style="text-align:center; margin-top:20px;">
    <a href="{{ route('category.index') }}" style="padding: 10px 20px; background: #333; color: white; text-decoration: none; border-radius: 5px;">Back to List</a>
</div>

</body>
</html>

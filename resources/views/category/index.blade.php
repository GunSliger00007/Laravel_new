<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category List</title>
</head>
<body>

<center><h1>Category List</h1></center>

{{-- Display success and error messages --}}
@if (session('error'))
    <div style="background:red;color:white; padding:10px; margin:10px auto; width:80%;">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div style="background:green;color:white; padding:10px; margin:10px auto; width:80%;">
        {{ session('success') }}
    </div>
@endif

<table border="1" align="center" width="80%" cellpadding="10" cellspacing="0">
    <tr style="background: #f2f2f2;">
        <th>SN</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Rank</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </tr>
    <a href=""

    @foreach($data as $key => $category)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->rank }}</td>
            <td style="color: {{ $category->status == 1 ? 'green' : 'red' }};">
                {{ $category->status == 1 ? 'Active' : 'Deactive' }}
            </td>
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at }}</td>
            <td>
                <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this category?');">
                </form>
                <a href="{{ route('category.show', $category->id) }}" style="padding:4px 8px; background:#2196F3; color:white; text-decoration:none; border-radius:4px;">Show</a>
                <a href="{{ route('category.edit', $category->id) }}"
                   style="padding:4px 8px; background:#FFC107; color:white; text-decoration:none; border-radius:4px;">Edit</a>

            </td>
        </tr>
    @endforeach
</table>

</body>
</html>

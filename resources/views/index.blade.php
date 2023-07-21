<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .add {
        display: none;
        float: right;
        margin-bottom: 10px;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container p-4">
        <div class="text-center">
            <h1>Text Editor CRUD and image upload in laravel</h1>
        </div>
        <a href="/create" class="add btn btn-primary">Add new Post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="show/{{ $post->id }}" class="btn btn-success">Show</a>
                        <a href="edit/{{ $post->id }}" class="btn btn-info">Edit</a>
                        <a href="delete/{{ $post->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
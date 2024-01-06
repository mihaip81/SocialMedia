<!DOCTYPE html>
<html>
<head>
    <meta chareset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <x-app-layout>
    </x-app-layout>

    <div>

        <table>
            <tr>
                <th>Description</th>

                <th>Image</th>

                <th>Update</th>

                <th>Delete</th>
            </tr>

            @foreach($post as $post)
            <tr>
                <td>{{$post->description}}</td>

                <td><img heigth=100px; width=100px; src="post/{{$post->image}}" alt=""></td>

                <td><a onclick="return confirm('Continue to update?!')"href="{{url('update_post',$post->id)}}">Update</a></td>

                <td><a onclick="return confirm('Delete for real?!');" href="{{url('delete_post',$post->id)}}">Delete</a></td>

            </tr>
            @endforeach
        </table>

    </div>

</body>
</html>
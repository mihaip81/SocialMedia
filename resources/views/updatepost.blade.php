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
    <div style="padding-left: 30%; padding-top: 3%;">
        <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            
            <div>
                <label for="">Description</label>
                <input type="text" name="description" value="{{$data->description}}">
            </div><br>

            <div>
                <label for="">My image</label>
                <img src="/post/{{$data->image}}" alt="no image to show" heigth="100px" width="100px">
            </div><br>

            <div>
                <label for="">Change photo</label>
                <input type="file" name="image">
            </div><br>

            <div>
                <input  type="submit" value="Update" id="" style="background: aquamarine; cursor:pointer; padding:5px; border-radius:7px">
            </div>
        </form>
    </div>

</body>

</html>
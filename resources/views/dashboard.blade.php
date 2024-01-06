<x-app-layout>

    

    <div style="padding-left: 30%; padding-top: 3%;">

        <form action="{{url('view_post')}}" method="get">

            @csrf

            <input type="submit" value="My post" style="background: aquamarine; cursor:pointer; padding:5px; border-radius:7px">
        </form>

        <label for="" style="padding-left:25%;">Add Post</label> <br><br>

        <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Description</label>
                <input type="text" name="description">
            </div> <br>

            <div>
                <label for="">Upload a Image</label>
                <input type="file" name="image">
            </div> <br>

            <div>
                <input type="submit" style="background: aquamarine; cursor:pointer; padding:5px; border-radius:7px">
            </div>

        </form>

    </div>

</x-app-layout>

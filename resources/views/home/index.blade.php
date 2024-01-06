<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>
    
    <nav>
        <label>SocialMedia</label>

        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>

            @if (Route::has('login'))

                @auth

                <li>
                <a href="{{ url('/dashboard') }}">{{ Auth::user()->name }}</a>
                </li>

                @else

            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>

             @endauth

            @endif

        </ul>
    </nav>

    @foreach($post as $post)

    <div style="text-align:center;">

        <label>{{$post->username}}</label>
        <p>{{$post->description}}</p>
        <img src="post/{{$post->image}}" alt="error image" heigth="100px" width="100%">
        <hr>
    </div>

    @endforeach

</body>
</html>
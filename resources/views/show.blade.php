<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class="edit">[<a href="/post/"{{ $post->id}}/edit>edit</a>]</p>
        <div class='posts'>
            <h2 class='title'>{{ $post->title}}</h2>
            <p class='body'>{{ $post->update_at }}</p>
            <p class='update_at'>{{ $post->update_at }}</p>
        </div>
        <div class='back'>
            <a href='/'>[back]</a>
        </div>
    </body>
</html>

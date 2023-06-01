<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.leaapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class="posts">
            @foreach ($posts as $post)
            <div class="post">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</br></a>
                    <p class='body'>{{ $post->body }}</p>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                    </form>
            </div></br>
            @endforeach
            <a>ログインユーザー:{{ Auth::user() ->name }}</a>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</x-app-layout>
</html>

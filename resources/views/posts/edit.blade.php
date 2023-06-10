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
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="content__title">
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}">
                    <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="content__body">
                    <h2>本文</h2>
                    <textarea name="post[body]" placeholder='今日もお疲れさまでした。'>{{ $post->body }}</textarea>
                    <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <div class="content_category_id">
                    <select name="post[category_id]">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
                <input type="submit" value="保存">
            </form>
            <div class='footer'>
                <a href="/posts/{{ $post->id }}">戻る</a>
            </div>
        </div>
    </body>
</x-app-layout>
</html>
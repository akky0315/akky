<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <x-slot name='header'>
    <head>
        <meta charset="utf-8">
        <title>Category</title>
        
        <!-- Fonts -->
        <link href="https://fonts.leaapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
        <h1>Blog Name</h1>
        <form action="/categories" method="POST">
            @csrf
            <div class="name">
                <h2>Name</h2>
                <input type="text" name="category[name]" placeholder="名前" value="{{ old('category.name') }}">
            </div>
            <input type="submit" value="保存">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
</html>
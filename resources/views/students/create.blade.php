<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.leaapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/students" method="POST">
            @csrf
            <div>
                <h2>名前</h2>
                <input type="text" name="student[name]" placeholder="名前"/>
            </div>
            <div>
                <h2>学年</h2>
                <input type="text" name="student[grade]" placeholder="学年"/>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>年齢</h2>
                <input type="text" name="student[age]" placeholder="年齢"/>
            </div>
            
            <div>
                <h2>好きな教科</h2>
                @foreach($categories as $category)
                    <label>
                        <input type="checkbox" value="{{ $subject->id }}" name="subjects_array[]">
                            {{ $subject->subject_name }}
                        </input>
                    </label>
                @endforeach
            </div>
            <input type="submit" value="保存">
        </form>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <form action="/posts/{{ $post->id }}" "method"=POST>
            @csrf
            @method('PUT')
            <div class="content__title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post.title }}"/>
            </div>
            <div class="body">
                <h3>Body</h3>
                <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。" value="{{ $post.body }}"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
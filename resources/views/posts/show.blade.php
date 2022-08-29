<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">{{ $post->title }}</h1>
        <div class='posts'>
            <div class="content">
                <div class="content_post">
                    <h3>本文</h3>
                    <p>{{ $post->body }}</p>
                    <p class="updated_at">{{ $post->updated_at }}</p>
                </div>
            </div>
        </div>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <!--<input type="button" style="display:none"/>-->
            <!--<p class="delete" onclick="return deletePost()";>[<span>削除</span>]</p>-->
            <button onclick="return deletePost()";>削除</button>
        </form>
        <div class="footer">
            <a href="/">back</a>
        </div>
        <script>
            function deletePost() {
                const confirm = window.confirm('本当に削除しますか？')
                if (confirm)  {
                    return true;
                    }
                return false;
            }
        </script>
    </body>
</html>
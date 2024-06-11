<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿画面</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[content]" placeholder="ここに内容を記入してください。"></textarea>
            </div>
            <div>
                <h2>Image</2>
                <input type="file" name="post[image]" placeholder="画像"/>
            <div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">投稿一覧ページ</a>
        </div>
    </body>
</html>
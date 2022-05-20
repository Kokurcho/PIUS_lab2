<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-xl-12 margin-tb">
            <div class="pull-center">
                <h2>Articles:</h2>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Code</th>
            <th>Tags</th>
        </tr>
        @foreach ($articles as $article)
        
            <tr>
                <td>{{ $article->author }}</td>
                <td>{{ $article->title }}</td>
                <td><a href="/posts/{{ $article->code }}">{{ $article->code }}</a></td>
                <td>
                    @foreach($article->tags as $tag)
                        <a href="/posts/?tag={{$tag->name}}">{{$tag->name}}</a>,
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
    </div>

</body>
</html>

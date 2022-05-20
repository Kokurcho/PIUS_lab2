<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">


                <h2>Title: {{ $article->title }}</h2>
                <h2>Author: {{$article->author}}</h2>
                <h2>Tags:</h2>
                <ul type="square">
                            @foreach($article->tags->sortBy("name") as $tag)
                        <li> {{  $tag->name}},</li>
                            @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        {{$article->contents}}
    </div>

    </div>

</body>
</html>
<html>
<head>
<title>Hello/Index</title>
<style>
body { font-size:16pt; color:#999; }
h1 { font-size:120pt; text-align:right; color:#fafafa; margin:-50px 0px -100px 0px ; }
</style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>foreachディレクティブの例</p>
    <ol>
    @foreach($data as $item)
    <li>{{$item}}
    </ol>
    @endforeach
</body>
</html>
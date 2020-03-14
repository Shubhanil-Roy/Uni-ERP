<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ $title }}</title>
</head>
<body>
<h1>{{ $heading}}</h1>
<div>
    <p>{{$content}}</p>
    @foreach($abc as $product)
    <p>ID: {{$product->id}}</p>
    <p>Name: {{$product->name}}</p>
    <p>Identity: {{$product->identity}}</p>
    @endforeach
</div>
</body>
</html>
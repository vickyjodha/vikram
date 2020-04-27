<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<ul>  
<div style="margin:20px 20px">
   @foreach($artical as $newArtical)
       <li>{{$newArtical->title}}</li>
        @foreach($artical->first()->tags as $tag) 
        <li>{{$tag->name}}</li>
        @endforeach 
    @endforeach 
    </div>
</ul>

</body>
</html>
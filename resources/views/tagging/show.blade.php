<!DOCTYPE html>
<html>
  <head>
    <title>asd</title>
  </head>
  <body>
  	

	@foreach($posts as $post)
		<h1>Tag: {{ $post->tag }}</h1>
    @endforeach
    
    
  </body>
</html>
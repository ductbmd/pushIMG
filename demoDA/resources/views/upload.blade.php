<!DOCTYPE html>
<html>
<head>
	<title>haha</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

</head>
<body>
<div class="row">
	<div class="col-md-6">
		{!! Form::open(['route' => 'upload.store', 'method'=> 'POST','files' => true,'class' => 'form-control']) !!}
        <div class="form-group">
            {!! Form::label('file', 'IMG File') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
          </div>
         <div class="form-group">
         	<button type="submit" class="btn btn-primary">Submit</button>
         </div>
         
			<br>
  {!! Form::close() !!}
	</div>
	
  <hr>
</div>
  
  @foreach($files as $file )
	<div class="row">
		<br><br><br>
		<img src="{{asset($file->url)}}" alt="" >
		
		
	</div>   
  @endforeach
</body>
</html>
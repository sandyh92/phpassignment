<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
	<h1>Hi there</h1>

	{{ Form::open(array('url' => 'foo/bar')) }}

	<?php 
		echo Form::label('email', 'E-Mail Address');

		echo Form::text('username');

		echo Form::text('email', 'example@gmail.com');

		echo Form::password('password');

		echo Form::file('image');

		echo Form::checkbox('name', 'value');
		echo Form::radio('name', 'value');
	 ?>
	
	{{ Form::close() }}
    
</body>
</html>


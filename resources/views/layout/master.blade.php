<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
	
	<link rel="stylesheet" type="text/css" href='{{ asset("css/bootstrap.min.css") }}'>

	<link rel="stylesheet" type="text/css" href='{{ asset("css/style.css") }}'>
</head>	
<body>
	<div class="container">
		<h1>Heading 1</h1>
		<hr>
		<div>
			<ul>
				<li>Link 1</li>
				<li>Link 2</li>
			</ul>
		</div>

		<div>
			<h3>Content goes here</h3>
			@yield("main_content")
		</div>
		<hr>
		<div>
			<h1>Footer</h1>
		</div>
	</div>
</body>
</html>
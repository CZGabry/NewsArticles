<html>
<head>
    <title><?=$this->e($title)?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form action="/logout">
    	<input type="submit" value="Logout" />
	</form>
	<form action="/">
    	<input type="submit" value="Home" />
	</form>

    <?=$this->section('content')?>
</body>
</html>

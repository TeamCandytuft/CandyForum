<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Roux Academy: Registration</title>
{{--<link href="{{ asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">--}}
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body>
    <h1> Log In</h1>
        {{ Form::open(array('url' => 'login')) }}
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username') }}
    
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        
            {{ Form::submit('Log In') }}

        {{ Form::close() }}
</body>
</html>
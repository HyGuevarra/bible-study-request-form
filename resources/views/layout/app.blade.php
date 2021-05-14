<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Study</title>

        <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">

    </head>

    <body>
    	<nav>
    		<div>
    			<ul>
    				<li><a href="bible-study-requests">Scheduled Request List</a></li>
    				<li><a href="bible-study-request-form">Request Form</a></li>
    			</ul>
    		</div>
    	</nav>

    	<div class="space"></div>

    	<h1>{{$title}}</h1>
        
        @yield('content')
    </body>
</html>
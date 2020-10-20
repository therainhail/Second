<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Document</title>
	@yield('style')
	@yield('style1')
	
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">CHEMK</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Home</a>
    <a class="p-2 text-dark" href="{{url('signin')}}" class="active">Login</a>
    <a class="p-2 text-dark" href="{{url('signup')}}" class="active">Registration</a>
  </nav>
</div>





@yield('form')
@yield('zagolovok')
@yield('privet')





</body>
</html>
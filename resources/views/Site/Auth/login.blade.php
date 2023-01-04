
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  @include('Admin.Partials.styles')
  <link rel="stylesheet" href="{{asset('css/loginsite.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form action="{{route('site.login.store')}}" method="POST" class="form">
            @csrf
			<input type="text" placeholder="Name" name="name">
			<input type="text" placeholder="CR Number" name="email">
			<button type="submit">Let ME In</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
<script  src="{{asset('js/loginsite.js')}}"></script>
 @include('Admin.Partials.scripts')
@if(Session::has('error'))
<script>
		toastr.options = {
			"closeButton": true,
			"progressBar": true
		}
		toastr.error("{{ Session::get('error') }}");
</script>
@endif


</body>
</html>

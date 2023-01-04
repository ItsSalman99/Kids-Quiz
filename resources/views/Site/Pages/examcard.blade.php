<!doctype html>
<html lang="en">

<head>
	@include('Admin.Partials.styles')
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="{{asset('backoffice/assets/images/icons/korean.png')}}" class="logo-icon" alt="logo icon">
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<!-- <img src="{{asset('backoffice/assets/images/icons/korean.png')}}" class="logo-icon" alt="logo icon"> -->
									</div>

									<div class="form-body">
										<table class="table table-hover">
											<thead>
												<tr>
													<td>Student Name :  @foreach($user as $users) 
														{{$users->name}}
														@endforeach </td>
														@foreach ($schedule as $schedules)
													<td>Exam Time : {{$schedules->exam->exam_duration}} Mins</td>
												</tr>
												
												<tr>
													<td>Course: {{$schedules->batch->course}}
												</td>
													<td>Total Questions :{{count($schedules->exam['question'])}} </td>
												</tr>
												<tr>
													<td>Exam Name: {{$schedules->exam->exam_name}}</td>
													<td>Attempt Questions: {{count($schedules->exam['question'])}}</td>
												</tr>
												<tr>
													<td>Exam Note:</td>
													<td>{{$schedules->exam->exam_note}} </td>
												</tr>
												<tr>
													<td></td>
													<td><a href="{{route('site.exam.view',$schedules->exam->id)}}" class="btn btn-primary btn-sm">Start Exam</a></td>
												</tr>
												@endforeach
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
</body>

</html>
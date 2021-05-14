@extends('layout.app')

	<div class="space"></div>

	<div class="daily-verse" id="ourmanna-verse">Loading...</div>
	<script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>

@section('content')

	<form action="{{route('request.details')}}" method="POST">
		@csrf
		<label for="cname">Complete Name:</label><br>
		<input type="text" id="cname" name="cname"><br>

		<label for="email">Email Address:</label><br>
		<input type="email" id="email" name="email"><br>

		<label for="contactnum">Contact Number:</label><br>
		<input type="number" id="contactnum" name="contactnum"><br>

		<label for="bdate">Birthdate:</label><br>
		<input type="date" id="bdate" name="bdate"><br>

		<label for="religion">Religious Affiliation:</label><br>
		<input type="text" id="religion" name="religion"><br><br>

		<label for="bsdate">Bible Study Date:</label><br>
		<input type="date" id="bsdate" name="bsdate"><br>

		<label for="bstime">Bible Study Time:</label><br>
		<input type="time" id="bstime" name="bstime"><br>

		<label for="bslocation">Bible Study Location/Address:</label><br>
		<input type="text" id="bslocation" name="bslocation"><br><br><br>

		<input type="submit">
	</form>

@endsection
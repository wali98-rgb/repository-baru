<!DOCTYPE html>
<html>
<head>
	<title>Laravel Vue SPA</title>
	<style>
		body {
			font-family: sans-serif;
			margin: 15%
		}
	</style>
</head>
<body>

	<div id="app">
		<h1>Hello, Laravel</h1>
		<header-component></header-component>
		<example-component></example-component>
		<footer-component></footer-component>
	</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@viteReactRefresh
	@vite('resources/js/app.jsx', 'vendor/courier/build')
	@inertiaHead
</head>
<body>
	@inertia
</body>
</html>
@php
use Illuminate\Support\Facades\Vite;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@viteReactRefresh
	@production
		<script type="module" src="{{ secure_asset('build/assets/app-DE27JBqm.js') }}"></script>
	@else
		@vite('resources/js/app.jsx', 'build/')
	@endproduction
	@inertiaHead
</head>
<body>
	@inertia
</body>
</html>
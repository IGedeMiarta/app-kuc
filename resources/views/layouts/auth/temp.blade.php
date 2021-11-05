<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title }}</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="image/png" />
    <!-- loader-->
    <link href=" {{ asset('/css/pace.min.css') }} " rel="stylesheet" />
    <script src="{{ asset('/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>

@yield('content')

<script>
	window.fwSettings={
	'widget_id':73000000396
	};
	!function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}() 
</script>
<script type='text/javascript' src='https://widget.freshworks.com/widgets/73000000396.js' async defer></script>
</html>

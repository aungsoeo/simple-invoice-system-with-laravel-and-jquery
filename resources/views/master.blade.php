<html>
<head>
		<meta charset="UTF-8">
	<title>Laravel Example</title>
	<link rel="stylesheet" type="text/css" href="<?= URL::asset('css/bootstrap.min.css') ?>">
	<script type="text/javascript" src="<?= URL::asset('js/app.js') ?>"></script>
	<script type="text/javascript" src="<?= URL::asset('js/vue.min.js') ?>"></script>
</head> 
<body>
<section class="content">

    @yield('content')

    </section>
    </body>
</html>
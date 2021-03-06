<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sistema de Alertas Tempranas (SAT)">
	<meta name="author" content="Universidad Tecnologica de Bolivar">

	<title>Iceberg(Fundacion Puerto Bahía)</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-extend.min.css">
	<link rel="stylesheet" href="/css/site.min.css">
	<link rel="stylesheet" href="/css/cyan.min.css">
	<!-- Plugins -->
	<link rel="stylesheet" href="/vendor/animsition/animsition.css">
	<link rel="stylesheet" href="/vendor/asscrollable/asScrollable.css">
	<link rel="stylesheet" href="/vendor/switchery/switchery.css">
	<link rel="stylesheet" href="/vendor/intro-js/introjs.css">
	<link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
	<link rel="stylesheet" href="/vendor/flag-icon-css/flag-icon.css">
	<link rel="stylesheet" href="/vendor/chartist-js/chartist.css">
	<link rel="stylesheet" href="/vendor/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
	<link rel="stylesheet" href="/css/v1.css">
	<link rel="stylesheet" href="/css/profile.min.css">
	<link rel="stylesheet" href="/css/team.min.css">
	<link rel="stylesheet" href="/css/select2.min.css">
	<link rel="stylesheet" href="/css/override.css">
	<!--TOAST CSS-->
	<link rel="stylesheet" href="/css/angular-toastr.css">
	<!-- Fonts -->
	<link rel="stylesheet" href="/fonts/weather-icons/weather-icons.css">
	<link rel="stylesheet" href="/fonts/web-icons/web-icons.min.css">
	<link rel="stylesheet" href="/fonts/brand-icons/brand-icons.min.css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<link rel="icon" href="/img/logo.png">
	<!--[if lt IE 9]>
    <script src="/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
	<!--[if lt IE 10]>
    <script src="/media-match/media.match.min.js"></script>
    <script src="/respond/respond.min.js"></script>
    <![endif]-->

	<!--base href="/"-->
</head>

<body class="dashboard dashboard site-menubar-unfold" ng-app="icebergApp">
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


	<div ui-view></div>

	<!-- /#wrapper -->

	<script>
		apiUrl = "{{$apiUrl}}";
	</script>

	<!-- jQuery -->

	<!-- Core  -->



	<!-- Angular libs -->
	<script src="/bower_components/angular/angular.min.js"></script>
	<script src="/bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
	<script src="/bower_components/angular-animate/angular-animate.min.js"></script>
	<script src="/bower_components/angular-toastr/dist/angular-toastr.tpls.min.js"></script>
	<script src="/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
	<script src="/bower_components/angular-click-outside/clickoutside.directive.js"></script>
	<script src="/bower_components/lodash/dist/lodash.min.js"></script>
	<script src="/bower_components/amitava82-angular-multiselect/dist/multiselect-tpls.js"></script>
	<!-- Module registration -->
	<script src="/js/app/moduleRegistration.js"></script>
	<!-- Module Services -->

	<script src="/js/app/moduleRegistration.js"></script>
	<script src="/js/app/services/authService.js"></script>
	<script src="/js/app/services/zonaService.js"></script>
	<script src="/js/app/services/beneficiarioService.js"></script>
	<script src="/js/app/services/perfilService.js"></script>
	<script src="/js/app/services/programaService.js"></script>
	<script src="/js/app/services/objetivoService.js"></script>
	<script src="/js/app/services/indicadorService.js"></script>
	<script src="/js/app/services/actividadService.js"></script>

	<script src="/js/app/controllers/mainController.js"></script>
	<script src="/js/app/controllers/loginController.js"></script>
	<script src="/js/app/controllers/zonaController.js"></script>
	<script src="/js/app/controllers/beneficiarioController.js"></script>
	<script src="/js/app/controllers/perfilController.js"></script>
	<script src="/js/app/controllers/programaController.js"></script>
	<script src="/js/app/controllers/objetivoController.js"></script>
	<script src="/js/app/controllers/actividadController.js"></script>
	<script src="/js/app/controllers/indicadorController.js"></script>
	<script src="/js/app/app.js"></script>

	<!-- Module App -->

	<script src="/js/app/app.js"></script>

</body>

</html>

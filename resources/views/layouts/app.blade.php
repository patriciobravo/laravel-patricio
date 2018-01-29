<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Asistencia en Viajes | EStoyseguro.cl</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 

       
    </head>
    <body>
	<div class="clearfix"></div>
	<div id="viaje" class="container" style="margin-top: 50px;">    
       <!--<viajes></viajes>-->
       
    </div>  
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @yield('content')	
                <div class="panel-body">
                </div>
        </div>
    </div>
</div>  
			
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

                 <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  @yield('script')
    </body>
</html>

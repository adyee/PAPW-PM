<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{csrf_token()}}"/>

        <!-- CSS -->
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/style.css">
        
        <!-- SCRIPTS -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript"></script>

	<title>E-MAIL TEMPLATE</title>

    <style>
            html, body {
                color: #fff;
                font-family: 'Bembo Std', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }
        </style>

</head>
<body style="background-color: #003a70 ">

<!--Copia desde aquí-->
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
	<tr>
		<td style="background-color: #ecf0f1; text-align: left; padding: 0">
			<a href="https://www.yale.edu/">
				<img width="20%" style="display:block; margin: 1.5% 3%" src="assets/logo2.jpg">
			</a>
		</td>
	</tr>

	<tr>
		<td style="padding: 0">
			<img style="padding: 0; display: block" src="https://pbs.twimg.com/media/D8ZubgYU0AA1-Kp?format=jpg&name=900x900" width="100%">
		</td>
	</tr>
	
	<tr>
		<td style="background-color: #ecf0f1">
			<div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;">
				<h2 style="color: #003a70; margin: 0 0 7px">Incoming consultation!</h2>
				<p class="center" style="margin: 2px; font-size: 30px">
                 "Lux et veritas"
                «Luz y verdad»</p>
				<ul style="font-size: 15px;  margin: 10px 0">
					<li><p><strong>Name:</strong></p></li>
					
				</ul>
				<div style="width: 100%;margin:20px 0; display: inline-block;text-align: center">
					<img style="padding: 0; width: 200px; margin: 5px" src="https://www.nornow.org/wp-content/uploads/3__DSC9912_printroom72dpi.jpg">
					<img style="padding: 0; width: 200px; margin: 5px" src="https://d2w9rnfcy7mm78.cloudfront.net/2971289/original_0f9ffe1a4ff1efc575b5f0b77c3f543c.jpg?1541118110">
				</div>
				<div style="width: 100%; text-align: center">
					<a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #ffc200" href="https://www.yale.edu/">Go to page</a>	
				</div>
				<p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">Yale School of Art 2019 @ PAPW2/PM Project</p>
			</div>
		</td>
	</tr>
</table>
<!--hasta aquí-->

</body>
</html>

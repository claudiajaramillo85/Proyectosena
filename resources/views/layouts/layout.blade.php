<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container-fluid" style="margin-top: 100px">

		@yield('content')
	</div>
	
	<style>
            html, body {
                
                background-image: url(imgs/fotofondo.png);
                background-size: 100%; width: auto; height: auto;  
                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .background{
                background-image: url(imgs/fotofondo.png);
                
                color: #636b6f
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                
                
            }

            .title {
                font-size: 84px;
                color: #fc7323;
            }

            .links > a {
                color: #238276;
                padding: 0 25px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</body>
</html>
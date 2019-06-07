<!doctype html>
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
            
        <!--<script>
            $(document).ready(function(){
                
                    alert("This web page is made for educational purposes for the only period of time of: January - May of 2019."); 
                    alert("I don't own the rights of anything nor the image of the public figure that is being used for this project");                        
                
            });
            
        </script>-->

        <title>PAPW2 - PM Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="...public/artpage.ico">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("assets/yale2.jpg");
                background-size: cover;
                color: #fff;
                font-family: 'Bembo Std', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }
            
            .full-height {
                height: fixed;
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
                right: 0;
                top: 0;
            }

            .content {
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <div class="centerall">
            <h1 class="white-text">Register Form</h1>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div id="#reglogo" class="row">
                    <img src="assets/flag_reg.png" height="350" width="250">
                </div>
            
                
            <div class="right container">
                    <div class="row">
                        <form id= "form_register" class="col s4 l12 l3">
                           <div class="row">
                                <div class="input-field col s12 l6">
                                    <i class="small material-icons prefix">account_circle</i>
                                    <input id="user" class="white-text" type="user" name="name" placeholder="Full Name" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 l6">
                                <i class="small material-icons prefix">email</i>
                                    <input id="email" class="white-text" type="email" name="email" placeholder="E-mail" class="validate">
                                </div>
                            </div>
                        
                
                    <div class="row">
                        <div class="input-field col s12 l6">
                                <i class="small material-icons prefix">vpn_key</i>
                                <input id="password" class="white-text" type="password" name="password" placeholder="Password" class="validate">
                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6">
                                <i class="small material-icons prefix">vpn_key</i>
                                <input id="password_match" class="white-text" type="password" placeholder="Match Password" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="center col s7">
                            <a href="{{url('/')}}" class="waves-effect waves-light btn-small">CANCEL</a>
                            <button type="submit" class="waves-effect waves-light btn-small">REGISTER</button>
                        </div>
                    </div>  
                             <br/> 
                        </form> 
                    </div>
        
            </div>
            
            
          <script>
        $(document).ready(function(){
            
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
            });

            $('#form_register').submit(function(event){
                event.preventDefault();
                
                var check=$('#password').val();
                var match=$('#password_match').val();
                
                if (check != match){
                    alert("Passwords do NOT match");
                }

                else{

                    var values = {
                        'name': $('#user').val(),
                        'email': $('#email').val(),
                        'password': $('#password').val()
                    }

                    $.ajax({
                    type: 'POST',
                    url: "{{route('user.register')}}",
                    data: values,
                    success: function(response) {
                        if (response.status == "error") {
                            alert(response.mensaje);
                        } else {
                           window.location.href = "{{route('dash.page')}}";
                        }
                    },
                    error: function(xhr, ajaxoptions, thrownError) {
                        alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr
                            .responseText);

                    }
                });
                }
                
                    
                });
        });
    </script>
            
            
        </div>
    </div>
    </body>
</html>

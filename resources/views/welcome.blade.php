<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{csrf_token()}}"/>
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/materialize.css">
        
        
        <!-- SCRIPTS -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript"></script>
            

        <title>PAPW2 - PM Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="...public/artpage.ico">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("assets/yale1.jpg");
                background-size:cover;
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
        
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="row">
                    <img src="assets/flag.png" height="300" width="300">
                </div>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="small material-icons prefix">email</i>
                                    <input id="email" class="white-text" type="email" name="email" placeholder="E-mail" class="validate">
                                </div>
                            </div>
                    <div class="row">
                        <div class="input-field col s12">
                                <i class="small material-icons prefix">vpn_key</i>
                                <input id="password" class="white-text" type="password" name="password" placeholder="Password" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <a id="btn_LogIn" class="waves-effect waves-light btn-small">Log In</a>
                        </div>
                    </div>  
                             <br/> 
                            <div class="row">
                        <div class="col s12">
                            <a href="{{url('REG')}}" class="waves-effect waves-light btn-small">Register</a>
                        </div>
                    </div>
                            <br/> 
                        </form> 
                    </div>
                <div class="row">
                        <a style="font-size: 2em; color: yellow;" href="{{url('DASH')}}">No, thanks!</a>
                </div>
        
            </div>
        </div>


        <script>
            $(document).ready(function(){
                
                    alert("This web page is made for educational purposes for the only period of time of: January - May of 2019."); 
                    alert("I don't own the rights of anything nor the image of the public figure that is being used for this project");                        
                
            });
            
        </script>

        <script>
            $(document).ready(function(){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                
                
                $('#btn_LogIn').click(function(){
                
                     var values = {
                        
                             'email': $('#email').val(),
                             'password': $('#password').val()
                        
                     }
                    
                     $.ajax({
                         
                         type: 'POST',
                         url: '{{route('user.login')}}',
                         data: values,
                         success: function(response){
                             if(response.status == "error"){
                                 alert('Tu usuario o contraseña estan incorrectos');
                             }else{
                                window.location.href = '/DASH';
                             }
                         },
                         error: function(xhr, ajaxoptions, thrownError){
                             alert(thrownError+'\r\n'+xhr.statusText+'\r\n'+xhr.responseText);
                             
                         }
                        
                     });
                    
                });                       
                
            });

            </script>
        
    </body>
</html>

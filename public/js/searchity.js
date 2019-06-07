//CREAR UNA BUSQUEDA
$("#search").keyup(function(event) {
            
    if (event.keyCode === 13) {
        
        var word = $(this).val();
        
        if(word != ""){
                    
                    var values = {
                        'text': word
                    };

                    $.ajax({
                type: 'POST',
                url: "{{route('user.search')}}",
                data: values,
                async: false,
                success: function(response) {
                    if (response.status == "error") {
                        
                        alert(response.mensaje);
                    }
                    else{
                        window.location.href = "{{route('search.page')}}";
                        
                    }

                },
                error: function(xhr, ajaxoptions, thrownError) {
                    alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr
                    .responseText);

                }
            });
        }
    }
    });
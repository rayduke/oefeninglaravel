

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Test object versturen</title>

  <script>
    function sendobject(){
        var auto = {};
        auto.name = 'Opel';
        auto.color = 'black';
        auto.weight = '1050kg';
        
        console.log(auto);
        
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

 

        $.ajax({
              type: 'POST',
              url: '/raymon',
              data: auto,
              success: function(response){ // What to do if we succeed
                console.log(response);
                $('#postRequestData').html(response);
              }
            });

          
        };
//        
//        var xml = new XMLHttpRequest();
//     
//            xml.onreadystatechange = function (){
//                if(xml.readyState === 4 && xml.status === 200){
//
//                    console.log(this.responseText);
//                }
//            };
//
//                var data = JSON.stringify(auto);
//                xml.open("POST", "raymon", true);
//                xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//                xml.send("raymon="+data);
//    }
    
    sendobject();
  </script>


</head>

<body>
  
</body>
</html>



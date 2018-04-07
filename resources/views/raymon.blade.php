

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Test object versturen</title>

  <script>
    function sendobject(){
        var auto = {};
        auto.name = 'Opel';
        auto.color = 'black';
        auto.weight = '1050kg';
        
        console.log(auto);
        
        
        var xml = new XMLHttpRequest();
     
            xml.onreadystatechange = function (){
                if(xml.readyState === 4 && xml.status === 200){

                    console.log(this.responseText);
                }
            };

                var data = JSON.stringify(auto);
                xml.open("POST", "raymon", true);
                xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xml.send("raymon="+data);
    }
    
    sendobject();
  </script>


</head>

<body>
  
</body>
</html>



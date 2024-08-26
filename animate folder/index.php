<html>
<head>
    <title>ajax</title>
   
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
      </script>
     </head>
    
    
    <body>
    
      
        <p></p>
        
        <script type = "text/javascript">
        
        $.ajax("info.txt").done(function(data){
            $("p").html(data);
        })
            .fail(function(){
            alert("could not load data");
        });
        
        </script>
    
    
    </body>
    


</html>
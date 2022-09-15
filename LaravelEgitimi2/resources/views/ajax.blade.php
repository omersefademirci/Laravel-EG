<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <input type="text" id="name" placeholder="Adınız">
    <button id="gonder">Gonder</button>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('#gonder').click(function(){
            $.ajax({
                url:"{{route('ajax.post')}}",
                headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
                method:"POST",
                success:function(result){
                    console.log(result);
                }
            });
        });
    });
</script>
</body>
</html>
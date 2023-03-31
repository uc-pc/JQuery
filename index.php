<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <a href="javascript:void(0)" onclick="click_here()" accesskey="h">Click Here</a>
    <script>
        function click_here(){
            jQuery.ajax({
                url:'demo.php',
                type:'POST',
                success:function(result){
                    alert(result);
                }
            })
        }
    </script>
</body>
</html>
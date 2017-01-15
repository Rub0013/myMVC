<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src='http://localhost/mvc/jquery-3.1.0.min.js'></script>
</head>
<body>
    <div>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="pass" placeholder="password"><br>
        <input type='submit' name='submit'>
    </div>
    <script>
        $(document).ready(function(){
            $('[name="submit"]').click(function(){
                var email=$("[name='email']").val();
                var pass=$("[name='pass']").val();
                $.ajax({
                    url:'http://localhost/mvc/controllers/controller_reg.php',
                    type:'POST',
                    data:{'email':email,'pass':pass,'q':'registrate'},
                    success:function (register)
                    {
                        if(register=='registered')
                        {
                           alert('ok');
                        }
                        else
                        {
                            alert('error');
                        }
                    }
                 });
            });
        });
    </script>
</body>
</html>
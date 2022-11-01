<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viweport" content="width=device-width, initial-scale=1">
    <style>
        .flex-container{
            display: flex;
            text-align: center;
        }
        
        .flex-child{
            flex: 1;
            text-align: center;
            padding: 5%;
            border: 2px solid white;
        }
        
        .green{
            background-color: rgb(88, 223, 97);
        }
        
        .yellow{
            background-color: rgb(221, 255, 0);
        }
        
        .form-style{
            padding: 8%;
            box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.2);
        }
        
        .login-btn{
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            border: none;
            cursor: pointer;
            color: white;
            background-color: black;
        }
    </style>
    <title>Login Form_1</title>
</head>

<body>
    <div>
        <div class="flex-container">
            <div class="flex-child green">
                <form action="insert.php" method="post">
                    <fieldset>
                        <legend>
                            <h2>Student Login</h2>
                        </legend>
                        <div class="form-style">
                            <input type="text" name="name" placeholder="Enter Email">
                        </div>
                        <label></label>
                        <div class="form-style">
                            <input type="password" name="pass" placeholder="Enter Password">
                        </div>
                        <label></label>
                        <div class="form-style">
                            <input type="submit" name = "submit" class="login-btn" value="Login">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="flex-child yellow">
                <form action="insert.php" method="post">
                    <fieldset>
                        <legend>
                            <h2>Administrator Login</h2>
                        </legend>
                        <div class="form-style">
                            <input type="text" name="name" placeholder="Enter Email">
                        </div>
                        <label></label>
                        <div class="form-style">
                            <input type="password" name="pass" placeholder="Enter Password">
                        </div>
                        <label></label>
                        <div class="form-style">
                            <input type="submit" name = "submit" class="login-btn" value="Login">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Лабораторная работа №4</title>
    <style>
        .MySpan{
            color: green;
        }
        .MySpan2{
            color: red;
            margin-left: 40%;
        }
        .NewForm{
            position: absolute;
            margin-left: 70%;
        }
        .MyButton{
            margin-left: 57.5px;
        }
    </style>
</head>

<body>
    <form class="NewForm" action="File.php" method="POST">
            <div>      
                <input type="text" id="MyLogin" name="Login" placeholder="Login" required>
            </div>
            <div class="form-group">                
                <input type="text" id="MyPassword" name="Password" placeholder="Password" required >            
            </div>
            <div>
                <button class="MyButton" type="submit" name="SubmitButton">Submit</button>
            </div>
            
        </form>
    <?php
    print_r("Проверка правильности установки PHP!<br>");
    print_r("<br>");
    ?>
    Тест 1: 
    <?php
    echo "Hello, World!<br>"
    ?>
    Тест 2:
    <?php echo 2+2;
    echo "<br>";
    
    ?>
    <?php
        $file = file_get_contents('./Data.txt', true);
        echo "Содержимое файла: $file<br>";
        $Array = explode(" ", $file);
        echo "Логин: $Array[0]<br>";
        echo "Пароль: $Array[1]<br>";
    $LoginForm = Array();
    
    if(isset( $_POST['SubmitButton'])){
        $LoginForm = [
            $_POST['Login'],
            $_POST['Password']
        ];
        if($LoginForm[0]==$Array[0] && $LoginForm[1]==$Array[1])
        {
//            echo "<span class='MySpan'>Вы уже зарегестрированы!</span><br>";
            echo "<script>alert('Вы уже зарегестрированы!!!')    </script><br>";
            
            
        }
    else {
//        echo "<span class='MySpan2'>Неправильно введен логин или пароль!</span><br>";
        echo "<script>alert('Неправильно введен логин или пароль!!!')    </script><br>";
    }
        
    }
    ?>
</body>

</html>
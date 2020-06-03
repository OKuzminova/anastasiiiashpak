<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Anastasiiiashpak - Форма регистрации</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
          .forma input:focus {
        border-color: black;
      	box-shadow: black 3px 2px 5px;
      }
    .bloc-6-txt a{
	color: #D88658;
	text-decoration: none;
}
    @media screen and (max-width: 640px) {
    .block-6{
      height:800px;
    }
.block-6-content{
	padding-top: 1%;
	margin-left: 0%;
	width: 100%;
}
      .forma tr td{
        padding-bottom: 2%;
      }
.forma input{
			height: 20px;
      }
      .btn-3{
        width: 75%; border: none;
      }
    }
@media screen and (max-width: 420px) {    	
      .block-6{
		padding-bottom: 1%;
	    height: 800px;
	}
            .btn-3{
        width: 75%; border: none;
        height: 50px;
      }
    }
  </style>
</head>
<body>
	      <!--РЕГИСТРАЦИЯ-->
  <div class="block-6" style="">
        <div class="block-6-content">
        	<div class="bloc-6-txt">

					<form method="post" action="form-reg.php">
					<table class="forma">
						<tr>
							<td colspan="2"><a name="reg-form"></a><h2>РЕГИСТРАЦИЯ</h2></td>
						</tr>
						<tr>
							<td><p>Ф.И.О.*</p></td><!--__Поле таблицы №1___-->
							<td><input type="text" name="name" placeholder="Введите имя" class="one"></td>
						</tr>
						<tr>
							<td align="left"><p>Ваш инстаграм*</p></td><!--__Поле таблицы №2___-->
							<td><input type="text" name="inst" placeholder="Введите никнейм"></td>
						</tr>
						<tr>
							<td><p>Телефон*</p></td><!--__Поле таблицы №3___-->
							<td><input type="tel" name="tel" placeholder="+7 (978) 000-00-00" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"></td>
						</tr>
						<tr>
							<td><p>Почта</p></td><!--__Поле таблицы №4___-->
							<td><input type="text" name="email" placeholder="E-mail"></td>
						</tr>
						<tr>
							<td colspan="2"><!--<span>Если вы согласны на обрботку ваших персональных данных нажмите кнопку "Оплатить"</span>-->
                              <span>Ваша заявка обрабатывается менеджером вручную. До&nbsp;11&nbsp;июня Вас обязательно добавят в чат и аккаунт, где будет проходить марафон. Если у вас появились вопросы, пожалуи&#774;ста, обращаи&#774;тесь на почту <strong><a href="mailto:shpak.coach@list.ru" title="Anastasia Shpak">shpak.coach@list.ru</a></strong>.
                                Пожалуи&#774;ста, внимательно проверьте правильность заполнения всех контактных данных. Спасибо!</span>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<!--<p class="btn-3"><a href="https://money.yandex.ru/to/410018753700186" title="Оплатить" target="_blank">Оплатить | 990 &#8381;</a></p>-->
                              <button class="btn-3" name="add" type="submit" value="Отправить" style=" "><b  title="Отправить">Оплатить | 990 руб.</b></button>
							</td>
						</tr>
					</table>
				</form>
        	</div>
        </div>
      </div>
      <!--END РЕГИСТРАЦИЯ -->
        	<div class="footer">
      		<p>© 2020</p>
      	</div>
<?php 
 	$host = "a286586.mysql.mchost.ru";
    $database = "a286586_2";
	$username = "a286586_2";
	$password = "j7hWa1wDuP";
	
	$link = mysqli_connect($host, $username, $password, $database) or die("Не могу создать соединение");
	mysqli_select_db($link, $database) or die(mysqli_error());
//  mysqli_query("SET NAMES 'utf8' ");
//mysqli_query("set names 'utf8'",  $link);
//mysqli_query("set character_set_server=utf8", $link);
//  mysqli_query("SET character_set_server = 'utf8'", $link);
 mysqli_set_charset("utf8");
//    mysqli_character_set_name($link);
//mysqli_set_charset('utf8',$link);
    $name = $_POST['name'];
    $inst = $_POST['inst'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
   
	if ( $_POST['add'] ) {
      if(  ($name != null) && ($inst != null) && ( $tel != null) ) { 
	        echo "<script>alert('Ваша заявка отправлена успешно!</script>";
              header('Location: https://money.yandex.ru/to/4100115332523129');
			$sql = mysqli_query($link, "INSERT INTO `new_user_2` (`name`, `inst`, `tel`, `email`)
						VALUES(' ".$name." ', ' ".$inst." ', ' ".$tel." ', ' ".$email." ')")or die( "<script>alert('Произошла ошибка. Попробуйте еще раз')</script>");

	      	$to = "o.kuzminova2015@yandex.ru";
            $to2 = "shpak.coach@list.ru";
          $to3 = "olga777kuz@rambler.ru";
	      	$subject = 'New people!';
        /* $message= "--------Запись нового пользователя--------\n\nИмя: ".$name."\nИнстаграм: ".$inst."\nТелефон: ".$tel."\nE-mail: ".$email;*/
          $message= "Имя: ".$name."\nИнстаграм: ".$inst."\nТелефон: ".$tel."\nПочта: ".$email;
         $message2= "Имя: ".$name."\nИнстаграм: ".$inst."\nТелефон: ".$tel;
	      	$headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // charset=iso-8859-1
        $headers2 = "From: o.kuzminova2015@yandex.ru <o.kuzminova2015@yandex.ru>\r\nContent-type: text/plain; charset=utf-8 \r\n"; //charset=windows-1251 \r\n"
           $headers3 = "From:" ."o.kuzminova2015@yandex.ru";
           $headers4 =  "Content-type:text/plain; charset = utf-8\r\nFrom:$to";
	       	mail($to, $subject, $message, implode("\r\n", $headers));
        	mail($to2, $subject, $message2, implode("\r\n", $headers));
            mail($to3, $subject, $message, $headers4);
       }
        else { 
          echo "<script>alert('Вы заполнили не все обязательные поля для ввода. Попробуйте еще раз!')</script>";
        }

            mysqli_commit($link);
      mysqli_close();
	} 
 ?>
</body>
</html>
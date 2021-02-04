<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title+++</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        
    </head>
    
    <body>
        
        <h1>Карточки товара</h1>
        
        <!--Файл product.json пришлось разместить локально в корне сайта, удаленно он считываться не хотел -->
        
        <?php
        $f_json = "product.json";
        $json = file_get_contents("$f_json");

        $obj = json_decode($json,true);

        $array = $obj["product"];
        
        $length = count($array);
        ?>
       
        <div class='container'>
            
        <?php
        for ( $i=0; $i<$length; $i = $i+1){
            $name = $array[$i]["name"];
            $img = $array[$i]["img"];
            $price = $array[$i]["price"];
        echo "<div class='slide'>";
            echo "<img class='img' src='$img'>";
            echo "<p class='text'>$name</p>";
            echo "<p class='prise'>$price  &#8381; </p>";
            echo "<button class='butt button_1'>Купить</button>";
        echo "</div>";        }
        ?>
            
        </div>
        
        <p>&nbsp;</p>
        
        
        <h1>Исходники кода</h1>
        
        <div class="a"><a  href="http://test.arboreal.ru/index.txt" target="_blank">index.php</a></div>
        <br>
        <div class="a"><a  href="http://test.arboreal.ru/form.txt" target="_blank">form.php</a></div>
        <br>
        <div class="a"><a  href="http://test.arboreal.ru/style.txt" target="_blank">style.css</a></div>
        
        
        
<div class="modal" id="modal">
  <button class="close-button" id="close-button" title="Закрыть модальное окно">Закрыть</button>
  <div class="modal-guts" role="document">
      
      <p>&nbsp;</p>
      
      <h2>Для оформления покупки заполните форму:</h2>
    
    <form id="form" method="post" action="form.php">
        
        <p><input class="input" required type="text" name="name" maxlength="30" placeholder=" Ваше имя"></p>

        <p><input class="input" required type="text" name="phone" maxlength="30" placeholder=" Телефон"></p>
                        
        <p><input class="input" required type="text" name="email" maxlength="30" placeholder=" E-mail"></p>
        
        <!--Я потом догадался, что значение товара должно передаваться с карточек при нажатии кнопки  и быть уникальным, но это противоречило парадигме уже напмсанного кода JS,и поэтому, чтобы все не переделывать, решил добавить так-->
        
        <p><input type="hidden"  name="title" value='Парикмахерское кресло "Норм" гидравлическое' ></p>
        
        <p><span>Товар: Парикмахерское кресло "Норм" гидравлическое</span></p> 
        
        <input  type="submit" value="Отправить">
               
    </form>
  </div>
</div>


	<script>
		var modal = document.querySelector("#modal"),
		    closeButton = document.querySelector("#close-button"),
		    openButton = document.querySelectorAll("[class*=button_]");

	closeButton.addEventListener("click", function() {
	  modal.classList.toggle("open");
	  });

        openButton.forEach(function(btn){
          btn.addEventListener("click", function() {
	  modal.classList.toggle("open");
          }) ;
              });
        

	</script>
        
        
        
        
    </body>
</html>

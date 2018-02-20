<!doctype html>
<html>
    <head> 
    <title> Bubble Sort </title>
    <link rel = "stylesheet"  href = "style.css"/>
   
    </head>
    <body>
    <h1> Bubble Sort </h1>
        <form method = "post" action = "bolha2.php">
            <?php
            for ($x = 0; $x < 7; $x++){
                echo"<input type = 'text' class = 'input' placeholder = 'Digite número ou letra' name = 'vetor[]' required/>"; 
            }
            ?>
            <button type = "submit"> Confirmar </button>
        </form>
    </body>
</html>
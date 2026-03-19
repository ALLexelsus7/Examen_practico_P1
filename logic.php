<!--

Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos enteros:
$num = rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre
1 y 100. Hacer un programa que muestre por pantalla el valor generado. Mostrar ademas si es
menor o igual a 50 o si es mayor. 

Utilizar html y css para que quede bonito

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Practico (Alex RJ)</title>
    <meta name="author" content="Alex Ruiz Jordan">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="contenedor">
        <?php    
    
        if(isset($_POST['enviar'])){
            echo "<ul>";
            for($i = 0; $i < $_POST['cantidad']; $i++){
                //Genera un numero random del 1 al 100
                $num = rand(1,100); 
                echo "<li> El numero generado es: <strong>".$num;
                if($num <= 50){
                    echo " </strong>, y es menor o igual a 50. </li>";
                }else{
                    echo " </strong>, y es mayor a 50. </li>";
                }
                echo "<br>";
            }
            echo "</ul>";
        }else{
            echo "<p> No se recibieron los datos correctamente... </p>";
        }
        
        ?>
        
        <button onclick="window.location.reload();" class="btn"> Recargar la pagina </button>    

        <a href="index.html" class="link"> ⬅️ Volver al inicio</a>
    </div>  

</body>
</html>



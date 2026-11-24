
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Arreglo multidimensional</title>
        </head>
        <body>
            <h2>Arreglos multidimencionales</h2>
            <form method='POST'>
                <?php
                //Ciclo para solicitar los 8 valores
                for ($i=0;$i<8;$i++){
                    echo "introduce el valor ". ($i+1). ": ";
                    echo "<input type='number' name='valores[]' required>";
                    echo "<br><br>";
                }
                ?>
                <input type="submit" name="guardar" value="Guardar valores">
            </form>
            <?php
            //verificamos si se presiono el boton
            if (isset($_POST['guardar'])){
                //Guardamos los valores recibidos en el vector
                $vector=$_POST['valores'];
                echo "<h3>Valores almacenados en el vector:</h3>";
                //recorremos el vetor para mostrar su contenido
                for ($i=0;$i<8;$i++){
                    echo "posicion ".$i.": ".$vector[$i]. "<br>"; 
                }
            }
            ?>
        </body>
        </html>

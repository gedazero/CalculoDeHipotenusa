<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1.0">
 <link rel="stylesheet" href="style.css">
 <title>CÁLCULO DEL ÁREA DEL CIRCULO</title>
</head>
<body>
 
<div class="contenedor">
    <h2> CÁLCULO DE HIPOTENUSA</h1>
    <h2> DE</h2>
    <h2> TRIANGULO RECTANGULO</h2>
 
 
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <label for="CatetoOpuesto">Ingrese el valor del Cateto Opuesto</label>


    <input class="placeholder"type="number" placeholder="Cateto Opuesto" name="Cateto_Opuesto" id="CatetoOpuesto" min="1"><br>


    <label for="CatetoAdyacente">Ingrese el valor del Cateto Adyacente</label>


    <input class="placeholder"type="number" placeholder="Cateto Adyacente" name="Cateto_Adyacente" id="CatetoAdyacente" min="1">
    <br>
    
    <?php if(!empty($errores)): ?>
      <div class="alert error">
         <?php echo $errores; ?>
    </div>
    <?php elseif($enviado): ?>
       <div class="alert success">
         <p>Calculando...</p>
         <label for="">El valor de la hipotenusa es = <?php echo $enviado; ?> </label>
         
       </div>
    <?php endif ?>
    <br> 
    
    <input type="submit" name="submit" value="Calcular">
 </form>
 </div>
</body>
</html>

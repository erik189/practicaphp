<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
        <link rel="stylesheet" href="style.css">
        <title>Registros</title>
        <!--1.Se creará un array llamado "registros", que estará a su vez compuesto por otros arrays cuya estructura contendra un Nombre, un Apellido, una Edad, un Email y un DNI. Cargaremos al menos 5 arrays de datos, completos con datos ficticios. 
          ..2.Utilizaremos un un bucle (cualquiera de ellos) para imprimir los datos en formato de grid, utilizando una estructura de filas y de columnas. 
        -->
    </head>
    <body>
        <div class="container-fluid">
            <header>
            <?php
            
             // echo "<h1 class=display-1>hola programando en php</h1>";
              $registro= array();

              $datosA["nombre"]="erik";
              $datosA["apellido"]="de la cruz";
              $datosA["edad"]= 30;
              $datosA["email"]="erik@gmail.com";
              $datosA["dni"]=56595959;

              $datosB["nombre"]="juan";
              $datosB["apellido"]="lozada";
              $datosB["edad"]= 30;
              $datosB["email"]="juan@gmail.com";
              $datosB["dni"]=56596659;

              $datosC["nombre"]="maria";
              $datosC["apellido"]="sak";
              $datosC["edad"]= 34;
              $datosC["email"]="maria@gmail.com";
              $datosC["dni"]=45595959;

              $datosD["nombre"]="carla";
              $datosD["apellido"]="sak";
              $datosD["edad"]= 34;
              $datosD["email"]="maria@gmail.com";
              $datosD["dni"]=78595959;

              $datosE["nombre"]="martin";
              $datosE["apellido"]="soifer";
              $datosE["edad"]= 34;
              $datosE["email"]="maria@gmail.com";
              $datosE["dni"]=78595959;

              $registro[0]= $datosA;
              $registro[1]=$datosB;
              $registro [2]= $datosC;
              $registro[3] = $datosD;
              $registro[4] = $datosE;

              echo "<div class=\"row\"<div class=\"fondo\">";
        
              echo "<div class=\"col-12 col-sm-3\"><h1 class=text-cust>Nombre</h1></div>";
              echo "<div class=\"col-12 col-sm-2\"><h1 class=text-cust>Apellido</h1></div>";
              echo "<div class=\"col-12 col-sm-1\"><h1 class=text-cust>Edad</h1></div>";
             echo "<div class=\"col-12 col-sm-3\"><h1 class=text-cust>Email</h1></div>";
             echo "<div class=\"col-12 col-sm-3\"><h1 class=text-cust>Dni</h1></div>";
             echo "</div>";
             ?> 

             <?php for( $i = 0; $i < count($registro); $i++){  ?>

                <div class="row">
                
               <div class="col-12 col-sm-3"> <? echo$registro[$i]["nombre"]; ?> </div>
               <div class="col-12 col-sm-2"> <? echo$registro[$i]["apellido"]; ?> </div>
               <div class="col-12 col-sm-1"> <? echo$registro[$i]["edad"];  ?> </div>
               <div class="col-12 col-sm-3"> <? echo$registro[$i]["email"]; ?> </div>
               <div class="col-12 col-sm-3"> <? echo$registro[$i]["dni"];   ?> </div>
              </div> 
              <?php
             }
             
             ?>
             
             
          </header>
          </div>
</body>
</html> 

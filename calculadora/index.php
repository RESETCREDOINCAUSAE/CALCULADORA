<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
       <form action="" method="GET" style="background-color: black;">
           <br>
             <div class="container">
                 <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  Calculadora SENA 
                              </div>
                              <div class="panel-body">
                                  <div class="row">
                                
                                      <div class="col-md-5">
                                          <label for="">Numero 1</label>
                                          <input type="number"  class="form-control" name="numero1" id="numero1" required>
                                      </div>
                                    
                                      <div class="col-md-5">
                                          <label for="">Numero 2</label>
                                          <input type="number" class="form-control" name="numero2" id="numero2" required>
                                      </div>
                                      <div class="col-md-2">
                                          <label for="">Operacion.</label>
                                          <select name="operacion" id="operacion" class="form-control">
                                              <option value="sumar">+</option>
                                              <option value="restar">-</option>
                                              <option value="multiplicar">*</option>
                                              <option value="dividir">/</option>
                                          </select>
                                      </div>
                                  </div>
                                  <hr>
                                   <button type="submit" class="btn btn-primary pull-right">Operar</button>
                                </div>
                          </div>
                      </div>
                 </div>
             </div>
       </form>
       <div class="container">
           <div class="row">
               <div class="col-md-8 col-md-offset-2">
               <div class="alert alert-success">
                   <?php
                 $numero1 = $_GET['numero1'];
                 $numero2 = $_GET['numero2'];
                 $operacion = $_GET['operacion'];
                 $resultado = "";

                if($operacion == 'sumar'){
                    $resultado = $numero1 + $numero2;
                    print($resultado);
                    
                } 
                else if($operacion == 'restar'){
                    $resultado = $numero1 - $numero2;
                    print($resultado) ;
                } 
                else if($operacion == 'multiplicar'){
                    $resultado = $numero1 * $numero2;
                    print($resultado) ;
                } 
                else if($operacion == 'dividir'){
                    $resultado = $numero1 / $numero2;
                    print($resultado);
                }else{
                    $resultado = 0;
                }         
                 
                   ?>
                
            </div>
            </div>
            </div>
</body>
</html>
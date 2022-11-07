<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculo de salário liquido</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="TCalculo">Cálculo de salário liquido!</h1>
  <h1 class="TValores">Insira os valores abaixo!</h1>
    </div>
<form  method="POST">
            <p class="inputN">
             Valor da hora: <input class="inputR" type="number" name="VH" />
            </p>
            <p class="inputN">
             Horas trabalhadas: <input class="inputR" type="number" name="HT" />
            </p>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['VH']) || isset($_POST['HT'])){
        $valorHora = $_POST['VH'];
        $horasTrabalhadas = $_POST['HT'];
        $salarioBruto = $horasTrabalhadas*$valorHora;
        $desconto = 0;
            if ($salarioBruto < 1212.00) {
                $desconto = ($salarioBruto * 0.075);
        
            } else if ($salarioBruto >= 1212.01 && $salarioBruto <= 2427.35) {
                $desconto = ($salarioBruto * 0.09);
        
            } else if ($salarioBruto >= 2457.36 && $salarioBruto <= 3641.03) {
                $desconto = ($salarioBruto * 0.12);
        
            } else {
                $desconto = ($salarioBruto * 0.14);
            }
        
            $salarioLiquido = $salarioBruto - $desconto;

            echo "<p style='margin-top: 30px; font-size: 15pt;'>Salário Bruto: $salarioBruto <br>
            Desconto do INSS: $desconto <br>
            Salário Líquido: $salarioLiquido </p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>
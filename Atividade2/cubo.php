<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomenda</title>
    <style>
   
    .obj1{
        width:100%;
        height:35px;
        margin-top:4%;
        font-size: 17px;
        font-family:Arial;
        padding-top:6%;
        color:#222;
        font-size:25px;
        weight: bold;
        text-align: center;
        padding-bottom:5%;
        margin-bottom: 0%;
        background-color:#ffeb35;
        border-top-right-radius:20px;
        border-top-left-radius:20px;
    }
    .obj{
        width:80%;
        height:35px;
        margin-top:6%;
        font-size: 17px;
        margin-left:10%;
        font-family:Arial;
        border-color: #d5d5d1;
        

    }
    .formulario{
        width:600px;
        height:580px;
        background-color: #dee1e6;
        margin-left:auto;
        margin-right:auto;
        border-radius:20px;
    }
    body, html{
        padding:0;
        overflow: hidden;
        margin:0;
        background: url(img.gif);
        
    }
    .Cont{
        width:85vh;
        height:100vh;
        margin: auto;
    }
    #btn{
        background-color: #50ef50;
        height:50px;
        margin-top:8%;
        width: 81%;
    }
    #btn:hover{
        background-color: #60fe60;
       
    }
    
    </style>

</head>
<body>
    <div class=Cont>
        <form class="formulario" action="calcular.php" method="POST">
            <p class="obj1" id="l">Encomenda - Dimensões</p>
            <hr width = “2” size = “100”  style="margin:0;padding:0;;">
            <input class="obj" type="text" placeholder="Infome o comprimento" name="c"/> 
            <input class="obj" type="text" placeholder="Informe a largura" name="l" /> 
            <input class="obj" type="text" placeholder="Informe a Alturao" name="h" />
            <input class="obj" type="text" placeholder="Infome o Peso" name="p"/><!--
            <input class="obj" type="text" placeholder="Informe a largura" name="largura"/>-->
            <input type="submit" value="Calcular Peso" class="obj" id="btn"/>           
        </form>
    </div>
</body>
</html>
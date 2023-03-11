<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../style/termo.css">

    <title>Termo</title>

</head>

<body>

    <section id="cabecalho">
        <img id="img" src="../assets/images/logo.jpg" alt="Logotipo do Tribunal de Justiça de São Paulo">
        <div>
            <p>TRIBUNAL DE JUSTIÇA DO ESTADO DE SÃO PAULO</p>
            <p>COMARCA DE SÃO PAULO</p>
            <p>Foro Central Criminal Barra Funda</p>
            <p>Vara do Juizado Especial Criminal e Anexo Judicial de Defesa do Torcedor</p>
            <p>Horário de atendimento ao público: das 13:00 às 17:00 horas</p>
            <p>Avenida Abraão Ribeiro, 313, Salas 1-582/583, Barra Funda, São Paulo-SP</p>
            <p>Fones: (11) 2868-7251/7258/7430 | Email: juizadodotorcedor@tjsp.jus.br</p>
        </div>
    </section>

    <br>
    <br>

    <div id="aud-preliminar">
        <p>AUDIÊNCIA PRELIMINAR</p>
    </div>

    <br>
    <br>

    Delegacia:
    <?php echo $_POST["delegacia"]; ?><br>
    Número do TC:
    <?php echo $_POST["numeroTC"]; ?><br>
    Capitulação:
    <?php echo $_POST["capitulacao"]; ?><br>
    <br>
    Nome:
    <?php echo $_POST["nomeAF"]; ?><br>
    CPF:
    <?php echo $_POST["cpfAF"]; ?><br>
    E-mail:
    <?php echo $_POST["emailAF"]; ?><br>
    Telefone:
    <?php echo $_POST["tel"]; ?><br>
    <br>
    Estádio:
    <?php echo $_POST["estadio"]; ?><br>
    Juiz:
    <?php echo $_POST["juiz"]; ?><br>
    Promotor:
    <?php echo $_POST["promotor"]; ?><br>
    Defensor:
    <?php echo $_POST["defensor"]; ?><br>
    Escrevente:
    <?php echo $_POST["escrevente"]; ?><br>

    <br>
    <br>

    Saem os presentes intimados. 
    Lido e achado conforme, vai por mim assinado. 
    Autorizo a extração de cópias reprográficas. 
    Nada mais. 
    Eu,___, <?php echo $_POST["escrevente"]; ?>, 
    Escrevente Técnico Judiciário, digitei.
    
    <br>
    <br>

    MM(a). Juiz(a) de Direito: Assinatura Digital


</body>

</html>
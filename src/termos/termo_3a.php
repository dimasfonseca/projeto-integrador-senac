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
        <div>
            <img id="img" src="../assets/images/logo.jpg" alt="Logotipo do Tribunal de Justiça de São Paulo">
        </div>

        <div>
            <p>TRIBUNAL DE JUSTIÇA DO ESTADO DE SÃO PAULO</p>
            <p>COMARCA DE SÃO PAULO</p>
            <p>Foro Central Criminal Barra Funda</p>
            <p><b>Vara do Juizado Especial Criminal e Anexo Judicial de Defesa do Torcedor</b></p>
            <p>Horário de atendimento ao público: das 13:00 às 17:00 horas</p>
            <p>Avenida Abraão Ribeiro, 313, Salas 1-582/583, Barra Funda, São Paulo-SP</p>
            <p>Fones: (11) 2868-7251/7258/7430 | Email: juizadodotorcedor@tjsp.jus.br</p>
        </div>
    </section>

    <section id="aud-preliminar">
        <p><b>AUDIÊNCIA PRELIMINAR</b></p>
    </section>

    <section>
        <p>
            Delegacia de Polícia:
            <b>
                <?php echo $_POST["delegacia"]; ?>
            </b>
        </p>
        <p>
            Número do Termo Circunstanciado:
            <b>
                <?php echo $_POST["numeroTC"]; ?>
            </b>
        </p>
        <p>
            Capitulação do Fato:
            <b>
                <?php echo $_POST["capitulacao"]; ?>
            </b>
        </p>
    </section>

    <section>
        <p>
            Ministério Público: Dr(a).
            <b>
                <?php echo $_POST["promotor"]; ?>
            </b>
            - MM(a). Juiz(a), proponho ao(à) autor(a) do fato a aplicação de pena restritiva de direitos consistente na
            prestação de serviços à comunidade por <b>
                <?php echo $_POST["horas-psc"]; ?>
            </b>horas, sendo que as horas deverão ser
            prestadas no prazo de <b>
                <?php echo $_POST["prazo-psc"]; ?>
            </b>.


        </p>
    </section>

    <section>
        <p>
            Autor(a) do fato:
            <b>
                <?php echo $_POST["nomeAF"]; ?>
            </b>,
            CPF:
            <?php echo $_POST["cpfAF"]; ?>,
            E-mail:
            <?php echo $_POST["emailAF"]; ?>,
            Telefone:
            <?php echo $_POST["tel"]; ?>
            - aceitou a proposta do Ministério Público.
        </p>
        <p>
            Defensoria Pública: Dr(a).
            <b>
                <?php echo $_POST["defensor"]; ?>
            </b>
        </p>
    </section>

    <section>
        <p>
            Aos <b>
                <?php echo date("d/m/Y") ?>
            </b>,
            às <b>
                <?php date_default_timezone_set('America/Sao_Paulo');
                echo date("H:i") ?>
            </b>horas,
            nesta Cidade e Comarca da Capital, na sala de audiências do Juizado Itinerante, Estádios de Futebol,
            Estádio <b>
                <?php echo $_POST["estadio"]; ?>
            </b>, sob a presidência do(a) MM. Juiz(a) de Direito,
            Dr(a). <b>
                <?php echo $_POST["juiz"]; ?>
            </b>, comigo escrevente abaixo assinado.
            Apregoadas as partes, compareceram as pessoas acima mencionadas, cada qual apresentando sua manifestação,
            conforme supra anotado em resumo. Ao final, pelo(a) MM(a). Juiz(a) de Direito foi dito:
            Tendo em vista a proposta de transação penal feita pelo Ministério Público e a sua aceitação pelo(a)
            autor(a) do fato, sem oposição de seu(sua) defensor(a), o(a) autor(a) do fato prestará serviços à comunidade
            ou a entidade pública, por <b>
                <?php echo $_POST["horas-psc"]; ?>
            </b>horas, no prazo de <b>
                <?php echo $_POST["prazo-psc"]; ?>
            </b>. O(a)
            autor(a) do fato deverá se dirigir, no prazo de 10 (dez) dias, à Secretaria de Administração Penitenciária
            (SAP), para entrevista, a fim de ser adequada a medida imposta. Na hipótese de descumprimento, resolve-se de
            pleno direito a presente transação penal, com consequente prosseguimento do feito nos seus ulteriores
            termos. Observo, ainda, que a transação penal não tem natureza jurídica de condenação criminal, não gera
            efeitos para fins de reincidência e maus antecedentes e, por se tratar de submissão voluntária à sanção
            penal, não significa reconhecimento da culpabilidade penal nem da responsabilidade civil.
            Saem os presentes intimados. Lido e achado conforme, vai por mim assinado.
            Autorizo a extração de cópias reprográficas. Nada mais. Eu,___, <b>
                <?php echo $_POST["escrevente"]; ?>
            </b>,
            Escrevente Técnico Judiciário, digitei.
        </p>
    </section>

    <section>
        <p>
            MM(a). Juiz(a) de Direito: Assinatura Digital
        </p>
    </section>
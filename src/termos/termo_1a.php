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
            - MM(a). Juiz(a), proponho ao(à) autor(a) do fato a aplicação de pena restritiva de direitos
            consistente no afastamento dos estádios de futebol,
            nos jogos do <b>
                <?php echo $_POST["time-afastamento"]; ?>
            </b>,
            dentro e fora do Estado de São Paulo (todos os campeonatos nacionais e internacionais),
            a partir de hoje, por <b>
                <?php echo $_POST["prazo-afastamento"]; ?>
            </b>.
            O(a) autor(a) deverá comparecer aos estabelecimentos indicados pela Secretaria de Administração
            Penitenciária (SAP) duas horas antes do início da partida, lá permanecendo durante o jogo e só saindo quinze
            minutos após o término da partida, nos termos do artigo 41-B, § 4º, da Lei 12.299/10. Na hipótese de estar
            o(a) autor(a) do fato trabalhando/estudando na data dos jogos, basta que tal situação seja comprovada em
            Juízo.
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
                echo date("H:i ") ?>
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
            A. VISTOS, etc. Acolho a proposta de transação penal feita pelo Ministério Público e aceita pelo(s)
            autor(es) do fato e seu(s) defensor(es) e, com fundamento no artigo 76, § 4º, da Lei 9.099/95, e no §5º do
            art. 41-B da Lei 10.671/03, APLICO-LHE a sanção de afastamento dos jogos do <b>
                <?php echo $_POST["time-afastamento"]; ?>
            </b>. O(s)
            autor(es) do fato afastar-se-ão por <b>
                <?php echo $_POST["prazo-afastamento"]; ?>
            </b>, em todos os jogos da equipe, onde o clube for
            mandante ou visitante, dentro ou fora do Estado de São Paulo, em todos os campeonatos, sejam nacionais ou
            internacionais, tanto durante a semana quanto no final de semana. O(a) autor(a) deverá comparecer aos
            estabelecimentos indicados pela Secretaria de Administração Penitenciária (SAP) duas horas antes do início
            da partida, lá permanecendo durante o jogo e só saindo quinze minutos após o término da partida, nos termos
            do artigo 41-B, § 4º, da Lei 12.299/10. Na hipótese de descumprimento, resolve-se de pleno direito a
            presente transação penal, com consequente prosseguimento do feito nos seus ulteriores termos, podendo, se o
            caso, ser oferecida a denúncia. Observo, ainda, que a transação penal não tem natureza jurídica de
            condenação criminal, não gera efeitos para fins de reincidência e maus antecedentes e, por se tratar de
            submissão voluntária à sanção penal, não significa reconhecimento da culpabilidade penal nem da
            responsabilidade civil.
            B. A SAP deverá informar ao Anexo Judicial de Defesa do Torcedor acerca do comparecimento do(a) autor(a) e
            de eventual descumprimento, imediatamente. A SAP, ainda, deverá manter contato constante com a entidade à
            qual o(a) autor(a) comparecer durante os jogos realizados.
            C. Determino, finalmente, nos termos do art. 5º, § 3º da Lei 10.671/2003, que seja remetida cópia do
            presente termo à Federação Paulista de Futebol e à Secretaria de Segurança Pública, para auxílio e
            fiscalização do cumprimento da medida.
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
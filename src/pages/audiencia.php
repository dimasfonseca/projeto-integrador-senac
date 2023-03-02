<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="../style/common.css"> -->
    <link rel="stylesheet" type="text/css" href="../style/audiencia.css">

    <title>Audiência</title>

</head>

<body>

    <header>
        <div id="logo">
            <img id="img" src="../assets/images/logo.jpg" alt="Logotipo do Tribunal de Justiça de São Paulo">
            <div id="tjsp">
                <p id="tj">Tribunal de Justiça</p>
                <p id="uf">Estado de São Paulo</p>
            </div>
        </div>
        <p id="saudacao">Bem-vindo!</p>
    </header>

    <main>

        <div class="conteiner-titulo">
            <h1>Gerador de Termos de Audiência</h1>
            <h2>Plantões do Juizado do Torcedor</h2>
        </div>

        <section class="conteiner-corpo">
            <h3>Dados da Ocorrência Policial</h3>
            <form>
                <div class="conteiner-input">
                    <label for="delegacia" class="negrito">Delegacia de Polícia:</label>
                    <input list="delegacias" name="delegacia" id="delegacia">
                    <datalist id="delegacias">
                        <option value="5a Delegacia de Polícia de Repressão aos Delitos de Intolerância Esportiva">
                        <option value="6a Delegacia de Polícia de Repressão aos Delitos de Intolerância Esportiva">
                        <option value="Outra">
                    </datalist>
                </div>
                <div class="conteiner-input">
                    <label for="numeroTC" class="negrito">Número do Termo Circunstanciado:</label>
                    <input type="text" id="numeroTC" name="numeroTC" placeholder="ex.: 900000/2022">
                </div>
                <div class="conteiner-input">
                    <label for="capitulacao" class="negrito">Capitulação do Fato:</label>
                    <input type="text" id="capitulacao" name="capitulacao" placeholder="ex.: Art. 41B do ED">
                </div>
            </form>
        </section>

        <section class="conteiner-corpo">
            <h3>Qualificação do(a) Autor(a) do Fato(a)</h3>
            <form>
                <div class="conteiner-input">
                    <label for="nomeAF" class="negrito">Nome completo:</label>
                    <input type="text" id="nomeAF" name="nomeAF">
                </div>

                <div class="conteiner-input">
                    <label for="cpfAF" class="negrito">CPF:</label>
                    <input type="text" id="cpfAF" name="cpfAF">
                </div>

                <div class="conteiner-input">
                    <label for="emailAF" class="negrito">E-mail:</label>
                    <input type="email" id="emailAF" name="emailAF">
                </div>

                <div class="conteiner-input">
                    <label for="telAF" class="negrito">Telefone:</label>
                    <input type="tel" id="telAF" name="tel">
                </div>
            </form>
        </section>

        <section class="conteiner-corpo">
            <h3>Dados da Audiência</h3>
            <form>
                <div class="conteiner-input">
                    <label for="estadio" class="negrito">Estádio:</label>
                    <input list="estadios" name="estadio" id="estadio">
                    <datalist id="estadios">
                        <option value="Allianz Parque"></option>
                        <option value="Cícero Pompeu de Toledo (Morumbi)"></option>
                        <option value="Neo Química Arena (Itaquerão)"></option>
                        <option value="Pacaembu"></option>
                        <option value="Urbano Caldeira (Vila Belmiro)"></option>
                    </datalist>
                </div>

                <div class="conteiner-input">
                    <label for="juiz" class="negrito">Juiz(a) de Direito:</label>
                    <input list="juizes" name="juiz" id="juiz">
                    <datalist id="juizes">
                        <option value="Elis Regina"></option>
                        <option value="Gal Costa"></option>
                        <option value="Maria Bethânia"></option>
                    </datalist>
                </div>

                <div class="conteiner-input">
                    <label for="promotor" class="negrito">Promotor(a) de Justiça:</label>
                    <input list="promotores" name="promotor" id="promotor">
                    <datalist id="promotores">
                        <option value="Caetano Veloso"></option>
                        <option value="Chico Buarque"></option>
                        <option value="Gilberto Gil"></option>
                        <option value="Milton Nascimento"></option>
                    </datalist>
                </div>

                <div class="conteiner-input">
                    <label for="defensor" class="negrito">Defensor(a) Público(a):</label>
                    <input class="campo" list="defensores" name="defensor" id="defensor">
                    <datalist id="defensores">
                        <option value="Elza Soares"></option>
                        <option value="João Gilberto"></option>
                        <option value="Tom Jobim"></option>
                        <option value="Vinicius de Moraes"></option>
                    </datalist>
                </div>

                <div class="conteiner-input">
                    <label for="escrevente" class="negrito">Escrevente de Sala:</label>
                    <input list="escreventes" name="escrevente" id="escrevente">
                    <datalist id="escreventes">
                        <option value="Aristóteles"></option>
                        <option value="Demócrito"></option>
                        <option value="Epicuro"></option>
                        <option value="Heráclito"></option>
                        <option value="Platão"></option>
                        <option value="Sócrates"></option>
                    </datalist>
                </div>
            </form>
        </section>

        <section class="conteiner-corpo">
            <h3>Mérito da Audiência</h3>
            <form>
                <div class="conteiner-linha">
                    <p class="negrito">É cabível a transação penal?</p>
                    <input type="radio" id="cabe-sim" name="cabimento-tp" value="Sim">
                    <label for="cabe-sim">Sim</label>
                    <input type="radio" id="cabe-nao" name="cabimento-tp" value="Não">
                    <label for="cabe-nao">Não</label>
                </div>

                <div>
                    <p class="negrito">Proposta formulada pelo Ministério Público:</p>
                    <div class="conteiner-coluna">
                        <input type="radio" id="afastamento" name="proposta" value="Afastamento">
                        <label for="afastamento">Afastamento dos estádios</label>
                        <input type="radio" id="pp" name="proposta" value="Prestação Pecuniária">
                        <label for="pp">Prestação Pecuniária</label>
                        <input type="radio" id="psc" name="proposta" value="Prestação de Serviços à Comunidade">
                        <label for="psc">Prestação de Serviços à Comunidade</label>
                    </div>
                </div>

                <div class="conteiner-coluna">
                    <p class="negrito">Afastamento dos estádios</p>
                    <div class="conteiner-coluna">
                        <div class="conteiner-linha">
                            <label for="time-afastamento">Time: </label>
                            <input type="text" id="time-afastamento" name="time-afastamento" placeholder="São Paulo (exemplo)">
                        </div>   
                        <div class="conteiner-linha">
                            <label for="prazo-afastamento">Prazo (em meses): </label>
                            <input type="text" id="prazo-afastamento" name="prazo-afastamento" placeholder="60 (exemplo)">
                        </div>
                    </div>
                </div>

                <div class="conteiner-coluna">
                    <p class="negrito">Prestação de Serviços à Comunidade</p>
                    <div class="conteiner-coluna">
                        <div class="conteiner-linha">
                            <label for="horas-psc">Quantidade de horas a cumprir: </label>
                            <input type="text" id="horas-psc" name="horas-psc" placeholder="28 (exemplo)">
                        </div>
                        <div class="conteiner-linha">
                            <label for="prazopsc">Prazo para cumprimento (em dias): </label>
                            <input type="text" id="prazo-psc" name="prazo-psc" placeholder="30 (exemplo)">
                        </div>
                    </div>  
                </div>

                <div class="conteiner-coluna">
                    <p class="negrito">Prestação pecuniária</p>
                    <div class="conteiner-coluna">
                        <div class="conteiner-linha">
                            <label for="valor-pp">Valor: R$ </label>
                            <input type="text" id="valor-pp" name="valor-pp" placeholder="606,00 (exemplo)">
                        </div>
                        <div class="conteiner-linha">
                            <label for="prazo-pp">Prazo (em dias): </label>
                            <input type="text" id="prazo-pp" name="prazo-pp" placeholder="60 (exemplo)">
                        </div>
                    </div>
                </div>
                
                <div class="conteiner-linha">
                    <p class="negrito">Manifestação do Réu:</p>
                    <input type="radio" id="aceita-sim" name="aceitacao" value="Aceita">
                    <label for="aceita-sim">Aceita</label>
                    <input type="radio" id="aceita-nao" name="aceitacao" value="Não aceita">
                    <label for="aceita-nao">Não aceita</label>
                </div>

            </form>
        </section>

        <div id="conteiner-botao">
            <button>Gerar Termo</button>
        </div>


    </main>

    <footer>
        <p>
            Desenvolvido por alunos do Senac, para fins meramente acadêmicos (C)
        </p>
    </footer>

</body>

</html>
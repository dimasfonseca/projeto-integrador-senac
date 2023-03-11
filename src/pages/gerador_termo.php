<?php
     // Get the values of the radio options
    $option1 = isset($_POST['cabimento-tp']) ? $_POST['cabimento-tp'] : '';
    $option2 = isset($_POST['proposta']) ? $_POST['proposta'] : '';
    $option3 = isset($_POST['aceitacao']) ? $_POST['aceitacao'] : '' ;
  
  // Determine which page to generate based on the radio options
  switch(true) {
    case ($option1 == "Não"):
      // Load termo_0.html
      include '..\termos\termo_0.html';
      break;
    case ($option2 == "Afastamento" && $option3 == "Aceita"):
      // Load termo_1a.html
      include '..\termos\termo_1a.html';
      break;
    case ($option2 == "Afastamento" && $option3 == "Não aceita"):
      // Load termo_1b.html
      include '..\termos\termo_1b.html';
      break;
    case ($option2 == "Prestação Pecuniária" && $option3 == "Aceita"):
      // Load termo_2a.html
      include '..\termos\termo_2a.html';
      break;
    case ($option2 == "Prestação Pecuniária" && $option3 == "Não aceita"):
      // Load termo_2b.html
      include '..\termos\termo_2b.html';
      break;
    case ($option2 == "Prestação de Serviços à Comunidade" && $option3 == "Aceita"):
      // Load termo_3a.html
      include '..\termos\termo_3a.html';
      break;
    case ($option2 == "Prestação de Serviços à Comunidade" && $option3 == "Não aceita"):
      // Load termo_3b.html
      include '..\termos\termo_3b.html';
      break;
    default:
      // Error message
      echo "Error: Combinação inválida de opções";
      break;
  }
?>
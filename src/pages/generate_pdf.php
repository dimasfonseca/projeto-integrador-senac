<?php
// Include the FPDF class file
require($_SERVER['DOCUMENT_ROOT'] . '/fpdf/fpdf.php');

// Check if the form was submitted
if (isset($_POST['generate_pdf'])) {

    // Get the values of the radio options
    $option1 = isset($_POST['cabimento-tp']) ? $_POST['cabimento-tp'] : '';
    $option2 = isset($_POST['proposta']) ? $_POST['proposta'] : '';
    $option3 = isset($_POST['aceitacao']) ? $_POST['aceitacao'] : '' ;
  
    // Create a new FPDF object
    $pdf = new FPDF();
  
    // Add a new page to the PDF document
    $pdf->AddPage();
  
    // Set font family and size
    $pdf->SetFont('Arial', 'B', 16);
  
    // Generate the appropriate PDF file based on the radio options
    if ($option1 == "Não") {
        // Generate pdf-0
        $pdf->Cell(40, 10, 'PDF 0');
      } else if ($option2 == "Afastamento" && $option3 == "Aceita") {
        // Generate pdf-1a
        $pdf->Cell(40, 10, 'PDF 1A');
      } else if ($option2 == "Afastamento" && $option3 == "Não aceita") {
        // Generate pdf-1b
        $pdf->Cell(40, 10, 'PDF 1B');
      } else if ($option2 == "Prestação Pecuniária" && $option3 == "Aceita") {
        // Generate pdf-2a
        $pdf->Cell(40, 10, 'PDF 2A');
      } else if ($option2 == "Prestação Pecuniária" && $option3 == "Não aceita") {
        // Generate pdf-2b
        $pdf->Cell(40, 10, 'PDF 2B');
      } else if ($option2 == "Prestação de Serviços à Comunidade" && $option3 == "Aceita") {
        // Generate pdf-3a
        $pdf->Cell(40, 10, 'PDF 3A');
      } else if ($option2 == "Prestação de Serviços à Comunidade" && $option3 == "Não aceita") {
        // Generate pdf-3b
        $pdf->Cell(40, 10, 'PDF 3B');
      } else {
        // Generate a default PDF file
        $pdf->Cell(40, 10, 'Default PDF');
      }
  
    // Save and output the PDF document
    $pdf->Output();
  
  }
?>
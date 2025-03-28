

<?php

//    prevnt output before header 
ob_start();
  require_once '../../vendor/autoload.php';


  use PhpOffice\PhpWord\PhpWord;
  use PhpOffice\PhpWord\IOFactory;



  // connectionn 
  include "../../pages/conn.php";


  $sqluser = "SELECT * FROM vehicles";
  // result for table user 

  $result2 = $conn->query($sqluser);
  // creation of php word obtion

  $phpWord =  new PhpWord();
  $section = $phpWord->addSection();

  // add title 

  $section->addText('Vehicles  information Report ', ['bold' => true , 'size' => 16]);


  // define style   

  $styleTable = ['borderSize' => 6 , 'borderColor'=> '000000','cellMargin'=> 50];

  $phpWord->addTableStyle('myTable',$styleTable);

  // add table 
  $table = $section->addTable('myTable');

  // add table  header  row 

  $table->addRow();
  $table->addCell(2000)->addText('ID', ['bold'=>true]);
  $table->addCell(4000)->addText('Plate Number',['bold'=>true]);
  $table->addCell(6000)->addText('Vehicle Type',['bold'=>true]);
  $table->addCell(8000)->addText('Model',['bold'=>true]);
  $table->addCell(10000)->addText('Year',['bold'=>true]);
  $table->addCell(10000)->addText('Status',['bold'=>true]);



  // from data base 

  if($result2->num_rows>0){
    while($rows= $result2->fetch_array()){
      $table->addRow();
      $table->addCell(2000)->addText($rows[0]);
      $table->addCell(4000)->addText($rows[1]);
      $table->addCell(6000)->addText($rows[2]);
      $table->addCell(8000)->addText($rows[3]);
      $table->addCell(10000)->addText($rows[4]);
      $table->addCell(12000)->addText($rows[5]);
    }
  }else{
    $table->addRow();
    $table->addCell()->addText('No data found.');
    $table->addCell()->addText('');
    $table->addCell()->addText('');
  }


  // close connection
$conn->close();
  $filename = 'User_Report.docx';


  header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
  header("Content-Disposition: attachment; filename=User_Report.docx");
  header('Cache-Control: max-age=0');
  


$objWriter = IOFactory::createWriter($phpWord,'Word2007');
// Clear output buffer before sending the file
ob_clean();
flush();

 $objWriter->save("php://output");

echo "File saved successfully!";
exit;










?>
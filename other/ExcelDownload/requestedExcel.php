<?php
 // prevent output before header 


 ob_start();

 require_once '../../vendor/autoload.php';

 use PhpOffice\PhpSpreadsheet\Spreadsheet;
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Database connection
include "../../pages/conn.php";

// Fetch data from users table
$sqluser = "SELECT * FROM `request_for_trip`";
$result2 = $conn->query($sqluser);

// Create a new Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Trip ID');
$sheet->setCellValue('C1', 'Full Name');
$sheet->setCellValue('D1', 'Request Date');
$sheet->setCellValue('E1', 'Status');

// Populate table from database
$rowNum = 2; // Start at row 2
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_array()) {
        $sheet->setCellValue("A$rowNum", $row[0]);
        $sheet->setCellValue("B$rowNum", $row[1]);
        $sheet->setCellValue("C$rowNum", $row[2]);
        $sheet->setCellValue("D$rowNum", $row[3]);
        $sheet->setCellValue("E$rowNum", $row[4]);
    
        $rowNum++;
    }
} else {
    $sheet->setCellValue('A2', 'No data found.');
}

// Close database connection
$conn->close();


// Set filename
$filename = 'Request_Report.xlsx';

// Set headers to force download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Cache-Control: max-age=0');

// Clear output buffer before sending file
ob_clean();
flush();

// Save file to output
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>




?>



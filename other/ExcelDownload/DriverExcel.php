<?php
 // prevent output before header 


 ob_start();

 require_once '../../vendor/autoload.php';

 use PhpOffice\PhpSpreadsheet\Spreadsheet;
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Database connection
include "../../pages/conn.php";

// Fetch data from users table


$drivers="SELECT * FROM drivers INNER JOIN users On drivers.user_id = users.user_id";
// result for table user 

$result2 = $conn->query($drivers);

// Create a new Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'DriverID');
$sheet->setCellValue('B1', 'First Name');
$sheet->setCellValue('C1', 'Last Name');
$sheet->setCellValue('D1', 'Email');
$sheet->setCellValue('E1', 'Phone Number');


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
$filename = 'Drivers_Report.xlsx';

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



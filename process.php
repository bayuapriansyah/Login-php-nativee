<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$nama = $_POST['nama'];
$password = $_POST['password'];

$file_excel = 'data.xlsx';

if (file_exists($file_excel)) {
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_excel);
    $sheet = $spreadsheet->getActiveSheet();
    $row = $sheet->getHighestRow() + 1;
} else {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'nama');
    $sheet->setCellValue('B1', 'password');
    $row = 2;
}


$sheet->setCellValue('A' . $row, $nama);
$sheet->setCellValue('B' . $row, $password);


$writer = new Xlsx($spreadsheet);
$writer->save($file_excel);

header('Location: home.php');
exit;


?>
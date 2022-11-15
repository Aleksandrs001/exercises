<?php


require_once 'vendor/autoload.php';

use League\Csv\Reader;
use League\Csv\Statement;

$stream = fopen('reg.csv', 'r');
$csv = Reader::createFromStream($stream);
$csv->setDelimiter(';');
$csv->setHeaderOffset(0);
$header = $csv->getHeader();

$stmt = Statement::create()
    ->limit(30);

$records = $stmt->process($csv);

$FullCompanies = [];
foreach ($records as $record) {
    $FullCompanies [] = new FullCompany($record);
}

do {
    echo "\n1. Print last 30 registers\n";
    echo "2. Find register by company name\n";
    echo "3. Find register by company registration code\n";
    do {
        $inputSelect = (int)readline("Choose (1-3): \n");
    } while ($inputSelect > 4 || $inputSelect < 0);

    switch ($inputSelect) {

        case 1:
            for ($i = 0; $i < count($FullCompanies); $i++) {
                echo "[{$i}]  " . $FullCompanies[$i]->getFullCompany() . PHP_EOL;
            }
            break;

        case 2:
            $companyName = readline("Find by company name : ");
            foreach ($FullCompanies as $company) {
                if ($company->getName() == $companyName) {
                    echo $company->getFullCompany() . PHP_EOL;
                }
            }
            break;

        case 3:
            $registrationCode = readline("Find by register code : ");
            foreach ($FullCompanies as $company) {
                if ($company->getRegistrationCode() == $registrationCode) {
                    echo $company->getFullCompany() . PHP_EOL;
                }
            }
            break;
    }
} while ($inputSelect !== 0);
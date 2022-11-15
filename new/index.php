<?php declare(strict_types=1);

require_once "vendor/autoload.php";

use App\Company;
use App\CompanyProcessor;
use League\Csv\Reader;

$csv = Reader::createFromPath("reg.csv");
$clCompPro = new CompanyProcessor($csv);

$clCompPro->setLimit(0, 50);
$clCompPro->setLine();
$getFr = $clCompPro->getRecords();

$companies = [];

foreach ($getFr as $record) {
    $companies [] = new Company($record["name_in_quotes"], $record["regcode"], $record["type"], $record["type_text"]);
}

$UserSelect = (int)readline(" 1: Search by registration code.\n 2: Search by company name.\n 3: Show all companies.\n");

if ($UserSelect === 1) {
    $registrationCode = readline("Enter registration code: ");
    foreach ($companies as $company) {
        if ($company->getRegistrationCode() == $registrationCode) {
            echo "reg.nr: {$company->getRegistrationCode()} | '{$company->getType()}' | '{$company->getName()}' | {$company->getTypeText()}." . PHP_EOL;
        }
    }
} else if ($UserSelect === 2) {
    $companyName = readline("Company name: ");
    foreach ($companies as $company) {
        if ($company->getName() == $companyName) {
            echo "reg.nr: {$company->getRegistrationCode()} | '{$company->getType()}' | '{$company->getName()}' | {$company->getTypeText()}." . PHP_EOL;
        }
    }
} else if ($UserSelect === 3) {
    foreach ($companies as $company) {
        echo "reg.nr: {$company->getRegistrationCode()} | '{$company->getType()}' | '{$company->getName()}' | {$company->getTypeText()}." . PHP_EOL;
    }


}
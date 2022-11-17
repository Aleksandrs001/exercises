<?php declare(strict_types=1);


namespace App;

use League\Csv\Reader;
use League\Csv\Statement;


class CompanyProcessor
{
    public Reader $csv;
    public $limiter;


    public function __construct($csv)
    {
        $this->csv = $csv;
    }


    public function setLine(): Reader
    {

        $this->csv->setDelimiter(";");
        $this->csv->setHeaderOffset(0);
        $this->csv->getHeader();
        $this->csv->getRecords();

        return $this->csv;
    }


    public function setLimit(int $min, int $max): void
    {
        $this->limiter = Statement::create()->offset($min)->limit($max);
    }


    public function getRecords(): Statement
    {
        $this->csv->getRecords();
        return $this->limiter->process($this->csv);
    }


}


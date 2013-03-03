<?php
class CurrentExecsController extends AppController {
    
    private $googleExecsSpreadsheetURL = 'https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdHRUVzRLb1dmZFNtaHhoanMyQ3dNR0E&output=csv';

    function index(){
        $execs = file($this->googleExecsSpreadsheetURL);
        array_shift($execs);
        foreach($execs as &$line){
              $line = str_getcsv($line);
        }
        $this->set('execs', $execs);
    }
}
?>
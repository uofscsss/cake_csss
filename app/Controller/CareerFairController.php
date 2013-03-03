<?php
class CareerFairController extends AppController {
    private $googleCareerFairSpreadsheetURL = 'https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdFpyallGS2loREVfMTlyM0NHMERoNHc&single=true&gid=1&output=csv';

    function index(){
        
        $event = file($this->googleCareerFairSpreadsheetURL);

        $tableHeader = str_getcsv(array_shift($event));
        $sponsorType = array(
            'Platinum'  => array(),
            'Gold'      => array(),
            'Silver'    => array(),
            'Bronze'    => array(),
            'General'   => array()
        );

        foreach($event as $e){
            $e = str_getcsv($e);
            $company = $e[2];
            $package = $e[4];
            $desc    = $e[5];
            if(!empty($e[4]) && array_key_exists($e[4], $sponsorType)){
                $sponsorType[$package][] = array(
                    $company,
                    $desc
                );
            }
        }
        $navSponsors = '';
        $descriptions = '';
        foreach($sponsorType as $sponsor=>$company){
            $navSponsors .= "<li class='nav-header'>$sponsor</li>";
            $descriptions .= "<h1 class='sponsor-type $sponsor'>$sponsor</h1>";
            foreach($company as $c){
                $companyName = $c[0];
                $companyDesc = $c[1];
                $companyNameLink = str_replace(' ', '-', $companyName);
                $navSponsors .= "<li><a href='#$companyNameLink'>$companyName</a></li>";
                $descriptions .= "<section id='$companyNameLink'><h2>$companyName</h2> <p>$companyDesc</p></section>";
            }
        }

        $this->set('navSponsors', $navSponsors);
        $this->set('tableHeader', $tableHeader);
        $this->set('event', $event);
        $this->set('descriptions', $descriptions);
        
    }

}
?>
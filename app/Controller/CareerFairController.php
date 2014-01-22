<?php
/***
 * Career Fair Controller
 * 
 * Data manipulation for the Career Fair page
 */
class CareerFairController extends AppController {
    //The URL to the google doc spreadsheet so that our execs can easily edit this and it changes on the webpage.
    private $googleCareerFairSpreadsheetURL = 'https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdFpyallGS2loREVfMTlyM0NHMERoNHc&single=true&gid=1&output=csv';
    private $foodSponsorSpreadsheetURL = 'https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdFpyallGS2loREVfMTlyM0NHMERoNHc&single=true&gid=1&output=csv';

    //This function is called when accessing: http://csss.usask.ca/Career-Fair/
    function index(){
        
        //Get the google file data
        $event = file($this->googleCareerFairSpreadsheetURL);
        
        $sponsor = file($this->foodSponsorSpreadsheetURL);

        //It's represented in CSV to extract
        $tableHeader = str_getcsv(array_shift($event));
        
        $foodSponsorData = str_getcsv(array_shift($sponsor));
        
        //Here you will define the different sponsor types in the order you wish it to display on the page.
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
        $this->set('foodSponsorText', $foodSponsorData[0]);
        $this->set('foodSponsorHTML', $foodSponsorData[1]);
        
    }

}
?>

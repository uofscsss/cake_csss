<div class='row'>
      <div class='span3'>
        <div class="well sidebar-nav bs-docs-sidebar">
            <ul class="nav nav-list">
              <li class="active"><a href="#">Schedule</a></li>
              <li class="nav-header">Sponsors</li>
              <?php echo $navSponsors;?>
            </ul>
          </div>
      </div>
      <div class='span7'>
        <h1><center><?php echo "{$tableHeader[0]}"; ?></center></h1>
        <h2><center><?php echo "{$tableHeader[1]}"; ?></center></h2>
        <table class='table table-hover table-bordered'>
<?php

 $padding = '       ';
 foreach($event as $line){
    $line = str_getcsv($line);
    $line = array_slice($line, 0, 4);
    echo "$padding<tr>\n";
    foreach($line as $td){
        if(!empty($td))
            echo "$padding  <td>$td</td>\n";
    }
    echo "$padding</tr>\n";
 }

?>
        </table>
        <h3><?php echo $foodSponsorText;</h3>
        <?php echo $foodSponsorHTML;?>
        <?php echo $descriptions;?>
    </div>
</div>

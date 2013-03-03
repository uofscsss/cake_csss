<?php $column = 1; ?>

<div class='row'>
    <center>
        <?php foreach($execs as $exec):?>
        <div class='span4 exec'>
            <h3><?php echo $exec[0];?></h3>
            <h1><?php echo $exec[1];?></h1>
            <img src='<?php echo $exec[2];?>'/>
        </div>
      <?php
      $column++;
      if($column > 3){
            $column = 1;
            echo "</div><div class='row'>";
      }
      endforeach;
?>
</center>
</div>
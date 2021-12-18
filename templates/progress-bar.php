<?php
  $ratio = $value / $total;
  $deg = 360*$ratio."deg";
  $perc = floor($value / $total * 100);
?>

<div class="pie ms-3 my-3" style="--value: <?php echo $deg; ?>">
    <div class="overlay">
      <h1>
        <?php echo $perc; ?>%
      </h1>
    </div>
</div>

<table border="1" width="100%"align="center">
<td>

<?php

function pypart($n)
{

for ($i = 0; $i < $n; $i++)
{

for($j = 0; $j <= $i; $j++ )
{

echo "* ";
}

echo "<br>";
}
}

$n = 3;
pypart($n);


?>
  </td>

  <td>
             <?php
                  for($i=3;$i>=1;$i--){
                    for($j=1;$j<=$i;$j++){
                        echo $j." ";
                    }
                    echo "<br>";
                  }
                 

?>

  </td>




<td>
    
<?php

function contalpha($n)
{

$num = 65;

for ($i = 0; $i < $n; $i++)
{

for ($j = 0; $j <= $i; $j++ )
{

$ch = chr($num);

echo $ch." ";

$num = $num + 1;
}

echo "<br>";
}
}

$n = 3;
contalpha($n);

?>

</td>
<table>


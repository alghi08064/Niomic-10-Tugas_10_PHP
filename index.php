<?php
print ("<h3>Tugas 10 PHP</h3>");

$arr = array(1,3,8,2,5,7,4,0);
print("<b>Sebelum Di Sorting :</b><br>");
print_r($arr);
echo "<br><br>";

$arr = bubble_sort($arr);
print("<b>Setelah Disorting (Bubble Sort) :</b><br>");
print_r($arr);


function bubble_Sort($arr )
{
  do
  {
    $swapped = false;
    for( $i = 0, $c = count($arr) - 1; $i < $c; $i++ )
    {
      if( $arr[$i] > $arr[$i + 1] )
      {
        list( $arr[$i + 1], $arr[$i] ) =
        array( $arr[$i], $arr[$i + 1] );
        $swapped = true;
      }
    }
  }
  while( $swapped );
  return $arr;
}
?>

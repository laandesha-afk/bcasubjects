<?php
echo "Enter the first number:";
$num1=trim(fgets(STDIN));
echo "Enter the second number:";
$num2=trim(fgets(STDIN));

$a=$num1;
$b=$num2;

while($b !=0){
$remainder=$a%$b;
$a=$b;
$b=$remainder;
}
$gcf=$a;
$lcm=($num1*$num2)/$gcf;

echo "GCF of $num1 and $num2=$gcf\n";
echo "LCM of $num1 and $num2=$lcm\n";

?>

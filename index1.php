<meta charset="utf-8">
<?php
$NumArray= array(1);
// заполним массив
for ($i = 1; $i < 200; $i++) {
	$ArrayMod[$i] = $i;
	//echo $ArrayMod[$i];
}
    $sum = 0;
	$divider = 0; 
	 
	$ad = 0;
	$ArrayDivider=array(0); // массив для делителя
	for ($i = 1; $i < 200; $i++)
	{
		$ad = 0;
		for ($j = 1; $j < 200; $j++) 
		{
		$a1 = $ArrayMod[$i]; 
		$b1 = $ArrayMod[$j];
		$c1 = $a1 % $b1;
			if ($c1 == 0) 
			{
				$divider++; // введем учет кол-во делителй
				$ArrayDivider[$ad] = $ArrayMod[$j];
				$ad++;
			} // if ArrayMod
		
		}; // for j	
		if ($divider == 5)
		{
			$sum += $ArrayMod[$i];
                 echo " <br />";
                 echo " Число = ";
                 echo $ArrayMod[$i];
                 echo " Его делители ";
                 for ($r = 0; $r < $divider; $r++)
                 	echo $ArrayDivider[$r];
                    echo ","; 
			/*cout << endl;
			cout << " Число = " << ArrayMod[i] << endl;
			cout << " Его делители " << endl;
			for (int r = 0; r < divider; r++)
				cout << ArrayDivider[r]<<","; */
		
		}
		$divider = 0; // сброс счетчика
	} //for i
         echo "<br />";
         echo "======================================";
         echo "<br />";
         echo "Сумма таких чисел = ";
         echo $sum;
         echo "<br />";
	/*cout << endl;
	cout << "======================================" << endl;
	cout << "Сумма таких чисел = " << sum << endl; */
?>
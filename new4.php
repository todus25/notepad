<?php

$y=array(

        array('name'=>'al imran', 'pen'=>'10', 'book'=>'200'),
        array('name'=>'habib', 'pen'=>'12', 'book'=>'400')
	   
	  // array('al imran','10','200'),
        //array('habib','12','400')
	   
	   
		);
		echo $y[1][2];
		
		//var_dump ($_SERVER);
		foreach($y as $k=>$v)
		{
			
			echo$y[$k]['name'].'</br>';
		}
			
			
		
<?php
	// function that receives random number and returns associated string from array
	function quoteFunction($num) 
	{
		//array of quotes
		$Quotes = array("Two wrongs don't make a right", 
						"The pen is mightier than the sword", 
						"When in Rome, do as the Romans",
						"The squeaky wheel gets the grease",
						"When the going gets tough, the tough get going");
        echo $Quotes[$num]; // return quote
    }         
?>

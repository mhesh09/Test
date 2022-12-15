<?php



class Three{

	var $price = array( "1"=>100,"2"=>500 ,"3"=>1000,"4"=>5000,"6"=>10000);

	var $listTotal = array();
	var $count = 0;
	var $total = 0;

function processing($data)
{
	
	foreach($this->price as $x => $x_value)
	{	


		if($data < $x_value)
		{

			$this->listTotal[$this->count] = $x;
			$this->count++;			
		}
	}

	return $this->listTotal;

}


function adding($data)
{
	foreach($data as $x )
	{
		$this->total=$this->total+$this->price[$x];
	}

	return $this->total;
}



}



$Object = new Three;
$outputOne=$Object-> processing(200); //Please supply the value.
echo "The list which has greater price than the given input\n";
foreach ($outputOne as $t)
{
	echo $t."\n";
}



$anotherOutput = array('1','3','4'); // Please supply the list.

$outputTwo = $Object->adding($anotherOutput);
echo " The total sum of price which you have listed is \n";
echo "$outputTwo";

?>

<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return view();
    }

	public function read_shortcuts(){
		$f = fopen ("./data/keybords.txt", "r");
	    $ln= 0;
		$shortcuts=[];
	    while ($line= fgets ($f)) {
	        if ($line===FALSE) print ("FALSE ");
			$line = explode('|', $line);
			$shortcuts[$ln]['cuts']=$line[0];
			$shortcuts[$ln]['ch']=trim($line[1]);
			$shortcuts[$ln]['en']=trim($line[2]);
			$ln++;
	    }
		//p($shortcuts);
		$_result = [];
		for($i=0;$i<5;$i++){
			$k = rand(0,43);
			if(!array_key_exists($k,$_result)){
				$_result[$k] = $shortcuts[$k];
			}else{
				--$i;
			}
		}
		ksort($_result);
		return json($_result);
	}
}

<?php
require('fpdf.php');

class PDF extends fpdf
{
	protected $B=0;
	protected $I=0;
	protected $u=0;
	protected $HREF='';
	function WriteHTML($html)
	$html = str_replace("\n",'',$html);
	$a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
	foreach($a as $i=>$e)
	{
		if($i%2==0)
		{
			if($this->HREF)
				$this->PutLink($this->HREF,$e);
			else
				$this->Write(5,$e);
		}
		else
		{
			if($e[0]=='/')
				$this->CloseTag(strtoupper(substr($e,1)));
			else
			{
				$a2 = explode('',$e);
				$tag = strtoupper(array_shift($a2));
				$attr=array();
				foreach($a2 as $v)
				{
					if
				}
			}
		}
	}
}
?>
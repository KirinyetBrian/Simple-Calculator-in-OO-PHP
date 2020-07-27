<?php
Class Calculator
{
public $value1;
public $value2;
public $result;
public $operator;

public function Calc($value1,$value2,$operator)
	{

	if(isset($_POST['submit']))
		{

			$value1=$this->value1;
			$value2=$this->value2;
			$operator=$this->operator;


			$value1=$_POST['value1'];
			$value2=$_POST['value2'];
			$operator=$_POST['operator'];


			
				if($operator == '+') 
					{			 
					$this->result=$value1 + $value2;
					return $this->result;

					return $value2;
					return $value1;
					}
							

				if($operator== '-')
						
					{

					$this->result=$value1 - $value2;
					return $this->result;
					}	
							
				if($operator== '/')
						 
					{

					$this->result=$value1 / $value2;
					return $this->result;

					}
				if($operator== '*')
						 
					{

					$this->result=$value1 * $value2;
					return $this->result;

					}
						else

						{
							echo "NON EXISTING OPERATOR!!!";
						}
		}

	}

}
			
	



<?php
Class Calculator{
    //declare variables 
    public $value1;
    public $value2;
    public $result;
    public $operator;

public function __construct($value1,$result, $value2,$operator){
    $this->value1 = $value1;
    $this->value2 = $value2;
    $this->operator = $operator;
    $this->result = $result; 
}
public function Calc(){
       //Take the values from the form
	if(isset($_POST['submit'])) {
	$this->value1 = $_POST['value1'];
	$this->value2 = $_POST['value2'];
        $this->operator = $_POST['operator'];
           //check if the inputs are numeric
	    if (is_numeric($this->value1) && is_numeric($this->value2)) {
            //check what operator has been chosen
            switch ($this->operator) {
	       //Addition
                case '+':
                    $this->result = $this->value1 + $this->value2;
                        return $this->result;

                        return $this->value2;
                        return $this->value1;
                    break;
	        //substraction
                case '-':
                    $this->result = $this->value1 - $this->value2;
                        return $this->result;
                        
                        return $this->value2;
                        return $this->value1;
                    break;
	        //Division
                case '/':
                $this->result = $this->value1 / $this->value2;
                        return $this->result;

                        return $this->value2;
                        return $this->value1;
                    break;
	        //multiplication
                case '*':
                    $this->result= $this->value1 * $this->value2;
                        return $this->result;

                        return $this->value2;
                        return $this->value1;
                    break;               
                //Else return error
                default:
                    echo "NON EXISTING OPERATOR!!!";
                    break;
            }
         //if the number is not numberix
        }else{
                echo "ERROR CANNOT CALCULATE!!. <br> Please enter numeric values only";
            }
   }
}
}


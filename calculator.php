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
    
	    if (is_numeric($this->value1) && is_numeric($this->value2)) {

            switch ($this->operator) {
                case '+':
                    $this->result = $this->value1 + $this->value2;
                        return $this->result;

                        return $this->value2;
                        return $this->value1;
                    break;
                case '-':
                    $this->result = $this->value1 - $this->value2;
                        return $this->result;
                        
                        return $this->value2;
                        return $this->value1;
                    break;
                case '/':
                $this->result = $this->value1 / $this->value2;
                        return $this->result;

                        return $this->value2;
                        return $this->value1;
                    break;
                case '*':
                    $this->result= $this->value1 * $this->value2;
                        return $this->result;

                        return $this->value2;
                        return $this->value1;
                    break;               
                
                default:
                    echo "NON EXISTING OPERATOR!!!";
                    break;
            }	
        }else{
                echo "ERROR CANNOT CALCULATE!!. <br> Please enter numeric values only";
            }
   }
}
}


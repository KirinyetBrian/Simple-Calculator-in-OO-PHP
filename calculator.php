<?php
Class Calculator{
    //declare variables 
    public $value1;
    public $value2;
    public $result;
    public $operator;

public function __construct($value1,$result, $value2, $operator){
    $this->value1 = $value1;
    $this->value2 = $value2;
    $this->operator = $operator;
    $this->result = $result; 
}
//Take the values from the form & validate 
public function form_input($data){
	
    $data = trim($data);
    /**
    * Not sure to validate the following 
    * because of the operators which are special characters
    */
    //$data = stripslashes($data);
    //$data = htmlspecialchars($data);
    return $data;
}
public function Calc(){
	
    //Take the  vaidated values from the form
    if(isset($_POST['submit'])) {
    	$this->value1 = form_input($_POST['value1']);
    	$this->value2 = form_input($_POST['value2']);
    	$this->operator = form_input($_POST['operator']);
		
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
	           //subtraction
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
                    echo "The Requested Operation cannot be achieved!!!";
                    break;
            }
         //if the number is not numberix
        }else{
                echo "ERROR!, Cannot Calculate Non-Numeric Values!. <br> Please try again with numeric values only";
            }
   }
}
}


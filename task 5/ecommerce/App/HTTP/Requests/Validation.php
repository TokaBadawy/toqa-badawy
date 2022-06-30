<?php
namespace App\HTTP\Requests;

use App\DataBase\Models\Model;

class Validation{
    private array $errors = [];
    private $value;
    private $valueName;

    public function required(){
        if(empty($this->value)){
            $this->errors[$this->valueName][__FUNCTION__]= "{$this->valueName} is required";
           
        }
        return $this;

    }
    public function unique(string $table, string $column){
        $model = new Model;
        $query = "SELECT * FROM {$table} WHERE {$column} = ?";
        $stmt = $model->conn->prepare($query);
        $stmt->bind_param('s',$this->value);
        $stmt->execute();
        if($stmt->get_result()->num_rows == 1 ){
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} Already Exists";
        }
        return $this;


        
    }

    public function max(int $max){
        if(strlen($this->value) > $max){
            $this->errors[$this->valueName][__FUNCTION__]= "{$this->valueName} must be less than {$max} characters";


        }
        return $this;
        
    }
    public function digits(int $digits){
        if(strlen($this->value) != $digits){
            $this->errors[$this->valueName][__FUNCTION__]= "{$this->valueName} must be  {$digits} digits";


        }
        return $this;
        
    }
    public function integer(){
        if(!ctype_digit($this->value)){
            $this->errors[$this->valueName][__FUNCTION__]= "{$this->valueName} must be  Integer";


        }
        return $this;
        
    }
    public function regex( string $pattern){
        if(!preg_match($pattern,$this->value)){
            $this->errors[$this->valueName][__FUNCTION__]= "{$this->valueName}  is invalid";
        }
        return $this;

        
    }
    public function in(array $values){
       if(!in_array($this->value, $values)){
        $this->errors[$this->valueName][__FUNCTION__]= "{$this->valueName}  Must be in values".implode("m , f",$values);

       }
       return $this;
        
    }


    public function exsits(string $table, string $column){
        $model = new Model;
        $query = "SELECT * FROM {$table} WHERE {$column} = ?";
        $stmt = $model->conn->prepare($query);
        $stmt->bind_param('s',$this->value);
        $stmt->execute();
        if($stmt->get_result()->num_rows == 0 ){
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} Not Exists"; }
        
    }


    public function confirmed($comperedValue){
        if($this->value != $comperedValue){
            $this->errors[$this->valueName][__FUNCTION__]= "{$this->valueName} is not confirmed";
        }
        return $this;
    }


   





    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

     /**
     * Get the value of error
     */ 
    public function getError(string $error)
    {
        if(isset($this->errors[$error])){
         foreach($this->errors[$error] AS $error){
            return "<p class='text-danger font weight-bold'>*{$error}</p>";
         }

        } 
        return null;
    }





    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the value of valueName
     *
     * @return  self
     */ 
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;

        return $this;
    }


}
 
// $validation= new Validation;
// $validation->setValueName('first_name')->setValue('')->required()->max(32);









?>
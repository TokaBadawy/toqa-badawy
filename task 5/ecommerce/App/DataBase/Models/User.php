<?php
namespace App\DataBase\Models;

use App\DataBase\Models\Contracts\Crud;
use App\DataBase\Models\Model;


class User extends Model implements Crud{
    private $id, $first_name ,$last_name,$email , $password, $phone, $gender,
    $image,$status,$verification_code,$email_verified_at ,$created_at , $updated_at ; 
   





    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = password_hash($password,PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getBrand()
    {
        return $this->status;
    }

    /**
     * Set the value of brand_id
     *
     * @return  self
     */ 
    public function setBrand_id($status)
    {
        $this->status= $status;

        return $this;
    }

    /**
     * Get the value of subcategory_id
     */ 
    public function getimage()
    {
        return $this->image;
    }

    /**
     * Set the value of subcategory_id
     *
     * @return  self
     */ 
    public function setimage($image_id)
    {
        $this->image = $image_id;

        return $this;
    }

    /**
     * Get the value of email_verfied_at
     */ 
    public function getEmail_verified_at()
    {
        return $this->email_verified_at;
    }

    /**
     * Set the value of email_verfied_at
     *
     * @return  self
     */ 
    public function setEmail_verified_at($email_verified_at)
    {
        $this->email_verified_at = $email_verified_at;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of verification_code
     */ 
    public function getVerification_code()
    {
        return $this->verification_code;
    }

    /**
     * Set the value of verification_code
     *
     * @return  self
     */ 
    public function setVerification_code($verification_code)
    {
        $this->verification_code = $verification_code;

        return $this;
    }


    public  function create(){
        $query = "INSERT INTO users (first_name,last_name,email,phone,password,gender,verification_code) 
        VALUES (?,?,?,?,?,?,?) ";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ssssssi',$this->first_name,$this->last_name,$this->email,$this->phone,
        $this->password,$this->gender,$this->verification_code);
        return $stmt->execute();

    }
public  function read(){

}
public  function update(){

}
public  function delete(){

}

public function checkUserCode(){
    $query = "SELECT * FROM users WHERE verification_code = ? AND email = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param('is',$this->verification_code,$this->email);
    $stmt->execute();
    return $stmt;



}


public  function makeUserVerified(){
    $query = "UPDATE users SET email_verified_at = ? WHERE email= ? ";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param('ss',$this->email_verified_at,$this->email);
    return $stmt->execute();
}


public function get_User_Email(){
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param('s',$this->email);
    $stmt->execute();
    return $stmt;



}










}




?>
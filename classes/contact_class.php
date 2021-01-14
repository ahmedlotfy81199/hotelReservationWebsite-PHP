<?php
class contact extends Database{
    private $full_name, $email, $phone_number,$massage;


    /**
     * Get the value of full_name
     */ 
    public function getFull_name()
    {
        return $this->full_name;
    }

    /**
     * Set the value of full_name
     *
     * @return  self
     */ 
    public function setFull_name($full_name)
    {
        $this->full_name = $full_name;

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
     * Get the value of phone_number
     */ 
    public function getPhone_number()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
     *
     * @return  self
     */ 
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * Get the value of massage
     */ 
    public function getMassage()
    {
        return $this->massage;
    }

    /**
     * Set the value of massage
     *
     * @return  self
     */ 
    public function setMassage($massage)
    {
        $this->massage = $massage;

        return $this;
    }
    public function ins(){

        $sql= "INSERT INTO `contact`(`email`, `phone number`, `massage`, `full_name`) VALUES ('$this->email','$this->phone_number','$this->massage','$this->full_name')";
        $result = Parent::doquery($sql);
        return $result;
    }
}

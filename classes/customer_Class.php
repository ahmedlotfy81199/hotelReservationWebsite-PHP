<?php
class Customers extends Database
{
    private $id, $name, $email, $password;


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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

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
        $password=sha1($password);
        $this->password = $password;

        return $this;
    }
    public function selectall()
    {
        $sql = 'SELECT `cus_ID`, `cus_name`, `password`, `email` FROM `customers` ';
        $sql_query = Parent::doquery($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($sql_query)) {
            $data[] = $row;
        }
        return $data;
    }
    public function login()
    {
        $sql = "SELECT * FROM `customers` WHERE email='$this->email'AND password='$this->password'";
        $sql_query = Parent::doquery($sql);
        $count = mysqli_num_rows($sql_query);
        if($count>0){
            return $count;
        }
    }
    public function signup(){
        $sql = "INSERT INTO `customers`( `cus_name`, `password`, `email`) VALUES ('$this->name','$this->password','$this->email')";
        $sql_query =Parent::doquery($sql);
        return $sql_query;
    }
}

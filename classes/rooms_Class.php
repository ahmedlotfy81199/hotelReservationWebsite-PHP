<?php
class Rooms extends Database{
    private $id,$type,$description,$price,$aviliable,$from_date,$to_date,$date;

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
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    /**
     * Get the value of aviliable
     */ 
    public function getAviliable()
    {
        return $this->aviliable;
    }

    /**
     * Set the value of aviliable
     *
     * @return  self
     */ 
    public function setAviliable($aviliable)
    {
        $this->aviliable = $aviliable;

        return $this;
    }
    public function selectall()
    {
        $sql = 'SELECT * FROM `rooms` ';
        $sql_query = Parent::doquery($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($sql_query)) {
            $data[] = $row;
        }
        return $data;
    }
    public function selectaviliable()
    {
        $sql = 'SELECT * FROM `rooms` WHERE availiable=1';
        $sql_query = Parent::doquery($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($sql_query)) {
            $data[] = $row;
        }
        return $data;
    }
    public function selectbyid($id)
    {
        $sql = "SELECT * FROM `rooms` WHERE room_id='$id'";
        $sql_query = Parent::doquery($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($sql_query)) {
            $data[] = $row;
        }
        return $data;    }


    /**
     * Get the value of from_date
     */ 
    public function getFrom_date()
    {
        return $this->from_date;
    }

    /**
     * Set the value of from_date
     *
     * @return  self
     */ 
    public function setFrom_date($from_date)
    {
        $this->from_date = $from_date;

        return $this;
    }

    /**
     * Get the value of to_date
     */ 
    public function getTo_date()
    {
        return $this->to_date;
    }

    /**
     * Set the value of to_date
     *
     * @return  self
     */ 
    public function setTo_date($to_date)
    {
        $this->to_date = $to_date;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    public function ava($id){
            
    $sql= "UPDATE `rooms` SET `availiable`= '0' WHERE `room_id`='$id'  ";
    $result= parent::doquery($sql);
    return $result;
    
    
    }

}
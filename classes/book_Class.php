<?php
class Books extends Database{
    private $fromdate,$todate;

    /**
     * Get the value of fromdate
     */ 
    public function getFromdate()
    {
        return $this->fromdate;
    }

    /**
     * Set the value of fromdate
     *
     * @return  self
     */ 
    public function setFromdate($fromdate)
    {
        $this->fromdate = $fromdate;

        return $this;
    }

    /**
     * Get the value of todate
     */ 
    public function getTodate()
    {
        return $this->todate;
    }

    /**
     * Set the value of todate
     *
     * @return  self
     */ 
    public function setTodate($todate)
    {
        $this->todate = $todate;

        return $this;
    }
    public function addbook(){
        $rooms=new Rooms();
        $sql = "INSERT INTO `books`( `book_fromdate`, `book_todate`) VALUES ('$this->fromdate','$this->todate')";
        $sql_query =Parent::doquery($sql);
        return $sql_query;
    }
}
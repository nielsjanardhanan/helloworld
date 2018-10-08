<?php

class Printer
{
    private $fname;
    private $lname;

    function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function greet()
    {
        echo "Hello" . " " . $this->fname . " " . $this->lname;

    }
}

?>

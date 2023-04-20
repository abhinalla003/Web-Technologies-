<?php
    class student
    {
        public $sname;
        public $rollno;
        public $email;
        function setData($sname,$rollno,$email)
        {
            $this->sname=$sname;
            $this->rollno=$rollno;
            $this->email=$email;
        }
        function getSname() { return $this->sname; }
        function getRollno() { return $this->rollno; }
        function getEmail() { return $this->email; }
    }
    $s1 = new student();
    $s1->setData("Abhishek Nalla", 319, "nallaabhi2003@gmail.com");
    echo "Name is " . $s1->getSname();
    echo "<br>Roll No is " . $s1->getRollno();
    echo "<br> Email is " . $s1->getEmail();
?>
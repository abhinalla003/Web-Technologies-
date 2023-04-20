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
    $myfile = fopen("students.txt", "a+");
    for($i=0;$i<3;$i++)
    {
        fwrite($myfile, $i+1 . " : ");
        fwrite($myfile, $s1->getSname());
        fwrite($myfile, "\t");
        fwrite($myfile, $s1->getRollno());
        fwrite($myfile, "\t");
        fwrite($myfile, $s1->getEmail());
        fwrite($myfile, "\n ");
    }
    fclose($myfile);
    ?>
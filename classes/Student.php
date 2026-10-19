<?php 
class  Student extends Person {
    protected string $id; 
    protected string $student_number;
    protected string $dob;

    public function __construct(string $id, string $student_number, string $firstname, string $lastname, string $dob) {
        $this->id = $id;
        $this->student_number = $student_number;
        $this->dob = $dob;
        parent::__construct($firstname, $lastname);
    }

    public function getStudentNumber(): string {
        return $this->student_number;
    }

    public function getDateOfBirth(): string {
        return  date('F j, Y', strtotime($this->dob));
    }




}
<?php 
class Person {
    protected string $firstname;
    protected string $lastname;

    public function __construct(string $firstname, string $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getCompleteName(): string {
        return ucfirst($this->lastname) . ', ' . ucfirst($this->firstname);
    } 
    
    
}
<?php 

class StudentRepository extends DBRepository implements IStudentRepository {

     
    public static function all(): array {
        
        $students = self::query("SELECT * FROM student WHERE student_number='2983798'");
        
        $result = [];
         foreach ($students as $student) {
            $result[] = new Student(
                $student['id'],
                $student['student_number'],
                $student['firstname'],
                $student['lastname'],
                $student['dob']
            );
        } 
         return  $result ;
      }
    
    public static function find(string $id): array {
        return [];
    }
    
    public static function update(array $student): array {
        return [];
    }
    
    public static function delete(string $id): void {
       
    }
    

}
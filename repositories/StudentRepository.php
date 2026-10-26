<?php 

class StudentRepository extends DBRepository implements IStudentRepository {

     
    public static function all(): array {
        
        $students = self::query("SELECT * FROM student");

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

     public static function create(array $s): void {
        $sql = "INSERT INTO student (student_number, firstname, lastname, dob) ";
        $sql .= "VALUES ('".$s['student_number']."', '".$s['firstname']."', ";
        $sql .="'".$s['lastname']."', '".$s['dob']."')";
        self::connection()->query($sql);
     }
    

}
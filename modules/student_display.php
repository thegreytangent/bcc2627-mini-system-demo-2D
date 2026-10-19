 <main class="content">
     <h2>Student Information</h2>
     <p>The warm-up is over. Let the real games begin.</p>
<?php $student = new Student(1,'12-xxx', 'John','Doe', '1923-23-13'); ?>
     <table border="1">
         <tr>
             <td>Student Number</td>
             <td>Complete Name</td>
             <td>Date of Birth</td>
             <td></td>
         </tr>
         <tr>
            <td><?php echo $student->getStudentNumber(); ?></td>
            <td><?php echo $student->getCompleteName(); ?></td>
            <td></td>
            <td></td>
         </tr>
         

     </table>
 </main> 1
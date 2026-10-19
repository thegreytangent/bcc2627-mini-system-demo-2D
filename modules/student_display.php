 <main class="content">
     <h2>Student Information</h2>
     <p>The warm-up is over. Let the real games begin.</p>

     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                  <button class="btn btn-success mb-4">Add Student</button>

                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th scope="col">Student Number</th>
                             <th scope="col">Compelte Name </th>
                             <th scope="col">Date of Birth</th>
                             <th scope="col">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        <?php foreach (StudentRepository::all() as $student) : ?>
                         <tr>
                             <th scope="row"><?php echo $student->getStudentNumber(); ?></th>
                             <td><?php echo $student->getCompleteName(); ?></td>
                             <td><?php echo $student->getDateOfBirth()?></td>
                             <td>
                                <button class="btn btn-info">Edit</button>
                                  <button class="btn btn-danger">Delete</button>
                             </td>
                         </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>






     <!-- <?php //$student = new Student(1,'12-xxx', 'John','Doe', '1923-23-13'); 
            ?>
     <table border="1">
         <tr>
             <td>Student Number</td>
             <td>Complete Name</td>
             <td>Date of Birth</td>
             <td></td>
         </tr>
         <tr>
            <td><?php // echo $student->getStudentNumber(); 
                ?></td>
            <td><?php //echo $student->getCompleteName(); 
                ?></td>
            <td></td>
            <td></td>
         </tr>
         

     </table>
 </main> 1 -->
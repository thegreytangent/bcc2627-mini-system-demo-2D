 <main class="content">
     <h2>Add new Student</h2>


     <div class="container-fluid">
         <div class="row">

             <div class="col-lg-8">
                 <a href="?page=students" class="btn btn-dark mb-4">Back</a>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-3"></div>
             <div class="col-lg-8">
               
                 <div class="card text-white bg-dark mb-3">
                     <div class="card-body">
                         <form method="POST" action="modules/student_create.php">
                             <div class="form-group mt-3">
                                 <label>Student Number</label>
                                 <input type="text" name="student_number" class="form-control">
                             </div>
                             <div class="form-group mt-3">
                                 <label>Firstname</label>
                                 <input type="text"  name="firstname" class="form-control">
                             </div>
                             <div class="form-group mt-3">
                                 <label>Lastname</label>
                                 <input type="text"  name="lastname" class="form-control">
                             </div>
                             <div class="form-group mt-3">
                                 <label>Date of Birth:</label>
                                 <input type="date"  name="dob" class="form-control">
                             </div>
                             <button type="submit" class="btn btn-primary mt-4">Submit</button>
                         </form>
                     </div>
                 </div>



             </div>
         </div>
     </div>
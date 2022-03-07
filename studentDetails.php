<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include('forms/studentDetailsServer.php'); ?>


<section>
      <div class="row">
        <div class="col-lg-6">
	<div class="card">
            <div class="card-body">
						<div style=" width: 50vw; margin-left : 25vw;" class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Student Details</h2>
							<div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
						</div>
						
            <?php include('forms/error.php'); ?>

<form   method="post" action="studentDetails.php" enctype="multipart/form-data" style=" width: 50vw;height:50vw; margin-left : 25vw;">

      <div class="row mb-3" hidden >
                  <label for="inputText" class="col-sm-2 col-form-label">Batchid</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="StBatch_id" value="<?php echo $_SESSION['batch_id']; ?>">
                  </div>
		  </div>
      <div class="row mb-3" hidden >
                  <label for="inputText" class="col-sm-2 col-form-label">courseid</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="StCourse_id" value="<?php echo $_SESSION['course_id']; ?>">
                  </div>
		  </div>
      <div class="row mb-3" hidden>
                  <label for="inputText" class="col-sm-2 col-form-label">Department</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="StDept_id" value="<?php echo $_SESSION['dept_id'] ?>">
                  </div>
		</div>
      

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="StName">
                  </div></div>

                  <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="StPwd">
                  </div>
                </div>

		


	


 <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Current Semester</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="StCsem" aria-label="Default select example">
                      <option selected>select one</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
	                    <option value="4">four</option>
                      <option value="5">five</option>
                      <option value="6">six</option>
                    </select>
                  </div>
                </div>




                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="StEmail">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">phone</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="StPhone">
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="Stprofilepic" type="file"  id="formFile">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">DOB</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="StDOB">
                  </div>
                </div>
                
		
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="Staddress" style="height: 100px"></textarea>
                  </div>
                </div>

                 <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="StStatus" aria-label="Default select example">
                      <option selected>select one</option>
                      <option value="1">Join</option>
                      <option value="2">Disjoin</option>
                    </select>
                  </div>
                </div>



              
<!-- 

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Disabled</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>


-->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" name="reg_student" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form>

			</div>
			</div>
			</div>
			</div>
		</div>
</section>
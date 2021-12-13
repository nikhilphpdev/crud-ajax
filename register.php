<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  	<script src="js/ajscript.js"></script>
</head>
<body>
<div class="container mt-3">
  <h3>CRUD </h3> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    New Task</button> 
    

  <div class="alert alert-success" style="display: none;"></div>
    <table class="table table-striped "  width="100%">
      <thead>
  <tr>
       <th>id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>State</th>
      <th>DOB</th>
      <th>Profile</th>
      <th>Action</th>
  </tr>
</thead>
<tbody id="tabe"></tbody>
</table>
</div>
</div>

</div>
</body>
</html>
<!-- -------------Update Model----------------------------------- -->

  <!-- The Modal -->
<div class="modal" id="up-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Profile Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form id="update_data" enctype="multipart/form-data">
         <div class="modal-body">
          <label>Name:</label>
          <input type="text" name="name" id="up_name" class="form-control" placeholder="">
         
         </div>
         <div class="modal-body">
          <label>Email:</label>
          <input type="text" name="email" id="up_email" class="form-control" placeholder="">
          
         </div>
         <div class="modal-body">
          <label>Gender:</label>
          <label class="checkbox-inline"><input type="radio" id="up_gender" selected="selected" name="gender" value="male">Male</label>
          <label class="checkbox-inline"><input type="radio" id="up_gender" selected="selected" name="gender" value="female">Female</label>
         </div>
         <div class="modal-body">
          <label for="state">State:</label>
        <select class="form-select" name="state" id="up_state">
          <option selected="selected" value="" disabled="disabled">Select State</option>
          <option value="tamilnadu">Tamilnadu</option>
          <option value="gujrat">Gujrat</option>
          <option value="Punjab">Punjab</option>
          <option value="odisha">Odisha</option>
        </select>
      
         </div>
         <div class="modal-body">
          <label>Date of Birth</label>
          <input type="date" name="dob" id="up_dob" class="form-control">
          
         </div>
             <div class="holder col-md-4">
                <img id="imgshow" src="uploads/icon.png" class="hello rounded mx-auto d-block" alt="pic" />
            </div>
            <div class="modal-body">
            <input type="file" name="up_file"  id="update_file" />
            
              </div>
          <input type="hidden" name="hidden"  id="hii_id" />
          <input type="submit" name="up_save" id="" class="update btn-primary" value="Update">

        </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- -----------------------insert model ---------------------------->

 <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Register Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
       <!--  <div class="alert alert-success" style="display: none; text-align: center;"></div> -->
      </div>
        <form method="" id="insert_data" action="" enctype="multipart/form-data">
         <div class="modal-body">
          <label>Name:</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="">
         
         </div>
         <div class="modal-body">
          <label>Email:</label>
          <input type="text" name="email" id="email" class="form-control" placeholder="">
          
         </div>
         <div class="modal-body">
          <label>Gender:</label>
          <label class="checkbox-inline"><input type="radio" id="gender" name="gender" value="male">Male</label>
          <label class="checkbox-inline"><input type="radio" id="gender" name="gender" value="female">Female</label>
         </div>
         <div class="modal-body">
          <label for="state">State:</label>
        <select class="form-select" name="state" id="state">
          <option selected="selected" value="" disabled="disabled">Select State</option>
          <option value="tamilnadu">Tamilnadu</option>
          <option value="gujrat">Gujrat</option>
          <option value="Punjab">Punjab</option>
          <option value="odisha">Odisha</option>
        </select>
      
         </div>
         <div class="modal-body">
          <label>Date of Birth</label>
          <input type="date" name="dob" id="dob" class="form-control">
          
         </div>
             <div class="holder col-md-4">
                <img id="imgPreview" src="uploads/icon.png" class="hello rounded mx-auto d-block" alt="pic" />
            </div>
            <div class="modal-body">
            <input type="file" name="upload_file"  id="upload_file" />
            
              </div>
          
          <input type="submit" name="save" id="save" class="btn-primary" value="submit">

        </form>

    
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
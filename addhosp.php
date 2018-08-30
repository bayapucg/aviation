<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Student Registration Form</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Doctor</li>
                    </ol>
                </div>
            </div>             
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header> Details</header>                      
                        </div>
                        <div class="card-body" id="bar-parent">
                           <form class=" pad30 form-horizontal" action=" " method="post"  id="contact_form">
                                <div class="row">
                                     <div class="form-group col-md-6">
                                      <label >First Name</label>
                                      <input type="text" class="form-control"  name="first_name" id="first_name" placeholder="Enter Name" >
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label >Last Name</label>
                                      <input type="text" class="form-control"  name="last_name" id="last_name" placeholder="Enter Name" >

                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="email">Email</label>
                                      <input type="email" class="form-control"  placeholder="Enter email" >
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="email">Phone No</label>
                                      <input type="text" class="form-control"  placeholder="" >
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="email">UserName</label>
                                      <input type="text" class="form-control"  placeholder="" >
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="email">Address1</label>
                                      <textarea type="textarea" class="form-control"  placeholder="Enter Address" ></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="email"></label>

                                     <div class="row">
                                     <div class="col-md-6">
                                         
                                        <input type="text" class="form-control"  placeholder="Enter Zip Code" >
                                     </div>
                                     <div class="col-md-6">
                                        <select class="form-control">
                                            <option>Enter City</option>
                                            <option>Enter City</option>
                                            <option>Enter City</option>
                                         </select>

                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="email"></label>

                                     <div class="row">
                                     <div class="col-md-6">
                                        <select class="form-control">
                                            <option>Enter State</option>
                                            <option>Enter State</option>
                                            <option>Enter State</option>
                                         </select>
                                     </div>
                                     <div class="col-md-6 row">
                                        <select class="form-control">
                                            <option>Enter Country</option>
                                            <option>Enter Country</option>
                                            <option>Enter Country</option>
                                         </select>

                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label >Qualification</label>
                                      <select class="form-control">
                                            <option>X Standard</option>
                                            <option>X Standard</option>
                                            <option>X Standard</option>
                                         </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label >Date of Birth</label>
                                      <input type="date" class="form-control"  name="first_name" id="first_name" placeholder="" >
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label >Sex</label>
                                      <input type="text" class="form-control"  name="first_name" id="first_name" placeholder="" >
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label >Blood Group</label>
                                      <input type="text" class="form-control"  name="first_name" id="first_name" placeholder="" >
                                    </div>
                                     <div class="form-group col-md-6">
                                      <label >Nationality</label>
                                      <input type="text" class="form-control"  name="first_name" id="first_name" placeholder="" >
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label >Mother Tongue</label>
                                      <input type="text" class="form-control"  name="last_name" id="last_name" placeholder="" >

                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="email">Religion</label>
                                      <input type="email" class="form-control"  placeholder="" >
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="email">Community</label>
                                      <input type="text" class="form-control"  placeholder="" >
                                    </div>
                                </div>
                                <button class="btn btn-praimry " type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<?php include('footer.php'); ?>
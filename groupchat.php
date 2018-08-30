<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Warden's Registration</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Warden's</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
	               
                                             
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header> Personal Details</header>                      
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
                                  <label for="email">User Name</label>
                                  <input type="text" class="form-control"  placeholder="" >
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="email">Address2</label>
                                  <textarea type="textarea" class="form-control"  placeholder="Enter Address" ></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="email"></label>

                                 <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" class="form-control"  placeholder="Enter Zip Code" >
                                 </div>
                                 <div class="col-md-6 row">
                                    <input type="text" class="form-control"  placeholder="Enter City" >

                                </div>
                                </div>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="email"></label>

                                 <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" class="form-control"  placeholder=" Enter State" >
                                 </div>
                                 <div class="col-md-6 row">
                                    <input type="text" class="form-control"  placeholder="Enter Country" >

                                </div>
                                </div>
                                </div>

                            </div>
                            <button class="btn btn-praimry " type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                    
                    
                </div>
            </div>
			<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php include('footer.php'); ?>
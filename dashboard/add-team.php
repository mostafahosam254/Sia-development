<?php 
    $page_title = "Elfire || Add team member";
    include 'common-pages/page-form.php';
    include 'conn/auth.php';
?>

<!DOCTYPE html>
<html lang="en">

   <?php echo $meta; ?>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
           <!-- header -->
            <?php echo $header; ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sia</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add Data</a></li>
                                            <li class="breadcrumb-item active">Add team member</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add team member</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                      

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title mb-0">Add team member</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="rootwizard">
                                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                                    <li class="nav-item" data-target-form="#accountForm">
                                                        <a href="#first" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                            <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Data</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" data-target-form="#mediaForm">
                                                        <a href="#second" data-bs-toggle="tab" data-toggle="tab"  class="nav-link rounded-0 py-2">
                                                            <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Media</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" data-target-form="#otherForm">
                                                        <a href="#forth" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2">
                                                            <i class="ri-check-double-line fw-normal fs-20 align-middle me-1"></i>
                                                            <span class="d-none d-sm-inline">Finish</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content mb-0 b-0">

                                                    <div class="tab-pane" id="first">
                                                        <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Name *</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="userName3" name="name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="userName3">Position</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="userName3" name="position">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label class="col-md-3 col-form-label" for="description">Description</label>
                                                                        <div class="col-md-9">
                                                                            <textarea name="description" id="" style="width: 100%;" rows="10"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                      <!-- end of form heeeeeeere /s -->
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class="next list-inline-item float-end">
                                                                <!-- <input type="submit" name="add-blog-data" class="btn btn-info"> -->
                                                            </li>
                                                        </ul>
                                                    <!-- </form> -->
                                                    </div>

                                                  
                                                                            
                                                    <div class="tab-pane fade" id="second">
                                                        

                                                        <div class="card-body">
                                                            <div action="" method="POST" enctype="multipart/form-data" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" 
                                                                data-upload-preview-template="#uploadPreviewTemplate">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" required/>
                                                                </div>
                                                                <div class="dz-message needsclick">
                                                                    <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                                    <h3>Upload image for the new team member</h3>

                                                                </div>
                                                            </div>
                                                                <div class="dropzone-previews mt-3" id="file-previews"></div>  

                                                        </div>
 
                                                       
                                                    </div>
                                                    
                                                    <div class="tab-pane fade" id="forth">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-center">
                                                                        <h2 class="mt-0">
                                                                            <i class="ri-check-double-line"></i>
                                                                        </h2>
                                                                        <h3 class="mt-0">Thank you !</h3>
                                                        
                                                                        <p class="w-75 mb-2 mx-auto">New team member is ready to publish</p>
                                                        
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        
                                                            <ul class="pager wizard mb-0 list-inline">
                                                            <li class="next list-inline-item float-end">
                                                                <input type="submit" name="add-main-services-data" class="btn btn-info">
                                                            </li>
                                                        </ul>   
                                                        </form>
                                                    </div>
                                                 </div> <!-- end #rootwizard-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> 
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

        
<?php 
// form data
if (isset($_POST['add-main-services-data'])) {
    $name= $_POST['name'];
    $position= $_POST['position'];
    $description= $_POST['description'];
    
    $file_Name = $_FILES["file"]["name"];
    $file_Type = $_FILES["file"]["type"];
    $file =file_get_contents($_FILES["file"]["tmp_name"]);
    
 
    
    
    $ins = $conn->prepare("INSERT INTO team (`name` , `position`, `description` ,`file_Name` , `file_Type` , `file`  )
    VALUES( :name , :position , :description  , :file_Name , :file_Type , :file)");
    
    $ins->bindParam("name",$name);//(value,$variable) confirm
    $ins->bindParam("position",$position);//(value,$variable) confirm
    $ins->bindParam("description",$description);//(value,$variable) confirm

    $ins->bindParam("file_Name",$file_Name);
    $ins->bindParam("file_Type",$file_Type);
    $ins->bindParam("file",$file);


    // $ins->execute();
    if ($ins->execute()) {
        echo '<script>window.alert("New team member is Publushed Now!")</script>';
    }else {
        echo '<script>window.alert("Error, Please Try again")</script>';
    }
    // var_dump($ins->errorInfo());//show error
    

};


?>
<?php echo $footer; ?>
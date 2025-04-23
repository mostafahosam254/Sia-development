<?php
$page_title = "Sia || Edit team data";
include 'common-pages/page-form.php';
include 'conn/auth.php';
$id = $_GET['id'];
$sele = mysqli_query($database, "SELECT * FROM `team` WHERE `id` = '$id' ");
$ss = mysqli_fetch_assoc($sele);
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
                                            <li class="breadcr  umb-item"><a href="javascript: void(0);">Sia</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Data</a></li>
                                            <li class="breadcrumb-item active">Edit team member</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit team member</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                      

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title mb-0">Edit team member</h4>
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
                                                
                                                </ul>

                                                <div class="tab-content mb-0 b-0">

                                                <div class="tab-pane" id="first">
                                                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="userName3">Name*</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="userName3" name="name" value="<?php echo $ss['name'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="userName3">Position</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="position" name="position" value="<?php echo $ss['position'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="description">Description</label>
                                                                <div class="col-md-9">
                                                                    <textarea name="description" id="description" style="width: 100%;" rows="10"><?php echo $ss['description'] ?></textarea>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label"></label>
                                                                <div class="col-md-9">
                                                                    <button type="submit" name="edit" class="btn btn-success waves-effect waves-light me-1">Edit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                                  
                                                                            
                                                    <div class="tab-pane fade" id="second">
                                                        

                                                        <div class="card-body">
                                                            <div  class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" 
                                                            data-upload-preview-template="#uploadPreviewTemplate">
                                                                 <form action="" method="POST" enctype="multipart/form-data">
                                                                    <div class="fallback">
                                                                        <input name="file" type="file" required/>
                                                                    </div>
                                                                    <div class="dz-message needsclick">
                                                                        <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                                        <h3>Team member Image</h3>

                                                                    </div>
                                                                    <ul class="pager wizard mb-0 list-inline">
                                                                        <li class="next list-inline-item float-end">
                                                                            <input type="submit" name="edit-product-image" class="btn btn-info" >
                                                                        </li>
                                                                    </ul>   
                                                                </form>
                                                            </div>
                                                           
                                                                <div class="dropzone-previews mt-3" id="file-previews"></div>  

                                                        </div>
 
                                                       
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
if (isset($_POST['edit-product-image'])) {
    $file_Name = $_FILES["file"]["name"];
    $file_Type = $_FILES["file"]["type"];
    $file =file_get_contents($_FILES["file"]["tmp_name"]);

    
    $ins = $conn->prepare("UPDATE `team`   
                            SET  `file_Name` = :file_Name,
                                `file_Type` = :file_Type,
                                `file` = :file
                                WHERE `id` = $id ");
    
    $ins->bindParam("file_Name",$file_Name);//الصوره
    $ins->bindParam("file_Type",$file_Type);
    $ins->bindParam("file",$file);
    if ($ins->execute()) {
        echo '<script>window.alert("Team member new image is uploaded successfully!")</script>';
    }else {
        echo '<script>window.alert("Error, Please Try again")</script>';
    }
}

// form data
if (isset($_POST['edit'])) {
    $name= $_POST['name'];
    $position= $_POST['position'];
    $description= $_POST['description'];
    $ins = $conn->prepare("UPDATE `team`   
                            SET `name` = :name,
                                `position` = :position ,
                                `description` = :description 
                                WHERE `id` = $id ");
    
    $ins->bindParam("name",$name);
    $ins->bindParam("position",$position);
    $ins->bindParam("description",$description);
    // $ins->execute();
    if ($ins->execute()) {
        echo '<script>window.alert("Team data is saved successfully!")</script>';
    }else {
        echo '<script>window.alert("Error, Please Try again")</script>';
    }
    // var_dump($ins->errorInfo());//show error
    

};


?>
<?php echo $footer; ?>
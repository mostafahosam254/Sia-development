<?php 
    include 'conn/auth.php';
    $page_title = "Sia || Projects data";
include 'common-pages/page-form.php';

?>
<!DOCTYPE html>
<html lang="en">

<?php echo $meta; ?>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                        <li class="breadcrumb-item active">Projects data</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Projects Data</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                            <div class="container">
                                                <input class="form-control" onkeyup="search_products()" id="product_input" type="text" placeholder="Search..">
                                                <br>
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th><b>ID</b></th>
                                                            <th data-priority="1">Project name</th>
                                                            <th data-priority="2">Category</th>
                                                            <th data-priority="5">Project image</th>
                                                            <th data-priority="7">Edit</th>
                                                            <th data-priority="8">Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="product_table">
                                                    <?php
                                                        $num = 1;
                                                        $product_sel = $conn->prepare("SELECT * FROM portfolio");
                                                        $product_sel->execute();
                                                        foreach ($product_sel as $product_sq) {
                                                            $product_image = "data:" . $product_sq['file_Type'] . ";base64," . base64_encode($product_sq['file']);

                                                            echo '
                                                                <tr>
                                                                    <td><b>' . $num++ . '</b></td>
                                                                    <td>' . $product_sq['title'] . '</td>
                                                                    <td>' . $product_sq['category'] . ' </td>
                                                                    <td><img src="'.$product_image.'" width=100px></td>
                                                                    <td><a href="edit-poject.php?id=' . $product_sq['id'] . '"><i class="fa fa-edit edit"></i></a></td>
                                                                    <td><i class="fa fa-trash trash" onclick="confirmDelete(' . $product_sq['id'] . ')"></i></td>
                                                                </tr>';
                                                        }
                                                    ?>
                                                        
                                                    </tbody>
                                                </table>
                                                <p>Number of results: <span id="resultCount"><?= $product_sel->rowCount() ?></span></p>
                                            </div>

                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <script>
                                                function search_products() {
                            var input, filter, table, tr, td, i, j, txtValue;
                            input = document.getElementById("product_input");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("product_table");
                            tr = table.getElementsByTagName("tr");

                            // Loop through all table rows, and hide those who don't match the search query
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td");
                                for (j = 0; j < td.length; j++) {
                                    if (td[j]) {
                                        txtValue = td[j].textContent || td[j].innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                            break; // Break out of inner loop if match found
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        }

                                                function confirmDelete(productId) {
                                                    if (confirm("Are you sure you want to delete this project entry?")) {
                                                        window.location.href = "deleteproject.php?project-id=" + productId;
                                                    }
                                                }
                                            </script>

                                            </div> <!-- end .table-responsive -->

                                        </div> <!-- end .table-rep-plugin-->
                                    </div> <!-- end .responsive-table-plugin-->
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

           <?php echo $footer;?>


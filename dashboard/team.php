<?php 
    include 'conn/auth.php';
    $page_title = "Sia || Team data";
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
                                        <li class="breadcrumb-item active">Team data</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Team Data</h4>
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
                                                <input class="form-control" onkeyup="search_team()" id="team_input" type="text" placeholder="Search..">
                                                <br>
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th><b>ID</b></th>
                                                            <th data-priority="1">Name</th>
                                                            <th data-priority="2">Position</th>
                                                            <th data-priority="2">Description</th>
                                                            <th data-priority="5">Member image</th>
                                                            <th data-priority="7">Edit</th>
                                                            <th data-priority="8">Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="team_table">
                                                    <?php
                                                        $num = 1;
                                                        $team_sel = $conn->prepare("SELECT * FROM team");
                                                        $team_sel->execute();
                                                        foreach ($team_sel as $team_sq) {
                                                            $team_image = "data:" . $team_sq['file_Type'] . ";base64," . base64_encode($team_sq['file']);

                                                            echo '
                                                                <tr>
                                                                    <td><b>' . $num++ . '</b></td>
                                                                    <td>' . $team_sq['name'] . '</td>
                                                                    <td>' . $team_sq['position'] . ' </td>
                                                                    <td>' . $team_sq['description'] . ' </td>
                                                                    <td><img src="'.$team_image.'" width=100px></td>
                                                                    <td><a href="edit-team.php?id=' . $team_sq['id'] . '"><i class="fa fa-edit edit"></i></a></td>
                                                                    <td><i class="fa fa-trash trash" onclick="confirmDelete(' . $team_sq['id'] . ')"></i></td>
                                                                </tr>';
                                                        }
                                                    ?>
                                                        
                                                    </tbody>
                                                </table>
                                                <p>Number of results: <span id="resultCount"><?= $team_sel->rowCount() ?></span></p>
                                            </div>

                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <script>
                                                function search_team() {
                            var input, filter, table, tr, td, i, j, txtValue;
                            input = document.getElementById("team_input");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("team_table");
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

                                                function confirmDelete(teamId) {
                                                    if (confirm("Are you sure you want to delete this member entry?")) {
                                                        window.location.href = "deleteteam.php?team-id=" + teamId;
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


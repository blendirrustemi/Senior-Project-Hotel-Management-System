<?php session_unset();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LIST TEST</title>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header clearfix">
                    <a href="index.php" class="btn btn-success pull-left">Home</a>
                    <h2 class="pull-left">Sports Details</h2>
                    <a href="#" class="btn btn-success pull-right">ADD NEW ROOM</a>
                </div>
                <?php
                    if($result->num_rows > 0){
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Room type name</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>" . $row['room_type_name'] . "</td>";
                            echo "<td>";
                            /**echo "<a href='index.php?act=update&id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><i class='fa fa-edit'></i></a>";
                            echo "<a href='index.php?act=delete&id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><i class='fa fa-trash'></i></a>";*/
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } else{
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

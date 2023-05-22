<?php include "add_modal.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Operation in XML Files using PHP</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">  
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Tourism Admin Panel</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-level-up"></span> New Content</a>

            <a href="" class="btn btn-dark" target="_blank " ><span class="glyphicon glyphicon-th-list"></span> View Website</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead class=" table table-dark font-monospace" >
                <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                    <?php
                    //load xml file
                    $file = simplexml_load_file('files/tour.xml');
 
                    foreach($file->tour as $row){
                        ?>
                        <tr class="table-info">
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->author; ?></td>
                            <td><?php echo $row->date; ?></td>
                            <td><?php echo $row->content; ?></td>
                            <td>
                                <a href="#edit_<?php echo $row->id; ?>"data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                                <a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            </td>
                            <?php include('edit_delete_modal.php'); ?>
                        </tr>
                        <?php
                    }
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
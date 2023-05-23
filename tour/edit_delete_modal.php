<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="p-3 bg-secondary text-white" class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">EDIT</h4></center>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="p-3 bg-secondary-subtle text-emphasis-secondary" class="modal-body">
			<div class="container-fluid">
			<form class="font-monospace" method="POST" action="add.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="id" placeholder="0.0.0.0">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Title:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control"  required name="title">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Author:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="author">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
                    <input type="date" class="form-control" required name="date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Content:</label>
					</div>
					<div class="col-sm-10">
                    <textarea class="form-control" required name="content" rows="10" res></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Image:</label>
					</div>
					<div class="col-sm-10">
						<input type="file" class="form-control" required name="image">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer bg-secondary-subtle text-white">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Update</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
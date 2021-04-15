<div class="modal fade" id="update_modal<?php echo $row['ID']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Update User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>First name</label>
							<input type="hidden" name="ID" value="<?php echo $row['ID']?>"/>
							<input type="text" name="fname" value="<?php echo $row['fname']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Last name</label>
							<input type="text" name="lname" value="<?php echo $row['lname']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" value="<?php echo $row['address']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Mail</label>
							<input type="text" name="mail" value="<?php echo $row['mail']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="number" name="phone" value="<?php echo $row['phone']?>" class="form-control" required="required"/>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
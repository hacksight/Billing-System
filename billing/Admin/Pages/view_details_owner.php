<div class="modal fade" id="view_modal<?php echo $row['ID']?>" >
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">View User</h3>
				</div>
				<div class="modal-body">
                <div class="col-md-2"></div>
                <table id='tbltable' class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>NAME:</td>
                            <td><?php echo $row['fname']?> <?php echo $row['lname']?> </td>
                        </tr>    
                        <tr>
                            <td>MAIL:</td>
                            <td><?php echo $row['mail']?></td>
                        </tr>
                        <tr>
                            <td>PHONE</td>
                            <td><?php echo $row['phone']?></td>
                        </tr>	
                        <tr>
                            <td>ADDRESS</td>
                            <td><?php echo $row['address']?></td>
                        </tr>
                        </div>
                    </tbody>
                </table>
                </div>
             <div style="clear:both;"></div>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
          
		</div>
	</div>
</div>
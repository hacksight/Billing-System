<div class="modal fade" id="view_tenant_modal<?php echo $row['ID']?>" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">View Tenant</h3>
				</div>
        <?php 
          $owner_id = $row['ID'];
          $qry  = "SELECT * FROM tenant_details where O_ID = '$owner_id'";
          $rs = $connection->query($qry);
        ?>
				<div class="modal-body">
        
        <table id='tbltable' class="table table-bordered table-responsive">        
            <tbody>
            <?php
                while($res = $rs->fetch_array())
                {
                 ?>
              <tr>
              <th>Owner Id</th>
              <th>Meter No.</th>
              <th>Name</th>
              <th>Mail Id</th>
              <th>Phone</th>
              <th>address</th>
              <th></th>
              </tr>
                <tr><td><?php echo $owner_id; ?></td>
                    <td><?php echo $res['meter_no']; ?></td>
                    <td><?php echo $res['t_fname']; ?></td>
                    <td><?php echo $res['t_mail']; ?></td>
                    <td><?php echo $res['t_phone']; ?></td>
                    <td><?php echo $res['t_address']; ?> </td>          
                    <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['ID']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>
                    </tr> 
            
              </tr>
              <?php
                }
                if($rs->num_rows==0)
                  echo "no record";
              ?>
            </tbody>
       </table>

        </div>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>  
		</div>
	</div>
</div>
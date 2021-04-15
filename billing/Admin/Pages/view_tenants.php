<div class="modal fade" id="view_tenant_modal<?php echo $row['ID']?>" >
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">View Tenant</h3>
				</div>
				<div class="modal-body">
                

                <?php
                
                require_once 'conn.php';
                  if (isset($_GET['ID'])) {
                    $ID = $_GET['ID'];
                  $query= "SELECT * FROM owner_details, tenant_details WHERE owner_details.ID=tenant_details.O_ID AND owner_details.ID=1; ";
                  $query1= mysqli_query($connection, $query);
                  while ($row1 = mysql_fetch_array($query1)){
        ?>               
        <table id='tbltable' class="table table-bordered">
        
            <tbody id="tbltbody">
            <tr><
                    <td><?php echo $row['meter_no']?></td>
                    <td><?php echo $row['t_fname']?></td>
                    <td><?php echo $row['t_mail']?></td>
                    <td><?php echo $row['t_phone']?></td>
                    <td><?php echo $row['t_address']?> </td>          
                 
                    </tr> 
                <?php
                  }
				?>
    </tbody>
    <?php   
                    
                  }
                  else
                  {
                    echo "No record" ;
                  }
              ?>  
    </table>
                </div>
                
                <div style="clear:both;"></div>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
          
		</div>
	</div>
</div>
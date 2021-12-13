<div class="container-fluid">
	<div class="card" style="width: 50rem;">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $title; ?></h5>
	    <div class="row">

	    	<table class="table table-bordered mt-3">
			  <tbody>
			    <tr>
			      <th width="200px">System</th>
			      <td><?php echo $data['system']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Component</th>
			      <td><?php echo $data['component']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Inspection</th>
			      <td><?php echo $data['inspection']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Sys_description</th>
			      <td><?php echo $data['sys_description']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Interval</th>
			      <td><?php echo $data['interval']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Safety_class</th>
			      <td><?php echo $data['safety_class']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Plan_cond</th>
			      <td><?php echo $data['plan_cond']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Mark</th>
			      <td><?php echo $data['mark']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Mrm_page</th>
			      <td><?php echo $data['mrm_page']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Instruction_1</th>
			      <td><?php echo $data['instruction_1']; ?></td>
			    </tr>
			    <tr>
			      <th width="200px">Sys_cond</th>
			      <td><?php echo $data['sys_cond']; ?></td>
			    </tr>
			  </tbody>
			</table>	    	
	    </div>
			<div class="float-right">
				<a class="btn btn-danger float-right" href="<?php echo base_url('Data_project1/index') ?>" type="">Kembali</a>
			</div>
	  </div>
	</div>
</div>
</div>
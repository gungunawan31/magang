<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<?= form_open_multipart(); ?>

			<input type="hidden" name="id1" value="<?php echo $batch1['id1']; ?>">
			  <div class="form-group">
			    <label for="exampleFormControlInput1">System</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $batch1['lineno']; ?>" name="lineno">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput2">Component</label>
			    <input type="text" class="form-control" id="exampleFormControlInput2" value="<?php echo $batch1['kmp']; ?>" name="kmp">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput3">Inspection</label>
			    <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $batch1['tagno']; ?>" name="tagno">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput4">Sys_cond</label>
			    <input type="text" class="form-control" id="exampleFormControlInput4" value="<?php echo $batch1['batch']; ?>" name="batch">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput5">Sys_Description</label>
			    <input type="text" class="form-control" id="exampleFormControlInput5" value="<?php echo $batch1['item']; ?>" name="item">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput6">Interval</label>
			    <input type="text" class="form-control" id="exampleFormControlInput6" value="<?php echo $batch1['mdc']; ?>" name="mdc">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput7">Safety_class</label>
			    <input type="text" class="form-control" id="exampleFormControlInput7" value="<?php echo $batch1['lokasi']; ?>" name="lokasi">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput8">Plan_cond</label>
			    <input type="text" class="form-control" id="exampleFormControlInput8" value="<?php echo $batch1['elementweight']; ?>" name="elementweight">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput9">Mark</label>
			    <input type="text" class="form-control" id="exampleFormControlInput9" value="<?php echo $batch1['elementcode']; ?>" name="elementcode">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput10">Mrm_page</label>
			    <input type="text" class="form-control" id="exampleFormControlInput10" value="<?php echo $batch1['u235']; ?>" name="u235">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput11">Instruction_1</label>
			    <input type="text" class="form-control" id="exampleFormControlInput11" value="<?php echo $batch1['isotopeweight']; ?>" name="isotopeweight">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput11">Instruction_1</label>
			    <input type="text" class="form-control" id="exampleFormControlInput11" value="<?php echo $batch1['remarks']; ?>" name="remarks">
			  </div>

			  <button type="submit" class="btn btn-primary float-right my-3">Edit Data</button>
			  

			<?= form_close(); ?>
		</div>
	</div>
</div>
</div>
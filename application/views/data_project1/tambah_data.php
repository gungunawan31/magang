<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<?= form_open_multipart(); ?>

			  <div class="form-group">
			    <label for="exampleFormControlInput1">Line No</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo set_value('lineno') ?>" name="lineno">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput2">KMP</label>
			    <input type="text" class="form-control" id="exampleFormControlInput2" value="<?php echo set_value('kmp') ?>" name="kmp">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput3">Tag No</label>
			    <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo set_value('tagno') ?>" name="tagno">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput4">Batch</label>
			    <input type="text" class="form-control" id="exampleFormControlInput4" value="<?php echo set_value('batch') ?>" name="batch">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput5">Items</label>
			    <input type="text" class="form-control" id="exampleFormControlInput5" value="<?php echo set_value('item') ?>" name="item">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput6">MDC</label>
			    <input type="text" class="form-control" id="exampleFormControlInput6" value="<?php echo set_value('mdc') ?>" name="mdc">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput7">Lokasi</label>
			    <input type="text" class="form-control" id="exampleFormControlInput7" value="<?php echo set_value('lokasi') ?>" name="lokasi">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput8">Element Weight</label>
			    <input type="text" class="form-control" id="exampleFormControlInput8" value="<?php echo set_value('elementweight') ?>" name="elementweight">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput9">Element Code</label>
			    <input type="text" class="form-control" id="exampleFormControlInput9" value="<?php echo set_value('elementcode') ?>" name="elementcode">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput10">U235</label>
			    <input type="text" class="form-control" id="exampleFormControlInput10" value="<?php echo set_value('u235') ?>" name="u235">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleFormControlInput11">Isotope Weight</label>
			    <input type="text" class="form-control" id="exampleFormControlInput11" value="<?php echo set_value('isotopeweight') ?>" name="isotopeweight">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput11">Remarks</label>
			    <input type="text" class="form-control" id="exampleFormControlInput11" value="<?php echo set_value('remarks') ?>" name="remarks">
			  </div>

			  <button type="submit" class="btn btn-primary float-right my-3">Tambah</button>
			  

			<?= form_close(); ?>
		</div>
	</div>
</div>
</div>
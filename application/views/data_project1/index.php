<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

                    <a href="<?php echo base_url('Data_project1/tambah_data') ?>" class="btn btn-primary my-3">Tambah Data</a href="#">
                    
                    <?= $this->session->flashdata('message'); ?>

                    <!-- DataTales Example -->
                    <h4> <center>Batch1</center></h4>
                    <div class="card shadow ">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
                                        <th>Line No</th>
                                        <th>KMP</th>
                                        <th>TAGNO</th>
                                        <th>BATCH</th>
                                        <th>ITEM</th>
                                        <th>MDC</th>
                                        <th>LOCATION</th>
                                        <th>Element Weight</th>
                                        <th>Element Code</th>
                                        <th>%U235</th>
                                        <th>Isotope Weight</th>
                                        <th>Remarks</th>
                                        <th>Opsi</th>	
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1;
                                    	foreach($batch1 as $d):
                                    	 ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['lineno']; ?></td>
                                            <td><?php echo $d['kmp']; ?></td>
                                            <td><?php echo $d['tagno']; ?></td>
                                            <td><?php echo $d['batch']; ?></td>
                                            <td><?php echo $d['item']; ?></td>
                                            <td><?php echo $d['mdc']; ?></td>
                                            <td><?php echo $d['lokasi']; ?></td>
                                            <td><?php echo $d['elementweight']; ?></td>
                                            <td><?php echo $d['elementcode']; ?></td>
                                            <td><?php echo $d['u235']; ?></td>
                                            <td><?php echo $d['isotopeweight']; ?></td>
                                            <td><?php echo $d['remarks']; ?></td>
                                            <td>
                                            	
                                            	<a href="<?php echo base_url() ?>Data_project1/edit_data/<?php echo $d['id1'] ?>" class="badge badge-success">Edit</a>
                                            	<a href="<?php echo base_url() ?>Data_project1/hapus_data/<?php echo $d['id1'] ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin ingin hapus ?');">Hapus</a>
                                                <form action="<?php echo base_url() ?>Data_project1/pindah/<?php echo $d['id1'] ?>" method="post">
                                                    <input type="hidden" name="lineno" value="<?php echo $d['lineno']; ?>">
                                                    <input type="hidden" name="kmp" value="<?php echo $d['kmp']; ?>">
                                                    <input type="hidden" name="tagno" value="<?php echo $d['tagno']; ?>">
                                                    <input type="hidden" name="batch" value="<?php echo $d['batch']; ?>">
                                                    <input type="hidden" name="item" value="<?php echo $d['item']; ?>">
                                                    <input type="hidden" name="mdc" value="<?php echo $d['mdc']; ?>">
                                                    <input type="hidden" name="lokasi" value="<?php echo $d['lokasi']; ?>">
                                                    <input type="hidden" name="elementweight" value="<?php echo $d['elementweight']; ?>">
                                                    <input type="hidden" name="elementcode" value="<?php echo $d['elementcode']; ?>">
                                                    <input type="hidden" name="u235" value="<?php echo $d['u235']; ?>">
                                                    <input type="hidden" name="isotopeweight" value="<?php echo $d['isotopeweight']; ?>">
                                                    <input type="hidden" name="remarks" value="<?php echo $d['remarks']; ?>">
                                                    <button type="submit" class="badge badge-primary">Pindah</button>
                                                </form>
                                               
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <h4> <center>Batch2</center></h4>
                    <div class="card shadow ">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
				<th>Line No</th>
				<th>KMP</th>
				<th>TAGNO</th>
				<th>BATCH</th>
				<th>ITEM</th>
				<th>MDC</th>
				<th>LOCATION</th>
				<th>Element Weight</th>
				<th>Element Code</th>
				<th>%U235</th>
				<th>Isotope Weight</th>
				<th>Remarks</th>
				<th>Opsi</th>	
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1;
                                    	foreach($batch2 as $d):
                                    	 ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['lineno']; ?></td>
                                            <td><?php echo $d['kmp']; ?></td>
                                            <td><?php echo $d['tagno']; ?></td>
                                            <td><?php echo $d['batch']; ?></td>
                                            <td><?php echo $d['item']; ?></td>
                                            <td><?php echo $d['mdc']; ?></td>
                                            <td><?php echo $d['lokasi']; ?></td>
                                            <td><?php echo $d['elementweight']; ?></td>
                                            <td><?php echo $d['elementcode']; ?></td>
                                            <td><?php echo $d['u235']; ?></td>
                                            <td><?php echo $d['isotopeweight']; ?></td>
                                            <td><?php echo $d['remarks']; ?></td>
                                            <td>
                                            	<a href="<?php echo base_url() ?>Data_project1/hapus_data1/<?php echo $d['id2'] ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin ingin hapus ?');">Hapus</a>
                                                <form action="<?php echo base_url() ?>Data_project1/pindah1/<?php echo $d['id2'] ?>" method="post">
                                                    <input type="hidden" name="lineno" value="<?php echo $d['lineno']; ?>">
                                                    <input type="hidden" name="kmp" value="<?php echo $d['kmp']; ?>">
                                                    <input type="hidden" name="tagno" value="<?php echo $d['tagno']; ?>">
                                                    <input type="hidden" name="batch" value="<?php echo $d['batch']; ?>">
                                                    <input type="hidden" name="item" value="<?php echo $d['item']; ?>">
                                                    <input type="hidden" name="mdc" value="<?php echo $d['mdc']; ?>">
                                                    <input type="hidden" name="lokasi" value="<?php echo $d['lokasi']; ?>">
                                                    <input type="hidden" name="elementweight" value="<?php echo $d['elementweight']; ?>">
                                                    <input type="hidden" name="elementcode" value="<?php echo $d['elementcode']; ?>">
                                                    <input type="hidden" name="u235" value="<?php echo $d['u235']; ?>">
                                                    <input type="hidden" name="isotopeweight" value="<?php echo $d['isotopeweight']; ?>">
                                                    <input type="hidden" name="remarks" value="<?php echo $d['remarks']; ?>">
                                                    <button type="submit" class="badge badge-primary">Pindah</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <h4> <center>Batch3</center></h4>
                    <div class="card shadow ">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
				<th>Line No</th>
				<th>KMP</th>
				<th>TAGNO</th>
				<th>BATCH</th>
				<th>ITEM</th>
				<th>MDC</th>
				<th>LOCATION</th>
				<th>Element Weight</th>
				<th>Element Code</th>
				<th>%U235</th>
				<th>Isotope Weight</th>
				<th>Remarks</th>
				<th>Opsi</th>	
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1;
                                    	foreach($batch3 as $d):
                                    	 ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['lineno']; ?></td>
                                            <td><?php echo $d['kmp']; ?></td>
                                            <td><?php echo $d['tagno']; ?></td>
                                            <td><?php echo $d['batch']; ?></td>
                                            <td><?php echo $d['item']; ?></td>
                                            <td><?php echo $d['mdc']; ?></td>
                                            <td><?php echo $d['lokasi']; ?></td>
                                            <td><?php echo $d['elementweight']; ?></td>
                                            <td><?php echo $d['elementcode']; ?></td>
                                            <td><?php echo $d['u235']; ?></td>
                                            <td><?php echo $d['isotopeweight']; ?></td>
                                            <td><?php echo $d['remarks']; ?></td>
                                            <td>
                                            	<a href="<?php echo base_url() ?>Data_project1/hapus_data2/<?php echo $d['id3'] ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin ingin hapus ?');">Hapus</a>
                                                <form action="<?php echo base_url() ?>Data_project1/pindah2/<?php echo $d['id3'] ?>" method="post">
                                                    <input type="hidden" name="lineno" value="<?php echo $d['lineno']; ?>">
                                                    <input type="hidden" name="kmp" value="<?php echo $d['kmp']; ?>">
                                                    <input type="hidden" name="tagno" value="<?php echo $d['tagno']; ?>">
                                                    <input type="hidden" name="batch" value="<?php echo $d['batch']; ?>">
                                                    <input type="hidden" name="item" value="<?php echo $d['item']; ?>">
                                                    <input type="hidden" name="mdc" value="<?php echo $d['mdc']; ?>">
                                                    <input type="hidden" name="lokasi" value="<?php echo $d['lokasi']; ?>">
                                                    <input type="hidden" name="elementweight" value="<?php echo $d['elementweight']; ?>">
                                                    <input type="hidden" name="elementcode" value="<?php echo $d['elementcode']; ?>">
                                                    <input type="hidden" name="u235" value="<?php echo $d['u235']; ?>">
                                                    <input type="hidden" name="isotopeweight" value="<?php echo $d['isotopeweight']; ?>">
                                                    <input type="hidden" name="remarks" value="<?php echo $d['remarks']; ?>">
                                                    <button type="submit" class="badge badge-primary">Pindah</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <h4> <center>Batch4</center></h4>
                    <div class="card shadow ">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
				<th>Line No</th>
				<th>KMP</th>
				<th>TAGNO</th>
				<th>BATCH</th>
				<th>ITEM</th>
				<th>MDC</th>
				<th>LOCATION</th>
				<th>Element Weight</th>
				<th>Element Code</th>
				<th>%U235</th>
				<th>Isotope Weight</th>
				<th>Remarks</th>
				<th>Opsi</th>	
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1;
                                    	foreach($batch4 as $d):
                                    	 ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['lineno']; ?></td>
                                            <td><?php echo $d['kmp']; ?></td>
                                            <td><?php echo $d['tagno']; ?></td>
                                            <td><?php echo $d['batch']; ?></td>
                                            <td><?php echo $d['item']; ?></td>
                                            <td><?php echo $d['mdc']; ?></td>
                                            <td><?php echo $d['lokasi']; ?></td>
                                            <td><?php echo $d['elementweight']; ?></td>
                                            <td><?php echo $d['elementcode']; ?></td>
                                            <td><?php echo $d['u235']; ?></td>
                                            <td><?php echo $d['isotopeweight']; ?></td>
                                            <td><?php echo $d['remarks']; ?></td>
                                            <td>
                                            	<a href="<?php echo base_url() ?>Data_project1/hapus_data3/<?php echo $d['id4'] ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin ingin hapus ?');">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
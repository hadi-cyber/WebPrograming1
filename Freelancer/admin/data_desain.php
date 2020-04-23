<a href="tambah_desain.php" class="btn btn-primary" style="margin-bottom:5px;"><i class="fa fa-plus"></i>Tambah Data</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Desain
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Judul Desain</th>
                                            <th>Editor</th>
                                            <th>Link Download</th>
											<th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$sql = $koneksi->query("select * from data_desain");
										while ($data = $sql->fetch_assoc()) {
									?>
									    <tr>
									        <td><?php echo $data['judul_desain'];?></td>
											<td><?php echo $data['editor'];?></td>
											<td><?php echo $data['link_download'];?></td>
											<td><?php echo $data['deskripsi'];?></td>
											<td><?php echo $data['tanggal'];?></td>
											<td>
											    <a href="?admin=data_desain=ubah&id" class="btn btn-info" ><i class="fa fa-edit"></i>Ubah</a>
												<a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ???')" href="?admin=data_desain=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger" ></i class="fa fa-trash"></i>Hapus</a>
											</td>
									    </tr>
										<?php } ?>
									<tbody>
									</div>
						   </div>
					    </div>
				      </div>
</div>
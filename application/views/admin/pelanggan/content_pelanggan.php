

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pelanggan</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pelanggan</h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                   <a href="#" class="btn btn-success">Add Pelanggan</a>
                  <div class="x_content">
                     <?php echo $this->session->flashdata('msg2');?>

                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ID Pelanggan</th>
                              <th>Nama Pelanggan</th>
                              <th>Alamat Pelanggan</th>
                              <th>Nomor Telepon Pelanggan</th>
                              <th>Tarif Pelanggan</th>
                              <th>Daya</th>
                              <th>FKM</th>
                              <th>Tipe Meter</th>
                              <th>Merk Meter</th>
                              <th>Kelas Meter</th>
                              <th>Vnominal Meter</th>
                              <th>Inominal Meter</th>
                              <th>No Seri Meter</th>
                              <th>Tahun Meter</th>
                              <th>Merk CT</th>
                              <th>Tipe CT</th>
                              <th>Rasio CT</th>
                              <th>Kelas CT</th>
                              <th>No Seri CT</th>
                              <th>Merk VT</th>
                              <th>Tipe VT</th>
                              <th>Rasio VT</th>
                              <th>Kelas VT</th>
                              <th>No Seri VT</th>
                              <th>Foto CT 1</th>
                              <th>Foto CT 2</th>
                              <th>Foto CT 3</th>
                              <th>Foto VT 1</th>
                              <th>Foto VT 2</th>
                              <th>Foto VT 3</th>
                              <th>Foto Meter 1</th>
                              <th>Foto Meter 2</th>   
                              <th>Foto Meter 3</th> 
                              <th>Koordinat X</th>
                              <th>Koordinat Y</th>    
                              <th>Tanggal Update</th> 
                              <th>Foto Pembatas 1</th> 
                              <th>Foto Pembatas 2</th> 
                              <th>Foto Pembatas 3</th> 
                              <th>Foto Box 1</th>
                              <th>Foto Box 2</th>
                              <th>Foto Box 3</th>
                              <th>Action</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php if (empty($pelanggan)) {?>
                                <div class="alert alert-danger">
                                  Data not found
                                </div>
                              <?php } else { 
                                
                                foreach ($pelanggan as $data) {
                              ?>
                            <tr>
                                <td><?php echo $data->idpel?></td>
                                <td><?php echo $data->nama?></td>
                                <td><?php echo $data->no_telp?></td>
                                <td><?php echo $data->tarif?></td>
                                <td><?php echo $data->daya?></td>
                                <td><?php echo $data->fkm?></td>
                                <td><?php echo $data->tipe_meter?></td>
                                <td><?php echo $data->merk_meter?></td>
                                <td><?php echo $data->kelas_meter?></td>
                                <td><?php echo $data->vnominal_meter?></td>
                                <td><?php echo $data->inominal_meter?></td>
                                <td><?php echo $data->noseri_meter?></td>
                                <td><?php echo $data->tahun_meter?></td>
                                <td><?php echo $data->merk_ct?></td>
                                <td><?php echo $data->tipe_ct?></td>
                                <td><?php echo $data->rasio_ct?></td>
                                <td><?php echo $data->kelas_ct?></td>
                                <td><?php echo $data->noseri_ct?></td>
                                <td><?php echo $data->merk_vt?></td>
                                <td><?php echo $data->tipe_vt?></td>
                                <td><?php echo $data->rasio_vt?></td>
                                <td><?php echo $data->kelas_vt?></td>
                                <td><?php echo $data->noseri_vt?></td>
                                <td><?php echo base_url().'uploaded/'?><?php echo $data->foto_ct1?></td>
                                <td>
                                  <?php echo anchor('admin/Pemeriksaan/edit/'.$data->idkomisioning,'<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></button>');?>
              <?php echo anchor('admin/Pemeriksaan/delete/'.$data->idkomisioning,'<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>');?>
                                </td>

                               
                            </tr>
                             <?php } }?>

                          </tbody>
                        </table>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-center">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       
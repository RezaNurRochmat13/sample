

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pemeriksaan</h3>
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
                    <h2>Pemeriksaan</h2>

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
                   <a href="<?php echo site_url('admin/Pemeriksaan/addPemeriksaan')?>" class="btn btn-success">Add Pemeriksaan</a>
                  <div class="x_content">
                     <?php echo $this->session->flashdata('msg2');?>

                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ID Komisioning</th>
                              <th>Nama Pelanggan</th>
                              <th>Error Meter</th>
                              <th>Error R</th>
                              <th>Error S</th>
                              <th>Error T</th>
                              <th>Jenis CT</th>
                              <th>Arus CT</th>
                              <th>Rasio CT</th>
                              <th>Segel KWH</th>
                              <th>Segel Terminal</th>
                              <th>Segel Box App</th>
                              <th>Segel Gardu</th>
                              <th>Segel Pembatas</th>
                              <th>Tanggal Periksa</th>
                              <th>Keterangan</th>
                              <th>Petugas</th>
                              <th>BA</th>
                              <th>Created at</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (empty($pemeriksaan)) {?>
                                <div class="alert alert-danger">
                                  Data not found
                                </div>
                              <?php } else { 
                                
                                foreach ($pemeriksaan as $data) {
                              ?>
                            <tr>
                                <td><?php echo $data->idkomisioning?></td>
                                <td><?php echo $data->nama?></td>
                                <td><?php echo $data->erormeter?></td>
                                <td><?php echo $data->erorR?></td>
                                <td><?php echo $data->erorS?></td>
                                <td><?php echo $data->erorT?></td>
                                <td><?php echo $data->jenisCT?></td>
                                <td><?php echo $data->arusCT?></td>
                                <td><?php echo $data->rasioCT?></td>
                                <td><?php echo $data->segelkwh?></td>
                                <td><?php echo $data->segelterminal?></td>
                                <td><?php echo $data->segelboxapp?></td>
                                <td><?php echo $data->segelgardu?></td>
                                <td><?php echo $data->segelpembatas?></td>
                                <td><?php echo date("d F Y",strtotime($data->tglperiksa))?></td>
                                <td><?php echo $data->keterangan?></td>
                                <td><?php echo $data->petugas?></td>
                                <td><?php echo $data->ba?></td>
                                <td><?php echo date("d F Y",strtotime($data->created_at))?></td>
                                <td>
                                  <?php echo anchor('admin/Pemeriksaan/edit/'.$data->idkomisioning,'<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></button>');?>
                                  <?php echo anchor('admin/Pemeriksaan/delete/'.$data->idkomisioning,'<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>');?>
                                  <?php echo anchor('admin/Pemeriksaan/show/'.$data->idkomisioning,'<button type="button" class="btn btn-danger">Show</button>');?>
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

       
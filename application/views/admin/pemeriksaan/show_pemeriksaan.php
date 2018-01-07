
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
                    <h2>Detail Pemeriksaan</h2>

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
                  <div class="x_content">
                    <?php echo validation_errors();?>

                    <?php 


                    foreach ($show as $data) {?>
                    <?php
                        foreach($pelanggan as $pel) {?>
                      <div class="form-group">
                      <p>Nama Pelanggan</p>
                      <p><?php echo $pel->nama?></p>
                      </div>
                      <div class="form-group">
                      <p>Error Meter</p>
                      <p><?php echo $data->erormeter?></p>
                      </div>
                      <div class="form-group">
                      <p>Error R</p>
                      <p><?php echo $data->erorR?></p>
                      </div>
                      <div class="form-group">
                      <p>Error S</p>
                      <p><?php echo $data->erorS?></p>
                      </div>
                      <div class="form-group">
                      <p>Error T</p>
                      <p><?php echo $data->erorT?></p>
                      </div>
                    <div class="form-group">
                      <p>Jenis CT</p>
                      <p><?php echo $data->jenisCT?></p>
                      </div>
                      <div class="form-group">
                      <p>Arus CT</p>
                      <p><?php echo $data->arusCT?></p>
                      </div>
                    <div class="form-group">
                      <p>Rasio CT</p>
                      <p><?php echo $data->rasioCT?></p>
                      </div>
                    <div class="form-group">
                      <p>Segel KWH</p>
                      <p><?php echo $data->segelkwh?></p>
                      </div>
                    <div class="form-group">
                      <p>Segel Terminal</p>
                      <p><?php echo $data->segelterminal?></p>
                      </div>
                    <div class="form-group">
                      <p>Segel Box App</p>
                      <p><?php echo $data->segelboxapp?></p>
                      </div>
                    <div class="form-group">
                      <p>Segel Gard</p>
                      <p><?php echo $data->segelgardu?></p>
                      </div>
                    <div class="form-group">
                      <p>Segel Pembatas</p>
                      <p><?php echo $data->segelpembatas?></p>
                      </div>
                    <div class="form-group">
                      <p>Tanggal Periksa</p>
                      <p><?php echo $data->tglperiksa?></p>
                      </div>
                    <div class="form-group">
                      <p>Keterangan</p>
                      <p><?php echo $data->keterangan?></p>
                      </div>
                    <div class="form-group">
                      <p>Petugas</p>
                      <p><?php echo $data->petugas?></p>
                      </div>
                    <div class="form-group">
                      <p>BA</p>
                      <p><?php echo $data->ba?></p>
                      </div>
                    </form>
                    <?php } }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


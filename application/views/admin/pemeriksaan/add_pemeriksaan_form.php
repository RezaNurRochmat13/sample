
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
                  <div class="x_content">
                    <?php echo validation_errors();?>

                    <form action="<?php echo site_url('admin/Pemeriksaan/addPemeriksaan')?>" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pelanggan</label>
                        <select class="form-control" name="idpel">
                          <option>Pilih Pelanggan</option>
                          <?php
                            foreach ($pelanggan as $key) {
                          ?>
                          <option value="<?php echo $key->idpel?>"><?php echo $key->nama?></option>
                          <?php }?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Error Meter</label>
                        <input type="text" name="erormeter" class="form-control" placeholder="Error Meter">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Error R</label>
                        <input type="text" name="erorR" class="form-control" placeholder="Error R">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Error S</label>
                        <input type="text" name="erorS" class="form-control" placeholder="Error S">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Error T</label>
                        <input type="text" name="erorT" class="form-control" placeholder="Error R">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jenis CT</label>
                        <input type="text" name="jenisCT" class="form-control" placeholder="Jenis CT">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Arus CT</label>
                        <input type="text" name="arusCT" class="form-control" placeholder="Arus CT">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Rasio CT</label>
                        <input type="text" name="rasioCT" class="form-control" placeholder="Rasio CT">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Segel KWH</label>
                        <input type="text" name="segelkwh" class="form-control" 
                        placeholder="Segel KWH">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Segel Terminal</label>
                        <input type="text" name="segelterminal" class="form-control" placeholder="Segel Terminal">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Segel Box App</label>
                        <input type="text" name="segelboxapp" class="form-control" placeholder="Segel Box App">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Segel Gardu</label>
                        <input type="text" name="segelgardu" class="form-control" placeholder="Segel Gardu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Segel Pembatas</label>
                        <input type="text" name="segelpembatas" class="form-control" placeholder="Segel Pembatas">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Periksa</label>
                        <input type="date" name="tglperiksa" class="form-control" placeholder="Tanggal Periksa">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Petugas</label>
                        <input type="text" name="petugas" class="form-control" placeholder="Petugas">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">BA</label>
                        <input type="text" name="ba" class="form-control" placeholder="BA">
                      </div>
                       
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="submit" class="btn btn-danger">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


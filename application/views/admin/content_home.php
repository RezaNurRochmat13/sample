

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Management</h3>
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
                    <h2>User Management</h2>

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
                   <a href="<?php echo site_url('admin/Admin_Home/addUser')?>" class="btn btn-success">Add User</a>
                  <div class="x_content">
                     <?php echo $this->session->flashdata('msg2');?>

                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Action</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (empty($user)) {?>
                                <div class="alert alert-danger">
                                  Data not found
                                </div>
                              <?php } else { 
                                
                                foreach ($user as $data) {
                              ?>
                            <tr>
                                <td><?php echo $data->username?></td>
                                <td><?php echo $data->password?></td>
                                <td>
                                  <?php echo anchor('admin/Admin_Home/edit/'.$data->id_users,'<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></button>');?>
              <?php echo anchor('admin/Admin_Home/delete/'.$data->id_users,'<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>');?>
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

       
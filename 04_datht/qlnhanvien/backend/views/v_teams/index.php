<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <a href="?controller=team&action=add" class="btn btn-primary btn-xs"><i class="fa fa-user"></i> Thêm nhân viên </a>
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Tên</th>
                          <th>Mô tả</th>
                          <th>Logo</th>
                          <th>Leader</th>
                          
                          <th>Công cụ</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        
                        
                        <?php if (!empty($rTeam)) { ?>
                         <?php foreach ($rTeam as $v) { ?>
                        <tr>
                          <td><?php echo $v[1] ?></td>
                          <td><?php echo $v[2]; ?></td>
                          <td><img src="asset/images/<?php echo $v[3]; ?>" width="100px"  alt=""></td>
                          <td><?php echo $v[4]; ?></td>
                          
                          <td>
                            
                            <a href="?controller=team&action=edit&eid=<?php echo $v[0]; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="?controller=team&action=delete&id=<?php echo $v[0]; ?>"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr> 
                       <?php } ?> 
                       <?php  } ?>     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
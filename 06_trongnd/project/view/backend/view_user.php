<div class="title_right">
       
      </div>
    </div>

    <div class="clearfix"></div>
    <!-- <form method="GET"> -->
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Quản Lý  <small>Users</small></h2>
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
                          <p class="text-muted font-13 m-b-30">
                            <a class="btn btn-default" href="admin.php?controller=add_edit_user&act=add">ADD</a>
                          </p>
              
                          <table id="datatable"  class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
              
              
                            <tbody>
                              <?php
                                  foreach($arr as $rows){
              
                                  
                              ?>
                              <tr>
                                <td><?php echo $rows["name"]; ?></td>
                                <td><?php echo $rows["email"]?></td>
                                <td><?php echo $rows["email_personal"]?></td>
                                 <td><img src="public/upload/<?php echo $rows["image"] ?>" style="width: 100px;height: 100px; text-align: center;"></td>
                                <td><?php echo $rows["date_of_birth"]?></td>
                                <td><?php echo $rows["salary"]?></td>
                                <td style="text-align:center"><a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows["pk_user_id"]; ?>">Edit</a></td>
                                <td style="text-align:center"><a href="admin.php?controller=user&act=delete&id=<?php echo $rows["pk_user_id"]; ?>">Delete</a></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
    <!-- </form> -->
    
  </div>
</div>
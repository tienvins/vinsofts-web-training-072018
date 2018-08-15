<div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
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
                    <a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Add</a>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Office</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th></th>
                        </tr>
                      </thead>
                      <?php
                        foreach($arr as $rows)
                        {
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $rows->pk_user_id ?></td>
                          <td><?php echo $rows->c_name; ?></td>
                          <td><?php echo $rows->c_email; ?></td>
                          <td><?php echo $rows->c_phone_number ?></td>
                          <td><?php echo $rows->name_team ?></td>
                          <td><?php echo $rows->c_date_of_birth ?></td>
                          <td><?php echo number_format($rows->c_salary); ?></td>
                          <td style="text-align: center">
                            <a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows->pk_user_id ?>">Edit</a>&nbsp;&nbsp;
                            <a onclick="return window.confirm('Are you sure')" href="admin.php?controller=user&act=delete&id=<?php echo $rows->pk_user_id ?>">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                    <?php } ?>
                    </table>
                  </div>
</div>
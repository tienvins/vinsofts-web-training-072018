<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Plus Table Design</small></h2>
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
                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                </p>
                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                    <thead>
                    <tr>
                        <th>
                        <th>Name</th>
                        <th>email</th>
                        <th>email_personal</th>
                        <th>password</th>
                        <th>remember_token</th>
                        <th>image</th>
                        <th>gender</th>
<!--                        <th>date_of_birth</th>-->
<!--                        <th>identify_id</th>-->
                        <th>phone_number</th>
                        <th>current_address</th>
                        <th>permanent_address</th>
                        <th>graduate_from</th>
                        <th>salary</th>
                        <th>bank_account_number</th>
                        <th>hobby</th>
                        <th>family_description</th>
                        <th>language_skills</th>
                        <th>leave_days</th>
                        <th>role_id</th>
                        <th>team_id</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    </thead>


                    <tbody>
             <?php foreach ($user as $us_item){ ?>
                    <tr>
                        <td>
                        <td><?php echo $us_item['name'];?></td>
                        <td><?php echo $us_item['email'];?></td>
                        <td><?php echo $us_item['email_personal'];?></td>
                        <td><?php echo $us_item['password'];?></td>
                        <td><?php echo $us_item['remember_token'];?></td>
                        <td><img src="<?php echo $us_item['image'];?>" alt="" width="150" height="100"></td>
                        <td><?php if($us_item['gender']==0){echo "Nam";}elseif($us_item['gender']==1){echo "Nu";}else{echo "???";}?></td>
<!--                        <td>--><?php //echo $us_item['date_of_birth'];?><!--</td>-->
<!--                        <td>--><?php //echo $us_item['identify_id'];?><!--</td>-->
                        <td><?php echo $us_item['phone_number'];?></td>
                        <td><?php echo $us_item['current_address'];?></td>
                        <td><?php echo $us_item['permanent_address'];?></td>
                        <td><?php echo $us_item['graduate_from'];?></td>
                        <td><?php echo $us_item['salary'];?></td>
                        <td><?php echo $us_item['bank_account_number'];?></td>
                        <td><?php echo $us_item['hobby'];?></td>
                        <td><?php echo $us_item['family_description'];?></td>
                        <td><?php echo $us_item['language_skills'];?></td>
                        <td><?php echo $us_item['leave_days'];?></td>
                        <td><?php echo $us_item['role_id'];?></td>
                        <td><?php echo $us_item['team_id'];?></td>
                        <td><?php if($us_item['status']==1){echo "Dang lam viec";}elseif($us_item['status']==2){echo "Nghi viec";}else{echo "khong xac dinh";}?></td>
                        <td>
                            <a class="btn btn-primary" href="?controller=User&action=edit_user&id=<?php echo $us_item['id']?>">EDIT</a>
                            <a class="btn btn-danger" href="?controller=User&action=delete_user&id=<?php echo $us_item['id']?>&img=<?php echo $us_item['image']?>">DEL</a>
                        </td>
                    </tr>
        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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
                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                    <thead>
                    <tr>
                        <th>
                        <th><input type="checkbox" id="check-all" class="flat"></th>
                        </th>
                        <th>TEAM_ID</th>
                        <th>TEAM_NAME</th>
                        <th>TEAM_DISCRIPTION</th>
                        <th>TEAM_LOGO</th>
                        <th>LEADER</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>


                    <tbody>
                <?php
                foreach ($team as $item){
                ?>
                    <tr>
                        <td>
                        <th></th>
                        </td>
                        <td><?php echo $item['team_id']?></td>
                        <td><?php echo $item['team_name']?></td>
                        <td><?php echo $item['description']?></td>
                        <td><img src="<?php echo $item['logo']?>" alt="" width="150px" height="100px"></td>
                        <td><?php echo $item['name']?></td>
                        <td>
                            <a class="btn btn-primary" href="?controller=Team&action=edit_team&team_id=<?php echo $item['team_id']?>">EDIT</a>
                            <a class="btn btn-warning" href="?controller=Team&action=delete_team&team_id=<?php echo $item['team_id']?>&img=<?php echo $item['logo'];?>">X</a>
                        </td>
                    </tr>

                <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
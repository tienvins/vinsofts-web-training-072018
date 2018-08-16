<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Update Team <?php echo $tb ?></h2>
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
            <br />
            <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <input name="id" type="text"<?php echo $action=="edit" ? 'readonly="readonly"':"" ?> class="form-control" placeholder="ID" value="<?php echo $infoid->id ?>">
                    </div>
               
                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <input name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $infoid->name ?>">
                    </div>
                    <div class=" form-group col-md-6 col-sm-12 col-xs-12">
                        <select class="form-control" name="leader_id" value="<?php echo $infoid->leader_id ?>">
                            <option value ="0">Choose Leader ID</option>
                            <?php
                                foreach($list_id_user as $id){
                            ?>
                            <option value="<?php echo $id->id ?>"><?php echo $id->id ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <input name="image" type="file" value="Upload" class="form-control" placeholder="File Image">
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <textarea name="description" class="form-control" rows="3" placeholder="Description"><?php echo $infoid ->description ; ?></textarea>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success"><?php echo $action=="edit" ? 'Update':'Add' ?></button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <a href="index.php?controller=c_teams"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
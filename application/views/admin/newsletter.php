<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo $page_title;?></h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-3">
                      
                        <br>
                    </div>
                    <div class="col-md-9">
                        <form class="form-inline " method="get" action="<?php echo base_url('admin/newsletter') ?>">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="title" class="sr-only">Name</label>
                                <input type="text" name="name" value="<?php if(isset($name)){ echo $name;} ?>" class="form-control form-control-sm" id="title" placeholder="User Name">&nbsp;
                                <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                                    <span class="icon text-white-50"><i class="fa fa-search"></i></span>
                                    <span class="text">Search</span>
                                </button>
                            </div>                            
                        </form>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sl = 1;
                            foreach ($news as $user):                     

                        ?>
                        <tr id='row_<?php echo $user['id'];?>'>
                          
                            <td><?php echo $user['email'];?></td>
                            <td><?php echo date('d-m-Y',strtotime($user['created_at']));?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <?php echo $links; ?>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

    <!-- select2-->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
    <!-- select2-->
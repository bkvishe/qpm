<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer Add
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer Add</li>
      </ol> 
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <div class="box-tools pull-right">
                <button class="btn btn-primary" onClick="customer_list();">Back to Listing</button>
              </div>
            </div>
            <div id="alertMsg"></div>
            <div class="box-body">
              <form id="customer_form" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" value="<?php echo isset($formData['fullname'])?$formData['fullname']:''?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mobile</label>
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="" value="<?php echo isset($formData['mobile'])?$formData['mobile']:''?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Settop Box Id</label>
                  <input type="text" class="form-control" name="box_id" id="box_id" placeholder="" value="<?php echo isset($formData['box_id'])?$formData['box_id']:''?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Area</label>
                  <input type="text" class="form-control" name="area" id="area" placeholder="" value="<?php echo isset($formData['area'])?$formData['area']:''?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">City</label>
                  <input type="text" class="form-control" name="city" id="city" placeholder="" value="<?php echo isset($formData['city'])?$formData['city']:''?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pincode</label>
                  <input type="text" class="form-control" name="pincode" id="pincode" placeholder="" value="<?php echo isset($formData['pincode'])?$formData['pincode']:''?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="cust_id" id="cust_id" placeholder="" value="<?php echo isset($formData['cust_id'])?$formData['cust_id']:''?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <?php if(isset($formData['cust_id'])):?>
                  <button type="button" class="btn btn-success" onclick="customer_update_action();">Update</button>
                <?php else:?>
                  <button type="button" class="btn btn-success" onclick="customer_add_action();">Submit</button>
                <?php endif;?>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
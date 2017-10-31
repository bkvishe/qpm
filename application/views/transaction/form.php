<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Transaction
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Transaction</li>
      </ol> 
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div id="alertMsg"></div>
            <div class="box-body">
              <form id="transaction_form" role="form">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="cust_id" id="cust_id" value="<?php echo isset($cust_id)?$cust_id:''?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Plan Id</label>
                  <input type="text" class="form-control" name="plan_id" id="plan_id" placeholder="" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Amount</label>
                  <input type="text" class="form-control" name="amount" id="amount" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Period (Months)</label>
                  <select class="form-control" name="period" id="period" onchange="getExpiryDate(this.value);">
                    <?php 
                      foreach($period as $value):
                        echo "<option value='$value'>$value</option>";
                      endforeach;
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Expiry Date</label>
                  <input type="text" class="form-control" name="expiry_date" id="expiry_date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Payment Status</label>
                  <select class="form-control" name="payment_status" id="payment_status">
                    <?php 
                      foreach($payment_status as $key => $value):
                        echo "<option value='$key'>$value</option>";
                      endforeach;
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Remark</label>
                  <textarea class="form-control" name="remark" id="remark">
                  </textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <button type="button" class="btn btn-success" onclick="transaction_add_action();">Submit</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
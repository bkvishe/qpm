<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <div class="box-tools pull-right">
                <button class="btn btn-primary" onClick="customer_add();">Add New</button>
              </div>
            </div>
            <div class="box-body">
              <div id="alertMsg"></div>
              <table class="table table-bordered" id="customer_list" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Trasaction</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($record as $value):?>
                    <tr>
                        <td><?php echo $value['fullname']?></td>
                        <td><button type="button" onClick="customer_details(<?php echo $value['cust_id']?>);" class="btn btn-danger" >Details</button></td>
                        <td><i onClick="trans_form(<?php echo $value['cust_id']?>);" class="fa fa-share" aria-hidden="true"></i></td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
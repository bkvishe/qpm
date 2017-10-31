<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaction List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Transaction List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-body">
              <div id="alertMsg"></div>
              <table class="table table-bordered" id="transaction_list" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Amount</th>  
                        <th>Date</th>
                        <th>Details</th>

                    </tr>
                </thead>
                <tbody>
                  <?php foreach($record as $value):?>
                    <tr>
                        <td><?php echo $value['fullname']?></td>
                        <td><?php echo $value['amount']?></td>
                        <td><?php echo $value['created_date']?></td>
                        <td><i onClick="" class="fa fa-info-o" aria-hidden="true"></i></td>
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
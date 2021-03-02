@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('css')

@endsection
@section('content')
    <div class="container-fluid">
       
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
		  <div class="card-header border-0">
                Recent Orders
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
                </div>
               <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                     <th>Photo</th>
                     <th>Product</th>
                     <th>Amount</th>
                     <th>Status</th>
                     <th>Completion</th>
                     <th>Date</th>
                   </tr>
                   </thead>
				   <tbody><tr>
                    <td>
                      <img alt="Image placeholder" src="assets/images/products/1.png" class="product-img">
                    </td>
					<td>Headphone GL</td>
                    <td>$1,840 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 60%"></div>
                       </div>
                    </td>
					<td>10 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                     <img alt="Image placeholder" src="assets/images/products/2.png" class="product-img">
                    </td>
					<td>Clasic Shoes</td>
                    <td>$1,520 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
					<td>12 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/images/products/3.png" class="product-img">
                    </td>
                    <td>Hand Watch</td>
                    <td>$1,620 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-warning"></i> delayed
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-orange" role="progressbar" style="width: 70%"></div>
                       </div>
                    </td>
					<td>14 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/images/products/4.png" class="product-img">
                    </td>
                    <td>Hand Camera</td>
                    <td>$2,220 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-info"></i> on schedule
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                       </div>
                    </td>
					<td>16 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/images/products/5.png" class="product-img">
                    </td>
                    <td>Iphone-X Pro</td>
                    <td>$9,890 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
					<td>17 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="assets/images/products/6.png" class="product-img">
                    </td>
                    <td>Ladies Purse</td>
                    <td>$3,420 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 80%"></div>
                       </div>
                    </td>
					<td>18 July 2018</td>
                   </tr>
                 </tbody></table>
               </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- End container-fluid-->

@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {
        $(".dataTable").DataTable();
    });
</script>
@endsection
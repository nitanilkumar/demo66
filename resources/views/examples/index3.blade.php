@include('global.header')
@include('global.sidebar')
@include('global.nav')

      <!--Start Dashboard Content-->
	  
	  <div class="row mt-3">
        <div class="col-12 col-lg-12 col-xl-12">
          <div class="card gradient-forest">
		    <div class="card-header bg-transparent text-white border-secondary">
                Product Sales 
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options text-white"></i>
				 </a>
				    <div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
                </div>
             <div class="card-body">
              <div class="product-sale-chart">
               <canvas id="dashboard3-chart-7" height="100"></canvas>
             </div>
             </div>
          </div>
        </div>
      </div><!--End Row-->
	  
	   <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-xl-2">
			  <div class="card text-center gradient-bloody">
			    <div class="card-body">
				  <h6 class="text-white">ORDERS</h6>
				  <h4 class="text-white">8052</h4>
				  <span id="dashboard3-chart-1"></span>
				</div>
			  </div>
			</div>
			<div class="col-12 col-md-6 col-lg-6 col-xl-2">
			  <div class="card text-center gradient-scooter">
			    <div class="card-body">
				  <h6 class="text-white">REVENUE</h6>
				  <h4 class="text-white">453$</h4>
				  <span id="dashboard3-chart-2"></span>
				</div>
			  </div>
			</div>
			<div class="col-12 col-md-6 col-lg-6 col-xl-2">
			  <div class="card text-center gradient-blooker">
			    <div class="card-body">
				  <h6 class="text-white">NEW USERS</h6>
				  <h4 class="text-white">7842</h4>
				  <span id="dashboard3-chart-3"></span>
				</div>
			  </div>
			</div>
			<div class="col-12 col-md-6 col-lg-6 col-xl-2">
			  <div class="card text-center gradient-quepal">
			    <div class="card-body">
				  <h6 class="text-white">SOLD</h6>
				  <h4 class="text-white">6580</h4>
				  <span id="dashboard3-chart-4"></span>
				</div>
			  </div>
			</div>
			<div class="col-12 col-md-6 col-lg-6 col-xl-2">
			  <div class="card text-center gradient-purpink">
			    <div class="card-body">
				  <h6 class="text-white">LIKES</h6>
				  <h4 class="text-white">3845</h4>
				  <span id="dashboard3-chart-5"></span>
				</div>
			  </div>
			</div>
			<div class="col-12 col-md-6 col-lg-6 col-xl-2">
			  <div class="card text-center gradient-titanium">
			    <div class="card-body">
				  <h6 class="text-white">VISITS</h6>
				  <h4 class="text-white">9524</h4>
				  <span id="dashboard3-chart-6"></span>
				</div>
			  </div>
			</div>
          </div><!--End row-->
	  
	  <div class="row">
         <div class="col-12 col-lg-8 col-xl-8">
           <div class="card bg-pattern-dark">
		     <div class="card-header bg-transparent text-white border-secondary">Top Selling Country
				  <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options text-white"></i>
				 </a>
				    <div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
				</div>
              <div class="card-body">
                     <div id="dashboard-map" style="height: 300px"></div>
					 <hr class="border-secondary">
                     <p class="text-white"><i class="flag-icon flag-icon-us mr-1"></i> USA <span class="float-right">50%</span></p>
                     <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-bloody" role="progressbar" style="width: 50%"></div>
                      </div>

                      <p class="mt-3 text-white"><i class="flag-icon flag-icon-ca mr-1"></i> Canada <span class="float-right">65%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 65%"></div>
                      </div>

                      <p class="mt-3 text-white"><i class="flag-icon flag-icon-gb mr-1"></i> England <span class="float-right">85%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-blooker" role="progressbar" style="width: 85%"></div>
                        </div>

                      <p class="mt-3 text-white"><i class="flag-icon flag-icon-au mr-1"></i> Australia <span class="float-right">75%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-quepal" role="progressbar" style="width: 75%"></div>
                        </div>

                      <p class="mt-3 text-white"><i class="flag-icon flag-icon-in mr-1"></i> India <span class="float-right">45%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-purpink" role="progressbar" style="width: 55%"></div>
                        </div>
              </div>
            </div>
         </div>

         <div class="col-12 col-lg-4 col-xl-4">
			 <div class="card gradient-orange">
				  <div class="card-header bg-transparent text-white border-light">
					  Sales This Week
					   <div class="card-action">
						 <div class="dropdown">
						 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
						  <i class="icon-options text-white"></i>
						 </a>
							<div class="dropdown-menu dropdown-menu-right">
							 <a class="dropdown-item" href="javascript:void();">Action</a>
							 <a class="dropdown-item" href="javascript:void();">Another action</a>
							 <a class="dropdown-item" href="javascript:void();">Something else here</a>
							 <div class="dropdown-divider"></div>
							 <a class="dropdown-item" href="javascript:void();">Separated link</a>
						  </div>
						</div>
					  </div>
					</div>
				 <div class="card-body">
				  <div id="dashboard3-chart-11" style="height:250px;"></div>
				</div>
			</div>
		   <div class="card gradient-meridian">
		    <div class="card-header bg-transparent text-white border-light">Site Traffic
			  <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options text-white"></i>
			 </a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="javascript:void();">Action</a>
					<a class="dropdown-item" href="javascript:void();">Another action</a>
					<a class="dropdown-item" href="javascript:void();">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void();">Separated link</a>
				 </div>
			  </div>
			 </div>
			</div>
            <div class="card-body p-lg-2">
              <div class="media">
               <div class="align-self-center"><span id="dashboard3-chart-8"></span></div>
              <div class="media-body text-right">
                <h4 class="text-white">2050</h4>
                <span class="text-white">Page Views</span>
              </div>
            </div>
			<hr class="border-light">
			<div class="media">
               <div class="align-self-center"><span id="dashboard3-chart-9"></span></div>
              <div class="media-body text-right">
                <h4 class="text-white">3250</h4>
                <span class="text-white">Total Clicks</span>
              </div>
            </div>
			<hr class="border-light">
			<div class="media">
               <div class="align-self-center"><span id="dashboard3-chart-10"></span></div>
              <div class="media-body text-right">
                <h4 class="text-white">82.50%</h4>
                <span class="text-white">Bounce Rate</span>
              </div>
            </div>
            </div>
          </div>
         </div>
      </div><!--End Row-->
	  
	  <div class="row">
        <div class="col-lg-12">
          <div class="card bg-secondary">
		   <div class="card-header bg-transparent text-white border-0">
                Recent Orders
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options text-white"></i>
				 </a>
				    <div class="dropdown-menu dropdown-menu-right">
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
                 <table class="table align-items-center table-flush table-secondary">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Status</th>
                     <th>Amount</th>
                     <th>Date</th>
                     <th>Shipping</th>
                   </tr>
                   </thead>
                   <tr>
                    <td>Iphone 5</td>
                    <td><img src="assets/images/products/01.png" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td><span class="badge badge-success shadow-success">Paid</span></td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow-success" style="height: 6px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src="assets/images/products/02.png" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td><span class="badge badge-warning shadow-warning">Pending</span></td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow-warning" style="height: 6px;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="assets/images/products/03.png" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td><span class="badge badge-danger shadow-danger">Failed</span></td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow-danger" style="height: 6px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="assets/images/products/04.png" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td><span class="badge badge-success shadow-success">Paid</span></td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow-success" style="height: 6px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="assets/images/products/05.png" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td><span class="badge badge-danger shadow-danger">Failed</span></td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow-danger" style="height: 6px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>

                 </table>
               </div>
          </div>
        </div>
      </div><!--End Row-->

       <!--End Dashboard Content-->

       @include('global.fotter')
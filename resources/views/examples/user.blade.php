@include('global.header') 
<body>
    <div class="wrapper">
          @include('global.sidebar')  

        <div class="main-panel">
            <!-- Navbar -->
             @include('global.nav')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Phone Call Log</h4>
                                </div>
                                <!-- <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Company (disabled)</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="michael23">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Mike">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="Mike">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div> -->
                                <div class="card-body">
                       
                        <form id="form1" action="{{ route('Font_office_Submit_call_log')  }}" method="get" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="box-body">

                                {{csrf_field()}}
                               <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" value="" name="name">

                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Phone</label><small class="req"> *</small>  
                                    <input type="text" class="form-control" value="" name="contact">
                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Date</label>
                                    <input id="date" name="date" placeholder="" type="text" class="form-control" value="08/22/2019" readonly="readonly">
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Description</label> 
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>

                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="pwd">Next Follow Up Date</label>     <input id="follow_up_date" name="follow_up_date" placeholder="" type="text" class="form-control" value="" readonly="readonly">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Call Duration</label>
                                    <input type="text" class="form-control" value="" name="call_dureation">
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Note</label>
                                    <textarea class="form-control" id="description" name="note" rows="3"></textarea>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Call Type</label>

                                    <small class="req"> *</small>  

                                                                            <label class="radio-inline"><input type="radio" name="call_type" value="Incoming"> Incoming</label>

                                                                            <label class="radio-inline"><input type="radio" name="call_type" value="Outgoing"> Outgoing</label>

                                    
                                    <span class="text-danger"></span>
                                </div>


                            </div><!-- /.box-body -->


                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </form>
                    </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card card-user">
                                <!-- <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div> -->
                                <!-- <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Mercy
                                        <br> Your chick she so thirsty
                                        <br> I'm in that two seat Lambo"
                                    </p>
                                </div> -->
                                <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <!-- <div class="card-header ">
                                    <h4 class="card-title">Table on Plain Background</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div> -->
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Next Follow Up Date</th>
                                            <th>Call Type</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         @include('global.fotter') 
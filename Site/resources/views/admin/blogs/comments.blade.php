@extends('layout.adminpanel')
@section('content')


        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="modal fade" id="confirmOnDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are You Sure You Want To Deactivate This Comment.</p>
            </div>
            <div class="modal-footer">
             <button type="button" onclick="deleteConfirmed()" data-dismiss="modal" id="deleteConfirmed" data-deleteUrl="" class="btn btn-success">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
                  @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Comments
                        </h3>
<!--
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Ecommerce Products</li>
                        </ol>
-->
                    </div>

                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
<div class="table-responsive">

				<table id="demo-foo-addrow" class="table product-table table-hover contact-list" data-page-size="10">
                                        <thead>
                      <tr>
                         <th>ID</th>
						 <th>User Name</th>
						 <th>Comment</th>
                          						 <td class="op-0">&nbsp;</td>


				           <th>Action</th>


                      </tr>
                    </thead>

  <tbody>
	   @foreach($comment as $comments)
                      <tr>
					  <td>{{$comments->id}}</td>
                         <td class="text-dark font-bold">{{$comments->name_comment}} <br>
                          </td>

						 <td>{{substr($comments->comment_body,0,60)."....."}}</td>
					@if($comments->status==1)
						 	 <td class="text-center"><a href="{{url('activecomment',$comments->id)}}"><i class="fa fa-toggle-on"></i></a></td>
                          <td class="text-center">
                              <a onclick="confirmForDelete('{{url('deactivecomment',$comments->id)}}');return false" href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                          @else
                            <td class="text-center"><a href="{{url('activecomment',$comments->id)}}"><i class="fa fa-toggle-off"></i></a></td>
  <td class="text-center">
                              <a onclick="confirmForDelete('{{url('deactivecomment',$comments->id)}}');return false" href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                          @endif
                <td class="text-center"><a href="{{url('viewcomment',[$comments->id,$comments->blog_id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
					  </tr>
	   @endforeach



                    </tbody>


									   <tfoot>
                                            <tr>

                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>


				</div>

						  </div>
                        </div>
                        <!-- Column --> </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="mt-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 FI Consultancy </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
 <script>

       function confirmForDelete(url){
        $("#deleteConfirmed").data("deleteUrl",url)
        $("#confirmOnDelete").modal()
        $("#confirmOnDelete").show()
    }
    function deleteConfirmed() {
        url=$("#deleteConfirmed").data("deleteUrl")
        window.location=url
    }

</script>
</body>
@endsection

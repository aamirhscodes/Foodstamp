@extends('layout.adminpanel')
@section('content')
     <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <form method="post" action="{{url('updateblogpost')}}" enctype=multipart/form-data >
                @csrf
            <div class="container-fluid">
             <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Add Blog</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Datatable</li>
                        </ol>
                    </div>

                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                       <div class="row">
            <div class="col-sm-6 col-xs-6">
                  <div class="form-group" style="display:none">
                              <label class="control-label text-primary font-12">id</label>
                              <div>
                                <input type="text" class="form-control font-14"  placeholder="title" id="name" name="id" value="{{$blog->id}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label text-primary font-12">Title</label>
                              <div>
                                <input type="text" class="form-control font-14"  placeholder="title" id="name" name="title" value="{{$blog->title}}">
                              </div>
                            </div>
                          </div>
                                <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                              <label class="control-label text-primary font-12">Slug</label>
                              <div>
                                <input type="text" class="form-control font-14"  placeholder="slug" name="slug" id="name">
                              </div>
                            </div>
                          </div>
         </div>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-subtitle">Description</h6>

                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control wysiwyg-editor" rows="15" placeholder="Enter text ..." name="desc" value="sdfdfsdfs">{{$blog->body}}</textarea>
                                    </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                                      <div class="col-lg-4 col-md-4">
                    <div class="relative">
                      <div id="amazingslider-wrapper-1" class="mb-40">
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                          <ul class="amazingslider-slides" style="display:none;">
                            <li><a href="" class="html5lightbox"><img src="{{asset('public/'. $blog->image)}}" alt="" title="" /></a> </li>
                            <li><a href="{{asset('assets/images/gallery/13-lightbox.jpg')}}" class="html5lightbox"><img src="{{asset('assets/images/gallery/13.jpg')}}" alt="" title="" /></a> </li>
                            <li><a href="{{asset('assets/images/gallery/19-lightbox.jpg')}}" class="html5lightbox"><img src="assets/images/gallery/19.jpg" alt="" title="" /></a> </li>
                          </ul>
                          <ul class="amazingslider-thumbnails" style="display:none;">
                            <li><img src="{{asset('assets/images/gallery/a-tn.jpg')}}" alt="" title="" /></li>
                            <li><img src="{{asset('assets/images/gallery/4-tn.jpg')}}" alt="" title="" /></li>
                            <li><img src="{{asset('assets/images/gallery/13-tn.jpg')}}" alt="" title="" /></li>
                            <li><img src="{{asset('assets/images/gallery/19-tn.jpg')}}"  alt="" title="" /></li>
                          </ul>
                        </div>
                      </div>
                    </div>
					 <div class="upload-photo">
                      <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" name="blogimage" />
                    </div>

                  </div>
<!--
                    <div class="col-6">

        	 <div class="upload-photo">
                      <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" name="blogimage" />
                    </div>



                        </div>
-->
                </div>
                  <input type="submit" class="btn  btn-primary" value="save">
                </div>
         </form>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
  <link rel="stylesheet" href="{{asset('dist/css/jquery.wysiwygEditor.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800" rel="stylesheet" type="text/css">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      font-weight: 300;
      line-height: 1.6em;
    }
    iframe {
      border: none;
      outline: none;
      position: relative;
      //width: 100%;
      background: #fff;
      //padding: 15px;
    }
  </style>
</head>
<body style="background: #219fd1; color: #fff;">



  <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="{{asset('dist/js/jquery.wysiwygEditor.js')}}"></script>
  <script type="text/javascript">
    $('.wysiwyg-editor').wysiwygEditor();
  </script>
</body>
</html>
@endsection

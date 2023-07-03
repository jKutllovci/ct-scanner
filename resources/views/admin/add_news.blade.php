<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style type="text/css">
        .container {
            display: flex;
            justify-content: center;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            padding: 15px;
        }

        .form-group label {
            text-align: right;
            margin-right: 20px;
        }

        .form-group input,
        .form-group select {

            width: 200px;
        }

        .color {
            color: black;
        }
    </style>

    @include('admin.css');
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 50px;">
                <div class="form-container">
                    @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}

                    </div>

                    @endif
                    <form action="{{url('upload_news')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Add your story!</h3>
                        <div class="row">
                          <div class="col-md-6">

                            <div class="form-group">
                              <input type="text" name="title" class="form-control" placeholder="Write your title" value="" />
                            </div>
                            <div class="form-group">
                              <input type="text" name="description" class="form-control" placeholder="Write description of your story" value="" />
                            </div>
                            <div class="form-group">
                              <label for="image_url">Image URL</label>
                              <input type="text" name="image_url" id="image_url" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="submit" name="submit" class="btn btn-success" value="Add your story" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <textarea name="body" class="form-control" placeholder="Explain your story" style="width: 100%; height: 150px;"></textarea>
                            </div>


                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
    </div>
    <!-- End custom js for this page -->
</body>

</html>
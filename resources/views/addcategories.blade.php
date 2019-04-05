<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thêm sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>
    <div class="container">
        <h2 class="page-header"> Category <small>&hearts; Add &hearts;</small> </h2>
        <!-- Display error -->
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul> 
            </div>
        @endif
        <!-- //Display error -->
        <form method="post" action="{{ URL::action('controllercategories@postForm') }}" enctype="multipart/form-data">
            <!-- //StudentController@postForm: để đường dẫn hoco và hoco1 liên kết với nhau -->
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm..."  name="name">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="quantity">Quantity:</label>
                    <input type="number"  name="quantity">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="status">Satus:</label>
                    <input type="text"  name="status">
                </div>
            </div>
            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Add Category</button>
                </div>
            </div>
            <!-- /butto add -->
        </form>
    </div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sửa Categories </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>
    <div class="container">
        <h2 class="page-header"> Product <small>&hearts; Edit &hearts;</small> </h2>
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
        <form method="post" action="{{URL::action('controllercategories@postUpdate',$categories_data->id)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="txtname" value="{!! old ('txtname',isset($categories_data)?$categories_data['Name']:NULL) !!}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="quantity">Quantity:</label>
                    <input onkeypress='return event.charCode >= 48 && event.charCode <=57' type="text" class="form-control" name="txtquantity" value="{!! old ('txtquantity',isset($categories_data)?$categories_data['Quantity']:NULL) !!}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="status">Status:</label>
                    <input type="text" class="form-control" name="txtstatus" value="{!! old ('txtstatus',isset($categories_data)?$categories_data['Status']:NULL) !!}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Save</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
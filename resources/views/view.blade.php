<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>viewAllCategories</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
        background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }
.btn{

    background-color: white;
 color: black;
 border: 2px solid #008CBA;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;


  margin-left:1000px;
}
.btn:hover {
    background-color: #008CBA;
  color: white;
}
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
                        <div class="col-sm-4">
                            <div class="search-box">

                                <form method="GET" action="{{ url('/categories') }}">
                                    @csrf
                                    <input type="text" name="search" class="form-control" placeholder="Search&hellip;">
                                    <button type="submit" name="submitSearch"><a><i class="material-icons">&#xE8B6;</i></a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn"><a href="{{url("/categories/create")}}" style="color: black; text-decoration: none;  font-size: 16px;">ADD</a></button>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name <i class="fa fa-sort"></i></th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Address</th>
                            <th>Country <i class="fa fa-sort"></i></th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                   @if (isset($_GET['submitSearch']))
                    @foreach($find as $values)
                    <tbody>
                        <tr>
                            <td>{{$values->id}}</td>
                            <td>{{$values->name}}</td>
                            <td>{{$values->email}}</td>
                            <td>{{$values->password}}</td>
                            <td>{{$values->address}}</td>
                            <td>{{$values->country}}</td>
                            <td>
                                <a href="{{url("/categories/$values->id")}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{{url("/categories/edit/$values->id")}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <form method="POST" action="{{url("/categories/delete/$values->id")}}"> @csrf
                              @method  ('DELETE')
                              <button class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button></form>
                            </td>

                        </tr>

                    </tbody>
                    @endforeach
                    @else
                    @foreach($categories as $values)
                    <tbody>
                        <tr>
                            <td>{{$values->id}}</td>
                            <td>{{$values->name}}</td>
                            <td>{{$values->email}}</td>
                            <td>{{$values->password}}</td>
                            <td>{{$values->address}}</td>
                            <td>{{$values->country}}</td>
                            <td>
                                <a href="{{url("/categories/$values->id")}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{{url("/categories/edit/$values->id")}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <form method="POST" action="{{url("/categories/delete/$values->id")}}"> @csrf
                              @method  ('DELETE')
                              <button class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button></form>
                            </td>

                        </tr>

                    </tbody>
                    @endforeach
                    @endif
                </table>

                <div class="clearfix">
                    {{ $categories->links() }}
    </div>


            </div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>ToDo List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>ToDo List</h1>
                <ol>
                    @foreach($todo as $del)
                        <li>
                        {{ $del->item }}
                        <a href="{{ url('destroy',[$del->id_todo]) }}" class="btn btn-danger">x</a>    
                        </li>
                    @endforeach
                </ol>
                <form action="todo" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="todo_item" placeholder="Item baru...">
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                        <div class="col-lg-8">
                        </div>
                    </div>
                </form>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </div>
        </div>
    </div>
</body>
</html>
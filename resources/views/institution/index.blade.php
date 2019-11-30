<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                NoteBook App
            </title>
            <link href="dist/css/main.css" rel="stylesheet">
                <link href="dist/css/bootstrap.css" rel="stylesheet">
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-dark bg-primary">
                <button aria-controls="navbar-header" class="navbar-toggler hidden-sm-up" data-target="#navbar-header" data-toggle="collapse" type="button">
                    ☰
                </button>
                <div class="collapse navbar-toggleable-xs" id="navbar-header">
                    <a class="navbar-brand" href="{{route('home')}}">
                        STAR CORP
                    </a>
                </div>
            </nav>
            <!-- /navbar -->
            <!-- Main component for call to action -->
            <div class="container">
                <h1 class="pull-xs-left">
                    Institutions
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="addNote.html" role="button">
                        New Institution +
                    </a>
                </div>
                <div class="clearfix">
                </div>
                <!--============= notes=========== -->
                <div class="list-group notes-group">

                    <!--note1 -->
                    @foreach($institutions as $institution)
                    <div class="card card-block">
                        <a href="{{route('index2',$institution->id)}}">
                            <h4 class="card-title">
                                {{$institution->name}}
                            </h4>
                        </a>
                        
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('updateform',$institution->id)}}">
                            Edit
                        </a>
                        <form action="{{route('delete',$institution->id)}}" class="pull-xs-right" method="POST">
                            {{csrf_field()}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                        
                            
                        </form>
                    </div>
                    @endforeach
                    <!-- note2 -->
                   
                    </div>
                </div>
            </div>
            <!-- /container -->
            <script src="dist/js/jquery3.min.js">
            </script>
            <script src="dist/js/bootstrap.js">
            </script>
        </div>
    </body>
</html>

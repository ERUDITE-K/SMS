<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h3>RANK</h3>
        </div>
        <p><h1>{{$rank->name}}</h1> </p>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>NAME</th>
                        <th>SEX</th>
                        <th>INSTITUTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($employees as $employee)
                        <td>{{$employee->firstname}} {{$employee->lastname}}</td>
                        <td>{{$employee->sex}}</td>
                        <td>{{$employee->institution->name}}</td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
        <div class="page-header">
            <h3>Reviews<button class="btn btn-primary write-review" type="button">Write a review</button></h3>
        </div>
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">Love this!</h4>
                <div>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <p><span class="reviewer-name"><strong>John Doe</strong></span><span class="review-date">7 Oct 2015</span></p>
            </div>
        </div>
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">Fantastic product</h4>
                <div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <p><span class="reviewer-name"><strong>Jane Doe</strong></span><span class="review-date">7 Oct 2015</span></p>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>Fashion Store © 2016</h5>
                </div>
                <div class="col-sm-6 social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
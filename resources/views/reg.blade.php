<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project star</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/Video-Parallax-Background-v2.css">
    <style type="text/css">
        #header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    height:100%;
    width:33%;
    float:left;
    padding:5px; 
}
#section {
    line-height:30px;
    width: 33%;
    float:left;
    padding:5px; 
}
#sections {
    line-height:30px;
    width:33%;
    float:left;
    padding:5px; 
}
#footer{
    clear: both;
    text-align: center;
    padding: 5px;

}
</style>
</head>

<body><div class="register-photo">
    <div class="form-container">
        <form method="post" action="{{route('registe')}}" enctype="multipart/form-data">
        {{csrf_field()}}
            <h2 class="text-center"><strong>Register</strong> an employee.</h2>
            <div id="nav">
                <div class="form-group"><input class="form-control" type="text" name="Firstname" placeholder="First Name"  required="" /></div>        
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
                <div class="form-group"><input class="form-control" type="text" name="Address" placeholder="Address" required=""/></div>  
                <div class="form-group"> <label class="form-controls" style="margin-left: 7px; margin-bottom: 0px;">Date Employed</label>
                 <input class="form-control" type="date" name="Date" placeholder="Date" required="" style="margin-top: 8px;" /></div>   
            </div>
            <div id="section">
                <div class="form-group"><input class="form-control" type="text" name="Othername" placeholder="Other Name" /></div>
                <div class="form-group" >
                <select name="Sex" class="form-control"><option value="" selected="selected">Sex</option><option value="Male">Male</option><option value="Female">Female</option></select></div>
                <div class="form-group">
                <select name="Nationality" class="form-control"><option value="" selected="selected">Nationality</option><option value="GHANAIAN">GHANAIAN</option><option value="NIGERIAN">NIGERIAN</option><option value="AMERICAN">AMERICAN</option><option value="ENGLISH">ENGLISH</option><option value="BRAZILIAN">BRAZILIAN</option><option value="FRENCH">FRENCH</option><option value="INDONISIAN">INDONISIAN</option></select></div>
                <div class="form-group">

                
                <select name="Institution" class="form-control">
                    <option selected="" >Institution</option>
                    @foreach ($institutions as $institution)
                    <option value="{{$institution->id}}">{{$institution->name}}</option>   
                    @endforeach
                </select>
                </div>      
                
                 <div class="form-group"><input class="form-control" type="text" name="Location" placeholder="Location"  required="" /></div>   
                <div class="form-group">
                    <select name="Position" class="form-control"><option value="" selected="selected">Position / Rank</option>
                    @foreach ($ranks as $rank)
                    <option value="{{$rank->id}}">{{$rank->name}}</option>
                    @endforeach
                </select>
                </div>
                <div style="max-height: 95%"><button class="btn btn-primary btn-block" type="submit">Register</button></div>
            </div>
            <div id="sections">
                <div class="form-group"><input class="form-control" type="text" name="Lastname" placeholder="Last Name" required=""/></div>
                <div class="form-group"><input class="form-control" type="text" name="Phone" placeholder="Phone" required=""/></div>
                <div class="form-group"><input class="form-control" type="text" name="PlaceofResidence" placeholder="Place of Residence" required=""/></div>
                
                <div class="upload" style="max-width: 100%">
                <input type="file" name="image" id="fileToUpload" style="max-width: 100%" >
                <!-- <input type="submit" value="Upload Image" name="submit" style="margin-top: 0px;"></form>     -->
                </div>
                <br>
            </div>
</form>
</div>                      
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Video-Parallax-Background-v2.js"></script>
</body>

</html>
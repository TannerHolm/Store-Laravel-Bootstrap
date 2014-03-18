<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StoreFront</title>

    <!-- Bootstrap core CSS -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">    <!-- Add custom CSS here -->
    <link href="/assets/css/home.css" rel="stylesheet">
    <link href="/assets/css/summernotebs2.css" rel="stylesheet">
    <link href="/assets/css/summernotebs3.css" rel="stylesheet">
    <link href="/assets/css/summernote.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/summernote.min.js"></script>
<script src="/assets/js/summernote.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>


<body>

    <nav class="navbar-padding navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Create</a>
                    </li>
                    <li><a href="#">Services</a>
                    </li>
                    <li><a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        @if (Session::get('flash_message'))
            <div class="flash">
                {{Session::get('flash_message') }}
            </div>
        @endif

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Printable</a>
                    <a href="#" class="list-group-item">Cupcake Wrappers</a>
                    <a href="#" class="list-group-item">Authentic Dragon Bones</a>
                </div>
            </div>

            <div class="col-md-9">

               
                @yield('content')

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013 - Template by <a href="http://maxoffsky.com/">Maks</a>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <script>
    $(document).ready(function() {
  $('#summernote').summernote();
});

    $('#summernote').summernote({
  height: 300,   //set editable area's height
  focus: true    //set focus editable area after Initialize summernote
});
    </script>
    <!-- /.container -->

    <!-- JavaScript -->
</body>

</html>
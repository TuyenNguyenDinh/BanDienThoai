<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom:0px">
        <div class="container-fluid">
            <!--header logo-->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Store</a>
            </div>

            <!--  -->
            <ul class="nav navbar-nav">
                

                <!-- <li class="active"><a href="#">Home</a></li> -->
                <li><a href="">Page 2</a></li>
                <li><a href="">Hot Sale 🔥🔥🔥</a></li>
            </ul>

            <!--  -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-user"></span> Admin Panel</a></li>
            </ul>
        </div>
    </nav>

    @include('body')
</body>

</html>
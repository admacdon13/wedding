<!doctype html>

<html>
<head>

    <meta charset="UTF-8">
    <title>Mac & Kelli's Wedding</title>
    <link rel="alternate" type="application/rss+xml" title="Latest snippets from Bootsnipp.com" href="http://bootsnipp.com/feed.rss">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="javascript" href="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    {{--<link rel="stylesheet" href="http://bootsnipp.com/dist/bootsnipp.min.css?ver=7d23ff901039aef6293954d33d23c066">--}}
</head>

<body>

{{--<ul class="nav nav-pills">--}}
    {{--<li role="listitem" class="active"><a href="home">Home</a></li>--}}
    {{--<li role="listitem"><a href="rsvp">RSVP</a></li>--}}
    {{--<li role="listitem"><a href="dates">Date</a></li>--}}
    {{--<li role="listitem"><a href="about">about us</a></li>--}}
    {{--<li role="listitem"><a href="guestlist">Guest List</a></li>--}}
    {{--<li role="listitem"><a href="registry">Registry</a></li>--}}
    {{--<li role="listitem"><a href="bridalparty">Bridal Party</a></li>--}}
    {{--<li role="listitem"><a href="music">Request Music</a></li>--}}
    {{--<li role="listitem"><a href="musicrequests">Music Playlist</a> </li>--}}
    {{--<li role="listitem"><a href="specialthanks">Special Thanks</a></li>--}}
{{--</ul>--}}
        <!-- Second navbar for search -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!--rand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" id="mobileNav" onclick="docmument.GetElementById('mobileNav').setAttribute('class' , 'navbar-toggle' )" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand pull-left" href="home">#MacAndKelli</a>
            </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-3">
                <ul class="nav navbar-nav navbar-right">
                    <li role="listitem" class="active"><a href="home">Home</a></li>
                    <li role="listitem"><a href="rsvp">R.S.V.P</a></li>
                    <li role="listitem"><a href="dates">Date</a></li>
                    <li role="listitem"><a href="about">About Us</a></li>
                    <li role="listitem"><a href="guestlist">Guest List</a></li>
                    <li role="listitem"><a href="registry">Registry</a></li>
                    <li role="listitem"><a href="bridalparty">Bridal Party</a></li>
                    <li role="listitem"><a href="music">Request Music</a></li>
                    <li role="listitem"><a href="musicrequests">Music Playlist</a> </li>
                    <li role="listitem"><a href="specialthanks">Special Thanks</a></li>
                </ul>
                <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" />
                        </div>
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                </div>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

<div class="container">
    @yield('content')
</div>

@yield('footer')
</body>

</html>

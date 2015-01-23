<?php
$MEDIA_URL = "https://housing.wwu.edu/apps/media/";
?>
<div class="row" id="wwu-header">
    <div id="wwu-logo" class="col-md-offset-1 col-lg-3 col-sm-4">
        <div class="wwu-logo-position">
            <a href="http://www.wwu.edu">
                <img class="wwu-logo-img hidden-xs" src="<?php echo $MEDIA_URL; ?>wwu-logo-white-209x120.png" alt="Western Washington University Logo">
                <img class="wwu-logo-img visible-xs" src="<?php echo $MEDIA_URL; ?>wwuhorizlogo.png" alt="Western Washington University Horizontal Logo">
            </a>
        </div>
    </div>

    <div id="wwu-links" class="col-lg-8 col-md-7 navbar">
        <div class="navbar-header">
            <button id="wwu-vent" type="button" class="navbar-toggle btn-ur" data-toggle="collapse" data-target="#wwu-links-nav">
                <span class="sr-only">Toggle WWU navigation</span>
                <!-- <span class="glyphicon glyphicon-search"></span> -->
            </button>
        </div>

        <nav class="collapse navbar-collapse" id="wwu-links-nav">
            <!-- <form class="navbar-form form-inline visible-xs" role="search" method="get" action="http://gsa.ts.wwu.edu/search">
                <input type="hidden" name="client" value="default_frontend">
                <input type="hidden" name="output" value="=xml_no_dtd">
                <input type="hidden" name="proxystylesheet" value="default_frontend">
                <input type="hidden" name="site" value="default_collection">
                <div class="checkbox">
                    <label for="searchwestern" id="searchwesternlabel">
                        <input type="checkbox" id="searchwestern" name="searchwestern" value="1"> Search Western
                    </label>
                </div>
                <div class="input-group">
                    <input type="search" class="form-control" id="searchfield" name="q" aria-label="Search" placeholder="Search" required="required" aria-required="true">
                    <span class="input-group-btn">
                        <button type="submit" id="searchgo" class="btn btn-default" aria-label="Submit"><span class="sr-only">Search</span><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
            <span role="search">
                <a class="pull-right btn btn-default hidden-xs"
                    data-content='
                        <form method="get" action="http://gsa.ts.wwu.edu/search">
                            <input type="hidden" name="client" value="default_frontend">
                            <input type="hidden" name="output" value="=xml_no_dtd">
                            <input type="hidden" name="proxystylesheet" value="default_frontend">
                            <input type="hidden" name="site" value="default_collection">
                            <div class="checkbox">
                                <label for="searchwestern" id="searchwesternlabel">
                                    <input type="checkbox" id="searchwestern" name="searchwestern" value="1"> Search Western
                                </label>
                            </div>
                            <div class="input-group">
                                <label class="sr-only" for="searchfield">Search Field</label>
                                <input type="search" class="form-control" id="searchfield" name="q" aria-label="Search" placeholder="Search" required="required" aria-required="true">
                                <span class="input-group-btn">
                                    <button type="submit" id="searchgo" class="btn btn-default" aria-label="Submit">Go</button>
                                </span>
                            </div>
                        </form>'
                    data-toggle="popover"
                    data-html="true"
                    data-placement="bottom"
                    id="search-popover" title="" href="#">
                    <span class="glyphicon glyphicon-search"><span class="sr-only">Search</span></span>
                </a>
            </span> -->
            <ul class="navbar-nav nav pull-right">
                <li><a href="https://www.wwu.edu/academic_calendar"><span class="glyphicon glyphicon-calendar visible-xs"></span>Calendar</a></li>
                <li><a href="https://www.wwu.edu/directory"><span class="glyphicon glyphicon-book visible-xs"></span>Directory</a></li>
                <li><a href="https://www.wwu.edu/index"><span class="glyphicon glyphicon-list-alt visible-xs"></span>Index</a></li>
                <li><a href="https://www.wwu.edu/campusmaps"><span class="glyphicon glyphicon-map-marker visible-xs"></span>Map</a></li>
                <li><a href="https://mywestern.wwu.edu"><span class="glyphicon glyphicon-user visible-xs"></span>MyWestern</a></li>
            </ul>
        </nav>
    </div>
</div>

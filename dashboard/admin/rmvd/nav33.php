<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="libs/simplesidebar/simplesidebar.css">
    <title>Simple Sidebar Navigation Example</title>
</head>


<body>


<div id="my-sidebar-context" class="widget-sidebar-context">
    <header id="this-header" class="navbar justify-content-start align-items-center navbar-dark bg-dark page-header">

        <a class="navbar-brand" href="#">
            Simple Sidebar
        </a>


        <a href="#" class="navbar-toggler widget-sidebar-toggler">
            <i class="fas fa-bars"></i>
        </a>

    </header>
    <div class="page-body">
        <nav class="widget-sidebar">
            <ul class="list-unstyled mt-2">
                <li class="active">
                    <a href="#">
                        <i class="fas fa-bars"></i><span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-pencil-alt"></i><span> jQueryScript.net </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebar-link-mycomponents" data-toggle="collapse"
                       aria-expanded="true"
                       class="dropdown-toggle">
                        <i class="fas fa-shapes"></i><span> Posts </span>
                    </a>
                    <ul class="collapse list-unstyled show"
                        id="sidebar-link-mycomponents">
                        <li>
                            <a href="#">All Posts</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>


        <div class="page-main">


            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h1>Simple Sidebar Navigation Example</h1>
                        <div class="jquery-script-ads" style="margin:30px auto"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis eius excepturi nihil
                            possimus recusandae voluptates!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer bg-dark text-white p-3">
        <div>
            <span>My Footer © 2019</span>
        </div>
    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script src="libs/simplesidebar/simplesidebar.js"></script>


<script>
    $(document).ready(function () {

        $("#my-sidebar-context").simpleSidebar();


    });


</script>

</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>

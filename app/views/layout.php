<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Pagon Framework</title>
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/pagon.css">
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/highlight/js/highlight.pack.js"></script>
    <link rel="stylesheet" href="/lib/highlight/css/highlight.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script type="text/javascript">
        hljs.configure({});
        hljs.initHighlightingOnLoad();

        $(document).ready(function () {
            var showMenu = false;
            $('#toggle').click(function () {
                $('#nav').animate({left: showMenu ? '0' : '-33.3333%'});
                showMenu = !showMenu;
            })
        })
    </script>
</head>
<body>
<div id="wrapper" class="container-fluid">
    <div class="row">
        <span id="toggle" class="glyphicon glyphicon-th-list hide"></span>

        <div id="nav" class="col-md-3 col-xs-4">
            <div id="logo">
                <img src="/img/logo.png"/>
            </div>
            <div id="github">
                <a href="https://github.com/hfcorriez/pagon">
                    <span class="glyphicon glyphicon-open"></span>
                    Open Github
                </a>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="/"<?php if (!$params['name']): ?> class="highlight" <?php endif; ?>>Home</a></li>
                    <?php foreach ($docs as $name => $doc): ?>
                        <li>
                            <a href="<?php echo $name ?>.html"<?php if ($params['name'] === $name): ?> class="highlight" <?php endif; ?>><?php echo ucfirst($name); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="footer" class="text-center">
                Copyright &copy; Pagon Framework<br/>
                Author: <a href="mailto:hfcorriez@gmail.com">@hfcorriez</a>
            </div>
        </div>
        <div id="article" class="col-md-9 col-xs-8">
            <?php echo $content; ?>
        </div>
    </div>
</div>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-635981-11', 'ipagon.com');
    ga('send', 'pageview');
</script>
</body>
</html>
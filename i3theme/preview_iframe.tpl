    <head>
        <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
        <meta http-equiv="Content-Type" content="text/html; charset={$head_charset}" />
        <meta name="Powered-By" content="Serendipity v.{$head_version}" />
        <link rel="stylesheet" type="text/css" href="{$head_link_stylesheet}" media="all" />
        <link rel="stylesheet" type="text/css" href="{serendipity_getFile file="print.css"}" media="print" />
        <link rel="stylesheet" type="text/css" href="{serendipity_getFile file="s9y.css"}" media="all" />
<!--[if lt IE 7]>
        <link rel="stylesheet" href="{serendipity_getFile file="ie-gif.css"}" type="text/css" />
        <link rel="stylesheet" href="{serendipity_getFile file="s9y-ie-gif.css"}" type="text/css" />
<![endif]-->
        <script type="text/javascript">
           window.onload = function() {ldelim}
             parent.document.getElementById('serendipity_iframe').style.height = document.getElementById('content').offsetHeight
                                                                               + parseInt(document.getElementById('content').style.marginTop)
                                                                               + parseInt(document.getElementById('content').style.marginBottom)
                                                                               + 'px';
             parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
             parent.document.getElementById('serendipity_iframe').style.border = 0;
           {rdelim}
        </script>
    </head>

    <body style="padding: 0px; margin: 0px;">
        <div id="page" style="padding: 0px; margin: 5px auto 5px auto; width: 98%;">
        <div id="wrapper">
        <div id="left-col">
            <div id="content" style="padding: 5px; margin: 0px;">
            {$preview}
            </div>
        </div>
        </div>
        </div>
    </body>

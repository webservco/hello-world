<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->data('strings/title', 'Hello World!')?></title>
    <meta name="description" content="<?=$this->data('strings/description', 'Sample App for the WebServCo PHP Framework')?>">
    <base href="<?=$this->data('app/url','/')?>">
    
    <!-- https://purecss.io/layouts/blog/ -->
    <link rel="stylesheet" href="css/pure-min.1.0.0.css">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/pure-grids-responsive-old-ie-min.1.0.0.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/pure-grids-responsive-min.1.0.0.css">
    <!--<![endif]-->
    
    <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/style-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/style.css">
    <!--<![endif]-->
</head>
<body>
<div id="layout" class="pure-g">
<?=$this->data('tpl_sidebar')?>
    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <div class="posts">
                <h1 class="content-subhead"><?=$this->data('strings/title')?></h1>
<?=$this->data('tpl_content')?>
            </div>
<?=$this->data('tpl_footer')?>            
        </div>
    </div>
</div>    
</body>
</html>

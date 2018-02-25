<!doctype html>
<html lang="<?=$this->data('i18n/lang', 'en')?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?=$this->data('meta/title', __('Hello World!'))?></title>
    <meta name="description" content="<?=$this->data('meta/description', __('Sample App for the WebServCo PHP Framework'))?>">
    
    <base href="<?=$this->data('url/app','/')?>">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?=$this->data('tpl_header')?>
    
    <main role="main">
<?=$this->data('tpl_content')?>
    </main>
    
<?=$this->data('tpl_footer')?>
<?=$this->data('tpl_scripts')?>
</body>
</html>

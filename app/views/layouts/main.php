<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android Typing Password</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="/css/graphic-key.css"/>
</head>
<body>
<div id="main">
    <div id="top-navigation">
        <?php echo (isset($_SESSION['signin']) && $_SESSION['signin']) ? 'Hello, ' . $_SESSION['login'] . '! <a href="/?logout">Logout</a>' : '' ?>
    </div>
    %body%
</div>
<?php echo $flash; ?>
<script src="/js/jquery-2.1.1.min.js"></script>
<script src="/js/graphic-key.js"></script>
<script type="text/javascript">
    $(function(){

        function autoClosing(object, delay) {
            window.setTimeout(function() { object.slideUp(750) }, delay);
        }

        var $flash = $('#FlashBlock');
        if($flash.length > 0){
            $flash.fadeIn(1000);
            var $items = $flash.find('div');
            $items.each(function(key){
                autoClosing($(this), 2500 *(key+1))
            });
        }

    });
</script>
</body>
</html>
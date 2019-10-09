<?php include("./config.php"); ?>
<!doctype html>
<html lang="en" dir="<?php echo $lang ; ?>" class="no-js">
<head>
<meta charset="UTF-8">
	<title><?php echo $quiz_title ; ?></title>
	<meta name="description" content="<?php echo $quiz_question ; ?>" />
    <?php
        $root = '';
        $path = 'images/';
        function getImagesFromDir($path) {
            $images = array();
            if ( $img_dir = @opendir($path) ) {
                while ( false !== ($img_file = readdir($img_dir)) ) {
                    if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                        $images[] = $img_file;
                    }
                }
                closedir($img_dir);
            }
            return $images;
        }
        function getRandomFromArray($ar) {
            mt_srand( (double)microtime() * 1000000 ); 
            $num = array_rand($ar);
            return $ar[$num];
        }
        $imgList = getImagesFromDir($root . $path);
        $img = getRandomFromArray($imgList);
        $six_number = mt_rand(100000, 999999);
    ?> 
	<meta name="twitter:card"               content="summary_large_image" />
	<meta name="twitter:site"               content="@MohammedCha" />
	<meta name="twitter:creator"            content="@MohammedCha" />
	<meta property="og:url"                content="<?php echo $quiz_url ; ?>" />
	<meta property="og:title"              content="<?php echo $quiz_title ; ?>" />
	<meta property="og:description"        content="<?php echo $quiz_question ; ?>" />
	<meta property="og:image"              content="<?php echo $quiz_url .'/'. $path . $img .'?'. $six_number ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href="assets/css/css.css" type='text/css'>
	<link rel="stylesheet" href="assets/css/style.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://libraco.me/assets/favicon.png" rel="shortcut icon" type="image/x-icon">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "<?php echo $quiz_ads ; ?>",
        enable_page_level_ads: true
      });
    </script>
</head>
<body>
<div class="reskinning">


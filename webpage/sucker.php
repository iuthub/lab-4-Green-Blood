<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

    <?php if(!empty($_GET["name"] || $_GET["fname"] )):
    {
        ?>
		<h1>Thanks, sucker!  </h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
            <dd>  <?php



                echo $_GET["name"];

                ?>
            </dd>

            <dt>Section</dt>
            <dd> <?php echo $_GET["Section"] ?> </dd>

            <dt>Credit Card</dt>
            <dd><?php echo $_GET["fname"]; ?></dd>
            <dd><?php echo $_GET["Radio"];?></dd>

		</dl>
        <pre>Here are all suckers who have submitted here </pre>
        <?php

         file_put_contents("file.txt",$_GET["name"],FILE_APPEND);
         file_put_contents("file.txt",$_GET["Section"],FILE_APPEND);
         file_put_contents("file.txt",$_GET["fname"],FILE_APPEND);
         file_put_contents("file.txt",$_GET["Radio"],FILE_APPEND);
         echo file_get_contents("file.txt",FILE_USE_INCLUDE_PATH);
?>
        <?php
    }
    else:
        echo "You are suck, please all of them!";
    ?>
    <?php endif;?>
	</body>
</html>  
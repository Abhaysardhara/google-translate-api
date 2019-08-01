<?php

session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require 'vendor/autoload.php';

use Google\Cloud\Translate\TranslateClient;

$translate = new TranslateClient(['keyFile' => json_decode(file_get_contents("key2.json"), true)]);

?>

<?php

if(isset($_POST['submit']))
{
	$text = $_POST['text'];
}

// Translate text from english to gujarati.
$result = $translate->translate($text , [
    'target' => 'gu'
]);

$output = $result['text'];

echo "<br>";
// Detect the language of a string.
$result = $translate->detectLanguage($text);

$detect = $result['languageCode'];

// Get the languages supported for translation specifically for your target language.
$languages = $translate->localizedLanguages([
    'target' => 'en'
]);

/*foreach ($languages as $language) 
{
    echo $language['name'] . "\n";
    echo $language['code'] . "\n";
    echo "<br>";
    echo "<br>";
}*/

// Get all languages supported for translation.
$languages = $translate->languages();

/*foreach ($languages as $language) {
    echo $language . "\n";
}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Language Translator</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888">
                <div class="panel-heading">
                    <h2>Google Cloud Vision API</h2>
                    <a type="button" href="index.php" style="float: right" class="btn btn-danger">Back</a>
                    <p style="font-style: italic;">Coolest Language Translator App By Abhay</p>
                </div>
                <hr>
                Translation: <input type="textarea" name="" value="<?php echo $output; ?>"><br><br>
                Detected Language: <input type="textarea" name="" value="<?php echo $detect; ?>"><br><br>
                Confidence: <input type="textarea" name="" value="<?php echo ($result['confidence'])*100 ."%"; ?>"><br><br>


            </div>
        </div>
    </div>
</body>
</html>




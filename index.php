<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pietro</title>
</head>
<body>
    <style>
        <?php include 'style/style.css'; ?>
    </style>

    <?php 
        $badWords = $_GET['word'];
        $myText = 'se ni’ mondo esistesse un po’ di bene
        e ognun si considerasse suo fratello,
        ci sarebbe meno pensieri e meno pene
        e il mondo ne sarebbe assai più bello.';
        $responseText = 'bravo bravo, noi condividiamo. ma ora siamo davanti alla Corte d’Assise e lei è imputato di sedici omicidi';
    ?>
    <h2>TESTO ORIGINALE</h2>
    <p>
        <?php echo $myText ?>
    </p>
    <p class="response">
        <?php echo $responseText ?>
    </p>
    <h2>Parola da sostituire: <?php echo $badWords?></h2>

    <p>
        <?php echo str_replace($badWords, '***',$myText )?>
    </p>
    <div>
        Length: <?php echo strlen($myText)?>
    </div>
    <p class="response">
        <?php echo str_replace($badWords, '***',$responseText )?>
    </p>
    <div>
        Length: <?php echo strlen($responseText)?>
    </div>
    <img src="https://3.bp.blogspot.com/-pJkgB1IsY5U/SWSKi1l2dcI/AAAAAAAAC6g/TeRYoKUdpRw/w1200-h630-p-k-no-nu/z_pietro_pacciani.jpg" alt="Pietro">
    
</body>
</html>
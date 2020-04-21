<?php
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <textarea rows="3" cols="50" name="strPhoneNumber"></textarea>
    <input type="submit" value="Classify">
</form>
<?php
$strPhoneNumber = $_POST['strPhoneNumber'];
$arrayNumber = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$arrayPhoneNumber = explode(',', $strPhoneNumber);
$arrayPhoneNumberViettel = [];
$arrayPhoneNumberMobi = [];
$arrayPhoneNumberVina = [];
for ($i = 0; $i < count($arrayPhoneNumber); $i++) {
    $countCharacterIsNumber = 0;
    for ($j = 0; $j < strlen($arrayPhoneNumber[$i]); $j++) {
        for ($t = 0; $t < count($arrayNumber); $t++) {
            if ($t == $arrayPhoneNumber[$i][$j]) {
                $countCharacterIsNumber++;
            }
        }
    }
    if ($countCharacterIsNumber == 10) {
        switch (substr($arrayPhoneNumber[$i], 0, 3)) {
            case '098':
            case '097':
            case '096':
            case '086':
            case '032':
            case '033':
            case '034':
            case '035':
            case '036':
            case '037':
            case '038':
            case '039':
                array_push($arrayPhoneNumberViettel, $arrayPhoneNumber[$i]);
                break;
            case '090':
            case '093':
            case '089':
            case '070':
            case '076':
            case '077':
            case '078':
            case '079':

                array_push($arrayPhoneNumberMobi, $arrayPhoneNumber[$i]);
                break;
            case '091':
            case '094':
            case '088':
            case '081':
            case '082':
            case '083':
            case '084':
            case '085':
                array_push($arrayPhoneNumberVina, $arrayPhoneNumber[$i]);
                break;
        }
    }
}
echo 'Viettel: ' . implode('-', $arrayPhoneNumberViettel) . '<br>';
echo 'Mobi: ' . implode('-', $arrayPhoneNumberMobi) . '<br>';
echo 'Vina: ' . implode('-', $arrayPhoneNumberVina);
?>
</body>
</html>

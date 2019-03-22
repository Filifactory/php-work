<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 22.03.19
 * Time: 20:45
 */
require_once __dir__ . '/classes/form.php';
$form = new Form('post', 'action.php');
$formget = new Form('get','action.php')
    ?>





    <!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Javascript</title>
    <link href="../style.css" rel="stylesheet">

</head>

<body>


<?=$form->render()?>
<?=$formGet->render()?>
</body>
</html>

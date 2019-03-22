<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 22.03.19
 * Time: 19:27
 */
$errors =[];
if (empty($post['email']))
{
    $errors['email']='Введите email';

    else
    {
        $email = filter_var($post['email'], FiLER_VALIDTE_EMAIL);

       if($email===false){
           $errors['email']='Неверный емеил'
       }

    }
}
if (empty($post['password']))
{
    $errors['password']='Введите password';
}


if (empty($post['passwordconfirmation']))
{
    $errors['passwordconfirmation'] = 'Введите подтверждение пароля';


}
   elsif ($post['password']!= $post['passwordconfirmation']){
$errors'passwordconfirmation']= 'Пароли с подтверждением не совпали'
   }

  if ($errors){include  'index.php';
  exit();
  }

$file =fopen('users.txt','a');
  $line = $post['email']."\t".$post['password']."\n";
  fputs($file,$line);
  fclose($file);
  header('location: thanks.html');


  ?>
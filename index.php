<?php
$errors = [
    'name' => '',
    'email' => '',
    'password' => ''
];
$old=[
    'name' => '',
    'email' => '',
    'password' => ''
];

if(!empty($_POST)){
    foreach ($_POST as $key=>$value){
        if(empty ($value)){
            $errors[$key]="This field is required";
        }else{
            $old[$key]=$value;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Name :<a style="color:red"><?=$errors['name'];?></a>
        </label><br />
        <input type="text" value="<?=$old['name']?>" name="name" /><br />
        <label for="email">Email:<a style="color:red"><?=$errors['email'];?></a>
        </label><br />
        <input type="email" value="<?=$old['email']?>" name="email" /><br />
        <label for="password">Password:<a style="color:red"><?=$errors['password'];?></a>
        </label><br />
        <input type="password" value="<?=$old['password']?>" name="password" />
        <button>Add</button>
    </form>
</body>

</html>
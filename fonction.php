<?php


//Validation du mot de passe
function mdpLengthIsValid($mdpToValid)
{
$length = strlen($mdpToValid);
$response=[
'isValid'=>true,
'msg'=>''
];
//Donner une certaine longueur au mot de passe entre 6 et 10(Vérifier la longueur du mot de passe)
if ($length <6){
    $response=[
'isValid'=>false,
'msg'=>'Le mot de passe est trop court'
];}
elseif ($length>10) {
    $response=[
'isValid'=>false,
'msg'=>'Le mot de passe est trop long'
];
}

return $response;
    
}
//Concatenation de salt avec le mot de passe
function addSalt($mdpToSalt){
    $salt = 'unPeuDeSel123';
    $saltedMdp = $salt . $mdpToSalt . $salt;
    
    return $saltedMdp;
}


//Chiffrer le mot de passe
function encodeMdp($saltedMdp){
    $encodedMdp = sha1($saltedMdp);
    return $encodedMdp;
}
?>
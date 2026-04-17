<?php

// //Como declarar variavel
// $name = 'Gabriel';
// $_idade = 22;

// echo gettype($name);
// // & utiliza como referencia de variaveis, se utilizar eles as duas mudam 
// $myName =&$name;
// $myName ='joao';

// echo $name;
// echo $myName;

// //--------------Tipos--------------------------//
// //String
//  echo gettype("texto");
// //number --inteiro, float(double)
// echo gettype(12);
// //booleans
// echo gettype(false);
// //arrays, espcaço para guardar informação
// echo gettype(['texto', 12]);
// //object
// class Person{
   
// }
// echo gettype(new Person);
// //null
// echo gettype(null);
//------------------Constantes------------------
define('NAME', 'Alexandre');
echo NAME;
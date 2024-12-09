<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./public/css/bootstrap.css">
</head>
<body>

<script>
/* Переопределение функций */
function print(){
  console.log("Hello morning");
  print = function(){
    console.log("Good evening");
  }
}
print();
print();
print();
console.log("@@@@@@@@@@@@@@@@@@@@@@@@@@")
const qq = print;
qq()
qq()
/* Передача параметров по значению и по ссылке */
function user(user){
 user.name = "Tom"
}
let bob = {fname:"Smirnoff",age:25}
user(bob);
console.log(bob.name)

  </script>


  <script src="./public/js/bootstrap.js"></script>
</body>
</html>
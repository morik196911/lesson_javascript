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
    "use strict";
function sum (a, b) {
  return a + b;
}
let res = sum(5,9)
document.write(res + "<br/>")
function rectangle(w,h){
  const perimetr = w*2 + h * 2;
  const area = w * h;
  //return{total_p:perimetr, total_ar:area}
  return(perimetr +" == "+ area)
}
document.write(rectangle(5,6)+"<br/>")
/* Возвращение функции из функции*/
function sum(x, y){ return x + y;}
function subtract(x, y){ return x - y;}
function multiply(x, y){ return x * y;}
function zero(){ return 0;}
function menu(n){
  switch (n) {
    case 1:
      return sum;
      break;
      case 2:
      return subtract;
      break;
      case 1:
      return multiply;
      break;
  
    default:
      return zero
      break;
  }
}
let action = menu(1)
document.write(action(34,50))
document.write("<br/>#############################<br/>")
const hello = ()=>{console.log("Hello")}
hello()
const terr = hello;
terr();
const ff = (q,w)=>{console.log("Summa ", q + w)}
ff(25,85)
const qq = (name)=>{return`Hello ${name}`}
console.log(qq("Eloisa"))
/* Возвращение объекта */
const user = (useName,userAge)=>{
  return{name:useName,age:userAge}
}
let tom = user("Bob",25);
console.log(tom)
/* Определение локальной области видимости */
{
  let a = 5;
  let b = 89;
  const name = "Sasha"
}
/* Замыкание (closure) */
function outer(){
  let n = 5;
  function inner(){
    n++;
    document.write("<br/>"+n)
  }
  return inner;
}
const dd = outer();
dd()
dd()
function outer2(n){
  let x = n;
function inner2(m){
 document.write("<br/>"+ n * m)
}
return inner2;
}
const ss = outer2(8);
const f11 = ss(6);
const f22 = ss(10)
f11;
f22;
document.write("<br/>###############################<br/>")
function multiply(n){
    let x = n;
    return function(m){ return x * m;};
}
const fn1 = multiply(5);
const result1 = fn1(6); // 30
console.log(result1); // 30
 
const fn2= multiply(4);
const result2 = fn2(6); // 24
console.log(result2); // 24
/* Самовызывающиеся функции */
(function(){
 document.write("Hello this is function")
}());
(function(w,r){
  let result = ++w + ++r;
  document.write("<br/> Result function == "+ result)
}(5,6))
  </script>


  <script src="./public/js/bootstrap.js"></script>
</body>
</html>
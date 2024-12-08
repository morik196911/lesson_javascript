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
    let i = null;
function hello(name){
  ++i;
  console.log("Hello my dear "+name)
}
hello("Alex")
hello("Tom")
hello("Lena")
hello("Masha")
document.write("Result i "+i+"<br/>")
const foo = (name,age)=>{
  return(`My name is ${name} and  my age ${age}`)
}
function hello2(){
  return("Hy hello2")
}
function goodMorning(){
  return("Good Morning")
}
function goodEvening(){
  return("Good Evening")
}
let message = hello2
document.write(foo("Kola",86))
document.write("<br/>")
document.write(message()+"<br/>")
 message = goodEvening;
 document.write(message()+"<br/>")
 document.write("###################################<br/>")
 function print(number){
  //let n = number;
  local_print()
  local_print()
  local_print()
  function local_print(){
    ++number;
    document.write("Hello local = "+ number+"<br/>")
  }
 }
 print(5)
 document.write("###################################<br/>")
 function respect(name = "Feda",age = 25){
  return(`This name ${name} and age ${age}`)
 }
 document.write("Result param "+ respect("Sada",84))
 document.write("###################################<br/>")
 const tom = ["Tom",25,"yandex"];
 const bob = ["Bob", 36, "mail"];
 function printPerson(name,age,email){
  return(`This name ${name} and ${age} and ${email}`)
 }
 document.write(printPerson(...tom)+"<br/>")
 /* Функции с произвольным количеством параметров*/
 function sum(){
  let result = 0;
  for(let item of arguments){
    result += item;
  }
  document.write(result+"<br/>");
 }
 sum();
 sum(25,80,96);
 sum(5,9);
 function sum2(x,y,t){
  let result = 0;
  for(let item of arguments){
    result += item;
  }
  document.write("Result sum2 "+result+"<br/>");
  console.log("Arguments lenght ", arguments.length)
 }
 sum2(2,4,6);
 sum2(25,25,96,84,5)
 /* С помощью оператора ... (rest-оператор) также можно передать переменное количество значений:*/
 function sum3(param, ...numbers){
  let result = 0;
  for(let item of numbers){
    result += item;
  }
  document.write("Result sum333 "+result+"<br/>");
  console.log("Numbers lenght ", numbers.length , param)
 }
 sum3("Dima", 5,8,9,6)
 /* Функции в качестве параметров*/
 function summma(x , y){return x + y}
 function minus(x,y){return x - y};
 const operation = (x,y,func)=>{
  document.write("Result sum 44 "+func(x,y)+"<br/>")
 }
 operation(2,4,summma);
  </script>


  <script src="./public/js/bootstrap.js"></script>
</body>
</html>
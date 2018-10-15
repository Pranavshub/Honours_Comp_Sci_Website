/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var d = new Date();
var hours = d.getHours();

var greeting;
if (hours < 13) {
    greeting = "Good Morning!";
}

else if (hours < 19) {
    greeting = "Good Afternoon!";
}

else if (hours < 25) {
    greeting = "Good Evening!";
}

document.getElementById("greeting").textContent = greeting;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var spanlargura = document.getElementById('largura');
var spanaltura = document.getElementById('altura');

window.onresize = function (){
    altura = windwos.innerHeight;
    largura = window.innerWidth;
    
    spanlargura.innerHTML = largura + 'px';
    spanaltura.innerHTML = altura + 'px';
};
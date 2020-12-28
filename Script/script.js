function mascara(t, mask){
    var i = t.value.length;
    var saida = mask.substring(1,0);
    var texto = mask.substring(i)
    if (texto.substring(0,1) != saida){
        t.value += texto.substring(0,1);
    }
}

const light = document.getElementById('light');
const body = document.getElementById('corpo');
const dark = document.getElementById('dark');
const pais = document.getElementById('country');

light.addEventListener("click", function(){
  body.style.backgroundColor = "lightgrey";
  document.getElementById('nav').style.color = "black";
  document.getElementById('nav2').style.color = "black";
  document.getElementById('nav3').style.color = "black";
  document.getElementById('nav4').style.color = "black";
  document.getElementById('nav5').style.color = "black";
  document.getElementById('nav6').style.color = "black";
  document.getElementById('rodape').style.color = "black";
  document.getElementById('logo').style.color = '#1a8102';
  document.getElementById('winners').style.color = 'black';
  document.getElementById('rank').style.color = 'black';
  document.getElementById('Users').style.color = 'black';
});

dark.addEventListener("click", function(){
  body.style.backgroundColor = "black";
  document.getElementById('nav').style.color = "grey";
  document.getElementById('nav2').style.color = "grey";
  document.getElementById('nav3').style.color = "grey";
  document.getElementById('nav4').style.color = "grey";
  document.getElementById('nav5').style.color = "grey";
  document.getElementById('nav6').style.color = "grey";
  document.getElementById('rodape').style.color = "grey";
  document.getElementById('logo').style.color = '#2cfb00';
  document.getElementById('winners').style.color = 'white';
  document.getElementById('rank').style.color = 'white';
  document.getElementById('Users').style.color = 'white';
});

document.getElementById('Brazil').addEventListener("click", function(){
  document.getElementById('pais').value = "Brazil";
  document.getElementById('submitPais').click();
});

document.getElementById('United States').addEventListener("click", function(){
  document.getElementById('pais').value = "United States";
  document.getElementById('submitPais').click();
});

function func(){
  var confirm = window.prompt('Digite seu acesso de administrador');

  if(confirm == 123456){
    window.alert('Acesso permitido');
    location.replace('index.php');
  }else{
    window.alert('Acesso negado');
    location.reload();
  }
}
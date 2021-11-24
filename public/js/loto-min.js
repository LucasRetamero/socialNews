// Componentes
var  componentes = [
     document.getElementById("txtUm"),
     document.getElementById("txtDois"),
     document.getElementById("txtTres"),
     document.getElementById("txtQuatro"),
     document.getElementById("txtCinco"),
     document.getElementById("txtSeis"),
     document.getElementById("txtSete"),
     document.getElementById("txtOito"),
     document.getElementById("txtNove"),
     document.getElementById("txtDez"),
     document.getElementById("txtOnze"),
     document.getElementById("txtDoze"),
     document.getElementById("txtTreze"),
     document.getElementById("txtQuatorze"),
     document.getElementById("txtQuinze"),
     document.getElementById("txtDezeseis"),
     document.getElementById("txtDezesete"),
     document.getElementById("txtDezoito")
];

function generateRan(){

    var mtz=[], pos=0;
    
        while(mtz.length<=18){
    
        let num=(Math.floor(Math.random()*25) + 1);
    
        num=addZero(num, 2); //formata num com 2 dígitos
    
    /*
    
    pos = posição do num na matriz, 
    
    se pos = -1, não encontrou, e num é armazenado em 'mtz'. => Veja no log
    
    */
    
        pos=mtz.toString().search(num);
    
     //console.log('Num => '+num+' Pos => '+pos);
            if(pos<0) mtz.push(num);
    
        }
        mtz.sort();
        //console.log(mtz);
        showComponentes(mtz);
    
    }
    
    function addZero(y,n) {
    
        while (y.toString().length < n) {
    
        y = "0" + y;}
    
        return y;
    }

    function showComponentes(array){
     for(var p=0; p<componentes.length; p++){
        componentes[p].value = array[p]; 
     }
    }
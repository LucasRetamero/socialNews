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
//Editable Variable
var  componentesEditable = [
    document.getElementById("txtUmEditado"), 
    document.getElementById("txtDoisEditado"),
    document.getElementById("txtTresEditado"),
    document.getElementById("txtQuatroEditado"),
    document.getElementById("txtCincoEditado"),
    document.getElementById("txtSeisEditado"),
    document.getElementById("txtSeteEditado"),
    document.getElementById("txtOitoEditado"),
    document.getElementById("txtNoveEditado"),
    document.getElementById("txtDezEditado"),
    document.getElementById("txtOnzeEditado"),
    document.getElementById("txtDozeEditado"),
    document.getElementById("txtTrezeEditado"),
    document.getElementById("txtQuatorzeEditado"),
    document.getElementById("txtQuinzeEditado"),
    document.getElementById("txtDezeseisEditado"),
    document.getElementById("txtDezeseteEditado"),
    document.getElementById("txtDezoitoEditado")
];


function generateRan(valor, tipoValor){

    var mtz=[], pos=0;
    
        while(mtz.length<=valor){
    
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
        if(tipoValor == 1){
        showComponentes(mtz);
        clearComponents(valor);
        }else{
         showComponentesEditable(mtz);  
         clearComponentsEditable(valor);
        }
    
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

    function clearComponents(valor){
       switch(valor){
         case 17: //18 
         changeLabelAndText("lblDezoito","txtDezoito","inline");
         changeLabelAndText("lblDezesete","txtDezesete","inline");
         changeLabelAndText("lblDezeseis","txtDezeseis","inline");
         changeLabelAndText("lblQuinze","txtQuinze","inline");
         break; 

         case 16: //17
         changeLabelAndText("lblDezoito","txtDezoito","none");
         changeLabelAndText("lblDezesete","txtDezesete","inline");
         changeLabelAndText("lblDezeseis","txtDezeseis","inline");
         changeLabelAndText("lblQuinze","txtQuinze","inline");
         break;

         case 15: //16
         changeLabelAndText("lblDezoito","txtDezoito","none");
         changeLabelAndText("lblDezesete","txtDezesete","none");
         changeLabelAndText("lblDezeseis","txtDezeseis","inline");
         changeLabelAndText("lblQuinze","txtQuinze","inline");
         break;

         case 14: //15
         changeLabelAndText("lblDezoito","txtDezoito","none");
         changeLabelAndText("lblDezesete","txtDezesete","none");
         changeLabelAndText("lblDezeseis","txtDezeseis","none");
         changeLabelAndText("lblQuinze","txtQuinze","inline");
         break; 
       } 
    }


    function changeLabelAndText(lbl,txt,display){
      document.getElementById(txt).style.display = display;  
      document.getElementById(lbl).style.display = display;  
    }

    function showComponentesEditable(array){
        for(var p=0; p<componentesEditable.length; p++){
            if(componentesEditable[p].value.length == 0){
            componentesEditable[p].value = array[p]; 
            }
         }
    }
    
   
    function clearComponentesEditable(){
        for(var p=0; p<componentesEditable.length; p++){
            componentesEditable[p].value ="";
         }
    }

    function clearComponentsEditable(valor){
        switch(valor){
          case 17: //18 
          changeLabelAndText("lblDezoitoEditado","txtDezoitoEditado","inline");
          changeLabelAndText("lblDezeseteEditado","txtDezeseteEditado","inline");
          changeLabelAndText("lblDezeseisEditado","txtDezeseisEditado","inline");
          changeLabelAndText("lblQuinzeEditado","txtQuinzeEditado","inline");
          break; 
 
          case 16: //17
          changeLabelAndText("lblDezoitoEditado","txtDezoitoEditado","none");
          changeLabelAndText("lblDezeseteEditado","txtDezeseteEditado","inline");
          changeLabelAndText("lblDezeseisEditado","txtDezeseisEditado","inline");
          changeLabelAndText("lblQuinzeEditado","txtQuinzeEditado","inline");
          break;
 
          case 15: //16
          changeLabelAndText("lblDezoitoEditado","txtDezoitoEditado","none");
          changeLabelAndText("lblDezeseteEditado","txtDezeseteEditado","none");
          changeLabelAndText("lblDezeseisEditado","txtDezeseisEditado","inline");
          changeLabelAndText("lblQuinzeEditado","txtQuinzeEditado","inline");
          break;
 
          case 14: //15
          changeLabelAndText("lblDezoitoEditado","txtDezoitoEditado","none");
          changeLabelAndText("lblDezeseteEditado","txtDezeseteEditado","none");
          changeLabelAndText("lblDezeseisEditado","txtDezeseisEditado","none");
          changeLabelAndText("lblQuinzeEditado","txtQuinzeEditado","inline");
          break; 
        } 
     }




    

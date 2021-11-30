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

//Number choosing  by user
var numberUser = [];
var componentsChangeColor = [];

//testing
var backupNumberUser=[];
var change = 0;

function generateRan(valor){

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
        if(numberUser.length > 0){
          //showNumberByUser(valor);
         showComponentes(showNumberByUser(valor));
        }else{
        showComponentes(mtz);
        }   
    }
    
    function addZero(y,n) {
    
        while (y.toString().length < n) {
    
        y = "0" + y;}
    
        return y;
    }

    function showComponentes(array){
      clearComponentes();
    
      for(var p=0; p< componentes.length; p++){
        if(p<array.length){
             if(componentes[p].value == ""){
             componentes[p].value = array[p];
             }
        }else{
        componentes[p].value = "";   
        } 
      }
    }
    
    function showNumberByUser(value){
       var mtz=[], pos=0;
      
       if(change == 0){
        backupNumberUser=[];
        backupNumberUser.pushArray(numberUser);
        change = 1;
       }
       numberUser = [];
       numberUser.pushArray(backupNumberUser);
       mtz.pushArray(numberUser);

        while(mtz.length<=value){
    
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
        return mtz;
    }

    Array.prototype.pushArray = function(arr) {
      this.push.apply(this, arr);
  };

    function resetGenerate(){
      for(var p=0; p<componentesEditable.length; p++){
        componentesEditable[p].style.borderColor = "red"; 
        componentesEditable[p].style.color = "black";
        componentesEditable[p].style.backgroundColor = "white"; 
      }
      numberUser = [];
      componentsChangeColor = [];
    }

    function caseHaveNumber(value){
      for(var o=0; o<numberUser.length; o++){
         if(numberUser[o] == value){
          return true;   
         }
      }
      return false;
    }

    function validationIfHaveNumber(array, value){
      for(var z=0; z<array.length; z++){
        if(array[z] == value){
        return true;
        }
      }
      return false;
    }
    

    function clearComponentes(){
        for(var p=0; p<componentes.length; p++){
            componentes[p].value ="";
         }
    }
    
     function changeBorderColorAndInserValue(componente){

     var getComponente = document.getElementById(componente);
     
       if(validationIfExistComponente(componente)){  
        if(change == 1){
          numberUser = [];
          numberUser.pushArray(backupNumberUser);
          change = 0;
         }
        componentsChangeColor.splice(removeIndexChangeColor(componente),1);
        numberUser.splice(removeIndexNumber(getComponente.value),1);
        getComponente.style.borderColor = "red"; 
        getComponente.style.color = "black";
        getComponente.style.backgroundColor = "white"; 
       }else{
        if(change == 1){
          numberUser = [];
          numberUser.pushArray(backupNumberUser);
          change = 0;
         }
        componentsChangeColor.push(componente);
        numberUser.push(getComponente.value);
        getComponente.style.borderColor = "black";
        getComponente.style.color = "white";
        getComponente.style.backgroundColor = "blue";
       }
       
     }

     function removeIndexChangeColor(value){
      for(var o=0; o<componentsChangeColor.length; o++){
         if(componentsChangeColor[o] == value){
          return o;   
         } 
      }
    }

    function removeIndexNumber(value){
        for(var o=0; o<numberUser.length; o++){
           if(numberUser[o] == value){
            return o;   
           } 
        }
      }

  
     function validationIfExistComponente(value){
        for(var x=0; x<componentsChangeColor.length; x++){
            if(componentsChangeColor[x] == value){
            return true;    
            } 
         }
        return false;
     }

     function addNumberByUser(componente){
         
         if(numberUser.length != 18 || validationIfExistComponente(componente)){
           changeBorderColorAndInserValue(componente);
         }else{
          alert("Numero maximo alcançado!");  
         }
         
     }




    

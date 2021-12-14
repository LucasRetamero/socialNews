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
     document.getElementById("txtDezoito"),
     document.getElementById("txtDezenove"),
     document.getElementById("txtVinte")
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
    document.getElementById("txtDezoitoEditado"),
    document.getElementById("txtDezenoveEditado"),
    document.getElementById("txtVinteEditado"),
    document.getElementById("txtVinteUmEditado"),
    document.getElementById("txtVinteDoisEditado"),
    document.getElementById("txtVinteTresEditado"),
    document.getElementById("txtVinteQuatroEditado"),
    document.getElementById("txtVinteCincoEditado")
];

//Number choosing  by user
var numberUser = [];
var componentsChangeColor = [];
var valor = document.getElementById("soHowManyGenerate");
var backupNumberUser=[];
var change = 0;

//Get value after check
var numberWasGenerate = [],parNumbers=0, imperNumbers=0, primosNumbers=0, compostoNumbers=0,valuesSelected=0;

function generateRan(){

    var mtz=[], pos=0;
    
        while(mtz.length<=valor.value){
    
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
        showComponentes(showNumberByUser(valor.value));
        }else{
        showComponentes(mtz);
        }
        
        showValuesOnExtraInf();
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
    
     function changeBorderColorAndInserValue(componente, value){

     var getComponente = document.getElementById(componente);
     
       if(validationIfExistComponente(componente)){  
        if(change == 1){
          numberUser = [];
          numberUser.pushArray(backupNumberUser);
          change = 0;
         }
        componentsChangeColor.splice(removeIndexChangeColor(componente),1);
        numberUser.splice(removeIndexNumber(value),1);
        getComponente.style.color = "#000";
        getComponente.style.backgroundColor = "#FFF"; 
        valuesSelected-=1;
       }else{
        if(change == 1){
          numberUser = [];
          numberUser.pushArray(backupNumberUser);
          change = 0;
         }
        componentsChangeColor.push(componente);
        numberUser.push(value);
        getComponente.style.color = "#FFF";
        getComponente.style.backgroundColor = "#6f42c1";
        valuesSelected+=1;
       }
       
      filterToShowSelectedValue();
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

     function addNumberByUser(componente, value){

         if(numberUser.length != filterValueToTheIf() || validationIfExistComponente(componente)){
           changeBorderColorAndInserValue(componente, value);
         }else{
          alert("Numero maximo alcançado!");  
         }
         
     }
     
     function clearAllComponentGer(){
      numberUser = [];
      componentsChangeColor = [];
      valuesSelected = 0;
      filterToShowSelectedValue();
      clearAllButtonGer();
      clearAllTextGer();
     }
     
     function clearAllTextGer(){
      for(var p=0; p<componentes.length; p++){
        componentes[p].value = "";
       }
     }

     function clearAllButtonGer(){
      for(var p=0; p<componentesEditable.length; p++){
        componentesEditable[p].style.backgroundColor = "#FFF";
        componentesEditable[p].style.color = "#000";
       }
     }

     function clearCaseNumberUser(){
        numberUser = [];
        componentsChangeColor = [];
        valuesSelected = 0;
        filterToShowSelectedValue();
         for(var p=0; p<componentesEditable.length; p++){
          componentesEditable[p].style.backgroundColor = "#FFF";
          componentesEditable[p].style.color = "#000";
         }
     }

     function filterValueToTheIf(){
      var filterValue;  
      switch(valor.value){
         case "14":
          filterValue = 10;
         break;

         case "15":
          filterValue = 11;
         break;

         case "16":
          filterValue = 12;
         break;

         case "17":
          filterValue = 13;
         break;

         case "18":
          filterValue = 14;
         break;

         case "19":
          filterValue = 15;
         break;
      }
      return filterValue;
     }

     function showValuesOnExtraInf(){
      countingAllValues();
      var comp = ["txtParNumberGen",
                  "txtImparNumberGen",
                  "txtPrimoNumberGen",
                  "txtCompostoNumberGen"];

      var varWithValues = [ parNumbers,
                            imperNumbers,
                            primosNumbers,
                            compostoNumbers];

       for(var o=0; o<comp.length; o++){
       document.getElementById(comp[o]).value = varWithValues[o];
       }
    }

    function filterToShowSelectedValue(){
      switch(valor.value){
      
        case "14":
          document.getElementById("txtQuantidadeSeleNumberGen").value = valuesSelected+"/10";
         break;

         case "15":
          document.getElementById("txtQuantidadeSeleNumberGen").value = valuesSelected+"/11";
         break;

         case "16":
          document.getElementById("txtQuantidadeSeleNumberGen").value = valuesSelected+"/12";
         break;

         case "17":
          document.getElementById("txtQuantidadeSeleNumberGen").value = valuesSelected+"/13";
         break;

         case "18":
          document.getElementById("txtQuantidadeSeleNumberGen").value = valuesSelected+"/14";
         break;

         case "19":
          document.getElementById("txtQuantidadeSeleNumberGen").value = valuesSelected+"/15";
         break;
      }
    }

    
     function addValuesWasGenerate(){
      numberWasGenerate = [];
      for(var o=0; o<componentes.length; o++){
         if(componentes[o].value != ""){
          numberWasGenerate.push(componentes[o].value);
        }
      }
     } 

     function countingAllValues(){
      imperNumbers = 0;
      parNumbers = 0;
      primosNumbers = 0;
      compostoNumbers = 0;
      addValuesWasGenerate();
      for(var l=0; l<numberWasGenerate.length; l++){  
       switch(numberWasGenerate[l]){
          case "01": //impar
          imperNumbers+=1;
         break;

         case "02": //par
          parNumbers+=1;
          primosNumbers+=1;
         break;

         case "03":
          imperNumbers+=1;
          primosNumbers+=1;
         break;

         case "04":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "05":
          imperNumbers+=1;
          primosNumbers+=1;
         break;

         case "06":
          parNumbers+=1;
          compostoNumbers+=1;
         break;
         
         case "07":
          imperNumbers+=1;
          primosNumbers+=1;
         break;

         case "08":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "09":
          imperNumbers+=1;
          compostoNumbers+=1;
         break;

         case "10":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "11":
          imperNumbers+=1;
          primosNumbers+=1;
         break;

         case "12":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "13":
          imperNumbers+=1;
          primosNumbers+=1;
         break;

         case "14":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "15":
          imperNumbers+=1;
          compostoNumbers+=1;
         break;

         case "16":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "17":
          imperNumbers+=1;
          primosNumbers+=1;
         break;

         case "18":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "19":
          imperNumbers+=1;
          primosNumbers+=1;
          break;
        
         case "20":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "21":
          imperNumbers+=1;
          compostoNumbers+=1;
         break;

         case "22":
          parNumbers+=1;
          compostoNumbers+=1;
         break;

         case "23":
          imperNumbers+=1;
          primosNumbers+=1;
        break;

         case "24":
          parNumbers+=1;
          compostoNumbers+=1;
        break;

         case "25":
          imperNumbers+=1;
          compostoNumbers+=1;
          break;
        }
      }
    }





    

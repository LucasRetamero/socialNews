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

var componentsToCheck = [ document.getElementById("id_bolaoUm"),
                   document.getElementById("id_bolaoDois"),
                   document.getElementById("id_bolaoTres"),
                   document.getElementById("id_bolaoOuatro"),
                   document.getElementById("id_bolaoCinco"),
                   document.getElementById("id_bolaoSeis"), 
                   document.getElementById("id_bolaoSete"), 
                   document.getElementById("id_bolaoOito"), 
                   document.getElementById("id_bolaoNove"), 
                   document.getElementById("id_bolaoDez"),
                   document.getElementById("id_bolaoOnze"), 
                   document.getElementById("id_bolaoDoze"), 
                   document.getElementById("id_bolaoTreze"), 
                   document.getElementById("id_bolaoQuatorze"), 
                   document.getElementById("id_bolaoQuinze"),
                   document.getElementById("id_bolaoDezesseis"), 
                   document.getElementById("id_bolaoDezessete"), 
                   document.getElementById("id_bolaoDezoito"), 
                   document.getElementById("id_bolaoDezenove"), 
                   document.getElementById("id_bolaoVinte")
];

var numberUser = [], componentsChangeColor = [], backupNumberUser = [], numberCreateGame = [], numberWasGenerate = [];
var change = 0, randomMode = "all", parNumbers=0, imperNumbers=0, primosNumbers=0, compostoNumbers=0, valuesSelected=0;
var valor = document.getElementById("soHowManyGenerate");

function generateRan(){

    var mtz=[], pos=0;
      
    if(change == 0 && randomMode != "all"){ addBackupNumberToggleChange(1); }
     if(randomMode != "all"){ mtz.pushArray(numberUser); }

        while(mtz.length<=valor.value){
    
        let num=(Math.floor(Math.random()*25) + 1);
    
        num=addZero(num, 2); //formata num com 2 dígitos
    
        pos=mtz.toString().search(num);
    
        if(pos<0) mtz.push(num);

        }

        mtz.sort();
        
        return mtz;
    }
    
   function addBackupNumUpdateChange(){
    backupNumberUser=[];
     backupNumberUser.pushArray(numberUser);
      change = 1;
   }
    
    function addZero(y,n) {
     while (y.toString().length < n) {y = "0" + y;}
      return y;
    }


   //Check mode before add value
    function checkModeBeforeShow(){
      switch(randomMode){
        case "all":
         showComponentes(generateRan());
        break;

        case "fixNumber":
         showComponentes(generateRan());
        break;

        case "createGameNumber":
         addValuesBetweenArrays();
          showComponentes(generateRan());
        break;
      }
      resetDefaultColorNumGen();
    }

    //Generete one value
    function generateOneValueRan(){
      let num=(Math.floor(Math.random()*valor.value));
       return num;
    }
    
    //Add values on input text 
    function showComponentes(array){
     clearComponentes(componentes);
      for(var p=0; p< componentes.length; p++){
       addValueWhenHaveArray(array, componentes[p], p);
     }
   }

    //Check case have value inside array
    function addValueWhenHaveArray(objArray, objElement, objP){
      if(objP < objArray.length) return objElement.value = objArray[objP];
      else return objElement.value = "";
    }
    
    //Add value between array and other array
    Array.prototype.pushArray = function(arr) {
      this.push.apply(this, arr);
    };
    
    function addValuesBetweenArrays(){
      numberUser = [];
        for(var x=0; x<filterToReturnValue("fixNumber"); x++){
         var val = generateOneValueRan();
          if(caseHaveNumber(numberUser, numberCreateGame[val])){ x--  }  
           else{ numberUser.push(numberCreateGame[val]); }
      }
    }

    function resetDefaultColorNumGen(){
      for(var p=0; p<componentes.length; p++){
        componentes[p].style.color = "#000";
        componentes[p].style.backgroundColor = "#FFF"; 
      }
    }

    function caseHaveNumber(array, value){
      for(var z=0; z<array.length; z++){
        if(array[z] == value){ return true; }
      }
      return false;
    }

    function searchIndexArray(array, value){
      for(var x=0; x<array.length; x++){
        if(array[x] == value) return x;
      }
    }
  
    function clearComponentes(array){
      for(var p=0; p<array.length; p++){ array[p].value =""; }
    }
    
    //Check case have or not elemnt before change
     function changeBorderColorAndInserValue(componente, value){
      
      if(change == 1){ addNumberArrayToggleChange(0); }

       switch(caseHaveNumber(componentsChangeColor, componente)){ 
       
        case true: 
         removeValuesOnArray("componentsChangeColor", componente);
          checkWhatChangeArray("remove", value);
           changeColorAndBackgroundColorElement(document.getElementById(componente), "#000", "#FFF");
            valuesSelected-=1;
        break;
       
        default:
         addValuesOnArray("componentsChangeColor", componente);
          checkWhatChangeArray("add", value);
           changeColorAndBackgroundColorElement(document.getElementById(componente), "#FFF", "#6f42c1");
            valuesSelected+=1;
        break;
       }
       
      filterToShowSelectedValue();
     }
      
     function checkWhatChangeArray(mode, value){
        switch(randomMode){
          case "fixNumber":
           (mode == "add") ? addValuesOnArray("numberUser", value) : removeValuesOnArray("numberUser", value);
           break;

          case "createGameNumber":
           (mode == "add") ? addValuesOnArray("numberCreateGame", value) : removeValuesOnArray("numberCreateGame", value);
          break;
        }
     }

      
     function addNumberArrayToggleChange(objValue){
      numberUser = [];
       numberUser.pushArray(backupNumberUser);
        change = objValue;            
     }

     function addBackupNumberToggleChange(objValue){
      backupNumberUser=[];
       backupNumberUser.pushArray(numberUser);
        change = objValue;           
     }

     function showGenerationAndCounting(){
      checkModeBeforeShow();
      countingAllValues();
      showValuesOnExtraInfo();
     }

     function addValuesOnArray(objVar, objValue){
       switch(objVar){
         case "componentsChangeColor":
          componentsChangeColor.push(objValue);
         break;

         case "numberUser":
          numberUser.push(objValue);
         break;

         case "numberCreateGame":
          numberCreateGame.push(objValue);
         break;
       }
     }

     function removeValuesOnArray(objVar, objValue){
      switch(objVar){
        case "componentsChangeColor":
         componentsChangeColor.splice(searchIndexArray(componentsChangeColor, objValue),1);
        break;

        case "numberUser":
         numberUser.splice(searchIndexArray(numberUser, objValue),1);
        break;

        case "numberCreateGame":
         numberCreateGame.splice(searchIndexArray(numberCreateGame, objValue),1);
        break;
      }
    }

     //Change color and background-color of element 
     function changeColorAndBackgroundColorElement(element, objColor, objBgColor){
      element.style.color = objColor;
      element.style.backgroundColor = objBgColor;
     }
    
     //Check the mode before call function
     function addNumberByUser(componente, value){
       switch(randomMode){
         case "createGameNumber":
          checkCaseLimitSelected(numberCreateGame, componente, value);
         break;

         default:
          randomMode = "fixNumber";
           checkCaseLimitSelected(numberUser, componente, value);
         break;
       }         
     }

     function resetCreateHame(){
      document.getElementById("btnRandomMode").innerHTML = "Criar um jogo";
       document.getElementById("btnRandomMode").style.backgroundColor = "#9400D3";
        document.getElementById("txtModeSelected").innerHTML = "Tipo: Fixar Números";
         randomMode = "all";
     }
     
     function checkCaseLimitSelected(array, componente, value){
      return (array.length < filterValueToCaseIf(randomMode) || caseHaveNumber(componentsChangeColor, componente)) ? changeBorderColorAndInserValue(componente, value) : showMsgCaseLimitSelected("Numero maximo alcançado!");
     }
  
     function showMsgCaseLimitSelected(msg){
      return alert(msg);
     }
     
     function changeRandomMode(){
       switch(randomMode){
         case "all":
         case "fixNumber":
          randomMode = "createGameNumber";
           changeInfoButtonAndText();
         break;

         case "createGameNumber":
          randomMode = "fixNumber";
           changeInfoButtonAndText();
          break;
       }
       clearAllArray();
        clearAllDefaultVar();
         filterToShowSelectedValue();
          clearAllButtonGer();
           clearAllTextGer();
            showValuesOnExtraInfo();
     }

     function changeInfoButtonAndText(){
      switch(randomMode){
       case "createGameNumber":
        document.getElementById("btnRandomMode").innerHTML = "Números Fixados";
         document.getElementById("btnRandomMode").style.backgroundColor = "#7B68EE";
          document.getElementById("txtModeSelected").innerHTML = "Tipo: Criar Jogo";
       break;

       case "fixNumber":
        document.getElementById("btnRandomMode").innerHTML = "Criar um jogo";
         document.getElementById("btnRandomMode").style.backgroundColor = "#9400D3";
          document.getElementById("txtModeSelected").innerHTML = "Tipo: Fixar Números";
       break;
       }
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
     
     function filterValueToCaseIf(mode){
      var filterValue;  
      switch(valor.value){
         case "14":
          filterValue = filterToReturnValue(mode, 10, 15);
         break;

         case "15":
          filterValue = filterToReturnValue(mode, 11, 16);
         break;

         case "16":
          filterValue = filterToReturnValue(mode, 12, 17);
         break;

         case "17":
          filterValue = filterToReturnValue(mode, 13, 18);
         break;

         case "18":
          filterValue =  filterToReturnValue(mode, 14, 19);
         break;

         case "19":
          filterValue = filterToReturnValue(mode, 15, 20);
         break;
      }
      return filterValue;
     }

     function filterToReturnValue(mode, firstValue, secondValue){
     return (mode == "fixNumber") ? firstValue : secondValue; 
     } 
     
     function showValuesOnExtraInfo(){
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


    
    //Check value before show text
    function filterToShowSelectedValue(){
      switch(valor.value){
        case "14":
          checkValueBeforeShowMsg("/10", "/15");       
         break;

         case "15":
          checkValueBeforeShowMsg("/11", "/16");
         break;

         case "16":
          checkValueBeforeShowMsg("/12", "/17");
         break;

         case "17":
          checkValueBeforeShowMsg("/13", "/18");
         break;

         case "18":
          checkValueBeforeShowMsg( "/14", "/19");
         break;

         case "19":
          checkValueBeforeShowMsg("/15", "/20");
         break;
      }
    }
    
    function checkValueBeforeShowMsg(firstMsg, secondMsg){
    return (randomMode == "fixNumber") ? showValueSelectNumElement(firstMsg) :  showValueSelectNumElement(secondMsg);
    }

    //Add text on txtQuantidadeSeleNumberGen element
    function showValueSelectNumElement(objMsg){
      return document.getElementById("txtQuantidadeSeleNumberGen").value = valuesSelected+objMsg;
    }

     function checkGameWithRanValue(){
      clearComponentes(componentsToCheck);
       for(var p=0; p<componentes.length; p++){
          if(componentes[p].value != ""){ componentsToCheck[p].value = componentes[p].value; }
       }
       document.getElementById('btnCheckGame').click();
     }
    
     function addValuesWasGenerate(){
      numberWasGenerate = [];
       for(var o=0; o<componentes.length; o++){
        if(componentes[o].value != ""){ numberWasGenerate.push(componentes[o].value) };
      }
     }
 
     function clearAllComponentGer(){
      clearAllArray();
       clearAllDefaultVar();
        filterToShowSelectedValue();
         clearAllButtonGer();
          clearAllTextGer();
           showValuesOnExtraInfo();
            resetCreateHame();
     }
    
     function clearAllArray(){
      numberUser = [];
       componentsChangeColor = [];
        backupNumberUser = [];
         numberCreateGame = [];
          numberWasGenerate = [];
     }

     function clearAllDefaultVar(){
      valuesSelected = 0;
       change = 0;
        parNumbers=0;
         imperNumbers=0; 
          primosNumbers=0; 
           compostoNumbers=0;
            valuesSelected=0;
     }
 
     //Get all values and check one by one of values to count
     function countingAllValues(){
      resetValuesBeforeAdd();
       addValuesWasGenerate();
        for(var l=0; l<numberWasGenerate.length; l++){  
         countExtraValues(numberWasGenerate[l]);
       }
    }

    //Reset before add values
    function resetValuesBeforeAdd(){
      imperNumbers = 0;
       parNumbers = 0;
        primosNumbers = 0;
         compostoNumbers = 0;
    }

    //Check values and counting 
    function countExtraValues(value){
      switch(value){
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





    

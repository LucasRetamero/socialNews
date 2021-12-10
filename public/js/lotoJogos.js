
       var components = [ "id_bolaoUm","id_bolaoDois","id_bolaoTres","id_bolaoOuatro","id_bolaoCinco",
                          "id_bolaoSeis", "id_bolaoSete", "id_bolaoOito", "id_bolaoNove", "id_bolaoDez",
                          "id_bolaoOnze", "id_bolaoDoze", "id_bolaoTreze", "id_bolaoQuatorze", "id_bolaoQuinze",
                          "id_bolaoDezesseis", "id_bolaoDezessete", "id_bolaoDezoito", "id_bolaoDezenove", "id_bolaoVinte"];

      var selectedComponent,showHide=false, parNumbers=0, imperNumbers=0, primosNumbers, compostoNumbers;
      var btnsSelected = [], numberChoosingByUser = [];

    function start(){
     selectedComponent = "id_bolaoUm";
     changeColorComponent();
     casePhpReturn();
     casePhpReturnColorButton();
     changeDefaultColorOhers();
    }

    function casePhpReturn(){
      numberChoosingByUser = [];
      for(var k=0; k<components.length; k++){
        if(document.getElementById(components[k]).value != ""){
          numberChoosingByUser.push(document.getElementById(components[k]).value); 
        }
      }
    }

   function casePhpReturnColorButton(){
     for(var x=0; x<numberChoosingByUser.length; x++){
       switch(numberChoosingByUser[x]){
         case "01":
           document.getElementById("btnUmNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnUmNumber").style.color = "#FFF";
           btnsSelected.push("btnUmNumber");
          break;

          case "02":
           document.getElementById("btnDoisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDoisNumber").style.color = "#FFF";
           btnsSelected.push("btnDoisNumber");
          break;

          case "03":
           document.getElementById("btnTresNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnTresNumber").style.color = "#FFF";
           btnsSelected.push("btnTresNumber");
          break;

          case "04":
           document.getElementById("btnQuatroNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnQuatroNumber").style.color = "#FFF";
           btnsSelected.push("btnQuatroNumber");
          break;

          case "05":
           document.getElementById("btnCincoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnCincoNumber").style.color = "#FFF";
           btnsSelected.push("btnCincoNumber");
          break;

          case "06":
           document.getElementById("btnSeisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnSeisNumber").style.color = "#FFF";
           btnsSelected.push("btnSeisNumber");
          break;
          
          case "07":
           document.getElementById("btnSeteNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnSeteNumber").style.color = "#FFF";
           btnsSelected.push("btnSeteNumber");
          break;

          case "08":
           document.getElementById("btnOitoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnOitoNumber").style.color = "#FFF";
           btnsSelected.push("btnOitoNumber");
          break;

          case "09":
           document.getElementById("btnNoveNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnNoveNumber").style.color = "#FFF";
           btnsSelected.push("btnNoveNumber");
          break;

          case "10":
           document.getElementById("btnDezNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezNumber").style.color = "#FFF";
           btnsSelected.push("btnDezNumber");
          break;

          case "11":
           document.getElementById("btnOnzeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnOnzeNumber").style.color = "#FFF";
           btnsSelected.push("btnOnzeNumber");
          break;

          case "12":
           document.getElementById("btnDozeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDozeNumber").style.color = "#FFF";
           btnsSelected.push("btnDozeNumber");
          break;

          case "13":
           document.getElementById("btnTrezeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnTrezeNumber").style.color = "#FFF";
           btnsSelected.push("btnTrezeNumber");
          break;

          case "14":
           document.getElementById("btnQuatorzeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnQuatorzeNumber").style.color = "#FFF";
           btnsSelected.push("btnQuatorzeNumber");
          break;

          case "15":
           document.getElementById("btnQuinzeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnQuinzeNumber").style.color = "#FFF";
           btnsSelected.push("btnQuinzeNumber");
          break;

          case "16":
           document.getElementById("btnDezesseisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezesseisNumber").style.color = "#FFF";
           btnsSelected.push("btnDezesseisNumber");
          break;

          case "17":
           document.getElementById("btnDezesseteNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezesseteNumber").style.color = "#FFF";
           btnsSelected.push("btnDezesseteNumber");
          break;

          case "18":
           document.getElementById("btnDezoiotoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezoiotoNumber").style.color = "#FFF";
           btnsSelected.push("btnDezoiotoNumber");
          break;

          case "19":
           document.getElementById("btnDezenoveNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezenoveNumber").style.color = "#FFF";
           btnsSelected.push("btnDezenoveNumber");
           break;
         
          case "20":
           document.getElementById("btnVinteNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteNumber");
          break;

          case "21":
           document.getElementById("btnVinteUmNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteUmNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteUmNumber");
          break;

          case "22":
           document.getElementById("btnVinteDoisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteDoisNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteDoisNumber");
          break;

          case "23":
           document.getElementById("btnVinteTresNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteTresNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteTresNumber");
         break;

          case "24":
           document.getElementById("btnVinteQuatroNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteQuatroNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteQuatroNumber");
         break;

          case "25":
           document.getElementById("btnVinteCincoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteCincoNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteCincoNumber");
           break;
       }
     }
     countValueFromSelection();
   }
      function selection(component){
        selectedComponent = component;
        changeColorComponent();
        changeDefaultColorOhers();
      }
      
      function changeDefaultColorOhers(){
       for(var p=0; p<components.length; p++){
          if(components[p] != selectedComponent){
           document.getElementById(components[p]).style.backgroundColor = '#FFF';   
           document.getElementById(components[p]).style.color = '#000';   
         }
       }     
      }

      function changeColorComponent(){   
       var getElementChange = document.getElementById(selectedComponent);
        getElementChange.style.color = '#FFF';
        getElementChange.style.backgroundColor = '#6f42c1'; 
      }

      function addValue(value, component){
        if(numberChoosingByUser.length < 20 || checkIfHaveBtnSelected(component)){
        changeColorFromButtion(value, component);
        countValueFromSelection();
        jumpToNext();
        changeColorComponent();
        changeDefaultColorOhers();
        addValuesOnComponent();
        }
      }

      function jumpToNext(){
           if(numberChoosingByUser.length >= 20){
            selectedComponent = components[19];
           }else{
            selectedComponent = components[numberChoosingByUser.length];
           }
      }

      function clearComponent(){
       for(var p=0; p<components.length; p++){
        document.getElementById(components[p]).value = ""; 
        }  
      }
      
      function changeColorFromButtion(value, component){
        if(checkIfHaveBtnSelected(component)){
          btnsSelected.splice(getIndexFromBtnSelected(component),1);
          numberChoosingByUser.splice(getIndexFromNumberChoosingByUser(value),1)
          document.getElementById(component).style.backgroundColor = "#FFF";
          document.getElementById(component).style.color = "#000";
        }else{
          numberChoosingByUser.push(value);
          btnsSelected .push(component);
          document.getElementById(component).style.backgroundColor = "#6f42c1";
          document.getElementById(component).style.color = "#FFF";
        }
      }

      //Add values on component
      function addValuesOnComponent(){
        numberChoosingByUser.sort();
        for(var o=0; o<components.length; o++){
          if(numberChoosingByUser[o] != null){
           document.getElementById(components[o]).value = numberChoosingByUser[o];
          }else{
           document.getElementById(components[o]).value = "";
          }
        }          
      }
     
      //Get index from numberChoosingByUser
      function getIndexFromNumberChoosingByUser(value){
        for(var p=0; p<numberChoosingByUser.length; p++){
            if(numberChoosingByUser[p] == value){
              return p;
            }
         } 
       }
       
      //Get index from btnSelected
       function getIndexFromBtnSelected(component){
        for(var p=0; p<btnsSelected.length; p++){
            if(btnsSelected[p] == component){
              return p;
            }
         } 
       }

       //Check if have a item on btnsSelected
       function checkIfHaveBtnSelected(component){
        for(var p=0; p<btnsSelected.length; p++){
            if(btnsSelected[p] == component){
              return true;
            }
         }
         return false; 
       }


      //Change text show the counting
      function countValueFromSelection(){
        countingAllValues();
        if(numberChoosingByUser.length < 15){
          document.getElementById("txtChoosingValue").style.color = "red";
          document.getElementById("txtChoosingValue").style.borderColor = "red"; 
        }else{
          document.getElementById("txtChoosingValue").style.color = "green";
          document.getElementById("txtChoosingValue").style.borderColor = "green";
        }
        addValuesOnExtraInf();
      }
     
      //Add Values on component
      function addValuesOnExtraInf(){
        var comp = ["txtChoosingValue",
                    "txtParNumber",
                    "txtImparNumber",
                    "txtPrimosNumber",
                    "txtCompostoNumber"];

        var varWithValues = [ numberChoosingByUser.length+"/20",
                              parNumbers,
                              imperNumbers,
                              primosNumbers,
                              compostoNumbers];
        
         for(var o=0; o<comp.length; o++){
         document.getElementById(comp[o]).value = varWithValues[o]; 
         }
      }

      //Counting impar and par
      function countingAllValues(){
        imperNumbers = 0;
        parNumbers = 0;
        primosNumbers = 0;
        compostoNumbers = 0;
        for(var l=0; l<numberChoosingByUser.length; l++){  
         switch(numberChoosingByUser[l]){
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

      
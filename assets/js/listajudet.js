 document.querySelector("body").onload = function () {
      // e.preventDefault();
       
    alert('Incarcare listajudet.js!');
        var xhtp = new XMLHttpRequest();
        xhtp.open("GET", "c:\wamp64\www\ecabcardio\assets\php\listajudet.json");
    var lista = '<option value=" ">(Input county)</option>'; 
        // lista va contine in final elementele <option>
    
      //  Construiesc prototipul unui element <option>
         var prototip = '<option value={county}>{county_id}</option>';
    
        // S-au primit date de la scriptul de pe server
        xhtp.onload = function () {
           var sirobiecte = JSON.parse(this.responseText);
           var combo = document.querySelector("#county");  // elem. <select>
          sirobiecte.forEach(function(cat) {
               var rind = prototip.replace('{county}', cat.county);
        rind = rind.replace('{county_id}', cat.dic_county_id);
      
       console.log(cat.dic_county_id+" " + cat.county);
             lista += rind;
           });
           combo.innerHTML = lista;
        };

    // S-a produs o eroare
    xhtp.onerror = function () {
    alert('Hopa! Ceva n-a mers!');
    };

    xhtp.send();
};
/*zet de display van alle items in het table op none zodat ze niet meer zicht baar zijn
alle table items die gelijk zijn aan de option worden als display block gelaten
*/
function filter(option) {

    var tablerow = document.getElementsByClassName('trow');

    for (var row = 0; row < tablerow.length; row++) {

        var statusArray = document.getElementsByClassName('status');
        var status = statusArray[row].textContent


        tablerow[row].style.display = 'table-row';
        if (option == 'all') {
            tablerow[row].style.display = 'table-row';
        }
        else if (option == 'Bezig' && status == option) {
            tablerow[row].style.display = 'table-row';

        } else if (option == 'Niet begonnen' && status == option) {
            tablerow[row].style.display = 'table-row';

        } else if (option == 'Afgerond' && status == option) {
            tablerow[row].style.display = 'table-row';
        } else {
            tablerow[row].style.display = 'none';
        }
    }
}
// zorg ervoor dat je element kan sorteren 
function sort(option) {

    var tablerow = document.getElementsByClassName('trow');
    var duurArray = document.getElementsByClassName('duur');
    var button =  document.getElementById('duurButton')
    var duur = [];
    for (var row = 0; row < tablerow.length; row++) {

        duur.push(duurArray[row].textContent);
    }
    duur.sort(function (a, b) { return a - b });
  
    if (option == 1) {
        duur.reverse();
        button.setAttribute('onclick', 'sort(0)');
    } else {
        button.setAttribute('onclick', 'sort(1)');

    }

    for (var row = 0; row < tablerow.length; row++) {

        duurArray[row].innerHTML = duur[row];

    }
}


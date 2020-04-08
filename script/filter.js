
function filter(option) {

    var tablerow = document.getElementsByClassName('trow');

    for (var row = 0; row < tablerow.length; row++) {

        var statusArray = document.getElementsByClassName('status');
        var status = statusArray[row].textContent


        tablerow[row].style.display = 'block';
        if (option == 'all') {
            tablerow[row].style.display = 'block';
        }
        else if (option == 'Bezig' && status == option) {
            tablerow[row].style.display = 'block';

        } else if (option == 'Niet begonnen' && status == option) {
            tablerow[row].style.display = 'block';

        } else if (option == 'Afgerond' && status == option) {
            tablerow[row].style.display = 'block';
        } else {
            tablerow[row].style.display = 'none';
        }
    }
}
function sort(option) {

    var tablerow = document.getElementsByClassName('trow');
    var duurArray = document.getElementsByClassName('duur');
    var duur = [];
    for (var row = 0; row < tablerow.length; row++) {

        duur.push(duurArray[row].textContent);
    }
    duur.sort(function (a, b) { return a - b });
  
    if (option == 1) {
        duur.reverse();
        document.getElementById('duurButton').setAttribute('onclick', 'sort(0)');
    } else {
        document.getElementById('duurButton').setAttribute('onclick', 'sort(1)');

    }

    for (var row = 0; row < tablerow.length; row++) {

        duurArray[row].innerHTML = duur[row];

    }
}


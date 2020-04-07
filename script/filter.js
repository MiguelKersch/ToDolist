
function filter(option) {

    var tablerow = document.getElementsByClassName('trow');

    for (var row = 0; row < tablerow.length; row++) {

        var statusArray = document.getElementsByClassName('status');
        var status = statusArray[row].textContent

        console.log(status);
        tablerow[row].style.display = 'block';
        if (option == 'Bezig' && status == option) {
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
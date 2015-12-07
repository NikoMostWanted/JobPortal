/**
 * Created by niko on 08/11/15.
 */
function checkForm() {
    var job = document.getElementById('IndexSearch_job').value;
    var where = document.getElementById('IndexSearch_where').value;
    if(job == "" && where == "") {
        alert('Пустые поля, введите данные!');
        return false;
    }
    return true;
}
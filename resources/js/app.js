require('./bootstrap');


// reset form button
const btnReset = document.querySelector('#btn-reset');
const addComicForm = document.querySelector('#addComicForm')

btnReset.addEventListener('click', clearForm);

function clearForm(){
    addComicForm.reset();
}

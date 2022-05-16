require('./bootstrap');


// reset form button
const btnAddReset = document.querySelector('#btn-add-reset');
const btnEditReset = document.querySelector('#btn-edit-reset');
const addComicForm = document.querySelector('#addComicForm')
const editComicForm = document.querySelector('#editComicForm')


btnAddReset.addEventListener('click', clearAddForm);
btnEditReset.addEventListener('click', clearEditForm);

function clearAddForm(){
    addComicForm.reset();
}

function clearEditForm(){
    editComicForm.reset();
}

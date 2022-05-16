require('./bootstrap');


// reset form button
const btnAddReset = document.querySelector('#btn-add-reset');
const btnEditReset = document.querySelector('#btn-edit-reset');
const addComicForm = document.querySelector('#addComicForm')
const editComicForm = document.querySelector('#editComicForm')

if (btnAddReset) {
    btnAddReset.addEventListener('click', clearAddForm);

    function clearAddForm(){
        addComicForm.reset();
    }
}

if (btnEditReset) {
    btnEditReset.addEventListener('click', clearEditForm);

    function clearEditForm(){
        editComicForm.reset();
    }
}


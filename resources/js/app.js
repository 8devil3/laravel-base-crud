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


//index page, delete button
const btnDel = document.querySelectorAll('.btn-del');
const indexForm = document.querySelector('#indexForm');

btnDel.forEach(btn => {
   btn.addEventListener('click', function(){
      indexForm.action = this.dataset.baseurl + '/' + this.dataset.id
   });
});

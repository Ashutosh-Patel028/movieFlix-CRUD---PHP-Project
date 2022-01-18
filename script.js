//DOM Manipulation

var createBtn=document.getElementById('create-button');
var createForm=document.getElementById('create-form');
var isDisplayingCreate=false;

var updateBtn=document.getElementById('update-button');
var updateForm=document.getElementById('update-form');
var isDisplayingUpdate=false;

var deleteBtn=document.getElementById('delete-button');
var deleteForm=document.getElementById('delete-form');
var isDisplayingDelete=false;

//Toggle create buttton
createBtn.onclick=(()=>{
    if(isDisplayingCreate){
        createForm.style.display='none';
        isDisplayingCreate=false;
    }
    else{
        createForm.style.display='block';
        isDisplayingCreate=true;
    }
});


//Toggle update button
updateBtn.onclick=(()=>{
    if(isDisplayingUpdate){
        updateForm.style.display='none';
        isDisplayingUpdate=false;
    }
    else{
        updateForm.style.display='block';
        isDisplayingUpdate=true;
    }
});

//Toggle delete button

deleteBtn.onclick=(()=>{
    if(isDisplayingDelete){
        deleteForm.style.display='none';
        isDisplayingDelete=false;
    }
    else{
        deleteForm.style.display='block';
        isDisplayingDelete=true;
    }
});
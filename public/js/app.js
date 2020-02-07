///dashboard custom js

jQuery(document).ready(()=>{
    
    // $('.delete-button').on('click' , ()=>{
    //    // var sts = confirm("Are u sure you want to delete ?")      
    // })


    ///instatiating js materialize componenets
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('.tooltipped').tooltip();
    $('select').formSelect();
} );  

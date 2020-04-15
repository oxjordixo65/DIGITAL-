window.addEventListener('load', () => {
    
    
    if (!localStorage.getItem("admin")) {

        $( "#editTH" ).html("");
        $( "#deleteTH" ).html("");

        $( "#addBtn" ).hide();
        $( ".editBtn" ).hide();
        $( ".deleteBtn" ).hide();

    }
})
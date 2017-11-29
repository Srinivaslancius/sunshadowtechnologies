var abc = 0; //Declaring and defining global increement variable

$(document).ready(function() {

//To add new input file field dynamically, on click of "Add More Files" button below function will be executed
    $('#add_more').click(function() {
        $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'product_images[]', type: 'file', id: 'file', accept: '.pdf,.doc'}),        
                $("<br/><br/>")
                ));
    });

//To preview image     
    
    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name)
        {
            alert("First PDF Must Be Selected");
            e.preventDefault();
        }
    });
});
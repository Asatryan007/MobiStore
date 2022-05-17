
     $('.item_id').mouseenter(function (e) {
        let item_id = ''; 
        // e.preventDefault();
        item_id = $(this).data('id'); //Getting element id from page with event mouse enter
            $.ajax({ 
                url:"php/id_locator.php",
                dataType: "json",
                type:"POST",
                data:{ id:item_id },
        
            })
    });


   
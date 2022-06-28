    // Add new element
    $(".add").click(function(){

        // Finding total number of elements added
        var total_element = $(".element").length;
                    
        // last <div> with element class id
        var lastid = $(".element:last").attr("id");
        var split_id = lastid.split("_");
        var nextindex = Number(split_id[1]) + 1;

        var max = 5;
        // Check total number elements
        if(total_element < max ){
            // Adding new div container after last occurance of element class
            $(".element:last").after("<tr class='element' id='div_"+ nextindex +"'></tr>");
                        
            // Adding element to <div>
            $("#div_" + nextindex).append('<td><div class="form-group"><input type="text" class="form-control" id="exampleInput" name="title[]"  placeholder="Description"></div></td><td><div class="form-group"><textarea  class="form-control" id="exampleInput" name="description[]"  placeholder="Description"></textarea></div></td><td><div class="form-group"><input type="number" class="form-control" id="exampleInput" name="qty[]"  placeholder="Quatntity"></div></td><td><div class="form-group"><input type="text" class="form-control" id="exampleInput" name="rate[]"  placeholder="Rate"></div></td><td><div class="form-group"><input type="text" class="form-control" id="exampleInput" name="tax[]"  placeholder="Tax"></div></td><td><div id="amount_'+ nextindex +'"></div></td><td><span id="remove_' + nextindex + '" class="remove"><i class="fa fa-uncheck" aria-hidden="true"></i>X</span></td>');     
        }
        
    });
        // Remove element
        $('.remove').on('click','.remove',function(){
                
            var id = this.id;
            var split_id = id.split("_");
            var deleteindex = split_id[1];
    
            // Remove <div> with id
            $("#div_" + deleteindex).remove();
        });
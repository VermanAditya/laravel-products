<script>
    $(document).ready(function(){
    $('.append').click(function(){
        var html = '<div class="form-group d-flex closeDiv border p-2">';
            html+= '<input type="file" name="image[]" id="image" placeholder="Select file" class="form-control h-25 mx-1" />';
                   html+= '<input type="text" name="title[]" id="title" class="form-control h-25 mx-1" placeholder="Enter Product Name" />';
                    html+= '<textarea name="desc[]" id="desc" placeholder="Enter description here" class="form-control h-25 mx-1"></textarea>';
                    html+= '<input type="text" name="price[]" id="price" class="form-control h-25 mx-1" placeholder="Enter price here" />'
                    html+=  '<input type="number" name="qty[]" id="qty" class="form-control h-25 mx-1" placeholder="Quantity" />';
                     html+= '<input type="date" name="date[]" id="date" data-date-inline-picker="true" class="form-control h-25 mx-1" placeholder="Date" />'
                       html+= '<button type="button" class="btn btn-warning btn-sm close">-</button></div>'
                    $('.appendDiv').append(html);
    });
    
});
$('body').on('click', '.close', function() {
   $(this).parent().remove();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
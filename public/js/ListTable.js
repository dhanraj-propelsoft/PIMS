
$(document).ready(function () {
    // DataTable
    var table = $('#example').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });

   
    function addRemoveClass(theRows) {

        theRows.removeClass("odd even");
        theRows.filter(":odd").addClass("odd");
        theRows.filter(":even").addClass("even");
    }

    var rows = $("table#employee_table tr:not(:first-child)");

    addRemoveClass(rows);

    // <!---- Search Table Filter
    $("#tableSearchBoxFilter").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#employee_table tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});



( function($) {
    $(window).on("load", function(){    
    //add a special class to the first row of all tables with headers
    $("#primary").find("table").find("tr:first").has("th").addClass("headRow");
    //add a special class to all tables without headers
    $("#primary").find("table").not($("table").has(".headRow")).addClass("tableWithoutHeader").wrap("<div class='table-wrapper'></div>");
    //add a special class to leftmost cell of every row (tables with headers only)
    $("table").has("th").find("tr").not(".headRow").children().filter(":first-child").addClass("thVertical");
    stackTable();    
});

    function stackTable() { 
        var headertext = [];
        var headRows = document.querySelectorAll(".headRow");
        var tablesWithHeadrow = $("table").has(".headRow");

        for (var i = 0; i < headRows.length; i++) {
            headertext[i]=[];
            for (var j = 0, headrow; headrow = headRows[i].cells[j]; j++) {
                var current = headrow;
                headertext[i].push(current.textContent);
            }
        } 

        for (var h = 0, table; table = tablesWithHeadrow[h]; h++) {
            for (var i = 1, row; row = table.rows[i]; i++) {
                for (var j = 0, col; col = row.cells[j]; j++) {
                    col.setAttribute("data-th", headertext[h][j]);
                } 
            }
        }
    }
    
})(jQuery); 
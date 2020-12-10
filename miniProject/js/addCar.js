function newCarDetails() {
    var productname = document.getElementById("branchid").value;
    var cartype = document.getElementById("product_name").value;
    var branch = document.getElementById("rate").value;
    var avail = document.getElementById("avail").value;
    var rate = document.getElementById("type").value;
    var description = document.getElementById("description").value;
    console.log(branchid);
    var formData = new FormData();
    formData.append("branchid", branchid);
    formData.append("product_name", product_name);
    formData.append("rate", rate);
    formData.append("avail", avail);
    formData.append("type", type);
    formData.append("description", description);

    $.ajax({
        type: "POST",
        url: "php/addcar.php",
        data: formData,
        type: "POST",
        contentType: false, // Dont delete this (jQuery 1.6+)
        processData: false, // Dont delete this
        success: function(data) {
            console.log(data);
            $.ajax({
                type: "POST",
                url: "php/addcar.php",
                data: formData,
                type: "POST",
                contentType: false, // Dont delete this (jQuery 1.6+)
                processData: false, // Dont delete this
                success: function(data) {
                    console.log(data);
                },
                //Other options
            });
        },
        //Other options
    });
}
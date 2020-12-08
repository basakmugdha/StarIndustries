function newCarDetails() {
    var productname = document.getElementById("productname").value;
    var cartype = document.getElementById("cartype").value;
    var branch = document.getElementById("branch").value;
    var avail = document.getElementById("avail").value;
    var rate = document.getElementById("rate").value;
    var description = document.getElementById("description").value;
    var image = document.getElementById("image").value;
    console.log(productname);
    var formData = new FormData();
    formData.append("productname", productname);
    formData.append("cartype", cartype);
    formData.append("branch", branch);
    formData.append("avail", avail);
    formData.append("rate", rate);
    formData.append("description", description);
    formData.append("image", image);

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
function moreDetails(id) {
    html = ``;
    $.ajax({
        url: "php/moredetails.php",
        method: "POST",
        data: id,
        success: function(data) {
            try {
                var res = JSON.parse(data);
                console.log(res);
                res.forEach(car => {
                    console.log(car);
                html+=`<img src="images/cars/hyundai.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">` + car.product_name + `</h5>
                    <p class="card-text">` + car.description + `</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    <button type="button" class="btn btn-warning">Cost</button>
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modifyModal">Modify</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal">
                        Delete
                    </button>
    
                </div>`;
                });
            } catch (error) {
                console.log(data);
            }
            $("#carDetails").html(html);
        },

        //Other options
    });

}
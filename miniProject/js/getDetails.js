$(document).ready(function() {
    loadDetails();
    console.log("HI");
});

function loadDetails() {
    html = ``;
    $.ajax({
        url: "php/getDetails.php",
        method: "POST",
        data: { load: 1 },
        success: function(data) {
            try {
                var res = JSON.parse(data);
                console.log(res);
                res.forEach(car => {
                    console.log(car);
                    html += `<div class="col mb-3" id=` + car.product_id + `>
                    <div class="card">
                        <img src="images/cars/bmw.png" class="card-img-top" alt="bmw">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">` + car.product_name + `
                            </p>
                            <a href="product.html" id=` + car.product_id + ` onclick="moreDetails(this.id)" class="btn btn-warning">More Details</a>
    
                        </div>
                    </div>
                </div>`;
                });
            } catch (error) {
                console.log(data);
            }
            $("#cards").html(html);
        },

        //Other options
    });

}
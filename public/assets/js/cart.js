//var products = [];
var products = [{
    product_id: 'chairs',
    product_price: 2000,
    product_desc: 'extra chairs',
    product_qty: 1
},
{
    product_id: 'tables',
    product_price: 100,
    product_desc: 'extra tables',
    product_qty: 1
},
{
    product_id: 'fire show',
    product_price: 2000,
    product_desc: 'events',
    product_qty: 1
},
{
    product_id: 'ballons',
    product_price: 50,
    product_desc: 'events',
    product_qty: 1
},
{
    product_id: 'food',
    product_price: 150,
    product_desc: 'events',
    product_qty: 1
},
{
    product_id: 'helium ballons',
    product_price: 200,
    product_desc: 'events',
    product_qty: 1
},
{
    product_id: 'videographer',
    product_price: 7000,
    product_desc: 'events',
    product_qty: 1
},
];



var cart = [];

function addProduct() {
    var productID = document.getElementById("productID").value;
    // var product_desc = document.getElementById("product_desc").value;
    var qty = document.getElementById("quantity").value;
    var price = document.getElementById("price").value;

    var newProduct = {
        product_id: null,
        // product_desc: null,
        product_qty: 0,
        product_price: 0.00,
    };
    newProduct.product_id = productID;
    // newProduct.product_desc = product_desc;
    newProduct.product_qty = qty;
    newProduct.product_price = price;


    products.push(newProduct);


    var html = '<table  >';
    html += "<td>Product ID</td>";
    html += "<td>Quantity</td>";
    html += "<td>Price</td>";
    html += "<td>Action</td>";
    for (var i = 0; i < products.length; i++) {
        html += "<tr>";
        html += "<td>" + products[i].product_id + "</td>";
        html += "<td>" + products[i].product_qty + "</td>";
        html += "<td>" + products[i].product_price + "</td>";
        html += "<td><button type='submit' onClick='deleteProduct(\"" + products[i].product_id + "\", this);'/>Delete Item</button> &nbsp <button type='submit' onClick='addCart(\"" + products[i].product_id + "\", this);'/>Add to Cart</button></td>";
        html += "</tr>";
    }
    html += "</table>";
    document.getElementById("demo").innerHTML = html;

    document.getElementById("resetbtn").click()
}
function deleteProduct(product_id, e) {
    e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
    for (var i = 0; i < products.length; i++) {
        if (products[i].product_id == product_id) {
            products.splice(i, 1);
        }
    }
}

function addCart(product_id) {

    for (var i = 0; i < products.length; i++) {
        if (products[i].product_id == product_id) {
            var cartItem = null;
            for (var k = 0; k < cart.length; k++) {
                if (cart[k].product.product_id == products[i].product_id) {
                    cartItem = cart[k];
                    cart[k].product_qty++;
                    break;
                }
            }
            if (cartItem == null) {

                var cartItem = {
                    product: products[i],
                    product_qty: products[i].product_qty
                };
                cart.push(cartItem);
            }
        }
    }

    renderCartTable();

}

function renderCartTable() {
    var html = '';
    var ele = document.getElementById("demo2");
    ele.innerHTML = '';

    html += "<table id='tblCart' border='1|1'>";
    html += "<tr><td>Product ID</td>";
    // html += "<td>Product Description</td>";
    html += "<td>Quantity</td>";
    html += "<td>Price</td>";
    html += "<td>Total</td>";
    html += "<td>Action</td></tr>";
    var GrandTotal = 0;
    for (var i = 0; i < cart.length; i++) {
        html += "<tr>";
        html += "<td>" + cart[i].product.product_id + "</td>";
        // html += "<td>" + cart[i].product.product_desc + "</td>";
        html += "<td>" + cart[i].product_qty + "</td>";
        html += "<td>" + cart[i].product.product_price + "</td>";
        html += "<td>" + parseFloat(cart[i].product.product_price) * parseInt(cart[i].product_qty) + "</td>";
        html += "<td><button type='submit' onClick='subtractQuantity(\"" + cart[i].product.product_id + "\", this);'/>-</button> &nbsp<button type='submit' onClick='addQuantity(\"" + cart[i].product.product_id + "\", this);'/>+</button> &nbsp<button type='submit' onClick='removeItem(\"" + cart[i].product.product_id + "\", this);'/>x</button></td>";
        html += "</tr>";

        GrandTotal += parseFloat(cart[i].product.product_price) * parseInt(cart[i].product_qty);

    }
    document.getElementById('demo3').innerHTML = GrandTotal;
    html += "</table>";
    ele.innerHTML = html;
}


function subtractQuantity(product_id) {

    for (var i = 0; i < cart.length; i++) {
        if (cart[i].product.product_id == product_id) {
            cart[i].product_qty--;
        }

        if (cart[i].product_qty == 0) {
            cart.splice(i, 1);
        }

    }
    renderCartTable();
}
function addQuantity(product_id) {

    for (var i = 0; i < cart.length; i++) {
        if (cart[i].product.product_id == product_id) {
            cart[i].product_qty++;
        }
    }
    renderCartTable();
}
function removeItem(product_id) {

    for (var i = 0; i < cart.length; i++) {
        if (cart[i].product.product_id == product_id) {
            cart.splice(i, 1);
        }

    }
    renderCartTable();
}
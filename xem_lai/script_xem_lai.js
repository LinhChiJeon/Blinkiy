function updatePrice(item, quantity) {
    var initialPrice = parseFloat(item.find('.price').val()),
        totalPrice = initialPrice * quantity;
    item.find('.item_total').text(totalPrice.toLocaleString() + ' ₫');
}

function updateTotal() {
    var total = 0;
    $('.item').each(function() {
        var quantity = parseFloat($(this).find('.quantity_values').val()),
            pricePerItem = parseFloat($(this).find('.price').val());
        total += quantity * pricePerItem;
    });
    $('.total').text(total.toLocaleString() + ' ₫');
}

$('.decrease_button, .increase_button').click(function(e) {
    e.preventDefault();
    var currentItem = $(this).closest('.item'),
        quantityInput = currentItem.find('.quantity_values'),
        currentValue = parseFloat(quantityInput.val());
    if ($(this).hasClass('increase_button')) {
        quantityInput.val(currentValue + 1);
    } else {
        if (currentValue > 1) {
            quantityInput.val(currentValue - 1);
        }
    }
    updatePrice(currentItem, quantityInput.val());
    updateTotal();
});

$('.remove_item').click(function() {
    $(this).closest('li').remove(); 
    updateTotal(); 
});

updateTotal();

$('.pay_button').click(function(e){
    e.preventDefault();
    window.location.href = "/xampp/htdocs/code/do_an/van_chuyen/van_chuyen.html";
})


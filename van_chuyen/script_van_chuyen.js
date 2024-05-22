

function saveFormDataToLocalStorage() {
    var formData = {
        hoten: $('#name').val(),
        email: $('#email').val(),
        dthoai: $('#phone_num').val(),
        tinh_tp: $('#city').val(),
        quan_huyen: $('#district').val(),
        phuong_xa: $('#ward').val(),
        duong_so: $('#street').val(),
        can_ho: $('#apartment').val()
    };
    localStorage.setItem("formData", JSON.stringify(formData));
}

$('.submit').click(function() {
    saveFormDataToLocalStorage();
});
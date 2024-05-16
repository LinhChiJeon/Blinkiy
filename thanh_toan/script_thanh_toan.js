function displayFormDataFromLocalStorage() {
    var formData = JSON.parse(localStorage.getItem("formData"));
    if (formData) {
        document.getElementById('hoten').textContent = formData.hoten;
        document.getElementById('email').textContent = formData.email;
        document.getElementById('dthoai').textContent = formData.dthoai;
        document.getElementById('tinh_tp').textContent = formData.tinh_tp;
        document.getElementById('quan_huyen').textContent = formData.quan_huyen;
        document.getElementById('phuong_xa').textContent = formData.phuong_xa;
        document.getElementById('duong_so').textContent = formData.duong_so;
        document.getElementById('can_ho').textContent = formData.can_ho;
    }
}

document.addEventListener('DOMContentLoaded', displayFormDataFromLocalStorage);

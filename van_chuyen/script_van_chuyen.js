var citis = document.getElementById("city"),
    districts = document.getElementById("district"),
    wards = document.getElementById("ward"),
    Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", //Sửa lại phần này sau, cập nhật các địa điểm mới nhất
        method: "GET", 
        responseType: "application/json", 
    },
    promise = axios(Parameter);
promise.then(function (result) {
  renderCity(result.data);
});

function renderCity(data) {
  for (const x of data) {
    citis.options[citis.options.length] = new Option(x.Name, x.Id);
  }
  citis.onchange = function () {
    districts.length = 1;
    wards.length = 1;
    if(this.value != ""){
      const result = data.filter(n => n.Id === this.value);

      for (const k of result[0].Districts) {
        districts.options[districts.options.length] = new Option(k.Name, k.Id);
      }
    }
  };
  districts.onchange = function () {
    wards.length = 1;
    const dataCity = data.filter((n) => n.Id === citis.value);
    if (this.value != "") {
      const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

      for (const w of dataWards) {
        wards.options[wards.options.length] = new Option(w.Name, w.Id);
      }
    }
  };
}

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
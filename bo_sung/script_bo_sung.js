document.getElementById('file_input').addEventListener('change', function() {
  var fileName = this.files.length > 0 ? this.files[0].name : 'Chưa có ảnh nào được chọn';
  document.getElementById('file_name').textContent = fileName;
});

document.querySelector('.custom-file-upload').addEventListener('click', function() {
  document.getElementById('file_input').click();
});


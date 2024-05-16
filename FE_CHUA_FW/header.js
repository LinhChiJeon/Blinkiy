document.addEventListener('DOMContentLoaded', function() {
    // Lưu trạng thái hover vào sessionStorage khi hover vào một liên kết
    document.querySelectorAll('.title_func a').forEach(link => {
        link.addEventListener('mouseenter', () => {
            sessionStorage.setItem('activeLink', link.getAttribute('href'));
        });
    });

    // Lấy trạng thái hover từ sessionStorage khi tải lại trang
    const activeLink = sessionStorage.getItem('activeLink');
    if (activeLink) {
        document.querySelectorAll('.title_func a').forEach(link => {
            if (link.getAttribute('href') === activeLink) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Kiểm tra URL hiện tại và thêm lớp active cho nút tương ứng khi quay lại trang giới thiệu
    window.addEventListener('popstate', () => {
        const currentURL = window.location.href;
        document.querySelectorAll('.title_func a').forEach(link => {
            if (link.getAttribute('href') === currentURL) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });
});

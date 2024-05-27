    //Image slider
    
    //Event for slider
    document.addEventListener('DOMContentLoaded', () => {
        const mainImage = document.getElementById('main_image');
        const extraImages = document.querySelectorAll('.extra_image');
      
        extraImages.forEach(image => {
            image.addEventListener('click', () => {
            mainImage.src = image.src;
            mainImage.style.width = '460px'; 
            mainImage.style.height = '460px'; 
            mainImage.style.objectFit = 'cover'; // Hình ảnh đc cover toàn bộ
          });
        });
      });
    
    //Left and right button 
    document.addEventListener('DOMContentLoaded', () => {
        const mainImage = document.getElementById('main_image');
        const extraImages = document.querySelectorAll('.extra_image');
        const leftBtn = document.querySelector('.left_btn');
        const rightBtn = document.querySelector('.right_btn');
        
        let currentIndex = -1; //Biểu thị main_image với index=-1
    
        function updateMainImage(index) {
            // Loại bỏ lớp active khỏi tất cả các hình ảnh phụ
            extraImages.forEach((img) => img.classList.remove('active'));
            
            if (index === -1) {
                mainImage.src = 'https://via.placeholder.com/460x460'; 
            } else {
                mainImage.src = extraImages[index % extraImages.length].src;
                // Thêm lớp active vào hình ảnh phụ tương ứng
                extraImages[index % extraImages.length].classList.add('active');
            }
            mainImage.style.width = '460px';
            mainImage.style.height = '460px';
            mainImage.style.objectFit = 'cover';
        }
    
        rightBtn.addEventListener('click', () => {
            currentIndex++;
            if (currentIndex === extraImages.length) {
                currentIndex = -1; // Reset về main_image
            }
            updateMainImage(currentIndex);
        });
    
        leftBtn.addEventListener('click', () => {
            currentIndex--;
            if (currentIndex < -1) {
                currentIndex = extraImages.length - 1; // Lặp cho tới extra_image cuối
            }
            updateMainImage(currentIndex);
        });
        
        extraImages.forEach((image, index) => {
            image.addEventListener('click', () => {
                currentIndex = index; // Cập nhật currentIndex khi người dùng nhấn vào hình ảnh
                updateMainImage(currentIndex);
            });
        });

        //Khởi tạo tiếp main_image và tiếp tục vòng lặp
        updateMainImage(currentIndex);
    });
    
    
    //Amount process
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;
    // console.log(amount);
    let render = (amount) =>{
        amountElement.value = amount;
    }
    //Handle plus button
    let handlePlus= () =>{
        amount++;
        render(amount);
        // console.log(amount);
    }

    //Handle minus button
    let handleMinus= () =>{
        if (amount > 1)  
            amount--;
        render(amount);
        // console.log(amount);
    }

    // Event listener for input change
    amountElement.addEventListener('input', () => {
        let inputValue = amountElement.value;
        // Cho phép input xóa value hiện tại, nhập cái mới
        if (inputValue === '') {
            return;
        }

        amount = parseInt(inputValue);
        if (isNaN(amount) || amount < 1) {
            return;
        }
        render(amount);
    });

    // Event listener giải quyết input không hợp lệ
    amountElement.addEventListener('blur', () => {
        let inputValue = amountElement.value;
        if (inputValue === '' || isNaN(parseInt(inputValue)) || parseInt(inputValue) < 1) {
            amount = 1;
            render(amount);
        }
    });

    const listcard=[...document.querySelectorAll('.carousel')];
    const nxtbtn=[...document.querySelectorAll('.nxt-btn')];
    const prebtn=[...document.querySelectorAll('.pre-btn')];
    
    // Related Products
    listcard.forEach((item,i)=>{
        let current=0;
        let length=listcard.length;
        nxtbtn[i].addEventListener('click', ()=>
        {
            if(current!=2)
            {
                current++;
                let width= item.offsetWidth;
                item.scrollLeft=width*current;
                
            }
            else
            {
                current=0;
                item.scrollLeft=0;  
            }
        });
        prebtn[i].addEventListener('click', ()=>
        {
            current--;
            let width= item.offsetWidth;
            item.scrollLeft=width*current;
        });
    
    })

    // Favorite button
    function toggleFavorite() {
        var heartSvg = document.getElementById("heart_svg");
        var heartPath = document.getElementById("heart_path");
    
        // Kiểm tra xem trạng thái hiện tại của biểu tượng
        if (heartSvg.classList.contains("bi-heart")) {
            // thay đổi sang biểu tượng trái tim đầy
            heartSvg.classList.remove("bi-heart");
            heartSvg.classList.add("bi-heart-fill");
            // Thay đổi dòng path để tô đậm trái tim
            heartPath.setAttribute("d", "M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314");
        } else {
            // Thay đổi sang biểu tượng trái tim rỗng
            heartSvg.classList.remove("bi-heart-fill");
            heartSvg.classList.add("bi-heart");
            // Thay đổi dòng path để trái tim trở về rỗng
            heartPath.setAttribute("d", "m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15");
        }
    }
    
    // Select color input type checkbox
    function selectOnlyThis(checkbox) {
        const checkboxes = document.querySelectorAll('.color_selection');
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false;
        });
    }
    
    
    // Size button
    function selectSize(button, size) {
        var sizeButtons = document.querySelectorAll('.size');
    
        // Nếu button đã được chọn trước đó, bỏ chọn nó
        if (button.classList.contains('selected')) {
            button.classList.remove('selected');
        } else {
            // Loại bỏ lớp 'selected' từ tất cả các nút size
            sizeButtons.forEach(function(btn) {
                btn.classList.remove('selected');
            }); 
    
            // Thêm lớp 'selected' cho nút được nhấn
            button.classList.add('selected');
        }
    }
    
    // Validate selection
    function validateSelection() {
        const colorSelected = document.querySelector('.color_selection:checked');
        const sizeSelected = document.querySelector('.size.selected');
        const quantity = parseInt(document.getElementById('amount').value);

        if (!colorSelected) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi',
                text: 'Vui lòng chọn màu sắc!'
            });
            return false;
        }
        if (!sizeSelected) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi',
                text: 'Vui lòng chọn kích cỡ!'
            });
            return false;
        }
        if (quantity>100 || quantity < 1) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi',
                text: 'Vui lòng nhập số lượng hợp lệ!'
            });
            return false;
        }

        return true;
    }

    // Add to cart
    function addToCart() {
        if (validateSelection()) {
            Swal.fire({
                icon: 'success',
                title: 'Thành công',
                text: 'Sản phẩm đã được thêm vào giỏ hàng!'
            }).then(() => {
                // Thêm vào giỏ hàng (.href=/cart)
            });
        }
    }

    // Buy now
    function buynow() {
        if (validateSelection()) {
            Swal.fire({
                icon: 'success',
                title: 'Thành công',
                text: 'Bạn đang được chuyển đến trang thanh toán!'
            }).then(() => {
                // Mua ngay (href=/checkout)
            });
        }
    }

    // AddtoCart button
    // document.getElementById("add_to_cart").addEventListener("click", function() {
    //     if (checkSelection()) {
    //         var xhr = new XMLHttpRequest();
    //         xhr.open("POST", "addToCart.php", true);
    //         xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    //         xhr.onreadystatechange = function() {
    //             if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
    //                 var response = JSON.parse(xhr.responseText);
    //                 alert(response.message);
    //             }
    //         };
    //         var data = { type: "add_to_cart" };
    //         xhr.send(JSON.stringify(data));
    //     }
    // });
    
    // document.getElementById("buy_now").addEventListener("click", function() {
    //     if (checkSelection()) {
    //         var xhr = new XMLHttpRequest();
    //         xhr.open("POST", "buynow.php", true);
    //         xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    //         xhr.onreadystatechange = function() {
    //             if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
    //                 var response = JSON.parse(xhr.responseText);
    //                 alert(response.message);
    //                 // Điều hướng tới trang thanh toán nếu cần
    //             }
    //         };
    //         var data = { type: "buy_now" };
    //         xhr.send(JSON.stringify(data));
    //     }
    // });
    

    
    
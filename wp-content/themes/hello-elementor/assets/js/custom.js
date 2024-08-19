// // TEAMS
// document.querySelectorAll(".team-item").forEach((item) => {
//   item.addEventListener("click", function (event) {
//     // Kiểm tra nếu thiết bị là di động bằng cách sử dụng media query
//     // Đóng các .team-item-info khác nếu có
//     document.querySelectorAll(".team-item").forEach((otherItem) => {
//       if (otherItem !== item) {
//         otherItem.classList.remove("show-info");
//         // Xóa nút đóng nếu có
//         const closeButton = otherItem.querySelector(".close-button");
//         if (closeButton) {
//           closeButton.remove();
//         }
//       }
//     });

//     // Bật/tắt lớp show-info trên phần tử hiện tại
//     item.classList.toggle("show-info");

//     // Thêm nút đóng nếu chưa tồn tại
//     if (item.classList.contains("show-info")) {
//       if (!item.querySelector(".close-button")) {
//         const closeButton = document.createElement("div");
//         closeButton.className = "close-button";
//         closeButton.innerText = "X";
//         closeButton.addEventListener("click", function (event) {
//           item.classList.remove("show-info");
//           closeButton.remove(); // Xóa nút đóng khi đóng thông tin
//           event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
//         });
//         item.querySelector(".team-item-info").appendChild(closeButton);
//       }
//     }

//     event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
//   });
// });

// // Sự kiện click cho document để ẩn .team-item-info khi click ra ngoài
// document.addEventListener("click", function (event) {
//   document.querySelectorAll(".team-item").forEach((item) => {
//     if (!item.contains(event.target)) {
//       item.classList.remove("show-info");
//       // Xóa nút đóng nếu có
//       const closeButton = item.querySelector(".close-button");
//       if (closeButton) {
//         closeButton.remove();
//       }
//     }
//   });
// });
// handle header search when input is empty
const inputHeaderSearch = document.querySelector(".header-search-main .is-search-input");
const btnHeaderSearch = document.querySelector(".header-search-main .is-search-submit");
if (inputHeaderSearch.value === "") {
    btnHeaderSearch.disabled = true;
    btnHeaderSearch.style.opacity = "0.7";
}
inputHeaderSearch.oninput = function () {
    if (inputHeaderSearch.value === "") {
        btnHeaderSearch.disabled = true;
        btnHeaderSearch.style.opacity = "0.7";
    } else {
        btnHeaderSearch.disabled = false;
        btnHeaderSearch.style.opacity = "1";
    }
};

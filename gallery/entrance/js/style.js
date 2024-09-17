// let angle = 0;
// const panorama = document.querySelector(".room-panorama");

// function rotateRoom(deltaX) {
//   angle += deltaX * 0.1;
//   panorama.style.transform = `rotateY(${angle}deg)`;
// }

// function rotateRoom(deltaX) {
//   angle += deltaX * 0.1;
//   const x = Math.sin((angle * Math.PI) / 180) * 100;
//   const z = Math.cos((angle * Math.PI) / 180) * 100;
//   panorama.style.transform = `translate3d(${x}%, 0, ${z}%) rotateY(${angle}deg)`;
// }

// リンクボタンクリックでページ遷移アニメーション
document.querySelectorAll("#room-container .wall-link").forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const href = this.getAttribute("href");

    const roomContainer = document.querySelector("#room-container");
    roomContainer.classList.add("animate-scale-fade");
    const controls = document.querySelector(".controls");
    controls.classList.add("animate-fade");

    setTimeout(() => {
      window.location.href = href;
    }, 1000);
  });
});

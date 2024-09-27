document.addEventListener("DOMContentLoaded", function () {
  const letterContainer = document.getElementById("letter");
  const letterBg = document.querySelector(".letterBg");

  const jsonPath =
    window.innerWidth <= 500 ? "json/letter_sp.json" : "json/letter.json";

  const letterAnimation = lottie.loadAnimation({
    container: letterContainer,
    renderer: "svg",
    loop: false,
    autoplay: true,
    path: jsonPath,
  });

  // ✕ボタンを作成
  const closeButton = document.createElement("button");
  closeButton.textContent = "✕";
  closeButton.classList.add("close-button");
  closeButton.style.display = "none";
  document.body.appendChild(closeButton);

  // 5秒後に✕ボタンを表示
  setTimeout(() => {
    closeButton.style.display = "block";
  }, 5000);

  // ✕ボタンのクリックイベント
  closeButton.addEventListener("click", () => {
    // アニメーションと背景のフェードアウト
    letterContainer.style.transition = "opacity 0.5s";
    letterBg.style.transition = "opacity 0.5s";
    letterContainer.style.opacity = "0";
    letterBg.style.opacity = "0";

    // z-indexの設定
    setTimeout(() => {
      letterContainer.style.zIndex = "-1";
      letterBg.style.zIndex = "-1";
    }, 500);

    // ✕ボタンを非表示
    closeButton.style.display = "none";
  });
});

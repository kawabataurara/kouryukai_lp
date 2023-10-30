"use strict";
// ヘッダーのスクロール制御
const fixedElm = document.getElementById("js-header");
let scrollPoint = 0;
let lastPoint = 0;
window.addEventListener("scroll", function () {
  scrollPoint = window.scrollY;
  if (scrollPoint > lastPoint) {
    // 下スクロールの場合
    fixedElm.classList.add("fixed-hide");
  } else {
    // 上スクロールの場合
    fixedElm.classList.remove("fixed-hide");
  }
  lastPoint = scrollPoint;
});
// 要素をフェードイン
const targets = document.querySelectorAll(".js-fadeIn");

function callback(entries, obs) {
  console.log(entries);
  //isIntersectingでターゲット要素が交差しているか確認
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    }
    //trueならクラス付与
    entry.target.classList.add("appear");
    obs.unobserve(entry.target);
  });
}
const options = {
  threshold: 0,
  rootMargin: "0px 0px",
};
const observer = new IntersectionObserver(callback, options);
targets.forEach((target) => {
  observer.observe(target);
});

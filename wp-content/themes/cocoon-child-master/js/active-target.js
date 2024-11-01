//アクティブ状態のクラス名
const ACTIVE_CLASS_NAME = "js-actived";

//アクティブにするターゲットのクラス名
const TARGET_CLASS_NAME = "js-target";

//画面の下から30%の位置で検知
const option = {
  root: null,
  rootMargin: "200% 0px -30% 0px",
  threshold: 0,
};

//検知時にクラス付与
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add(ACTIVE_CLASS_NAME);
      observer.unobserve(entry.target);
    }
  });
}, option);

//ターゲット設定
document.querySelectorAll("." + TARGET_CLASS_NAME).forEach(target => {
  observer.observe(target);
});

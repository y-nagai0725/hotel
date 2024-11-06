//アクティブにするターゲットのクラス名
const TARGET_CLASS_NAME = "js-target";

//非アクティブ状態のクラス名
const NO_ACTIVE_CLASS_NAME = "js-no-actived";

//アクティブ状態のクラス名
const ACTIVE_CLASS_NAME = "js-actived";

//ターゲット要素を非アクティブ状態にする
document.querySelectorAll("." + TARGET_CLASS_NAME).forEach(target => {
  target.classList.add(NO_ACTIVE_CLASS_NAME);
});

//画面の下から33%の位置で検知
const option = {
  root: null,
  rootMargin: "200% 0px -33% 0px",
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
document.querySelectorAll("." + NO_ACTIVE_CLASS_NAME).forEach(target => {
  observer.observe(target);
});

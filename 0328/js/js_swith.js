let score = prompt('請輸入 1 到 100 之間的數字', '');

switch (true) {
  case (score >= 90):
    console.log("優等");
    break;
      case (score >= 80):
    console.log("甲等");
    break;
      case (score >= 70):
    console.log("乙等");
    break;
      case (score >= 60):
    console.log("丙等");
    break;
  default:
    console.log("不及格");
    break;
}

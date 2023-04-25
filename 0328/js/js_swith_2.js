let num = prompt('請輸入 1 到 5 之間的數字', '');

switch (true) {
    case num == 1:
        console.log('ONE');
        break;
    case num == 2:
        console.log('TWO');
        break;
    case num == 3:
        console.log('THREE');
        break;
    case num == 4:
        console.log('FOUR');
        break;
    case num == 5:
        console.log('FIVE');
        break;
    default:
        console.log('請輸入 1 到 5 之間的數字');
        break;
}

let score = prompt('請輸入 1 到 100 之間的數字', '');

if (score >= 90) console.log('優等');
else if (score >= 80 && score < 90) console.log('甲等');
else if (score >= 70 && score < 80) console.log('乙等');
else if (score >= 60 && score < 70) console.log('丙等');
else console.log('不及格');

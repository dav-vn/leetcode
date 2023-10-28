// Runtime 138 ms
// Memory 50.97 MB
let isPalindrome = function(x) {
    return x.toString() === x.toString().split('').reverse().join('');
};

// Runtime 134 ms
// Memory 50.1 MB
let alternativeIsPalindrome = function (x) {
    let riminder = 0;
    let reverse = 0;
    let number = x;
    if (x < 0) {
        return false;
    }

    while (number !== 0) {
        riminder = number % 10;
        reverse = reverse * 10 + riminder;
        number = Math.floor(number / 10);
    }
    return x === reverse;
};
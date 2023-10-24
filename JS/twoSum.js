// Runtime 80 ms
// Memory 42.44 MB
let twoSum = function(nums, target) {
    for(let i = 0; i < nums.length; i++) {
        for(let j = i + 1; j < nums.length; j++) {
            if(nums[i] + nums[j] === target) {
                return [i, j];
            }
        }
    }
};

// Runtime 54 ms
// Memory 42.80 MB
let hashTwoSum = function (nums, target) {
    let numMap = {};

    for (let i = 0; i < nums.length; i++) {
        let complement = target - nums[i];

        if (complement in numMap) {
            return [numMap[complement], i];
        }
        numMap[nums[i]] = i;
    }
    return [];
};
package Go

// Runtime 27 ms
// Memory 3.65 MB

func twoSums(nums []int, target int) []int {
	for i := 0; i < len(nums); i++ {
		for j := i + 1; j < len(nums); j++ {
			if nums[i]+nums[j] == target {
				return []int{i, j}
			}
		}
	}
	return []int{}
}

// Runtime 6 ms
// Memory 4.30 MB

func hashTwoSums(nums []int, target int) []int {
	numMap := make(map[int]int)

	for i, num := range nums {
		complement := target - num

		if index, ok := numMap[complement]; ok {
			return []int{index, i}
		}
		numMap[num] = i
	}

	return []int{}
}

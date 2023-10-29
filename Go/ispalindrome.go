package Go

import (
	"strconv"
	"strings"
)

// Runtime 12 ms
// Memory 6.42 MB
func isPalindrome(x int) bool {
	chars := strings.Split(strconv.Itoa(x), "")
	for i, j := 0, len(chars)-1; i < j; i, j = i+1, j-1 {
		chars[i], chars[j] = chars[j], chars[i]
	}
	return strconv.Itoa(x) == strings.Join(chars, "")
}

// Runtime 17 ms
// Memory 4.36 MB
func alternativeIsPalindrome(x int) bool {
	reminder := 0
	reverse := 0

	if 0 > x {
		return false
	}

	for i := x; 0 < i; i = int(i / 10) {
		reminder = i % 10
		reverse = reverse*10 + reminder
	}

	return x == reverse
}

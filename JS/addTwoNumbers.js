// Runtime 83 ms
// Memory 47.54 MB
let addTwoNumbers = function(l1, l2) {
    let dummy = new ListNode();
    let carry = 0;
    let current = dummy;

    while (l1 || l2 || carry) {
        let sum = carry;

        if (l1) {
            sum += l1.val;
            l1 = l1.next;
        }

        if (l2) {
            sum += l2.val;
            l2 = l2.next;
        }

        carry = Math.floor(sum / 10);
        let digit = sum % 10;

        current.next = new ListNode(digit);
        current = current.next;
    }

    return dummy.next;
};
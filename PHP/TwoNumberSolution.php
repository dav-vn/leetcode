<?php

class TwoNumberSolution
{
    // Runtime: 7 ms
    // Memory: 19.33 MB
    function addTwoNumbers($l1, $l2)
    {
        $dummy = new ListNode();
        $current = $dummy;
        $carry = 0;

        while ($l1 || $l2 || $carry) {
            $sum = $carry;

            if ($l1) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }

            if ($l2) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }

            $carry = (int)($sum / 10);
            $digit = $sum % 10;

            $current->next = new ListNode($digit);
            $current = $current->next;
        }

        return $dummy->next;
    }
}
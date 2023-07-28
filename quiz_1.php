<?php
/**
 *
 * PHP 7.1 and up required
 *
 * @param $nums
 * @return array
 */
function permutationUnique($nums): array
{
    $result = [];
    $n = count($nums);

    // Check if - print empty result
    if (!(1 <= $n && $n <= 8) && !are_all_elements_in_range($nums, -10, 10))
        {
            return $result;
        }

    // This will help us to skip duplicates during iteration
    sort($nums);

    // Initialize the first permutation.
    // This is the first thing comes to my mind when read the task!
    $result[] = $nums;

    // Maybe not a super-puper good idea to use infinty loop but
    // anyway I am sure it should work as needed!
    while (true)
    {
        $i = $n - 2;

        // Find the first index i from the right where $nums[i] < $nums[i + 1]
        while ($i >= 0 && $nums[$i] >= $nums[$i + 1])
        {
            $i--;
        }

        // If i is negative, it means all permutations have been generated.
        // Yeah, this is the only way to end the loop)
        if ($i < 0)
        {
            break;
        }

        // Find the first index j from the right where $nums[i] < $nums[j]
        $j = $n - 1;
        while ($j > $i && $nums[$j] <= $nums[$i])
        {
            $j--;
        }

        // Swap elements at indices i and j
        [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];

        // Reverse the elements from index i + 1 to the end to get the next permutation
        reverse($nums, $i + 1, $n - 1);

        // New permutation has been found
        $result[] = $nums;
    }

    return $result;
}

/**
 *
 * I can't pretend to be creative writing this function)))
 * There are tons of implementations such of things
 * starting from the college tasks from informatic
 *
 * @param $nums
 * @param $start
 * @param $end
 * @return void
 */
function reverse(&$nums, $start, $end)
{
    while ($start < $end) {
        [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
        $start++;
        $end--;
    }
}

/**
 * @param int $value
 * @param int $min
 * @param int $max
 * @return bool
 */
function is_in_range(int $value, int $min, int $max): bool
{
    return $value >= $min && $value <= $max;
}

/**
 *
 * This is for checking constraints
 *
 * @param array $array
 * @param int $min
 * @param int $max
 * @return bool
 */
function are_all_elements_in_range(array $array, int $min, int $max): bool
{
    foreach ($array as $value) {
        if (!is_in_range($value, $min, $max)) {
            return false;
        }
    }

    return true;
}

// Small tests just to be sure
$nums1 = [1, 1, 2];
$result1 = permutationUnique($nums1);
print_r($result1);


$nums2 = [1, 2, 3];
$result2 = permutationUnique($nums2);
print_r($result2);
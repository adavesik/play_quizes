# Quiz 1

Given a collection of numbers,	nums , that might contain duplicates, return all possible unique permutations in any order.
### Example 1:
**Input:** nums = [1, 1, 2]
**Output:** [[1, 1, 2], [1, 2, 1], [2, 1, 1]]
### Example 2:
**Input:** nums = [1, 2, 3]
**Output:** [[1,2,3], [1, 3,2], [2,1,3], [2, 3, 1], [3, 1, 2], [3, 2, 1]]

**Constraints:**
1 <= nums.length <= 8 
-10 <= nums[i] <= 10

The main idea was using [lexicographically ascending order][lexi] approach when generating the permutation tuples.
All other details could be explained during tech interview (of course, in case if it could be at all).

# Quiz 2

Given a string of round, curly, and square open and closing brackets, return whether the brackets are balanced (well-formed).
### For example:
**Given the string**  [] ( { } ) " should return true.
**Given the string** ( [ ) ] or ( ( ( ) should return false.

> HA! This kind of taskswe did when were student
> and has a work to write a lexical parser
> for any "invented" programming language!
> So... this was done with pleasure))

Thanks!

## License

MIT

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

[lexi]: <https://math.stackexchange.com/questions/3964249/permutations-in-lexicographic-order>

<?php

/**
 * @param $str
 * @return bool
 */
function areBracketsBalanced($str)
{
    // I am going to use SPL to make the function more graceful and eye-catching;)))
    $stack = new SplStack();
    $brackets = [
        '(' => ')',
        '{' => '}',
        '[' => ']'
    ];

    for ($i = 0; $i < strlen($str); $i++)
    {
        $char = $str[$i];

        // Keep opening brackets in the stack
        if (in_array($char, array_keys($brackets)))
        {
            $stack->push($char);
        }
        // Otherwise closing ones
        elseif (in_array($char, array_values($brackets)))
        {
            if ($stack->isEmpty()) // if only closing brackets encountered
            {
                return false;
            }
            else
            {
                // Checking if closing matches the last opening bracket in the stack
                $lastBracket = $stack->pop();
                if ($brackets[$lastBracket] !== $char)
                {
                    return false;
                }
            }
        }
    }

    // If the stack is empty so all opening brackets were able to find their closing friend;);)
    return $stack->isEmpty();
}

// Test cases
echo areBracketsBalanced("(you") ? "true\n" : "false\n";     // Output: false
echo areBracketsBalanced("(D]") ? "true\n" : "false\n";      // Output: false
echo areBracketsBalanced("(0") ? "true\n" : "false\n";       // Output: false
echo areBracketsBalanced("(){}[]") ? "true\n" : "false\n";   // Output: true
echo areBracketsBalanced("{[()]}") ? "true\n" : "false\n";   // Output: true
echo areBracketsBalanced("{{{{}}") ? "true\n" : "false\n";   // Output: false


echo areBracketsBalanced("( [ ] ) [ ] ( { } )") ? "true\n" : "false\n";   // Output: true
echo areBracketsBalanced("( ( ( ) )") ? "true\n" : "false\n";   // Output: false
# PHP Foreach Loop Pass-by-Reference Bug
This example demonstrates a common pitfall in PHP when using pass-by-reference in `foreach` loops with arrays containing mixed data types.  The code intends to convert all string values to lowercase; however, it only affects string elements, leaving other data types untouched. This behavior might be surprising to developers unfamiliar with PHP's reference handling.
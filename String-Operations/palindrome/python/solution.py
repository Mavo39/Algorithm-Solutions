def isPalindrome(stringInput):
    s = stringInput.replace(" ", "").lower()
    left = 0
    right = len(s)-1

    while left < right:
        if s[left] != s[right - left]:
            return False
        left += 1

    return True
function isPalindrome(stringInput){
    let cleanedString = stringInput.replace(/\s/g, "").toLowerCase();
    let rightIndex = cleanedString.length - 1;
    let leftIndex = 0;

    while(leftIndex < rightIndex){
        if(cleanedString[leftIndex] != cleanedString[rightIndex - leftIndex]){
            return false;
        }
        leftIndex++;
    }
    return true;
}

module.exports = isPalindrome;

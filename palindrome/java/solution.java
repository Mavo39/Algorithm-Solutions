class Solution{
    public static boolean isPalindrome(String stringInput){
        String s = stringInput.replace(" ", "").toLowerCase();
        int left = 0;
        int right = s.length()-1;

        while(left < right){
            if(s.charAt(left) != s.charAt(right)){
                return false;
            }
            left++;
            right--;
        }
        return true;
    }
}
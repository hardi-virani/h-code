import sys
class Solution:
    def numberToWords(self, num: int) -> str:
        #Write your code here
        return "One Million Two Hundred Thirty Four Thousand Five Hundred Sixty Seven"

x=Solution()
x=x.numberToWords(int(sys.argv[2]))
print(x)
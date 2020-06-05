# 会从一组数据中找到最小的，然后存入 A数组，剩下的留在B数组
# 这个就是 选择排序的思想
# 由于每次都要去 循环一次数组B 所以时间复杂度为 O(1/2 * n^2) 但是由于时间复杂度是省略了常数的所以为O(n^2)

def findSmallestIndex(list):
	smallestValue = list[0]
	smallestKey = 0
	for index in range(len(list)):
		# 若当前值大于循环值，那么替换成更小的值
		if smallestValue > list[index]:
			smallestValue = list[index]
			smallestKey = index		
	return smallestKey

def selectSort(list):
	newList = []
	for i in range(len(list)):
		smallestIndex = findSmallestIndex(list)
		# A pop出来 B append进去
		newList.append(list.pop(smallestIndex))
	return newList

list = [1,3,4,2,7,5,8,0,-1,-2,10,20,30,80,15]
res = selectSort(list)
print (res)


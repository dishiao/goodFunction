# 搜索list中的某个数
def binnary_search(list, item):
	low = 0
	high = len(list) - 1
	count = 0
	while low <= high:
		count = count + 1 
		mid = low + high
		guess = list[mid]
		# 移动 low 和 high 的位置
		if guess == item:
			return mid, count
		elif guess > item:
			high = mid - 1
		elif guess < item:
			low = mid + 1
			
	return None
			
list = [1, 2, 3, 4, 5, 6, 7, 8, 9]
# item1 = -1
item2 = 3
# res1, count1 = binnary_search(list, item1)
res2, count2 = binnary_search(list, item2)
# print (res1, count1)
print (res2, count2)

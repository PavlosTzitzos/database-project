import urllib.request
address = urllib.request.urlopen('https://www.tutorialspoint.com/')
print(address.read())



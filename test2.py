# -*- coding: utf-8 -*-
import requests
from bs4 import BeautifulSoup

url = 'https://th.wikipedia.org/wiki/กระทรวงในประเทศไทย'

r = requests.get(url)
data = r.text
soup = BeautifulSoup(data,'html.parser')
div = soup.find('all')
print(div)
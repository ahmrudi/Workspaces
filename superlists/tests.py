from selenium import webdriver

browser=webdriver.Firefox()
browser.get('http://localhost:80')

assert 'Ahmad Rudi' in browser.title, "Broser title was " + browser.title

browser.quit()
		

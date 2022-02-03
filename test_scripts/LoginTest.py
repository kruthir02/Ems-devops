from selenium import webdriver
from time import sleep


def test_login():
    try:
        driver = webdriver.Chrome(r"D:\chrome driver\chromedriver_win32\chromedriver.exe")
        sleep(3)
        driver.get('http://localhost/EMS-main/index.php')
        sleep(3)
        login_xpath = "/html/body/header/nav/div/ul/button"
        sleep(3)
        login_button = driver.find_element_by_xpath(login_xpath)
        login_button_text = 'Login'
        assert login_button_text == login_button.text
        login_button.click()
        sleep(3)
        driver.find_element_by_xpath('/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/div[1]/input').send_keys('Apoorva')
        driver.find_element_by_xpath('/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/div[2]/input').send_keys('apoorva')
        sleep(3)
        login_xpath = "/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/button"
        login_button = driver.find_element_by_xpath(login_xpath)
        login_button.click()

        sleep(3)

    finally:
        driver.close()
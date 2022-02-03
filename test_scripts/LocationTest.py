from selenium import webdriver
from time import sleep


def test_locations():
    driver = webdriver.Chrome(r"D:\chrome driver\chromedriver_win32\chromedriver.exe")
    driver.get('http://localhost/EMS-main/index.php')
    sleep(3)
    about_xpath = '/html/body/header/nav/div/ul/li[2]/a'
    about_text = 'Locations'
    about_menu = driver.find_element_by_xpath(about_xpath)
    assert about_text == about_menu.text, "text not matching"
    print('expected text is matching')
    about_menu.click()
    print('Opening Locations page...')
    total_height = int(driver.execute_script("return document.body.scrollHeight"))

    for i in range(1, total_height, 1):
        driver.execute_script("window.scrollTo(0, {});".format(i))

    sleep(3)
    driver.close()
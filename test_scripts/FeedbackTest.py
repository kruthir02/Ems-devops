from selenium import webdriver
from time import sleep


def test_for_feedback():
    try:
        driver = webdriver.Chrome(r"D:\chrome driver\chromedriver_win32\chromedriver.exe")
        driver.get('http://localhost/EMS-main/index.php')
        sleep(3)
        login_xpath = "/html/body/header/nav/div/ul/button"

        sleep(3)
        login_button = driver.find_element_by_xpath(login_xpath)
        login_button_text = 'Login'
        assert login_button_text == login_button.text
        login_button.click()
        sleep(3)
        driver.find_element_by_xpath(
            '/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/div[1]/input').send_keys('Manasa')
        driver.find_element_by_xpath(
            '/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/div[2]/input').send_keys('manasa')
        sleep(3)
        login_xpath = "/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/button"
        login_button = driver.find_element_by_xpath(login_xpath)
        login_button.click()
        sleep(3)

        Feedback_xpath = "/html/body/div/div/a"
        Feedback_button = driver.find_element_by_xpath(Feedback_xpath)
        Feedback_text = 'Feedback'
        assert Feedback_text == Feedback_button.text
        Feedback_button.click()

        Add_review_xpath = "/html/body/div/div/a"
        Add_review_button = driver.find_element_by_xpath(Add_review_xpath)
        Add_review_text = 'Add review'
        assert Add_review_text == Add_review_button.text
        Add_review_button.click()

        driver.find_element_by_name('Username').send_keys('Manasa B Reddy')
        driver.find_element_by_name('Rev').send_keys('5')
        driver.find_element_by_name('Comment').send_keys('Good Service')

        Add_feedback_xpath = "/html/body/div/div/form/button"
        Add_feedback_button = driver.find_element_by_xpath(Add_feedback_xpath)
        Add_feedback_button.click()

        Review_xpath = "/html/body/ul/li[7]/a"
        Review_button = driver.find_element_by_xpath(Review_xpath)
        Review_text = 'Reviews'
        assert Review_text == Review_button.text
        Review_button.click()



    finally:
        driver.close()
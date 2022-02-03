from selenium import webdriver
from time import sleep
def test_for_booking():
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
        driver.find_element_by_xpath('/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/div[1]/input').send_keys('Manasa')
        driver.find_element_by_xpath('/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/div[2]/input').send_keys('manasa')
        sleep(3)
        login_xpath = "/html/body/header/nav/div/ul/div/div/div/div[2]/div/div/form/button"
        login_button = driver.find_element_by_xpath(login_xpath)
        login_button.click()
        sleep(3)
        booking_xpath='/html/body/header/nav/div/ul/li[6]/a'
        booking_button = driver.find_element_by_xpath(booking_xpath)
        booking_button_text = 'Bookings'
        assert booking_button_text == booking_button.text
        booking_button.click()
        sleep(3)

        Book_an_event_xpath = "/html/body/div/div/a"
        Book_an_event_button = driver.find_element_by_xpath(Book_an_event_xpath)
        Book_an_event_text = 'Book an Event'
        assert Book_an_event_text == Book_an_event_button.text
        Book_an_event_button.click()
        driver.find_element_by_name('FullName').send_keys('Manasa B Reddy')
        driver.find_element_by_name('Username').send_keys('Manasa')
        driver.find_element_by_name('Email').send_keys('pass2@gmail.com')
        driver.find_element_by_name('Events').send_keys('Birthday')
        driver.find_element_by_name('Venue').send_keys('white nirvana')
        driver.find_element_by_name('EventDate').send_keys('28-03-2022')
        driver.find_element_by_name('NoOfHeads').send_keys('50')
        driver.find_element_by_name('Decoration').send_keys('Balloon')
        driver.find_element_by_name('FoodStyle').send_keys('South Indian')


        Book_now_xpath = "/html/body/div/div/form/button"
        Book_now_button = driver.find_element_by_xpath(Book_now_xpath)
        Book_now_button.click()

        Bookings_xpath = "/html/body/ul/li[6]/a"
        Bookings_button = driver.find_element_by_xpath(Bookings_xpath)
        Bookings_text = 'Bookings'
        assert Bookings_text == Bookings_button.text
        Bookings_button.click()

    finally:
        driver.close()
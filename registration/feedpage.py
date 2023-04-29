import requests
import time
from selenium import webdriver
import undetected_chromedriver as uc
from time import sleep
from urllib.parse import urljoin
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import TimeoutException
from selenium.webdriver.chrome.options import Options

import json
import numpy as np
import tqdm.auto as tqdm
import contextlib
from bs4 import BeautifulSoup

class LinkScrapperPersonal():
    def __init__(self):
        self.start_driver()
        self.Scrap()
        self.makeFeedPage()
        self.driver.close()

    def Scrap(self):
        self.login()
        sleep(3)
        self.foryou = self.keyWordScrap()
        self.follow = self.keyWordScrap("Following")
        self.ml = self.keyWordScrap("Machine Learning")
        self.dl = self.keyWordScrap("Deep Learning")
        self.math = self.keyWordScrap("Math")
        self.coding = self.keyWordScrap("Coding")

    def titltFormater(self, title):
        remove_chars = ['[', ']', '/', '`', '?', '"', "'", '…', '.', ',', '’', '‘', '\n', '“', '”', ':', '：', '，']
        replace_with_space = [':']

        for char in replace_with_space:
            title = title.replace(char, ' ')

        for char in remove_chars:
            title = title.replace(char, '')
        title = '_'.join(title.split())

        return title
        
    def start_driver(self):
        options = Options()
        options.add_argument('--disable-gpu')
        options.add_argument("--no-sandbox")
        options.add_argument('--start-maximized')
        self.driver = uc.Chrome(exec_file = "/home/dibya/Dibyendu/Test/HTML/selenium/chromedriver/linux64/109.0.5414.74/chromedriver",options = options)
    
    def details(self, new_url):

        Soup = BeautifulSoup(requests.get(new_url).content, 'html.parser')
        title = Soup.find('title').getText().split("|")[0]
        date = Soup.find_all('p', class_="pw-published-date")[0].getText()
        author = Soup.find_all('div', class_='pw-author')[0].find_all('div', class_='ab')[0].getText()[:-6]
        read_time = Soup.find_all('div', class_="pw-reading-time")[0].getText()
        art = Soup.find_all('article')[0].find_all('picture')
        try:
            image = art[0].find_all('source')[0]['srcset'].split()[0]
        except Exception:
            image = "assets/images/mbr.jpg"
        return title, date, read_time, image, author

    def getContentLinks(self):

        # Set sleep time for the page to load on scroll
        SCROLL_PAUSE_TIME = 2

        # Get scroll height
        last_height = self.driver.execute_script("return document.body.scrollHeight")

        # If you want to limit the number of scroll loads, add a limit here
        scroll_limit = 5

        count = 0
        while count < scroll_limit:
            # Scroll down to bottom
            self.driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")

            # Wait to load page
            sleep(SCROLL_PAUSE_TIME)

            # Calculate new scroll height and compare with last scroll height
            new_height = self.driver.execute_script("return document.body.scrollHeight")
            if new_height == last_height:
                break
            last_height = new_height
            count += 1

        sleep(3) 
        r = self.driver.page_source
        soup = BeautifulSoup(r, features='lxml')

        all_links = soup.find_all("a")
        link_list = [all_links[i]['href'] for i in range(len(all_links)) if "aria-label" in all_links[i].attrs.keys() and all_links[i]['aria-label'] == "Post Preview Title"]

        all_contents = soup.find_all("a")
        content_list = [all_contents[i].find_all('p')[0].getText() for i in range(len(all_contents)) if "aria-label" in all_contents[i].attrs.keys() and all_contents[i]['aria-label'] == "Post Preview Title"]

        return link_list, content_list

    def keyWordScrap(self, keyword = None):
        ml_list = []
        if keyword:
            self.driver.execute_script("arguments[0].click();", WebDriverWait(self.driver, 20).until(EC.element_to_be_clickable((By.XPATH, f"//button[text()='{keyword}']"))))
            sleep(5)
        l, c = self.getContentLinks()
        for i, link in enumerate(l):
            if i > 24:
                break
            url = f'https://medium.com{link}'
            t, d, r_t, im, a = self.details(url)
            ml_list.append([t, d, r_t, im, a, c[i], url])
        return ml_list


    def scroll_down(self, elem, num):
        for _ in range(num):
            time.sleep(.1)
            elem.send_keys(Keys.PAGE_DOWN)

    def login(self):
        self.driver.get('https://medium.com')
        r0 = self.driver.find_elements(By.CLASS_NAME, 'ax')
        for elem in r0:
            if elem.text == "Sign In":
                self.driver.execute_script("arguments[0].click();", elem)

        r = self.driver.find_elements(By.CLASS_NAME, 'bu')
        for elem in r:
            if elem.text == "Sign in with Google":
                self.driver.execute_script("arguments[0].click();", elem)
                break
        sleep(5)
        self.click_login('//*[@id="identifierId"]', '1999dibyam', '//*[@id="identifierNext"]/div/button/span', 5)

        self.click_login('//*[@id="password"]/div[1]/div/div[1]/input', "Ansv@1098", '//*[@id="passwordNext"]/div/button/span', 5)


    # TODO Rename this here and in `login`
    def click_login(self, arg0, arg1, arg2, arg3):
        a = self.driver.find_element(By.XPATH, arg0)
        a.send_keys(arg1)
        self.driver.find_element(By.XPATH, arg2).click()
        sleep(arg3)

    def getOne(self, image, title, content, date, file, author):
        
        return f"""<div class="item features-image сol-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src={image} alt="Image" loading="lazy" 
                                    title="">
                            </div>
                            <div class="item-content">
                                <h5 class="text-muted" style="font-size:15px; float:left;">
                                    <strong>{author}</strong>
                                    <em>&nbsp;{date}</em>
                                </h5>
                                <br>
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>{title}</strong>
                                </h6>
                                <p class="ff3">{content}...</p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2 text-center">
                                <a class="slide btn text-center" id="button" href="{file}" >&nbsp;</a></div>
                        </div>
                    </div>"""
    
    def formatDate(self, date):
        return datetime.datetime.strptime(date,  '%b %d, %Y').strftime('%Y-%m-%d')

    def GetDiv(self, detail_list, idx):
        forYou_text = f"""<section data-bs-version="5.1" class="content2 cid-sFAOw5Fdod" id="content2-e" style="padding-top: 0px; padding-bottom: 0px;"><div id="{idx}" style="display:none" class="container"><div class="row mt-4">"""
        for i in range(len(detail_list)):
            title = detail_list[i][0]
            date = detail_list[i][1]
            image = detail_list[i][3]
            author = detail_list[i][4]
            content = detail_list[i][5]
            file = f'Personal/{self.titltFormater(title)}.php'
            forYou_text += self.getOne(title=title, date=date, image=image, author=author, content=content, file = file)
        forYou_text += """</div></div></section>"""
        return forYou_text

    def makeFeedPage(self):
        forYouText = self.GetDiv(self.foryou, 'forYou')
        followText = self.GetDiv(self.follow, 'follow')
        mlText = self.GetDiv(self.ml, 'ml')
        dlText = self.GetDiv(self.dl, 'dl')
        mathText = self.GetDiv(self.math, 'math')
        codeText = self.GetDiv(self.coding, 'coding')
        header = open("Elemental/feed_header.html").read()
        footer = open("Elemental/feed_footer.html").read()
        with open("feed_page2.html", "w") as f :
            f.write(header + forYouText + followText +  mlText + dlText + mathText + codeText + footer)
        personal_links = []
        all_lists = [self.foryou, self.follow, self.ml, self.dl, self.math, self.coding]
        for lists in all_lists:
            personal_links.extend(elem[-1] for elem in lists)
        self.personal_links = personal_links


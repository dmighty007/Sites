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

from mediumscrapper import ScrapeWebsite 
#from feedpage import LinkScrapperPersonal


plinks = open("personal_links.txt").readlines()
#l = LinkScrapperPersonal()
#l.driver.close()
#plinks = l.personal_links

Scrappable = ScrapeWebsite()
curl = "https://medium.com/analytics-vidhya/confusion-matrix-accuracy-precision-recall-f1-score-ade299cf63cd"
Scrappable.DoScrap(curl, save_dir="./Personal/") 

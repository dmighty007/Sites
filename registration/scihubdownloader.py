import bibtexparser
import contextlib
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
import undetected_chromedriver as uc
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait
import subprocess as sp
import numpy as np
import json
import time
from tqdm import tqdm
from tqdm.auto import trange
from joblib import Parallel, delayed

class SciHub:
    def __init__(self,  bibtex_file, json_file, download_folder):
        options = Options()
        options.add_argument('--headless')
        options.add_argument('--disable-gpu')
        options.add_argument("--no-sandbox")
        options.add_argument('window-size=1920x1080')
        self.driver = uc.Chrome(exec_file = "/home/dibya/Dibyendu/Test/HTML/selenium/chromedriver/linux64/109.0.5414.74/chromedriver",options = options)
        with open(bibtex_file) as bibfile:
            self.bib_db = bibtexparser.load(bibfile)
        self.json_file = json_file
        self.download_folder = download_folder

    def downloadLink(self, url):
        self.driver.get(url)
        try:
            button = WebDriverWait(self.driver, 20).until(EC.element_to_be_clickable((By.XPATH, "//button[text()='↓ save']")))
        except Exception:
            time.sleep(10)
            self.driver.get(url)
            button = WebDriverWait(self.driver, 20).until(EC.element_to_be_clickable((By.XPATH, "//button[text()='↓ save']")))        

        down_str = button.get_attribute('onclick')
        down_link = down_str.split('href=')[1].replace("'", "")
        down_link = down_link.replace('?download=true', "")
        if down_link.startswith("//"):
            down_link = down_link[2:]
        elif down_link.startswith("/"):
            down_link = f'https://sci-hub.ru{down_link}'
        else:
            down_link = down_link
        return down_link

    def fileDownloader(self, doi):
        #cmd = f'cd {self.download_folder} && wget {down_link}'
        #result = sp.run([cmd], shell=True, stderr=sp.DEVNULL, stdout=sp.DEVNULL)
        file_name = 
        cmd =f"scidownl download --doi {doi}--out ./paper/paper-1.pdf"
    def single_fetcher(self, i):
        with contextlib.suppress(Exception):
            url = "https://sci-hub.ru/" + self.bib_db.entries[i]['doi']
            with contextlib.suppress(Exception):
                dlink = self.downloadLink(url)
                #allLinks.append(dlink)
                flink = dlink.split("/")[-1]
                #file_json[i] = flink
                time.sleep(np.random.randint(10))
                return dlink, flink

    
    def download(self):
        file_json = {}
        allLinks = []
        #for i in tqdm(range(len(self.bib_db.entries)), desc="Fetching details: "):
            #with contextlib.suppress(Exception):
                #url = "https://sci-hub.ru/" + self.bib_db.entries[i]['doi']
                #with contextlib.suppress(Exception):
                #    dlink = self.downloadLink(url)
                #    allLinks.append(dlink)
                #    flink = dlink.split("/")[-1]
                #    file_json[i] = flink
        #results = Parallel(n_jobs=8, backend = "threading")(delayed(self.single_fetcher)(i) for i in trange(len(self.bib_db.entries)))
        #dlink, flink = self.single_fetcher(i)
        print(results)
                #time.sleep(np.random.randint(10))
        #with open(self.json_file, "w") as f:
        #    f.write(json.dumps(file_json))
        #for i in tqdm(range(len(allLinks)), desc="Downloading files: "):
        #    self.fileDownloader(allLinks[i])

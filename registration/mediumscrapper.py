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

string_start_article='''<section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">'''

string_end_article =  '''</div></div></div></section>'''

string_start_figure = '''<section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper">'''
string_end_figure = '''<br></div></div></div></div></section>'''

string_start_header = '''<section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>'''
string_end_header = '''</div></div></div></section>'''
separator = '''<section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section>'''

start_string_multi_figure ="""<section data-bs-version="5.1" class="gallery3 cid-ttaWMCQCls" id="gallery3-7" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container" style="width:60%;">"""
start_string_multi_figure_item = '''
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper" >
                    <div class="item-img">'''
end_string_multi_figure_item ='''</div></div></div>'''

end_string_multi_figure ='''</div></div></section>'''


class ScrapeWebsite:
    def __init__(self):
        self.string_start_article='''<section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9">'''

        self.string_end_article =  '''</div></div></div></section>'''

        self.string_start_figure = '''<section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="image-wrapper">'''
        self.string_end_figure = '''<br></div></div></div></div></section>'''

        self.string_start_header = '''<section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>'''
        self.string_end_header = '''</div></div></div></section>'''
        self.separator = '''<section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                    <br>
                        <hr class="hr5">
                    <br>
                    </div>
                </div>
            </div>
        </section>'''

        self.header = '''<!DOCTYPE html>
                <html>
                <head>
                    <title>Will_You_Come_Back_Mum_said_you_were_soft_tender_and</title>

                <!--Include header-->
                <!--<include src="../assets/template/header.html" />-->
                <?php include_once 'Personal/header.php'; ?>'''
        self.footer = '''<?php include_once 'Personal/footer.php'; ?>'''


    def start_driver(self):
        options = Options()
        options.add_argument("--headless")
        options.add_argument('window-size=1920x1080')
        self.driver = webdriver.Chrome(options=options)
        #self.driver = uc.Chrome(exec_file = "/home/dibya/Dibyendu/Test/HTML/selenium/chromedriver/linux64/109.0.5414.74/chromedriver",options = options)
    def close_driver(self):
        self.driver.close()

    def GiveR(self, url):
        """
        Returns the contents of a webpage provided by the link
        Uses Selenium to scrap dynamically.

        Args:
            url (str): url of the the site to scrap.

        Returns:
            r : content of the webpage 
        """    
        self.driver.get(url)
        scroll_pause_time = 0.5
        
        # Get the total height of the scrollable area
        last_height = self.driver.execute_script("return document.body.scrollHeight")

        screen_height = self.driver.execute_script("return window.screen.height;")   # get the screen height of the web
        i = 1
        while True:
            # scroll one screen height each time
            self.driver.execute_script("window.scrollTo(0, {screen_height}*{i});".format(screen_height=screen_height, i=i))  
            i += 1
            time.sleep(scroll_pause_time)

            # update scroll height each time after scrolled, as the scroll height can change after we scrolled the page
            scroll_height = self.driver.execute_script("return document.body.scrollHeight;")  
            # Break the loop when the height we need to scroll to is larger than the total scroll height
            if (screen_height) * i > scroll_height:
                break
        time.sleep(5)
        r = self.driver.page_source
        current_url = self.driver.current_url
        return r, current_url
        
    def ShortR(self, url):
        """
        Returns the contents of a webpage provided by the link
        Uses Selenium to scrap dynamically..

        Args:
            url (str): url of the the site to scrap..

        Returns:
            r : content of the webpage 
        """    
        self.driver.get(url)

        r = self.driver.page_source
        current_url = self.driver.current_url
        return r, current_url
    def GiveAuthor(self, S):
        item = S.find('div', class_="pw-author")
        for elem in item:
            for fund in elem:
                for child in fund:
                    if child.name != 'span':
                        for grandchild in child:
                            Auth_Link = grandchild['href']
                            Auth_Name = grandchild.getText()
                            return Auth_Name, Auth_Link

    def getPRE(self, url):
        """Provided url returns <pre> contents..

        Args:
            url (str): url of the webpage

        Returns:
            (str): <pre> content of the webpage 
        """    
        ir, _ = self.ShortR(url)
        all_as = BeautifulSoup(ir, features="html.parser").find_all("a")
        returnable = url
        if len(all_as) > 0:
            for a_s in all_as:
                if a_s.getText() == "view raw":
                    src = a_s.get("href")
                    git, _ = self.ShortR(src)
                    git_soup = BeautifulSoup(git, features="lxml")
                    git_pre = git_soup.find_all('pre')
                    if len(git_pre):
                        returnable = git_pre[0].getText()
                        flag = True
                        break
                    else:
                        flag = False
                else:
                    flag = False
        else:
            flag = False  
        return returnable, flag 

    def formatedPTag(self, caption, source="https://medium.com"):
        cap_text = ""
        for item in caption:
            if item.name is None:
                cap_text += item.getText().replace('<', '&lt;').replace('>', '&gt;')
            elif item.name =="a":
                src = item['href']
                if src.startswith("/"):
                    src = source + src
                text = item.getText().replace('<', '&lt;').replace('>', '&gt;')
                ht_cont = f'<a href="{src}" target="_self">{text}</a>'
                cap_text += ht_cont
            elif item.name == "div":
                try:
                    sp = item.find("a")
                    src = sp['href']
                    if src.startswith("/"):
                        src = source + src
                    text = sp.getText().replace('<', '&lt;').replace('>', '&gt;')
                    ht_cont = f'<a style="color:green" href="{src}" target="_self">{text}</a>'
                    cap_text += ht_cont
                except Exception:
                    text = item.getText()
                    cap_text += ht_cont
            else:
                tag = item.name 
                text = item.getText().replace('<', '&lt;').replace('>', '&gt;')
                ht_cont = f'<{tag}>{text}</{tag}>'
                cap_text += ht_cont
        return cap_text

    def processPicture(self, picture):
        text = ""
        text += start_string_multi_figure_item
        figure = picture
        src = list(figure.children)[0].get('srcset').split()[-2]
        text += f'<img alt="" loading="lazy" role="presentation" src="{src}">'
        text += end_string_multi_figure_item
        return text 
    def multiFigure(self, f):  # sourcery skip: identity-comprehension, low-code-quality
        all_names = [ch7.name for ch7 in f]
        all_elem = [ch7 for ch7 in f]
        #print(all_names)
        if 'figure' in all_names:
            all_text = [start_string_multi_figure]
            if all_names[0] != 'figure' and all_elem[0].name in ["h1", "h2", "h3"]:
                text_add = ""
                try:
                    for small in elem[0]:
                        if small.name is None:
                            text_add += small.getText()
                        elif small.name == "a":
                            src = small.extract()['href']
                            if src.startswith("/"):
                                src += f"https://medium.com{src}"
                            text_add += f'<{small.name} href="{src}"> {small.getText()} </{small.name}>'
                        else:
                            text_add += f'<{small.name}> {small.getText()} </{small.name}>'
                except Exception:
                    text_add = all_elem[0].getText()


                all_text.extend((string_start_article, '<h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5">' + text_add.replace('<', '&lt;').replace('>', '&gt;') + '</h4>', string_end_article))

            all_text.append('<div class="row mt-4">')


            for ch7 in f:
                if ch7.name == 'figure':

                    for ch8 in ch7:
                        pic =ch8.find('picture')

                        if ch8.name in ["h1", "h2", "p", "h3", "h4"]:
                            fig_title = f'''<div class="mbr-section-head">
                                    <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">{ch8.getText().replace('<', '&lt;').replace('>', '&gt;')}</h5>
                                    </div>'''
                            all_text.append(fig_title)

                        if pic:
                            #print("Hi")
                            all_text.append(start_string_multi_figure_item)
                            figure = pic
                            src = list(figure.children)[0].get('srcset').split()[-2]
                            all_text.extend(('<img src =' + '"' + src + '" style="height:auto; max-width: 100%;">', end_string_multi_figure_item))

                        elif ch8.name == 'figcaption':
                            all_text.append('<p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">' + ch8.getText().replace('<', '&lt;').replace('>', '&gt;') + "</p>")
                            
                        all_text.append("<br>")
            all_text.append(end_string_multi_figure)
            return "".join(all_text)

    def figFormat(self, a):
        myText = ''
        picture = a.find('picture')
        caption = a.find('figcaption')
        iframe = a.find('iframe')
        myText += string_start_figure
        if picture:
            sources = picture.find_all('source')
            src_text = "".join(str(source) for source in sources)
            img = picture.find('img')
            width = float(a.find('img').extract()['width'])
            per_width = int(100*width/700) - 4
            img_text = f'<div class="image_style" style="width:{per_width}%;"><picture>{src_text}'
            img_src = img['src']
            img_text += f'<img alt="" loading="lazy" role="presentation" src="{img_src}"></picture></div>'
            myText += img_text 

        if iframe:
            src = iframe['src']
            if src.startswith("/"):
                src += "https://medium.com"
            pre_data, flag = self.getPRE(src)
            if flag:
                idata = f'<pre>{pre_data}</pre>'
                myText += '<div class="iframe">' +idata +  '</div>'
            elif "youtube" in src or "twitter" in src:
                width = float(iframe.extract()['width'])
                height = float(iframe.extract()['height'])
                per_width = 80
                idata = f'<div class="image_style" style="width:{per_width}%;">'
                idata += f'<iframe  scrolling="auto" width="{width}" height="{height}" frameborder="0" src="{src}" allowfullscreen=""></iframe></div><br>'
                myText += idata
            else:
                myText += f'{string_start_article}<p class="ff3" style="font-size:22px;"><a href="{src}">Click Here!</a></p>{string_end_article}'

        if caption:
            cap_text = '<p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">' 
            cap_text += self.formatedPTag(caption)
            cap_text += "</p>"
            myText += cap_text

        myText += string_end_figure

        return myText
        
    # paraFormat function

    def paraFormat(self, a, source = "https://medium.com" ):
        """
        This function formats an input string into a paragraph HTML tag with a given class name.
        
        Parameters:
        self (object) - the object of the containing class
        a (string) - the input string to be formatted 
        source (string) - optional parameter with a default value for the source URL

        Returns:
        myText (string) - the resulting string containing the formated HTML tag
        """

        # Create empty string
        myText = ""

        # Begin formating p-tag HTML block
        myText += string_start_article
        myText += '<p class="ff3" style="font-size:22px;">'
        myText += self.formatedPTag(a)
        myText += '</p>'
        myText += string_end_article

        # Return the resulting string
        return myText


    def listFormat(self, a, source = "https://medium.com"):
        """
        Create an HTML list element based on parameter a.
        
        Parameters
        ----------
        a : list
            The list to be formatted.
        source : str
            The source of the list.
            
        Returns
        -------
        myText : str
            The HTML formated list element.
        """
        myText = ""
        myText += string_start_article
        name = a.name  # Get the type of list
        myText += f'<{name}>' # Start the list
        for elem in a:  # Iterate through items in the list
            myText += '<li class="ff3" style="font-size:22px;">' # Create element tag
            myText += self.formatedPTag(elem)  # Format the element
            myText += '</li>'  # Closing tag for the element
        myText += f'</{name}>'  # Close the list
        myText += string_end_article
        return myText

        
    def preFormat(self, a):
        for attr in ['data-selectable-paragraph', 'class', 'id']:
            for tag in a.find_all(attrs={attr: True}):
                del tag[attr]
        del a["class"]
        return  string_start_figure + '<div class="iframe">' + str(a) +  '</div>' + string_end_figure

    def blockquoteFormat(self, a):
        myText = '''<section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote>'''
        myText += '<p class="ff4">'
        #for elem in a:
        for elem in a:
            if elem.name == "p":
                myText += self.formatedPTag(elem)
            else:
                tag = elem.name 
                text = elem.getText().replace('<', '&lt;').replace('>', '&gt;')
                myText += f'<{tag}>{text}</{tag}>'
        myText += '</p>'

        myText += '''</blockquote></div></div></section>'''
        return myText

    def tagFormat(self, a, source = "https://medium.com" ):
        myText = ""
        myText += string_start_article
        if a.name == "h1":
            myText += '<h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">' 
        elif a.name == "h2":
            myText += '<h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">' 
        #for elem in a:
        myText += self.formatedPTag(a)
        myText += '</h4>'
        myText += string_end_article
        return myText

    def PreFace(self, soup):
        name , link = self.GiveAuthor(self.Soup)
        if link.startswith('/'):
            source = 'https://medium.com'
            link = source + link
        preface = f'<h5> This article is reformatted from originally published at <a href="{self.curl}"><strong>TDS(Towards Data Science)</strong></a></h5></br>' + f'<h5> <a href="{link}">' + "Author : " + name + '</a> </h5>'

        return f'{string_start_article}<br><br>{preface}{string_end_article}'

    def insider_link(self, item, source = "https://medium.com"):
        return_text = ""
        href = item.extract()['href']
        if href.startswith('/'):
            href = source+href

        return_text += string_start_article
        return_text += f'<div class="sketchy"><a href="{href}">'

        if h2 := item.find('h2'):
            return_text += '<h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">' + h2.getText().replace('<', '&lt;').replace('>', '&gt;') + '</h2>'
        if h3 := item.find('h3'):
            return_text += '<h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">' + h3.getText().replace('<', '&lt;').replace('>', '&gt;') + '</h3>'
        #p = item.find('p')
        if p := item.find('p'):
            return_text += f'<p>{p.getText()}</p>'
        return_text += '</a></div>'
        return_text += string_end_article
        return_text +='<br>'
        
        return return_text

    def articleTitle(self, children):
        if children.extract()['class'][0] == 'pw-post-title' :
            self.title = children.getText().replace('<', '&lt;').replace('>', '&gt;')
            ht_cont = self.string_start_header  + children.getText().replace('<', '&lt;').replace('>', '&gt;') + '</h3>'
            self.html_content += ht_cont
            self.html_content += string_end_header
        if children.extract()['class'][0] == 'pw-subtitle-paragraph' :
            ht_cont = string_start_article 
            ht_cont += '<h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">' + children.getText().replace('<', '&lt;').replace('>', '&gt;') + '</h4>'
            self.html_content += ht_cont
            self.html_content += string_end_article

    def scrape(self):  # sourcery skip: low-code-quality

        source = "https://medium.com"

        formats = {
            'figure': self.figFormat,
            'p': self.paraFormat,
            'ul': self.listFormat,
            'ol': self.listFormat,
            'pre': self.preFormat,
            'blockquote': self.blockquoteFormat,
            'h1' : self.tagFormat,
            'h2' : self.tagFormat,
        }

        self.check = []
        for element in self.section:
            for ele in element:
                if ele.name == "div":
                    try:
                        if ele['role'] == "separator":
                            self.html_content += separator
                    except Exception:
                        for item in ele:
                            if item.name is not None and item.name in formats:
                                ht_cont = formats[item.name](item)
                                self.html_content += ht_cont

                            elif item.name is None:
                                self.html_content += string_start_article + item.getText() + string_end_article
                            elif item.name == "div":
                                children_name = [elem.name for elem in item]
                                #print(children_name)
                                if "figure" not in children_name:
                                    for children in item:
                                        with contextlib.suppress(Exception):
                                            #articleTitle(children)
                                            if children.extract()['class'][0] == 'pw-post-title' :
                                                self.title = children.getText().replace('<', '&lt;').replace('>', '&gt;')
                                                ht_cont = self.string_start_header  + children.getText().replace('<', '&lt;').replace('>', '&gt;') + '</h3>'
                                                self.html_content += ht_cont
                                                self.html_content += string_end_header
                                            if children.extract()['class'][0] == 'pw-subtitle-paragraph' :
                                                ht_cont = string_start_article 
                                                ht_cont += '<h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">' + children.getText().replace('<', '&lt;').replace('>', '&gt;') + '</h4>'
                                                self.html_content += ht_cont
                                                self.html_content += string_end_article
                                        if children.name =="a":
                                            self.html_content += self.insider_link(children)
                                else:
                                    self.check.append(item)
                                    self.html_content += self.multiFigure(item)




    def titltFormater(self, title):
        remove_chars = ['[', ']', '/','?', '`', '"', "'", '…', '.', ',', '’', '‘', '\n', '“', '”', ':', '：', '，']
        replace_with_space = [':']

        for char in replace_with_space:
            title = title.replace(char, ' ')

        for char in remove_chars:
            title = title.replace(char, '')
        title = '_'.join(title.split())

        return title
    
    def DoScrap(self, url, save_dir = ""):
        self.start_driver()
        self.url = url
        self.R, self.curl = self.GiveR(self.url)
        self.Soup = BeautifulSoup(self.R, features='html.parser')
        self.article = self.Soup.find('article')
        self.section = self.article.find('section')
        self.html_content = ""
        self.scrape()
        self.header = f'''<!DOCTYPE html>
                <html>
                <head>
                    <title>{self.title}</title>
                <?php include_once 'Elemental/header.php'; ?>'''
        self.footer = '''<?php include_once 'Elemental/footer.php'; ?>'''
        fname = self.titltFormater(self.title)
        with open(f"{save_dir}/{fname}.php", "w") as f:
            f.write(self.header)
            f.write(self.PreFace(self.Soup))
            f.write(self.html_content)
            f.write(self.footer)
        self.close_driver()

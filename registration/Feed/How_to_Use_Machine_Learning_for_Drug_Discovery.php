<!DOCTYPE html>
                <html>
                <head>
                    <title>How to Use Machine Learning for Drug Discovery</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/how-to-use-machine-learning-for-drug-discovery-1ccb5fdf81ad"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://data-professor.medium.com/?source=post_page-----1ccb5fdf81ad--------------------------------">Author : Chanin Nantasenamat</a> </h5></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*sB2d1x_0GoP64Zd0aHkacQ.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*sB2d1x_0GoP64Zd0aHkacQ.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*sB2d1x_0GoP64Zd0aHkacQ.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*sB2d1x_0GoP64Zd0aHkacQ.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*sB2d1x_0GoP64Zd0aHkacQ.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*sB2d1x_0GoP64Zd0aHkacQ.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*sB2d1x_0GoP64Zd0aHkacQ.gif 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*sB2d1x_0GoP64Zd0aHkacQ.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*sB2d1x_0GoP64Zd0aHkacQ.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*sB2d1x_0GoP64Zd0aHkacQ.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*sB2d1x_0GoP64Zd0aHkacQ.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*sB2d1x_0GoP64Zd0aHkacQ.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*sB2d1x_0GoP64Zd0aHkacQ.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*sB2d1x_0GoP64Zd0aHkacQ.gif 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*sB2d1x_0GoP64Zd0aHkacQ.gif"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Customised a Graphics (with license) by <a href="https://elements.envato.com/user/wowomnom" target="_self">wowomnom</a> on <a href="https://elements.envato.com/" target="_self">Envato Elements</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><a href="https://medium.com/tag/data-science" target="_self">Data Science</a></h4></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>How to Use Machine Learning for Drug Discovery</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">A Step-by-Step Practical Bioinformatics Tutorial</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">1. Introduction</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We have probably seen the application of machine learning in one form or another. For instance, machine learning have been used together with computer vision in self-driving cars and self-checkout convenience stores, in retail for market basket analysis (i.e. finding products that are usually purchased together), in entertainment for recommendation systems and the list goes on.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This represents the first article of the <strong>Bioinformatics Tutorial</strong> series (Thanks <a style="color:green" href="https://medium.com/u/983bdeefa40e?source=post_page-----1ccb5fdf81ad--------------------------------" target="_self">Jaemin Lee</a> for the suggestion on developing my articles into a series!). In this article, I will explore how machine learning is being used for drug discovery particularly by showing you step-by-step how to build a simple regression model in Python for predicting the solubility of molecules (<em>i.e.</em> LogS values). It should be noted that the <em>solubility</em> of drugs is an important physicochemical property in drug discovery, design and development. Herein, we will be reproducing a research article entitled <a href="https://pubs.acs.org/doi/10.1021/ci034243x" target="_self">“ESOL: Estimating Aqueous Solubility Directly from Molecular Structure”</a> by John S. Delaney.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The idea for this notebook was inspired by the excellent blog post on <a href="http://practicalcheminformatics.blogspot.com/2018/09/predicting-aqueous-solubility-its.html" target="_self">“Predicting Aqueous Solubility — It’s Harder Than It Looks”</a> by Pat Walters where he reproduced the linear regression model with similar degree of performance as that of Delaney. This example was also briefly described in the book <a href="https://amzn.to/3cBOap1" target="_self">“Deep Learning for the Life Sciences: Applying Deep Learning to Genomics, Microscopy, Drug Discovery, and More”</a> where Walters was a co-author.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A tutorial video showing the implementation described herein is provided in this YouTube video <a href="https://www.youtube.com/watch?v=VXFFHHoE1wk" target="_self">“Data Science for Computational Drug Discovery using Python”</a>:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:80%;"><iframe  scrolling="auto" width="854.0" height="480.0" frameborder="0" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FVXFFHHoE1wk%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DVXFFHHoE1wk&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FVXFFHHoE1wk%2Fhqdefault.jpg&key=a19fcc184b9711e1b4764040d3dc5c07&type=text%2Fhtml&schema=youtube" allowfullscreen=""></iframe></div><br><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Table of Contents</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">1. <a href="#d952" target="_self">Introduction</a><br></br>2. <a href="#b61f" target="_self">Materials</a><br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‎2.1.<a href="#834d" target="_self"> Computing environmen</a>t<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎2.2.<a href="#d106" target="_self"> Installing prerequisite Python librar</a>y<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎2.3.<a href="#0277" target="_self"> Datase</a>t<br></br>3. <a href="#5ebf" target="_self">Methods</a><br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎3.1.<a href="#0277" target="_self"> Datase</a>t<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.1.1. Read in the dataset<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.1.2. Examining the SMILES data<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎3.2.<a href="#7eb0" target="_self"> Working with SMILES strin</a>g<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.2.1. Convert a molecule from the SMILES string to an rdkit object<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.2.2. Working with the rdkit object<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.2.3. Convert list of molecules to rdkit object<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎3.3.<a href="#823f" target="_self"> Calculate molecular descriptor</a>s<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.3.1. Calculating LogP, MW and RB descriptors<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.3.2. Calculating the aromatic proportion<br></br>‎‎‎‎‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎3.3.2.1. Number of aromatic atoms<br></br> ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎3.3.2.2. Number of heavy atoms<br></br> ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎ ‎‏‏‎‎3.3.2.3. Computing the aromatic proportion (AP) descriptor<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎3.4.<a href="#63e3" target="_self"> Dataset preparation</a><br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.4.1. Creating the X matrix<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎3.4.2. Creating the Y matrix<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎3.5.<a href="#f0d7" target="_self"> Data split</a><br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎3.6.<a href="#885b" target="_self"> Linear regression model</a><br></br>4. <a href="#804e" target="_self">Results</a><br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎4.1.<a href="#b1bb" target="_self"> Linear Regression Model</a><br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎4.1.1. Predict the LogS value of X_train data<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎4.1.2. Predict the LogS value of X_test data<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎4.2.<a href="#063b" target="_self"> Comparing the Linear Regression Equation</a><br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎4.3.<a href="#a65b" target="_self"> Deriving the Linear Regression Equatio</a>n<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎4.3.1. Based on the Train set<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎4.3.2. Based on the Full dataset (for comparison)<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎4.4.<a href="#de0c" target="_self"> Scatter plot of experimental vs. predicted Log</a>S<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‎4.4.1. Vertical Plot<br></br>‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎4.4.2. Horizontal Plot</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">2. Materials</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Coming from an academic background, one of the most important part of a research paper to retrieve information regarding how an experiment is conducted would have to be the <em>Materials and Methods</em> section as it will essentially tell us what materials are needed as well as what was done and how to do it. So in this section, I will be discussing about what you need to get started.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">2.1. Computing environment</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Firstly, decide whether you would like to work on a local computer or on the cloud. If you decide to work on a local computer then any computer that you can install Python and Jupyter notebook (I recommend installing <a href="https://docs.conda.io/projects/conda/en/latest/user-guide/install/" target="_self">conda</a> or <a href="https://www.anaconda.com/products/individual" target="_self">Anaconda</a>) should suffice. If you decide to work on the cloud then head over to <a href="https://colab.research.google.com/" target="_self">Google Colab</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">2.2. Installing prerequisite Python library</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The rdkit library is a Python library that allows us to handle chemical structures and the calculation of their molecular properties (<em>i.e.</em> for quantitating the molecular features of each molecule that we can subsequently use in the development of a machine learning model).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now install the rdkit library, fire up a New Notebook and make sure to create a <strong>text cell</strong> that contains the following text:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong># Install rdkit</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Immediately underneath this text cell, you want to create a new code cell and populate that with the following blocks of code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>! wget https://repo.anaconda.com/miniconda/Miniconda3-py37_4.8.2-Linux-x86_64.sh <br/>! chmod +x Miniconda3-py37_4.8.2-Linux-x86_64.sh <br/>! bash ./Miniconda3-py37_4.8.2-Linux-x86_64.sh -b -f -p /usr/local <br/>! conda install -c rdkit rdkit -y <br/>import sys <br/>sys.path.append('/usr/local/lib/python3.7/site-packages/')</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And the above 2 cells should look like the following screenshot below:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*KUQLZt-f2rsK3VRuFyHnRw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*KUQLZt-f2rsK3VRuFyHnRw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*KUQLZt-f2rsK3VRuFyHnRw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*KUQLZt-f2rsK3VRuFyHnRw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*KUQLZt-f2rsK3VRuFyHnRw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*KUQLZt-f2rsK3VRuFyHnRw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*KUQLZt-f2rsK3VRuFyHnRw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*KUQLZt-f2rsK3VRuFyHnRw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*KUQLZt-f2rsK3VRuFyHnRw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*KUQLZt-f2rsK3VRuFyHnRw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*KUQLZt-f2rsK3VRuFyHnRw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*KUQLZt-f2rsK3VRuFyHnRw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*KUQLZt-f2rsK3VRuFyHnRw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*KUQLZt-f2rsK3VRuFyHnRw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*KUQLZt-f2rsK3VRuFyHnRw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Rendering of the above 2 cells (text and code cell).</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">2.3. Data set</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now download the Delaney solubility dataset that is available as a <a href="https://pubs.acs.org/doi/suppl/10.1021%2Fci034243x" target="_self">Supplementary file</a> of the paper <a href="https://pubs.acs.org/doi/10.1021/ci034243x" target="_self">ESOL: Estimating Aqueous Solubility Directly from Molecular Structure</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Download data set</strong><br></br>Download this into the Jupyter notebook as follows:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>! wget </strong><mark><strong>https://raw.githubusercontent.com/dataprofessor/data/master/delaney.csv</strong></mark></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">3. Methods</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">3.1. Dataset</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.1.1. Read in the dataset</strong><br></br>Read in the CSV data that we had downloaded from the above cell. Assign the data into the <code>sol</code> dataframe.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>import pandas as pd<br/>sol = pd.read_csv('delaney.csv')</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Displaying the <code>sol</code> dataframe gives us the following:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*rJ_CRYuKI6hshwpy2KnwCw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*rJ_CRYuKI6hshwpy2KnwCw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*rJ_CRYuKI6hshwpy2KnwCw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*rJ_CRYuKI6hshwpy2KnwCw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*rJ_CRYuKI6hshwpy2KnwCw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*rJ_CRYuKI6hshwpy2KnwCw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*rJ_CRYuKI6hshwpy2KnwCw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*rJ_CRYuKI6hshwpy2KnwCw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*rJ_CRYuKI6hshwpy2KnwCw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*rJ_CRYuKI6hshwpy2KnwCw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*rJ_CRYuKI6hshwpy2KnwCw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*rJ_CRYuKI6hshwpy2KnwCw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*rJ_CRYuKI6hshwpy2KnwCw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*rJ_CRYuKI6hshwpy2KnwCw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*rJ_CRYuKI6hshwpy2KnwCw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Contents of the <em>sol</em> dataframe.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.1.2. Examining the SMILES data</strong><br></br>Chemical structures are encoded by a string of text known as the <strong>SMILES</strong> notation which is an acronym for Simplified Molecular-Input Line-Entry System. Let’s have a look at the contents of the <em>SMILES</em> column from the <code>sol</code> dataframe.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>sol.SMILES</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Running the above cell will give us:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*QFWt52xLaQf7aIN5qjwLCg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*QFWt52xLaQf7aIN5qjwLCg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*QFWt52xLaQf7aIN5qjwLCg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*QFWt52xLaQf7aIN5qjwLCg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*QFWt52xLaQf7aIN5qjwLCg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*QFWt52xLaQf7aIN5qjwLCg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*QFWt52xLaQf7aIN5qjwLCg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*QFWt52xLaQf7aIN5qjwLCg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*QFWt52xLaQf7aIN5qjwLCg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*QFWt52xLaQf7aIN5qjwLCg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*QFWt52xLaQf7aIN5qjwLCg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*QFWt52xLaQf7aIN5qjwLCg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*QFWt52xLaQf7aIN5qjwLCg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*QFWt52xLaQf7aIN5qjwLCg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*QFWt52xLaQf7aIN5qjwLCg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Contents of sol.SMILES (the SMILES column in the sol dataframe).</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Each line represents a unique molecule. To select the first molecule (the first row), type <code>sol.SMILES[0]</code> and the output that we will see is <code>ClCC(Cl)(Cl)Cl</code>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">3.2. Working with SMILES string</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.2.1. Convert a molecule from the SMILES string to an rdkit object</strong><br></br>Let’s start by importing the necessary library function:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>from rdkit import Chem</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now, apply the <code>MolFromSmiles()</code> function to convert the SMILES string to an rdkit molecule object:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Chem.MolFromSmiles(sol.SMILES[0])</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This will yield the output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>&lt;rdkit.Chem.rdchem.Mol at 0x7f66f2e3e800&gt;</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.2.2. Working with the rdkit object</strong><br></br>Let’s perform a simple count of the number of atoms on the query SMILES string, which we first convert to an rdkit object followed by applying the <code>GetNumAtoms()</code> function.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>m = Chem.MolFromSmiles('ClCC(Cl)(Cl)Cl')<br/>m.GetNumAtoms()</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This produces an output of:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>6</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.2.3. Convert list of molecules to rdkit object</strong>But before we can do any descriptor calculation, we will first have to convert the SMILES string to rdkit object as mentioned above in section 3.2. Here we will do the same thing as described above but we will be making use of the <strong>for</strong> loop to iterate through the list of SMILES strings.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>from rdkit import Chem</strong></span><span><strong>mol_list= []<br/>for element in sol.SMILES:<br/>  mol = Chem.MolFromSmiles(element)<br/>  mol_list.append(mol)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Next, we will check that the newly rdkit objects are populating the mol_list variable or not.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>len(mol_list)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The above line returns:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>1144</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And this corresponds to 1,144 molecules. Now, we will have a look inside at the variable’s contents.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>mol_list[:5]</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This yields the following output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>[&lt;rdkit.Chem.rdchem.Mol at 0x7f66edb6d670&gt;,<br/> &lt;rdkit.Chem.rdchem.Mol at 0x7f66edb6d620&gt;,<br/> &lt;rdkit.Chem.rdchem.Mol at 0x7f66edb6d530&gt;,<br/> &lt;rdkit.Chem.rdchem.Mol at 0x7f66edb6d6c0&gt;,<br/> &lt;rdkit.Chem.rdchem.Mol at 0x7f66edb6d710&gt;]</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">3.3. Calculate molecular descriptors</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now represent each of the molecules in the dataset by a set of molecular descriptors that will be used for model building.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To predict <strong>LogS</strong> (log of the aqueous solubility), the study by Delaney makes use of 4 molecular descriptors:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;"><strong>cLogP</strong> <em>(Octanol-water partition coefficient)</em></li><li class="ff3" style="font-size:22px;"><strong>MW</strong> <em>(Molecular weight)</em></li><li class="ff3" style="font-size:22px;"><strong>RB</strong> <em>(Number of rotatable bonds)</em></li><li class="ff3" style="font-size:22px;"><strong>AP</strong> <em>(Aromatic proportion = number of aromatic atoms / number of heavy atoms)</em></li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Unfortunately, rdkit readily computes the first 3. As for the AP descriptor, we will calculate this by manually computing the ratio of the <em>number of aromatic atoms</em> to the <em>total number of heavy atoms</em> which rdkit can compute.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.3.1. Calculating LogP, MW and RB descriptors</strong>We will now create a custom function called <code>generate()</code> for computing the 3 descriptors LogP, MW and RB.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>import numpy as np<br/>from rdkit.Chem import Descriptors</strong></span><span><strong><em># Inspired by: https://codeocean.com/explore/capsules?query=tag:data-curation</em><br/><br/>def generate(smiles, verbose=False):<br/><br/>    moldata= []<br/>    for elem in smiles:<br/>        mol=Chem.MolFromSmiles(elem) <br/>        moldata.append(mol)<br/>       <br/>    baseData= np.arange(1,1)<br/>    i=0  <br/>    for mol in moldata:        <br/>       <br/>        desc_MolLogP = Descriptors.MolLogP(mol)<br/>        desc_MolWt = Descriptors.MolWt(mol)<br/>        desc_NumRotatableBonds = Descriptors.NumRotatableBonds(mol)<br/>           <br/>        row = np.array([desc_MolLogP,<br/>                        desc_MolWt,<br/>                        desc_NumRotatableBonds])   <br/>    <br/>        if(i==0):<br/>            baseData=row<br/>        else:<br/>            baseData=np.vstack([baseData, row])<br/>        i=i+1      <br/>    <br/>    columnNames=["MolLogP","MolWt","NumRotatableBonds"]   <br/>    descriptors = pd.DataFrame(data=baseData,columns=columnNames)<br/>    <br/>    return descriptors</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s apply the <code>generate()</code> function perform the actual descriptor calculation on <code>sol.SMILES</code> (the SMILES column from the <code>df</code> dataframe) and assign the descriptor output to the <code>df</code> variable.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>df = generate(sol.SMILES)<br/>df</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The output of the <code>df</code> dataframe is shown below.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9bEI_-Y5TdJazov0J9SerQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9bEI_-Y5TdJazov0J9SerQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9bEI_-Y5TdJazov0J9SerQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9bEI_-Y5TdJazov0J9SerQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9bEI_-Y5TdJazov0J9SerQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9bEI_-Y5TdJazov0J9SerQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*9bEI_-Y5TdJazov0J9SerQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9bEI_-Y5TdJazov0J9SerQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*9bEI_-Y5TdJazov0J9SerQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*9bEI_-Y5TdJazov0J9SerQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*9bEI_-Y5TdJazov0J9SerQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*9bEI_-Y5TdJazov0J9SerQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*9bEI_-Y5TdJazov0J9SerQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*9bEI_-Y5TdJazov0J9SerQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*9bEI_-Y5TdJazov0J9SerQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Contents of the df dataframe.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.3.2. Calculating the aromatic proportion</strong>As mentioned above, the equation for calculating the <em>aromatic proportion </em>is obtained by dividing the <em>number of aromatic atoms</em> by the <em>number of heavy atoms</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.3.2.1. Number of aromatic atoms</strong>Here, we will create a custom function to calculate the <strong>Number of aromatic atoms</strong>. With this descriptor we can use it to subsequently calculate the AP descriptor.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Example for computing the number of aromatic atoms for a single molecule.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>SMILES = 'COc1cccc2cc(C(=O)NCCCCN3CCN(c4cccc5nccnc54)CC3)oc21'</strong></span><span><strong>m = Chem.MolFromSmiles(SMILES)</strong></span><span><strong>aromatic_atoms = [m.GetAtomWithIdx(i).GetIsAromatic() for i in range(m.GetNumAtoms())]</strong></span><span><strong>aromatic_atoms</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This give the following output.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>[False,  False,  True,  True,  True,  True,  True,  True,  True,  False,  False,  False,  False,  False,  False,  False,  False,  False,  False,  False,  True,  True,  True,  True,  True,  True,  True,  True,  True,  True,  False,  False,  True,  True]</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now create a custom function called <code>AromaticAtoms()</code>.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>def AromaticAtoms(m):<br/>  aromatic_atoms = [m.GetAtomWithIdx(i).GetIsAromatic() for i in range(m.GetNumAtoms())]<br/>  aa_count = []<br/>  for i in aromatic_atoms:<br/>    if i==True:<br/>      aa_count.append(1)<br/>  sum_aa_count = sum(aa_count)<br/>  return sum_aa_count</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now, apply the <code>AromaticAtoms()</code> function to compute the number of aromatic atoms for a query SMILES string.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>AromaticAtoms(m)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The output is:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>19</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This means that there are 19 aromatic atoms (that is there are 19 atoms that are a part of aromatic rings).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now scale up and apply this to the entire SMILES list.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>desc_AromaticAtoms = [AromaticAtoms(element) for element in mol_list]</strong></span><span><strong>desc_AromaticAtoms</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now, print out the results.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>[0, 0, 0, 0, 0, 0, 0, 0, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 0, 6, 0, 0, 0, 0, 6, 6, 0, 6, 6, 6, 6, 6, 0, 6, 6, 0, 0, 6, 10, 6, 6, 0, 6, 6, 6, 6, 10, 6, 0, 10, 0, 14, 0, 0, 14, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, ...]</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Congratulations! We now have computed the number of aromatic atoms for the entire dataset.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.3.2.2. Number of heavy atoms</strong>Here, we will use an existing function from the rdkit library for calculating the number of heavy atoms.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Example for computing the number of heavy atoms for a single molecule.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>SMILES = 'COc1cccc2cc(C(=O)NCCCCN3CCN(c4cccc5nccnc54)CC3)oc21'<br/>m = Chem.MolFromSmiles(SMILES)<br/>Descriptors.HeavyAtomCount(m)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This yields the follow output.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>34</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s scale up to the entire SMILES list.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>desc_HeavyAtomCount = [Descriptors.HeavyAtomCount(element) for element in mol_list]<br/>desc_HeavyAtomCount</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now, print out the results.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>[6, 5, 6, 5, 8, 4, 4, 8, 10, 10, 10, 9, 9, 10, 10, 10, 9, 9, 9, 8, 8, 4, 8, 4, 5, 8, 8, 10, 12, 4, 9, 9, 9, 15, 8, 4, 8, 8, 5, 8, 8, 12, 12, 8, 6, 8, 8, 10, 8, 12, 12, 5, 12, 6, 14, 11, 22, 15, 5, ...]</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.3.2.3. Computing the aromatic proportion (AP) descriptor</strong>Let’s now combine the number of aromatic atoms and the number of heavy atoms together.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Example of computing for a single molecule.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>SMILES = 'COc1cccc2cc(C(=O)NCCCCN3CCN(c4cccc5nccnc54)CC3)oc21'<br/>m = Chem.MolFromSmiles(SMILES)<br/>AromaticAtoms(m)/Descriptors.HeavyAtomCount(m)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The output is:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>0.5588235294117647</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s scale up and compute for the entire SMILES list.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>desc_AromaticProportion = [AromaticAtoms(element)/Descriptors.HeavyAtomCount(element) for element in mol_list]<br/>desc_AromaticProportion</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This gives the output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>[0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.6, 0.6, 0.6, 0.6666666666666666, 0.6666666666666666, 0.6, 0.6, 0.6, 0.6666666666666666, 0.6666666666666666, 0.6666666666666666, 0.75, 0.75, 0.0, 0.75, 0.0, 0.0, 0.0, 0.0, 0.6, 0.5, 0.0, 0.6666666666666666, 0.6666666666666666, 0.6666666666666666, 0.4, 0.75, 0.0, 0.75, 0.75, 0.0, 0.0, 0.75, 0.8333333333333334, 0.5, 0.75, 0.0, 0.75, 0.75, 0.6, 0.75, 0.8333333333333334, 0.5, ...]</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now put this newly computed <strong>Aromatic Proportion</strong> descriptor into a dataframe.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ad3EbGTFwtkWVAbpQ32SKg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ad3EbGTFwtkWVAbpQ32SKg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ad3EbGTFwtkWVAbpQ32SKg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ad3EbGTFwtkWVAbpQ32SKg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ad3EbGTFwtkWVAbpQ32SKg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ad3EbGTFwtkWVAbpQ32SKg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ad3EbGTFwtkWVAbpQ32SKg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ad3EbGTFwtkWVAbpQ32SKg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ad3EbGTFwtkWVAbpQ32SKg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ad3EbGTFwtkWVAbpQ32SKg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ad3EbGTFwtkWVAbpQ32SKg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ad3EbGTFwtkWVAbpQ32SKg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ad3EbGTFwtkWVAbpQ32SKg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ad3EbGTFwtkWVAbpQ32SKg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ad3EbGTFwtkWVAbpQ32SKg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Contents of the Aromatic Proportion descriptor dataframe.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">3.4. Dataset preparation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.4.1. Creating the X matrix </strong>Let’s combine all computed descriptors from 2 dataframe into 1 dataframe. Before doing that, let’s take a look at the 2 dataframes (<code>df</code> and <code>df_desc_AromaticProportion</code>) that we will be combining and how the combined dataframe will look like as illustrated below.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*O750A4BB4vWVre2yf_sUhA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*O750A4BB4vWVre2yf_sUhA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*O750A4BB4vWVre2yf_sUhA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*O750A4BB4vWVre2yf_sUhA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*O750A4BB4vWVre2yf_sUhA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*O750A4BB4vWVre2yf_sUhA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*O750A4BB4vWVre2yf_sUhA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*O750A4BB4vWVre2yf_sUhA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*O750A4BB4vWVre2yf_sUhA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*O750A4BB4vWVre2yf_sUhA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*O750A4BB4vWVre2yf_sUhA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*O750A4BB4vWVre2yf_sUhA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*O750A4BB4vWVre2yf_sUhA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*O750A4BB4vWVre2yf_sUhA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*O750A4BB4vWVre2yf_sUhA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Illustration of combining the 2 descriptor-containing dataframes to form the X matrix.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s actually combine the 2 dataframes to produce the X matrix.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>X = pd.concat([df,df_desc_AromaticProportion], axis=1)<br/>X</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*PvQ1_A5conVgE7790Sow0Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*PvQ1_A5conVgE7790Sow0Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*PvQ1_A5conVgE7790Sow0Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*PvQ1_A5conVgE7790Sow0Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*PvQ1_A5conVgE7790Sow0Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*PvQ1_A5conVgE7790Sow0Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*PvQ1_A5conVgE7790Sow0Q.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*PvQ1_A5conVgE7790Sow0Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*PvQ1_A5conVgE7790Sow0Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*PvQ1_A5conVgE7790Sow0Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*PvQ1_A5conVgE7790Sow0Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*PvQ1_A5conVgE7790Sow0Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*PvQ1_A5conVgE7790Sow0Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*PvQ1_A5conVgE7790Sow0Q.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*PvQ1_A5conVgE7790Sow0Q.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Contents of the X matrix dataframe created by combining 2 dataframes.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>3.4.2. Creating the Y matrix</strong>The Y matrix will be created from 1 column that we are going to predict in this tutorial and this is the LogS value. In the <code>sol</code> dataframe, the LogS values are contained within the <code>measured log(solubility:mol/L)</code> column.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s have a look at the <code>sol</code> dataframe again.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>sol.head()</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Nbj1bGDKdS8bY__50q85qA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Nbj1bGDKdS8bY__50q85qA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Nbj1bGDKdS8bY__50q85qA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Nbj1bGDKdS8bY__50q85qA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Nbj1bGDKdS8bY__50q85qA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Nbj1bGDKdS8bY__50q85qA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Nbj1bGDKdS8bY__50q85qA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Nbj1bGDKdS8bY__50q85qA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Nbj1bGDKdS8bY__50q85qA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Nbj1bGDKdS8bY__50q85qA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Nbj1bGDKdS8bY__50q85qA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Nbj1bGDKdS8bY__50q85qA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Nbj1bGDKdS8bY__50q85qA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Nbj1bGDKdS8bY__50q85qA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Nbj1bGDKdS8bY__50q85qA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Contents of the sol dataframe with the LogS column highlighted.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The second column (index number of 1) corresponding to the measured solubility value (LogS) will be used as the Y matrix. Thus, we will select the second column (indicated in the above image by the blue highlight).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Y = sol.iloc[:,1]<br/>Y</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*EujX5YwCT-dulwMoFpb4LA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*EujX5YwCT-dulwMoFpb4LA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*EujX5YwCT-dulwMoFpb4LA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*EujX5YwCT-dulwMoFpb4LA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*EujX5YwCT-dulwMoFpb4LA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*EujX5YwCT-dulwMoFpb4LA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*EujX5YwCT-dulwMoFpb4LA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*EujX5YwCT-dulwMoFpb4LA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*EujX5YwCT-dulwMoFpb4LA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*EujX5YwCT-dulwMoFpb4LA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*EujX5YwCT-dulwMoFpb4LA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*EujX5YwCT-dulwMoFpb4LA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*EujX5YwCT-dulwMoFpb4LA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*EujX5YwCT-dulwMoFpb4LA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*EujX5YwCT-dulwMoFpb4LA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Contents of the Y matrix (LogS column).</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">3.5. Data split</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now proceed to performing data splitting using a split ratio of 80/20 (<em>i.e.</em> we do this by assigning the <code>test_size</code> parameter to 0.2) whereby 80% of the initial dataset will be used as the training set and the remaining 20% of the dataset will be used as the testing set.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>from sklearn.model_selection import train_test_split</strong></span><span><strong>X_train, X_test, Y_train, Y_test = train_test_split(X, Y,<br/>                                                    test_size=0.2)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">3.6. Linear regression model</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As the original study by Delaney and the investigation by Walters used linear regression for model building, therefore for comparability we will also be using linear regression as well.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>from sklearn import linear_model<br/>from sklearn.metrics import mean_squared_error, r2_score</strong></span><span><strong>model = linear_model.LinearRegression()<br/>model.fit(X_train, Y_train)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Upon running the above code block we will see the following output that essentially prints out the parameters used for model building.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LinearRegression(copy_X=True, fit_intercept=True, n_jobs=None, normalize=False)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">4. Results</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">4.1. Linear Regression Model</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>4.1.1. Predict the LogS value of X_train data</strong>The trained model from section 3.6 will be applied here to predict the LogS values of all samples (the molecules) in the training set (<code>X_train</code>).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Y_pred_train = model.predict(X_train)</strong></span><span><strong>print('Coefficients:', model.coef_)<br/>print('Intercept:', model.intercept_)<br/>print('Mean squared error (MSE): %.2f'<br/>      % mean_squared_error(Y_train, Y_pred_train))<br/>print('Coefficient of determination (R^2): %.2f'<br/>      % r2_score(Y_train, Y_pred_train))</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This generates the following prediction results.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Coefficients: [-0.7282008  -0.00691046  0.01625003 -0.35627645]<br/>Intercept: 0.26284383753800666<br/>Mean squared error (MSE): 0.99<br/>Coefficient of determination (R^2): 0.77</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s analyse the above output line by line:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">In the first line, <code>Coefficients</code> lists the regression coefficient values of each independent variables (i.e. the 4 molecular descriptors consisting of LogP, MW, RB and AP)</li><li class="ff3" style="font-size:22px;">In the second line, <code>Intercept</code> is essentially the y-intercept value where the regression line passes when X = 0.</li><li class="ff3" style="font-size:22px;">In the third line, <code>Mean squared error (MSE)</code> is used as an error measure (<em>i.e.</em> the lower the better).</li><li class="ff3" style="font-size:22px;">In the fourth line, <code>Coefficient of determination (R²)</code> is the squared value of Pearson’s correlation coefficient value and is used as a measure of goodness of fit for linear regression models (<em>i.e.</em> the higher the better)</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>4.1.2. Predict the LogS value of X_test data</strong>Next, the trained model from section 3.6 will also be applied here to predict the LogS values of all samples (the molecules) in the training set (<code>X_train</code>).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will print out the prediction performance as follows:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Y_pred_test = model.predict(X_test)</strong></span><span><strong>print('Coefficients:', model.coef_)<br/>print('Intercept:', model.intercept_)<br/>print('Mean squared error (MSE): %.2f'<br/>      % mean_squared_error(Y_test, Y_pred_test))<br/>print('Coefficient of determination (R^2): %.2f'<br/>      % r2_score(Y_test, Y_pred_test))</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The above code block produces the following prediction results.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Coefficients: [-0.7282008  -0.00691046  0.01625003 -0.35627645]<br/>Intercept: 0.26284383753800666<br/>Mean squared error (MSE): 1.11<br/>Coefficient of determination (R^2): 0.75</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">4.2. Comparing the Linear Regression Equation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The work of <a href="https://pubs.acs.org/doi/10.1021/ci034243x" target="_self">Delaney</a> provided the following linear regression equation:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LogS = 0.16 - 0.63 cLogP - 0.0062 MW + 0.066 RB - 0.74 AP</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The reproduction by <a href="http://practicalcheminformatics.blogspot.com/2018/09/predicting-aqueous-solubility-its.html" target="_self">Pat Walters</a> provided the following:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LogS = 0.26 - 0.74 LogP - 0.0066 MW + 0.0034 RB - 0.42 AP</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This tutorial’s reproduction gave the following equation:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Based on the Train set (shown below in section 4.3.1)</li></ul></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LogS =  0.26 - 0.73 LogP - 0.0069 MW 0.0163 RB - 0.36 AP</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Based on the Full dataset (shown below in section 4.3.2)</li></ul></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LogS =  0.26 - 0.74 LogP - 0.0066 MW + 0.0032 RB - 0.42 AP</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">4.3. Deriving the Linear Regression Equation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>4.3.1. Based on the Train set</strong><br></br>In the follow code block below we will be using the linear regression model constructed in section 3.6 whereby the Train set was used for model building. For your reference, I will put the code here:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>from sklearn import linear_model<br/>from sklearn.metrics import mean_squared_error, r2_score</strong></span><span><strong>model = linear_model.LinearRegression()<br/>model.fit(X_train, Y_train)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thus, we simply print out the equation directly from the previously built model contained within the <code>model</code> variable (<em>i.e.</em> by calling various columns of the model variable).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>yintercept = '%.2f' % model.intercept_<br/>LogP = '%.2f LogP' % model.coef_[0]<br/>MW = '%.4f MW' % model.coef_[1]<br/>RB = '%.4f RB' % model.coef_[2]<br/>AP = '%.2f AP' % model.coef_[3]</strong></span><span><strong>print('LogS = ' + <br/>      ' ' + <br/>      yintercept + <br/>      ' ' + <br/>      LogP + <br/>      ' ' + <br/>      MW + <br/>      ' ' + <br/>      RB + <br/>      ' ' + <br/>      AP)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Running the above code block gives the following equation output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LogS =  0.26 -0.73 LogP -0.0069 MW 0.0163 RB -0.36 AP</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>4.3.2. Based on the Full dataset (for comparison)</strong><br></br>Here we will be using the entire dataset to train a linear regression model. The <code>fit()</code> function allows the defined model in <code>full</code> (<em>i.e.</em> the linear regression model) to be trained by using X and Y data matrices as the input argument.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>full = linear_model.LinearRegression()<br/>full.fit(X, Y)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This produces the following output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LinearRegression(copy_X=True, fit_intercept=True, n_jobs=None, normalize=False)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now print out the prediction performance.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>full_pred = model.predict(X)</strong></span><span><strong>print('Coefficients:', full.coef_)<br/>print('Intercept:', full.intercept_)<br/>print('Mean squared error (MSE): %.2f'<br/>      % mean_squared_error(Y, full_pred))<br/>print('Coefficient of determination (R^2): %.2f'<br/>      % r2_score(Y, full_pred))</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This generates the following output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Coefficients: [-0.74173609 -0.00659927  0.00320051 -0.42316387]<br/>Intercept: 0.2565006830997185<br/>Mean squared error (MSE): 1.01<br/>Coefficient of determination (R^2): 0.77</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Finally, we will print out the linear regression equation.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>full_yintercept = '%.2f' % full.intercept_<br/>full_LogP = '%.2f LogP' % full.coef_[0]<br/>full_MW = '%.4f MW' % full.coef_[1]<br/>full_RB = '+ %.4f RB' % full.coef_[2]<br/>full_AP = '%.2f AP' % full.coef_[3]</strong></span><span><strong>print('LogS = ' + <br/>      ' ' + <br/>      full_yintercept + <br/>      ' ' + <br/>      full_LogP + <br/>      ' ' + <br/>      full_MW + <br/>      ' ' + <br/>      full_RB + <br/>      ' ' + <br/>      full_AP)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This yields the following output.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>LogS =  0.26 -0.74 LogP -0.0066 MW + 0.0032 RB -0.42 AP</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">4.4. Scatter plot of experimental vs. predicted LogS</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Before beginning, let’s do a quick check of the variable dimensions of Train and Test sets.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here we are checking the dimension of the Train set.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Y_train.shape, Y_pred_train.shape</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This produces the following dimension output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>((915,), (915,))</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here we are checking the dimension of the Test set.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Y_test.shape, Y_pred_test.shape</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This produces the following dimension output:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>((229,), (229,))</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>4.4.1. Vertical Plot</strong>Let’s now visualise the correlation of the Experimental LogS values with those of the Predicted LogS values by means of the scatter plot. We will be displaying the Experimental vs Predicted values of LogS separately in 2 scatter plots. In this first version, we will be stacking the 2 scatter plots vertically.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>import</strong> <strong>matplotlib.pyplot</strong> <strong>as</strong> <strong>plt</strong></span><span><strong>plt.figure(figsize=(5,11))<br/><br/><em># 2 row, 1 column, plot 1</em><br/>plt.subplot(2, 1, 1)<br/>plt.scatter(x=Y_train, y=Y_pred_train, c="#7CAE00", alpha=0.3)<br/><br/><em># Add trendline</em><br/><em># https://stackoverflow.com/questions/26447191/how-to-add-trendline-in-python-matplotlib-dot-scatter-graphs</em><br/>z = np.polyfit(Y_train, Y_pred_train, 1)<br/>p = np.poly1d(z)<br/>plt.plot(Y_test,p(Y_test),"#F8766D")<br/><br/>plt.ylabel('Predicted LogS')<br/><br/><br/><em># 2 row, 1 column, plot 2</em><br/>plt.subplot(2, 1, 2)<br/>plt.scatter(x=Y_test, y=Y_pred_test, c="#619CFF", alpha=0.3)<br/><br/>z = np.polyfit(Y_test, Y_pred_test, 1)<br/>p = np.poly1d(z)<br/>plt.plot(Y_test,p(Y_test),"#F8766D")<br/><br/>plt.ylabel('Predicted LogS')<br/>plt.xlabel('Experimental LogS')<br/><br/>plt.savefig('plot_vertical_logS.png')<br/>plt.savefig('plot_vertical_logS.pdf')<br/>plt.show()</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:44%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 336px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*0GXKMba_x5MF_XJ1syAFEg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*0GXKMba_x5MF_XJ1syAFEg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*0GXKMba_x5MF_XJ1syAFEg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*0GXKMba_x5MF_XJ1syAFEg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*0GXKMba_x5MF_XJ1syAFEg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*0GXKMba_x5MF_XJ1syAFEg.png 1100w, https://miro.medium.com/v2/resize:fit:672/format:webp/1*0GXKMba_x5MF_XJ1syAFEg.png 672w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 336px" srcset="https://miro.medium.com/v2/resize:fit:640/1*0GXKMba_x5MF_XJ1syAFEg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*0GXKMba_x5MF_XJ1syAFEg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*0GXKMba_x5MF_XJ1syAFEg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*0GXKMba_x5MF_XJ1syAFEg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*0GXKMba_x5MF_XJ1syAFEg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*0GXKMba_x5MF_XJ1syAFEg.png 1100w, https://miro.medium.com/v2/resize:fit:672/1*0GXKMba_x5MF_XJ1syAFEg.png 672w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/336/1*0GXKMba_x5MF_XJ1syAFEg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Scatter Plot of the Predicted vs Experimental LogS values (shown as a Vertical Plot).</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>4.4.2. Horizontal Plot</strong>In this second version, we will be laying the 2 scatter plots horizontally as shown in the following code block.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>import</strong> <strong>matplotlib.pyplot</strong> <strong>as</strong> <strong>plt</strong></span><span><strong>plt.figure(figsize=(11,5))<br/><br/><em># 1 row, 2 column, plot 1</em><br/>plt.subplot(1, 2, 1)<br/>plt.scatter(x=Y_train, y=Y_pred_train, c="#7CAE00", alpha=0.3)<br/><br/>z = np.polyfit(Y_train, Y_pred_train, 1)<br/>p = np.poly1d(z)<br/>plt.plot(Y_test,p(Y_test),"#F8766D")<br/><br/>plt.ylabel('Predicted LogS')<br/>plt.xlabel('Experimental LogS')<br/><br/><em># 1 row, 2 column, plot 2</em><br/>plt.subplot(1, 2, 2)<br/>plt.scatter(x=Y_test, y=Y_pred_test, c="#619CFF", alpha=0.3)<br/><br/>z = np.polyfit(Y_test, Y_pred_test, 1)<br/>p = np.poly1d(z)<br/>plt.plot(Y_test,p(Y_test),"#F8766D")<br/><br/>plt.xlabel('Experimental LogS')<br/><br/>plt.savefig('plot_horizontal_logS.png')<br/>plt.savefig('plot_horizontal_logS.pdf')<br/>plt.show()</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:91%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 671px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*7z_NBy44XoOz0eide7ia-w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*7z_NBy44XoOz0eide7ia-w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*7z_NBy44XoOz0eide7ia-w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*7z_NBy44XoOz0eide7ia-w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*7z_NBy44XoOz0eide7ia-w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*7z_NBy44XoOz0eide7ia-w.png 1100w, https://miro.medium.com/v2/resize:fit:1342/format:webp/1*7z_NBy44XoOz0eide7ia-w.png 1342w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 671px" srcset="https://miro.medium.com/v2/resize:fit:640/1*7z_NBy44XoOz0eide7ia-w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*7z_NBy44XoOz0eide7ia-w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*7z_NBy44XoOz0eide7ia-w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*7z_NBy44XoOz0eide7ia-w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*7z_NBy44XoOz0eide7ia-w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*7z_NBy44XoOz0eide7ia-w.png 1100w, https://miro.medium.com/v2/resize:fit:1342/1*7z_NBy44XoOz0eide7ia-w.png 1342w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/671/1*7z_NBy44XoOz0eide7ia-w.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Scatter Plot of the Predicted vs Experimental LogS values (shown as a Horizontal Plot).</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><a href="http://newsletter.dataprofessor.org/" target="_self">Subscribe to my Mailing List for my best updates (and occasionally freebies) in Data Science!</a></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <br>
                <hr class="hr5">
            <br>
            </div>
        </div>
    </div>
</section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">About Me</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I work full-time as an Associate Professor of Bioinformatics and Head of Data Mining and Biomedical Informatics at a Research University in Thailand. In my after work hours, I’m a YouTuber (AKA the <a href="http://bit.ly/dataprofessor/" target="_self">Data Professor</a>) making online videos about data science. In all tutorial videos that I make, I also share Jupyter notebooks on GitHub (<a href="https://github.com/dataprofessor/" target="_self">Data Professor GitHub page</a>).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://www.youtube.com/dataprofessor?sub_confirmation=1"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">Data Professor</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">Data Science, Machine Learning, Bioinformatics, Research and Teaching are my passion. The Data Professor YouTube…</h3><p>www.youtube.com</p></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Connect with Me on Social Network</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">✅ YouTube: <a href="http://youtube.com/dataprofessor/" target="_self">http://youtube.com/dataprofessor/</a><br></br>✅ Website: <a href="https://www.youtube.com/redirect?redir_token=w4MajL6v6Oi_kOAZNbMprRRJrvJ8MTU5MjI5NjQzN0AxNTkyMjEwMDM3&q=http%3A%2F%2Fdataprofessor.org%2F&event=video_description&v=ZZ4B0QUHuNc" target="_self">http://dataprofessor.org/</a> (Under construction)<br></br>✅ LinkedIn: <a href="https://www.linkedin.com/company/dataprofessor/" target="_self">https://www.linkedin.com/company/dataprofessor/</a><br></br>✅ Twitter: <a href="https://twitter.com/thedataprof" target="_self">https://twitter.com/thedataprof</a><br></br>✅ FaceBook: <a href="https://www.youtube.com/redirect?redir_token=w4MajL6v6Oi_kOAZNbMprRRJrvJ8MTU5MjI5NjQzN0AxNTkyMjEwMDM3&q=http%3A%2F%2Ffacebook.com%2Fdataprofessor%2F&event=video_description&v=ZZ4B0QUHuNc" target="_self">http://facebook.com/dataprofessor/</a><br></br>✅ GitHub: <a href="https://github.com/dataprofessor/" target="_self">https://github.com/dataprofessor/</a><br></br>✅ Instagram: <a href="https://www.instagram.com/data.professor/" target="_self">https://www.instagram.com/data.professor/</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Note from Towards Data Science’s editors:</strong><em> While we allow independent authors to publish articles in accordance with our </em><a href="https://medium.com/questions-96667b06af5" target="_self">rules and guidelines</a><em>, we do not endorse each author’s contribution. You should not rely on an author’s works without seeking professional advice. See our </em><a href="https://medium.com/readers-terms-b5d780a700a4" target="_self">Reader Terms</a><em> for details.</em></p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
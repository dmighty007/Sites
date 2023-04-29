<!DOCTYPE html>
                <html>
                <head>
                    <title>[資料分析&機器學習] 第5.1講: 卷積神經網絡介紹(Convolutional Neural Network)</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/jameslearningnote/%E8%B3%87%E6%96%99%E5%88%86%E6%9E%90-%E6%A9%9F%E5%99%A8%E5%AD%B8%E7%BF%92-%E7%AC%AC5-1%E8%AC%9B-%E5%8D%B7%E7%A9%8D%E7%A5%9E%E7%B6%93%E7%B6%B2%E7%B5%A1%E4%BB%8B%E7%B4%B9-convolutional-neural-network-4f8249d65d4f"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@yehjames?source=post_page-----4f8249d65d4f--------------------------------">Author : Yeh James</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>[資料分析&機器學習] 第5.1講: 卷積神經網絡介紹(Convolutional Neural Network)</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">卷積神經網絡(Convolutional Neural Network)簡稱CNN，CNN是所有深度學習課程、書籍必教的模型(Model)，CNN在影像識別方面的威力非常強大，許多影樣辨識的模型也都是以CNN的架構為基礎去做延伸。另外值得一提的是CNN模型也是少數參考人的大腦視覺組織來建立的深度學習模型，學會CNN之後，對於學習其他深度學習的模型也會很有幫助，本文將為示範如何使用CNN來達成99%正確度的手寫數字辨識。</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">CNN的概念圖如下：</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*irWQaiIjHS27ZAPaVDoj6w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*irWQaiIjHS27ZAPaVDoj6w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*irWQaiIjHS27ZAPaVDoj6w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*irWQaiIjHS27ZAPaVDoj6w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*irWQaiIjHS27ZAPaVDoj6w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*irWQaiIjHS27ZAPaVDoj6w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*irWQaiIjHS27ZAPaVDoj6w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*irWQaiIjHS27ZAPaVDoj6w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*irWQaiIjHS27ZAPaVDoj6w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*irWQaiIjHS27ZAPaVDoj6w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*irWQaiIjHS27ZAPaVDoj6w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*irWQaiIjHS27ZAPaVDoj6w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*irWQaiIjHS27ZAPaVDoj6w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*irWQaiIjHS27ZAPaVDoj6w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*irWQaiIjHS27ZAPaVDoj6w.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">CNN概念圖</p><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:76%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 560px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*RIBWK55dcDJa-zI_dFPDnw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*RIBWK55dcDJa-zI_dFPDnw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*RIBWK55dcDJa-zI_dFPDnw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*RIBWK55dcDJa-zI_dFPDnw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*RIBWK55dcDJa-zI_dFPDnw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*RIBWK55dcDJa-zI_dFPDnw.png 1100w, https://miro.medium.com/v2/resize:fit:1120/format:webp/1*RIBWK55dcDJa-zI_dFPDnw.png 1120w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 560px" srcset="https://miro.medium.com/v2/resize:fit:640/1*RIBWK55dcDJa-zI_dFPDnw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*RIBWK55dcDJa-zI_dFPDnw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*RIBWK55dcDJa-zI_dFPDnw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*RIBWK55dcDJa-zI_dFPDnw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*RIBWK55dcDJa-zI_dFPDnw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*RIBWK55dcDJa-zI_dFPDnw.png 1100w, https://miro.medium.com/v2/resize:fit:1120/1*RIBWK55dcDJa-zI_dFPDnw.png 1120w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/560/1*RIBWK55dcDJa-zI_dFPDnw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">CNN概念圖2</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">簡單來說，圖片經過各兩次的Convolution, Pooling, Fully Connected就是CNN的架構了，因此只要搞懂Convolution, Pooling, Fully Connected三個部分的內容就可以完全掌握了CNN！</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">1. Convolution Layer卷積層</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">卷積運算就是將原始圖片的與特定的Feature Detector(filter)做卷積運算(符號⊗)，卷積運算就是將下圖兩個3x3的矩陣作相乘後再相加，以下圖為例 0*0 + 0*0 + 0*1+ 0*1 + 1 *0 + 0*0 + 0*0 + 0*1 + 0*1 =0</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*CO0yrGvAE7jw6JfGqCMRPg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*CO0yrGvAE7jw6JfGqCMRPg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*CO0yrGvAE7jw6JfGqCMRPg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*CO0yrGvAE7jw6JfGqCMRPg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*CO0yrGvAE7jw6JfGqCMRPg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*CO0yrGvAE7jw6JfGqCMRPg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*CO0yrGvAE7jw6JfGqCMRPg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*CO0yrGvAE7jw6JfGqCMRPg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*CO0yrGvAE7jw6JfGqCMRPg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*CO0yrGvAE7jw6JfGqCMRPg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*CO0yrGvAE7jw6JfGqCMRPg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*CO0yrGvAE7jw6JfGqCMRPg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*CO0yrGvAE7jw6JfGqCMRPg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*CO0yrGvAE7jw6JfGqCMRPg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*CO0yrGvAE7jw6JfGqCMRPg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><strong>卷積運算</strong></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">依序做完整張表</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Klv6ebMkjVmAEP4XkMxTXQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Klv6ebMkjVmAEP4XkMxTXQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Klv6ebMkjVmAEP4XkMxTXQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Klv6ebMkjVmAEP4XkMxTXQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Klv6ebMkjVmAEP4XkMxTXQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Klv6ebMkjVmAEP4XkMxTXQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Klv6ebMkjVmAEP4XkMxTXQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Klv6ebMkjVmAEP4XkMxTXQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Klv6ebMkjVmAEP4XkMxTXQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Klv6ebMkjVmAEP4XkMxTXQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Klv6ebMkjVmAEP4XkMxTXQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Klv6ebMkjVmAEP4XkMxTXQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Klv6ebMkjVmAEP4XkMxTXQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Klv6ebMkjVmAEP4XkMxTXQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Klv6ebMkjVmAEP4XkMxTXQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;"><strong>卷積運算</strong></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">中間的Feature Detector(Filter)會隨機產生好幾種(ex:16種)，Feature Detector的目的就是幫助我們萃取出圖片當中的一些特徵(ex:形狀)，就像人的大腦在判斷這個圖片是什麼東西也是根據形狀來推測</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*AJeWQ88UnmfkJ4_sFOT-YA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*AJeWQ88UnmfkJ4_sFOT-YA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*AJeWQ88UnmfkJ4_sFOT-YA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*AJeWQ88UnmfkJ4_sFOT-YA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*AJeWQ88UnmfkJ4_sFOT-YA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*AJeWQ88UnmfkJ4_sFOT-YA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*AJeWQ88UnmfkJ4_sFOT-YA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*AJeWQ88UnmfkJ4_sFOT-YA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*AJeWQ88UnmfkJ4_sFOT-YA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*AJeWQ88UnmfkJ4_sFOT-YA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*AJeWQ88UnmfkJ4_sFOT-YA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*AJeWQ88UnmfkJ4_sFOT-YA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*AJeWQ88UnmfkJ4_sFOT-YA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*AJeWQ88UnmfkJ4_sFOT-YA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*AJeWQ88UnmfkJ4_sFOT-YA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">16種不同的Feature Detector</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>利用Feature Detector萃取出物體的邊界</mark></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*MlGDfnY5W0yjA2iHj8K4vg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*MlGDfnY5W0yjA2iHj8K4vg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*MlGDfnY5W0yjA2iHj8K4vg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*MlGDfnY5W0yjA2iHj8K4vg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*MlGDfnY5W0yjA2iHj8K4vg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*MlGDfnY5W0yjA2iHj8K4vg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*MlGDfnY5W0yjA2iHj8K4vg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*MlGDfnY5W0yjA2iHj8K4vg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*MlGDfnY5W0yjA2iHj8K4vg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*MlGDfnY5W0yjA2iHj8K4vg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*MlGDfnY5W0yjA2iHj8K4vg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*MlGDfnY5W0yjA2iHj8K4vg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*MlGDfnY5W0yjA2iHj8K4vg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*MlGDfnY5W0yjA2iHj8K4vg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*MlGDfnY5W0yjA2iHj8K4vg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">利用Feature Detector萃取出物體的邊界</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">使用Relu函數去掉負值，更能淬煉出物體的形狀</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*BZqw3CWuvtc7sNVjgcBPQg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*BZqw3CWuvtc7sNVjgcBPQg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*BZqw3CWuvtc7sNVjgcBPQg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*BZqw3CWuvtc7sNVjgcBPQg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*BZqw3CWuvtc7sNVjgcBPQg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*BZqw3CWuvtc7sNVjgcBPQg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*BZqw3CWuvtc7sNVjgcBPQg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*BZqw3CWuvtc7sNVjgcBPQg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*BZqw3CWuvtc7sNVjgcBPQg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*BZqw3CWuvtc7sNVjgcBPQg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*BZqw3CWuvtc7sNVjgcBPQg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*BZqw3CWuvtc7sNVjgcBPQg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*BZqw3CWuvtc7sNVjgcBPQg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*BZqw3CWuvtc7sNVjgcBPQg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*BZqw3CWuvtc7sNVjgcBPQg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*WktkCQ-k4RulZQZia5H6og.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*WktkCQ-k4RulZQZia5H6og.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*WktkCQ-k4RulZQZia5H6og.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*WktkCQ-k4RulZQZia5H6og.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*WktkCQ-k4RulZQZia5H6og.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*WktkCQ-k4RulZQZia5H6og.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*WktkCQ-k4RulZQZia5H6og.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*WktkCQ-k4RulZQZia5H6og.png 640w, https://miro.medium.com/v2/resize:fit:720/1*WktkCQ-k4RulZQZia5H6og.png 720w, https://miro.medium.com/v2/resize:fit:750/1*WktkCQ-k4RulZQZia5H6og.png 750w, https://miro.medium.com/v2/resize:fit:786/1*WktkCQ-k4RulZQZia5H6og.png 786w, https://miro.medium.com/v2/resize:fit:828/1*WktkCQ-k4RulZQZia5H6og.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*WktkCQ-k4RulZQZia5H6og.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*WktkCQ-k4RulZQZia5H6og.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*WktkCQ-k4RulZQZia5H6og.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*2knmpEV17Z1TXz5HN0oulg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*2knmpEV17Z1TXz5HN0oulg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*2knmpEV17Z1TXz5HN0oulg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*2knmpEV17Z1TXz5HN0oulg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*2knmpEV17Z1TXz5HN0oulg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*2knmpEV17Z1TXz5HN0oulg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*2knmpEV17Z1TXz5HN0oulg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*2knmpEV17Z1TXz5HN0oulg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*2knmpEV17Z1TXz5HN0oulg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*2knmpEV17Z1TXz5HN0oulg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*2knmpEV17Z1TXz5HN0oulg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*2knmpEV17Z1TXz5HN0oulg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*2knmpEV17Z1TXz5HN0oulg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*2knmpEV17Z1TXz5HN0oulg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*2knmpEV17Z1TXz5HN0oulg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">其他函數</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*L_YAWz3tZjWydNNZzHKxFQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*L_YAWz3tZjWydNNZzHKxFQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*L_YAWz3tZjWydNNZzHKxFQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*L_YAWz3tZjWydNNZzHKxFQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*L_YAWz3tZjWydNNZzHKxFQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*L_YAWz3tZjWydNNZzHKxFQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*L_YAWz3tZjWydNNZzHKxFQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*L_YAWz3tZjWydNNZzHKxFQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*L_YAWz3tZjWydNNZzHKxFQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*L_YAWz3tZjWydNNZzHKxFQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*L_YAWz3tZjWydNNZzHKxFQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*L_YAWz3tZjWydNNZzHKxFQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*L_YAWz3tZjWydNNZzHKxFQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*L_YAWz3tZjWydNNZzHKxFQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*L_YAWz3tZjWydNNZzHKxFQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">2. Pooling Layer 池化層</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">在Pooling Layer這邊主要是採用Max Pooling，Max Pooling的概念很簡單只要挑出矩陣當中的最大值就好，Max Pooling主要的好處是當圖片整個平移幾個Pixel的話對判斷上完全不會造成影響，以及有很好的抗雜訊功能。</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*-Yo6iC0S3QLWqgAPnV9knQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*-Yo6iC0S3QLWqgAPnV9knQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*-Yo6iC0S3QLWqgAPnV9knQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*-Yo6iC0S3QLWqgAPnV9knQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*-Yo6iC0S3QLWqgAPnV9knQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*-Yo6iC0S3QLWqgAPnV9knQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*-Yo6iC0S3QLWqgAPnV9knQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*-Yo6iC0S3QLWqgAPnV9knQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*-Yo6iC0S3QLWqgAPnV9knQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*-Yo6iC0S3QLWqgAPnV9knQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*-Yo6iC0S3QLWqgAPnV9knQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*-Yo6iC0S3QLWqgAPnV9knQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*-Yo6iC0S3QLWqgAPnV9knQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*-Yo6iC0S3QLWqgAPnV9knQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*-Yo6iC0S3QLWqgAPnV9knQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*CGwpxQT5kJho3CbDZy2Qkw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*CGwpxQT5kJho3CbDZy2Qkw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*CGwpxQT5kJho3CbDZy2Qkw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*CGwpxQT5kJho3CbDZy2Qkw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*CGwpxQT5kJho3CbDZy2Qkw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*CGwpxQT5kJho3CbDZy2Qkw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*CGwpxQT5kJho3CbDZy2Qkw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*CGwpxQT5kJho3CbDZy2Qkw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*CGwpxQT5kJho3CbDZy2Qkw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*CGwpxQT5kJho3CbDZy2Qkw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*CGwpxQT5kJho3CbDZy2Qkw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*CGwpxQT5kJho3CbDZy2Qkw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*CGwpxQT5kJho3CbDZy2Qkw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*CGwpxQT5kJho3CbDZy2Qkw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*CGwpxQT5kJho3CbDZy2Qkw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">3. Fully Connected Layer 全連接層</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">基本上全連接層的部分就是將之前的結果平坦化之後接到最基本的神經網絡了</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*nzZGTF1yypBAQVRVFgvXAA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*nzZGTF1yypBAQVRVFgvXAA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*nzZGTF1yypBAQVRVFgvXAA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*nzZGTF1yypBAQVRVFgvXAA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*nzZGTF1yypBAQVRVFgvXAA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*nzZGTF1yypBAQVRVFgvXAA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*nzZGTF1yypBAQVRVFgvXAA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*nzZGTF1yypBAQVRVFgvXAA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*nzZGTF1yypBAQVRVFgvXAA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*nzZGTF1yypBAQVRVFgvXAA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*nzZGTF1yypBAQVRVFgvXAA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*nzZGTF1yypBAQVRVFgvXAA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*nzZGTF1yypBAQVRVFgvXAA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*nzZGTF1yypBAQVRVFgvXAA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*nzZGTF1yypBAQVRVFgvXAA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*7Q0lMIi6W-H5p_KuymEezw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*7Q0lMIi6W-H5p_KuymEezw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*7Q0lMIi6W-H5p_KuymEezw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*7Q0lMIi6W-H5p_KuymEezw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*7Q0lMIi6W-H5p_KuymEezw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*7Q0lMIi6W-H5p_KuymEezw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*7Q0lMIi6W-H5p_KuymEezw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*7Q0lMIi6W-H5p_KuymEezw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*7Q0lMIi6W-H5p_KuymEezw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*7Q0lMIi6W-H5p_KuymEezw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*7Q0lMIi6W-H5p_KuymEezw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*7Q0lMIi6W-H5p_KuymEezw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*7Q0lMIi6W-H5p_KuymEezw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*7Q0lMIi6W-H5p_KuymEezw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*7Q0lMIi6W-H5p_KuymEezw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*DPXziFXhXTw_xpfIdKFkqg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*DPXziFXhXTw_xpfIdKFkqg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*DPXziFXhXTw_xpfIdKFkqg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*DPXziFXhXTw_xpfIdKFkqg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*DPXziFXhXTw_xpfIdKFkqg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*DPXziFXhXTw_xpfIdKFkqg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*DPXziFXhXTw_xpfIdKFkqg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*DPXziFXhXTw_xpfIdKFkqg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*DPXziFXhXTw_xpfIdKFkqg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*DPXziFXhXTw_xpfIdKFkqg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*DPXziFXhXTw_xpfIdKFkqg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*DPXziFXhXTw_xpfIdKFkqg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*DPXziFXhXTw_xpfIdKFkqg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*DPXziFXhXTw_xpfIdKFkqg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*DPXziFXhXTw_xpfIdKFkqg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">實作</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">接下來的實作會教大家如何使用CNN來達成99%正確度的手寫數字辨識，在一開始安裝需要安裝Tensorflow以及Keras，只需要在你的命令提示字元或是終端機輸入以下的安裝指令就可以了</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*BSGMkyugZksROmfHDEuSbg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*BSGMkyugZksROmfHDEuSbg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*BSGMkyugZksROmfHDEuSbg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*BSGMkyugZksROmfHDEuSbg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*BSGMkyugZksROmfHDEuSbg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*BSGMkyugZksROmfHDEuSbg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*BSGMkyugZksROmfHDEuSbg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*BSGMkyugZksROmfHDEuSbg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*BSGMkyugZksROmfHDEuSbg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*BSGMkyugZksROmfHDEuSbg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*BSGMkyugZksROmfHDEuSbg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*BSGMkyugZksROmfHDEuSbg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*BSGMkyugZksROmfHDEuSbg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*BSGMkyugZksROmfHDEuSbg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*BSGMkyugZksROmfHDEuSbg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Mnist手寫數字資料集</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">pip install tensorflow==1.3.0 (寫此篇文章的當下1.4尚有Bug，建議使用1.3版)pip install keras</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">載入套件，跳出訊息說明Keras背後是使用Tensorflow當做底層運算架構</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*w0OV-a8XkLOVH1vectnqtA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*w0OV-a8XkLOVH1vectnqtA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*w0OV-a8XkLOVH1vectnqtA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*w0OV-a8XkLOVH1vectnqtA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*w0OV-a8XkLOVH1vectnqtA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*w0OV-a8XkLOVH1vectnqtA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*w0OV-a8XkLOVH1vectnqtA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*w0OV-a8XkLOVH1vectnqtA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*w0OV-a8XkLOVH1vectnqtA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*w0OV-a8XkLOVH1vectnqtA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*w0OV-a8XkLOVH1vectnqtA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*w0OV-a8XkLOVH1vectnqtA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*w0OV-a8XkLOVH1vectnqtA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*w0OV-a8XkLOVH1vectnqtA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*w0OV-a8XkLOVH1vectnqtA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">載入Mnist手寫辨識資料</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*DexqslpOyb4gbyFGo6mgaA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*DexqslpOyb4gbyFGo6mgaA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*DexqslpOyb4gbyFGo6mgaA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*DexqslpOyb4gbyFGo6mgaA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*DexqslpOyb4gbyFGo6mgaA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*DexqslpOyb4gbyFGo6mgaA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*DexqslpOyb4gbyFGo6mgaA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*DexqslpOyb4gbyFGo6mgaA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*DexqslpOyb4gbyFGo6mgaA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*DexqslpOyb4gbyFGo6mgaA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*DexqslpOyb4gbyFGo6mgaA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*DexqslpOyb4gbyFGo6mgaA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*DexqslpOyb4gbyFGo6mgaA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*DexqslpOyb4gbyFGo6mgaA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*DexqslpOyb4gbyFGo6mgaA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Training的資料有60000筆而Testing的資料有10000筆都是28*28 pixel大小的手寫數字圖片</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*-hCwOD7WU0s6RRSj0Nryww.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*-hCwOD7WU0s6RRSj0Nryww.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*-hCwOD7WU0s6RRSj0Nryww.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*-hCwOD7WU0s6RRSj0Nryww.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*-hCwOD7WU0s6RRSj0Nryww.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*-hCwOD7WU0s6RRSj0Nryww.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*-hCwOD7WU0s6RRSj0Nryww.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*-hCwOD7WU0s6RRSj0Nryww.png 640w, https://miro.medium.com/v2/resize:fit:720/1*-hCwOD7WU0s6RRSj0Nryww.png 720w, https://miro.medium.com/v2/resize:fit:750/1*-hCwOD7WU0s6RRSj0Nryww.png 750w, https://miro.medium.com/v2/resize:fit:786/1*-hCwOD7WU0s6RRSj0Nryww.png 786w, https://miro.medium.com/v2/resize:fit:828/1*-hCwOD7WU0s6RRSj0Nryww.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*-hCwOD7WU0s6RRSj0Nryww.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*-hCwOD7WU0s6RRSj0Nryww.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*-hCwOD7WU0s6RRSj0Nryww.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">畫出圖片長相以及Label</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ab5XMifcWFtQz_bqjHg5xA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ab5XMifcWFtQz_bqjHg5xA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ab5XMifcWFtQz_bqjHg5xA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ab5XMifcWFtQz_bqjHg5xA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ab5XMifcWFtQz_bqjHg5xA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ab5XMifcWFtQz_bqjHg5xA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ab5XMifcWFtQz_bqjHg5xA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ab5XMifcWFtQz_bqjHg5xA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ab5XMifcWFtQz_bqjHg5xA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ab5XMifcWFtQz_bqjHg5xA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ab5XMifcWFtQz_bqjHg5xA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ab5XMifcWFtQz_bqjHg5xA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ab5XMifcWFtQz_bqjHg5xA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ab5XMifcWFtQz_bqjHg5xA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ab5XMifcWFtQz_bqjHg5xA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">由於圖片通常是RGB三個顏色所組成的，假設圖片大小是28*28的彩色圖片，實際上的資料維度就是28*28*3。不過這邊數字的顏色都是單色因此我們轉成28*28*1的資料維度當作未來CNN Model的input</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*CCIbHBfc74tQdlEM_3usVA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*CCIbHBfc74tQdlEM_3usVA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*CCIbHBfc74tQdlEM_3usVA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*CCIbHBfc74tQdlEM_3usVA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*CCIbHBfc74tQdlEM_3usVA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*CCIbHBfc74tQdlEM_3usVA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*CCIbHBfc74tQdlEM_3usVA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*CCIbHBfc74tQdlEM_3usVA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*CCIbHBfc74tQdlEM_3usVA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*CCIbHBfc74tQdlEM_3usVA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*CCIbHBfc74tQdlEM_3usVA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*CCIbHBfc74tQdlEM_3usVA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*CCIbHBfc74tQdlEM_3usVA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*CCIbHBfc74tQdlEM_3usVA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*CCIbHBfc74tQdlEM_3usVA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">灰階的圖片數值為0~255之間，我們將它縮放到0~1之間，並對類別資料做onehot-encoding處理</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*7eyLQrHQf3fBC3C9UBuZyw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*7eyLQrHQf3fBC3C9UBuZyw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*7eyLQrHQf3fBC3C9UBuZyw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*7eyLQrHQf3fBC3C9UBuZyw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*7eyLQrHQf3fBC3C9UBuZyw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*7eyLQrHQf3fBC3C9UBuZyw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*7eyLQrHQf3fBC3C9UBuZyw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*7eyLQrHQf3fBC3C9UBuZyw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*7eyLQrHQf3fBC3C9UBuZyw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*7eyLQrHQf3fBC3C9UBuZyw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*7eyLQrHQf3fBC3C9UBuZyw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*7eyLQrHQf3fBC3C9UBuZyw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*7eyLQrHQf3fBC3C9UBuZyw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*7eyLQrHQf3fBC3C9UBuZyw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*7eyLQrHQf3fBC3C9UBuZyw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">我們在這邊可以看到若使用Keras來建立CNN模型只要幾行Code就可以完成了，非常簡單！一開始先建立一個Sequential模型，接著一層一層加上去就可以了</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*jVfBHnvT2Yl6gw5DzJfQfQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*jVfBHnvT2Yl6gw5DzJfQfQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">在層跟層之間通常會Drop掉一定比例的神經元來避免Overfit的狀況，要Drop掉多少比例沒有一個特定的值，通常是25%~50%之間</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*USIAZc9womXLYeQk6AkDuA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*USIAZc9womXLYeQk6AkDuA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*USIAZc9womXLYeQk6AkDuA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*USIAZc9womXLYeQk6AkDuA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*USIAZc9womXLYeQk6AkDuA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*USIAZc9womXLYeQk6AkDuA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*USIAZc9womXLYeQk6AkDuA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*USIAZc9womXLYeQk6AkDuA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*USIAZc9womXLYeQk6AkDuA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*USIAZc9womXLYeQk6AkDuA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*USIAZc9womXLYeQk6AkDuA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*USIAZc9womXLYeQk6AkDuA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*USIAZc9womXLYeQk6AkDuA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*USIAZc9womXLYeQk6AkDuA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*USIAZc9womXLYeQk6AkDuA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">開始訓練模型，這邊可以看到每一輪的迭代acc 以及 val_acc的準確度都慢慢再提高，從一開始的acc(training):83% val_acc(testing):96%的準確度，到第20輪時acc 以及val_acc 都變成99%的準確度了</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ecbEymmzoY9J9Nv9ugphWw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ecbEymmzoY9J9Nv9ugphWw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ecbEymmzoY9J9Nv9ugphWw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ecbEymmzoY9J9Nv9ugphWw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ecbEymmzoY9J9Nv9ugphWw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ecbEymmzoY9J9Nv9ugphWw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ecbEymmzoY9J9Nv9ugphWw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ecbEymmzoY9J9Nv9ugphWw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ecbEymmzoY9J9Nv9ugphWw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ecbEymmzoY9J9Nv9ugphWw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ecbEymmzoY9J9Nv9ugphWw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ecbEymmzoY9J9Nv9ugphWw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ecbEymmzoY9J9Nv9ugphWw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ecbEymmzoY9J9Nv9ugphWw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ecbEymmzoY9J9Nv9ugphWw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*XsmKhMhuFR8dhUBhwmzkiQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*XsmKhMhuFR8dhUBhwmzkiQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*XsmKhMhuFR8dhUBhwmzkiQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*XsmKhMhuFR8dhUBhwmzkiQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*XsmKhMhuFR8dhUBhwmzkiQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*XsmKhMhuFR8dhUBhwmzkiQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*XsmKhMhuFR8dhUBhwmzkiQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*XsmKhMhuFR8dhUBhwmzkiQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*XsmKhMhuFR8dhUBhwmzkiQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*XsmKhMhuFR8dhUBhwmzkiQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*XsmKhMhuFR8dhUBhwmzkiQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*XsmKhMhuFR8dhUBhwmzkiQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*XsmKhMhuFR8dhUBhwmzkiQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*XsmKhMhuFR8dhUBhwmzkiQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*XsmKhMhuFR8dhUBhwmzkiQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">補充</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">本文較粗淺的介紹Deep learning中的CNN模型，若想要再更加全面的了解Deep Learning 以及 CNN，建議大家可以閱讀<a href="https://www.tenlong.com.tw/products/9789864342167" target="_self">TensorFlow+Keras 深度學習人工智慧實務應用</a>、<a href="https://www.tenlong.com.tw/products/9789864764846" target="_self">Deep Learning｜用Python進行深度學習的基礎理論實作</a>這兩本好書，以及Udemy上的<a href="https://www.udemy.com/deeplearning/" target="_self">Deep Learning線上課程</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">程式碼</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">新版(keras 整合進 tensorflow 之後的版本)</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>{
 "cells": [
  {
   "cell_type": "code",
   "execution_count": 1,
   "metadata": {},
   "outputs": [],
   "source": [
    "import numpy as np\n",
    "import pandas as pd\n",
    "from tensorflow import keras\n",
    "import tensorflow.keras.utils as np_utils\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 2,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "((array([[[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         ...,\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]]], dtype=uint8),\n",
       "  array([5, 0, 4, ..., 5, 6, 8], dtype=uint8)),\n",
       " (array([[[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         ...,\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ...,\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]]], dtype=uint8),\n",
       "  array([7, 2, 1, ..., 4, 5, 6], dtype=uint8)))"
      ]
     },
     "execution_count": 2,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "keras.datasets.mnist.load_data()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 3,
   "metadata": {},
   "outputs": [],
   "source": [
    "(x_Train, y_Train), (x_Test, y_Test) = keras.datasets.mnist.load_data()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 4,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "x_train_image: (60000, 28, 28)\n",
      "y_train_label: (60000,)\n"
     ]
    }
   ],
   "source": [
    "print('x_train_image:',x_Train.shape)\n",
    "print('y_train_label:',y_Train.shape)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 5,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "x_test_image: (10000, 28, 28)\n",
      "y_test_label: (10000,)\n"
     ]
    }
   ],
   "source": [
    "print('x_test_image:',x_Test.shape)\n",
    "print('y_test_label:',y_Test.shape)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 6,
   "metadata": {},
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def plot_image(image):\n",
    "    fig = plt.gcf()\n",
    "    fig.set_size_inches(2, 2)\n",
    "    plt.imshow(image, cmap='binary')\n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 7,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([[  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   3,\n",
       "         18,  18,  18, 126, 136, 175,  26, 166, 255, 247, 127,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,  30,  36,  94, 154, 170,\n",
       "        253, 253, 253, 253, 253, 225, 172, 253, 242, 195,  64,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,  49, 238, 253, 253, 253, 253,\n",
       "        253, 253, 253, 253, 251,  93,  82,  82,  56,  39,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,  18, 219, 253, 253, 253, 253,\n",
       "        253, 198, 182, 247, 241,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,  80, 156, 107, 253, 253,\n",
       "        205,  11,   0,  43, 154,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,  14,   1, 154, 253,\n",
       "         90,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0, 139, 253,\n",
       "        190,   2,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  11, 190,\n",
       "        253,  70,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  35,\n",
       "        241, 225, 160, 108,   1,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "         81, 240, 253, 253, 119,  25,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,  45, 186, 253, 253, 150,  27,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,  16,  93, 252, 253, 187,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0, 249, 253, 249,  64,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,  46, 130, 183, 253, 253, 207,   2,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  39,\n",
       "        148, 229, 253, 253, 253, 250, 182,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  24, 114, 221,\n",
       "        253, 253, 253, 253, 201,  78,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,  23,  66, 213, 253, 253,\n",
       "        253, 253, 198,  81,   2,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,  18, 171, 219, 253, 253, 253, 253,\n",
       "        195,  80,   9,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,  55, 172, 226, 253, 253, 253, 253, 244, 133,\n",
       "         11,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0, 136, 253, 253, 253, 212, 135, 132,  16,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0]], dtype=uint8)"
      ]
     },
     "execution_count": 7,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "x_Train[0]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 8,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<Figure size 144x144 with 1 Axes>"
      ]
     },
     "metadata": {
      "needs_background": "light"
     },
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_image(x_Train[0])"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 9,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "5"
      ]
     },
     "execution_count": 9,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "y_Train[0]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 10,
   "metadata": {},
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def plot_images_labels_prediction(images,labels,\n",
    "                                  prediction,idx,num=10):\n",
    "    fig = plt.gcf()\n",
    "    fig.set_size_inches(12, 14)\n",
    "    if num>25: num=25 \n",
    "    for i in range(0, num):\n",
    "        ax=plt.subplot(5,5, 1+i)\n",
    "        ax.imshow(images[idx], cmap='binary')\n",
    "        title= \"label=\" +str(labels[idx])\n",
    "        if len(prediction)>0:\n",
    "            title+=\",predict=\"+str(prediction[idx]) \n",
    "            \n",
    "        ax.set_title(title,fontsize=10) \n",
    "        ax.set_xticks([]);ax.set_yticks([])        \n",
    "        idx+=1 \n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 11,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<Figure size 864x1008 with 10 Axes>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction(x_Train,y_Train,[],0,10)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 12,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<Figure size 864x1008 with 10 Axes>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction(x_Test,y_Test,[],0,10)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 13,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "(60000, 28, 28)"
      ]
     },
     "execution_count": 13,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "x_Train.shape"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 14,
   "metadata": {},
   "outputs": [],
   "source": [
    "# 多加一個顏色的維度 \n",
    "x_Train4D=x_Train.reshape(x_Train.shape[0],28,28,1).astype('float32')\n",
    "x_Test4D=x_Test.reshape(x_Test.shape[0],28,28,1).astype('float32')"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 15,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "(60000, 28, 28, 1)"
      ]
     },
     "execution_count": 15,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "x_Train4D.shape"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 16,
   "metadata": {},
   "outputs": [],
   "source": [
    "# 將數值縮小到0~1\n",
    "x_Train4D_normalize = x_Train4D / 255\n",
    "x_Test4D_normalize = x_Test4D / 255"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 17,
   "metadata": {},
   "outputs": [],
   "source": [
    "# 把類別做Onehot encoding\n",
    "y_TrainOneHot = np_utils.to_categorical(y_Train)\n",
    "y_TestOneHot = np_utils.to_categorical(y_Test)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 18,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([5, 0, 4, ..., 5, 6, 8], dtype=uint8)"
      ]
     },
     "execution_count": 18,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "y_Train"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 19,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([[0., 0., 0., ..., 0., 0., 0.],\n",
       "       [1., 0., 0., ..., 0., 0., 0.],\n",
       "       [0., 0., 0., ..., 0., 0., 0.],\n",
       "       ...,\n",
       "       [0., 0., 0., ..., 0., 0., 0.],\n",
       "       [0., 0., 0., ..., 0., 0., 0.],\n",
       "       [0., 0., 0., ..., 0., 1., 0.]], dtype=float32)"
      ]
     },
     "execution_count": 19,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "y_TrainOneHot"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": null,
   "metadata": {},
   "outputs": [],
   "source": []
  },
  {
   "cell_type": "code",
   "execution_count": null,
   "metadata": {},
   "outputs": [],
   "source": []
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 建立CNN模型"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 20,
   "metadata": {},
   "outputs": [],
   "source": [
    "from keras.models import Sequential\n",
    "from keras.layers import Dense,Dropout,Flatten,Conv2D,MaxPooling2D"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 21,
   "metadata": {},
   "outputs": [],
   "source": [
    "model = Sequential()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 22,
   "metadata": {},
   "outputs": [],
   "source": [
    "#filter為16, Kernel size為(5,5),Padding為(same)\n",
    "model.add(Conv2D(filters=16,\n",
    "                 kernel_size=(5,5),\n",
    "                 padding='same',\n",
    "                 input_shape=(28,28,1), \n",
    "                 activation='relu'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 23,
   "metadata": {},
   "outputs": [],
   "source": [
    "# MaxPooling size為(2,2)\n",
    "model.add(MaxPooling2D(pool_size=(2, 2)))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 24,
   "metadata": {},
   "outputs": [],
   "source": [
    "model.add(Conv2D(filters=36,\n",
    "                 kernel_size=(5,5),\n",
    "                 padding='same',\n",
    "                 activation='relu'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 25,
   "metadata": {},
   "outputs": [],
   "source": [
    "model.add(MaxPooling2D(pool_size=(2, 2)))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 26,
   "metadata": {},
   "outputs": [],
   "source": [
    "# Drop掉部分神經元避免overfitting\n",
    "model.add(Dropout(0.25))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 27,
   "metadata": {},
   "outputs": [],
   "source": [
    "# 平坦化\n",
    "model.add(Flatten())"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 28,
   "metadata": {},
   "outputs": [],
   "source": [
    "model.add(Dense(128, activation='relu'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 29,
   "metadata": {},
   "outputs": [],
   "source": [
    "model.add(Dropout(0.5))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 30,
   "metadata": {},
   "outputs": [],
   "source": [
    "model.add(Dense(10,activation='softmax'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 31,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "Model: \"sequential\"\n",
      "_________________________________________________________________\n",
      "Layer (type)                 Output Shape              Param #   \n",
      "=================================================================\n",
      "conv2d (Conv2D)              (None, 28, 28, 16)        416       \n",
      "_________________________________________________________________\n",
      "max_pooling2d (MaxPooling2D) (None, 14, 14, 16)        0         \n",
      "_________________________________________________________________\n",
      "conv2d_1 (Conv2D)            (None, 14, 14, 36)        14436     \n",
      "_________________________________________________________________\n",
      "max_pooling2d_1 (MaxPooling2 (None, 7, 7, 36)          0         \n",
      "_________________________________________________________________\n",
      "dropout (Dropout)            (None, 7, 7, 36)          0         \n",
      "_________________________________________________________________\n",
      "flatten (Flatten)            (None, 1764)              0         \n",
      "_________________________________________________________________\n",
      "dense (Dense)                (None, 128)               225920    \n",
      "_________________________________________________________________\n",
      "dropout_1 (Dropout)          (None, 128)               0         \n",
      "_________________________________________________________________\n",
      "dense_1 (Dense)              (None, 10)                1290      \n",
      "=================================================================\n",
      "Total params: 242,062\n",
      "Trainable params: 242,062\n",
      "Non-trainable params: 0\n",
      "_________________________________________________________________\n",
      "None\n"
     ]
    }
   ],
   "source": [
    "print(model.summary())"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## 訓練模型"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 32,
   "metadata": {},
   "outputs": [],
   "source": [
    "model.compile(loss='categorical_crossentropy', optimizer='adam',metrics=['accuracy']) "
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 33,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "Epoch 1/20\n",
      "160/160 - 34s - loss: 0.4857 - accuracy: 0.8486 - val_loss: 0.0979 - val_accuracy: 0.9707\n",
      "Epoch 2/20\n",
      "160/160 - 21s - loss: 0.1379 - accuracy: 0.9590 - val_loss: 0.0652 - val_accuracy: 0.9822\n",
      "Epoch 3/20\n",
      "160/160 - 21s - loss: 0.0987 - accuracy: 0.9714 - val_loss: 0.0530 - val_accuracy: 0.9848\n",
      "Epoch 4/20\n",
      "160/160 - 21s - loss: 0.0766 - accuracy: 0.9768 - val_loss: 0.0516 - val_accuracy: 0.9851\n",
      "Epoch 5/20\n",
      "160/160 - 22s - loss: 0.0689 - accuracy: 0.9793 - val_loss: 0.0413 - val_accuracy: 0.9883\n",
      "Epoch 6/20\n",
      "160/160 - 22s - loss: 0.0608 - accuracy: 0.9812 - val_loss: 0.0388 - val_accuracy: 0.9894\n",
      "Epoch 7/20\n",
      "160/160 - 21s - loss: 0.0533 - accuracy: 0.9834 - val_loss: 0.0404 - val_accuracy: 0.9893\n",
      "Epoch 8/20\n",
      "160/160 - 20s - loss: 0.0477 - accuracy: 0.9854 - val_loss: 0.0367 - val_accuracy: 0.9906\n",
      "Epoch 9/20\n",
      "160/160 - 22s - loss: 0.0440 - accuracy: 0.9865 - val_loss: 0.0345 - val_accuracy: 0.9908\n",
      "Epoch 10/20\n",
      "160/160 - 22s - loss: 0.0416 - accuracy: 0.9869 - val_loss: 0.0338 - val_accuracy: 0.9906\n",
      "Epoch 11/20\n",
      "160/160 - 22s - loss: 0.0368 - accuracy: 0.9880 - val_loss: 0.0320 - val_accuracy: 0.9906\n",
      "Epoch 12/20\n",
      "160/160 - 21s - loss: 0.0336 - accuracy: 0.9896 - val_loss: 0.0321 - val_accuracy: 0.9916\n",
      "Epoch 13/20\n",
      "160/160 - 24s - loss: 0.0329 - accuracy: 0.9897 - val_loss: 0.0316 - val_accuracy: 0.9912\n",
      "Epoch 14/20\n",
      "160/160 - 28s - loss: 0.0322 - accuracy: 0.9899 - val_loss: 0.0312 - val_accuracy: 0.9918\n",
      "Epoch 15/20\n",
      "160/160 - 22s - loss: 0.0307 - accuracy: 0.9907 - val_loss: 0.0310 - val_accuracy: 0.9915\n",
      "Epoch 16/20\n",
      "160/160 - 22s - loss: 0.0270 - accuracy: 0.9914 - val_loss: 0.0306 - val_accuracy: 0.9913\n",
      "Epoch 17/20\n",
      "160/160 - 21s - loss: 0.0265 - accuracy: 0.9915 - val_loss: 0.0304 - val_accuracy: 0.9917\n",
      "Epoch 18/20\n",
      "160/160 - 21s - loss: 0.0231 - accuracy: 0.9926 - val_loss: 0.0319 - val_accuracy: 0.9914\n",
      "Epoch 19/20\n",
      "160/160 - 21s - loss: 0.0230 - accuracy: 0.9925 - val_loss: 0.0307 - val_accuracy: 0.9922\n",
      "Epoch 20/20\n",
      "160/160 - 21s - loss: 0.0206 - accuracy: 0.9934 - val_loss: 0.0308 - val_accuracy: 0.9918\n"
     ]
    }
   ],
   "source": [
    "train_history=model.fit(x=x_Train4D_normalize, \n",
    "                        y=y_TrainOneHot,validation_split=0.2, \n",
    "                        epochs=20, batch_size=300,verbose=2)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 34,
   "metadata": {},
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def show_train_history(train_acc,test_acc):\n",
    "    plt.plot(train_history.history[train_acc])\n",
    "    plt.plot(train_history.history[test_acc])\n",
    "    plt.title('Train History')\n",
    "    plt.ylabel('Accuracy')\n",
    "    plt.xlabel('Epoch')\n",
    "    plt.legend(['train', 'test'], loc='upper left')\n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 38,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<Figure size 432x288 with 1 Axes>"
      ]
     },
     "metadata": {
      "needs_background": "light"
     },
     "output_type": "display_data"
    }
   ],
   "source": [
    "show_train_history('accuracy','val_accuracy')"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 39,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<Figure size 432x288 with 1 Axes>"
      ]
     },
     "metadata": {
      "needs_background": "light"
     },
     "output_type": "display_data"
    }
   ],
   "source": [
    "show_train_history('loss','val_loss')"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 評估模型準確率"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 40,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "313/313 [==============================] - 2s 4ms/step - loss: 0.0200 - accuracy: 0.9934\n"
     ]
    },
    {
     "data": {
      "text/plain": [
       "0.993399977684021"
      ]
     },
     "execution_count": 40,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "scores = model.evaluate(x_Test4D_normalize , y_TestOneHot)\n",
    "scores[1]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 預測結果"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 41,
   "metadata": {},
   "outputs": [
    {
     "name": "stderr",
     "output_type": "stream",
     "text": [
      "/Users/yehjames/anaconda3/lib/python3.8/site-packages/keras/engine/sequential.py:450: UserWarning: `model.predict_classes()` is deprecated and will be removed after 2021-01-01. Please use instead:* `np.argmax(model.predict(x), axis=-1)`,   if your model does multi-class classification   (e.g. if it uses a `softmax` last-layer activation).* `(model.predict(x) > 0.5).astype(\"int32\")`,   if your model does binary classification   (e.g. if it uses a `sigmoid` last-layer activation).\n",
      "  warnings.warn('`model.predict_classes()` is deprecated and '\n"
     ]
    }
   ],
   "source": [
    "prediction=model.predict_classes(x_Test4D_normalize)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 42,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([7, 2, 1, 0, 4, 1, 4, 9, 5, 9])"
      ]
     },
     "execution_count": 42,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "prediction[:10]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 查看預測結果"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 53,
   "metadata": {},
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def plot_images_labels_prediction(images,labels,prediction,idx,num=10):\n",
    "    fig = plt.gcf()\n",
    "    fig.set_size_inches(12, 14)\n",
    "    if num>25: num=25 \n",
    "    for i in range(0, num):\n",
    "        ax=plt.subplot(5,5, 1+i)\n",
    "        ax.imshow(images[idx], cmap='binary')\n",
    "\n",
    "        ax.set_title(\"label=\" +str(labels[idx])+\n",
    "                     \",predict=\"+str(prediction[idx])\n",
    "                     ,fontsize=10) \n",
    "        \n",
    "        ax.set_xticks([]);ax.set_yticks([])        \n",
    "        idx+=1\n",
    "        if idx >= len(images):\n",
    "            break\n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 44,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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/XmJvmbNmmV8TOTf5ZdfbvLkyZNNTmeNVn88HXbYYSbfeeedJtepUyfp8RYsWBB320MPPWSy//Nm8eLFJvvnoCuvvNLkc845x+RcvraEK68AAAAIBs0rAAAAgkHzCgAAgGDQvAIAACAYvGArgTlz5iS9318s3J84jdxT1aR5v/32MzkfC7x///33JicaJ/5i1f7z8N9cAdnnvyjh66+/NrlTp05x+/jniB9++MHk8ePHm/znP//Z5FWrVpnsv1DvzDPPjHtM/40NGjVqFLcN0rdlyxaT/e/PadOmmey/+OTGG280effdd89idShk/vf7XXfdZfIjjzxisnPO5H322SfumP379zfZH1977LFHxnWWlejNVn788UeT//SnP5n8y1/+0uTVq1dXqoZs4sorAAAAgkHzCgAAgGDQvAIAACAYzHkVkfnz55ucaDHfsvy5Te3bt896Taic6dOnm9ytWzeTGzRoELePP+coU7Nnz06aX3vttZTHKNQ3UyhmW7duNdmfd3z99denPIa/QPivfvUrkydNmmTyhx9+aLI/Jy7R/Ml8zNsuZlOmTDF52LBhJjdv3tzkuXPnmly/fv3cFIaC55/bR4wYYbL//ey/BiPRGyEdffTRlappx44dJv/73/82uW/fvnH79OjRw+RNmzZl9JgXX3yxyYl+ruYKV14BAAAQDJpXAAAABIPmFQAAAMFgzquIvPnmmxltX9m5kai8a6+91uRXXnnF5M8++8xkf11Of06SiMhzzz1XqZr8Y/pzJxM58MADTWbN4Kr3t7/9Len9//jHP+JuO+usszJ6jIULF2a0/f/8z//E3VavXr2MjoHk/Nc6+A4//HCT999//1yWg4D466PWrFkz6fa1a9c2+fXXX4/bxp8Xv2LFiqTHrFu3rsnvvfde0lxSUhJ3DH996VSaNGli8uDBg032n2cuceUVAAAAwaB5BQAAQDBoXgEAABAM5rxK6jmv/tplV155ZS7LQRqOPPJIk5ctW2ay/371L7zwgsn+e1GLxL/fdL9+/TKqyV/zrm3btin3OfbYY03258Ai9y644AKT/bnPic4P/nw0f/xNnjzZZH/9RP+c4t8/duzYuMf0x1fr1q3jtkH6/DmGvueff95k/33fzzjjDJP9ObIoXieffLLJJ554oskvvfSSyWvWrDH5mmuuyfgxa9Wy7Zo/7zaVdOa3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\n",
      "text/plain": [
       "<Figure size 864x1008 with 10 Axes>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction(x_Test,y_Test,prediction,idx=0)"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# confusion matrix\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 45,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/html": [
       "<div>\n",
       "<style scoped>\n",
       "    .dataframe tbody tr th:only-of-type {\n",
       "        vertical-align: middle;\n",
       "    }\n",
       "\n",
       "    .dataframe tbody tr th {\n",
       "        vertical-align: top;\n",
       "    }\n",
       "\n",
       "    .dataframe thead th {\n",
       "        text-align: right;\n",
       "    }\n",
       "</style>\n",
       "<table border=\"1\" class=\"dataframe\">\n",
       "  <thead>\n",
       "    <tr style=\"text-align: right;\">\n",
       "      <th>predict</th>\n",
       "      <th>0</th>\n",
       "      <th>1</th>\n",
       "      <th>2</th>\n",
       "      <th>3</th>\n",
       "      <th>4</th>\n",
       "      <th>5</th>\n",
       "      <th>6</th>\n",
       "      <th>7</th>\n",
       "      <th>8</th>\n",
       "      <th>9</th>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>label</th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "    </tr>\n",
       "  </thead>\n",
       "  <tbody>\n",
       "    <tr>\n",
       "      <th>0</th>\n",
       "      <td>977</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>1</th>\n",
       "      <td>0</td>\n",
       "      <td>1133</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2</th>\n",
       "      <td>2</td>\n",
       "      <td>1</td>\n",
       "      <td>1026</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>3</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>3</th>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1005</td>\n",
       "      <td>0</td>\n",
       "      <td>3</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>4</th>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>976</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>5</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>5</th>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>887</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>2</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>6</th>\n",
       "      <td>2</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>2</td>\n",
       "      <td>6</td>\n",
       "      <td>946</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>7</th>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>3</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1022</td>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>8</th>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "      <td>2</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>965</td>\n",
       "      <td>2</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>9</th>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "      <td>0</td>\n",
       "      <td>2</td>\n",
       "      <td>1</td>\n",
       "      <td>997</td>\n",
       "    </tr>\n",
       "  </tbody>\n",
       "</table>\n",
       "</div>"
      ],
      "text/plain": [
       "predict    0     1     2     3    4    5    6     7    8    9\n",
       "label                                                        \n",
       "0        977     0     0     0    0    0    1     1    1    0\n",
       "1          0  1133     1     0    0    0    1     0    0    0\n",
       "2          2     1  1026     0    0    0    0     3    0    0\n",
       "3          0     0     0  1005    0    3    0     1    1    0\n",
       "4          0     0     0     0  976    0    0     0    1    5\n",
       "5          0     0     0     2    0  887    1     0    0    2\n",
       "6          2     2     0     0    2    6  946     0    0    0\n",
       "7          0     1     3     0    0    0    0  1022    1    1\n",
       "8          1     1     2     2    0    0    0     1  965    2\n",
       "9          1     0     0     0    5    3    0     2    1  997"
      ]
     },
     "execution_count": 45,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "import pandas as pd\n",
    "pd.crosstab(y_Test,prediction,\n",
    "            rownames=['label'],colnames=['predict'])"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 46,
   "metadata": {},
   "outputs": [],
   "source": [
    "df = pd.DataFrame({'label':y_Test, 'predict':prediction})"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 47,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/html": [
       "<div>\n",
       "<style scoped>\n",
       "    .dataframe tbody tr th:only-of-type {\n",
       "        vertical-align: middle;\n",
       "    }\n",
       "\n",
       "    .dataframe tbody tr th {\n",
       "        vertical-align: top;\n",
       "    }\n",
       "\n",
       "    .dataframe thead th {\n",
       "        text-align: right;\n",
       "    }\n",
       "</style>\n",
       "<table border=\"1\" class=\"dataframe\">\n",
       "  <thead>\n",
       "    <tr style=\"text-align: right;\">\n",
       "      <th></th>\n",
       "      <th>label</th>\n",
       "      <th>predict</th>\n",
       "    </tr>\n",
       "  </thead>\n",
       "  <tbody>\n",
       "    <tr>\n",
       "      <th>1393</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2597</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "  </tbody>\n",
       "</table>\n",
       "</div>"
      ],
      "text/plain": [
       "      label  predict\n",
       "1393      5        3\n",
       "2597      5        3"
      ]
     },
     "execution_count": 47,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "df[(df.label==5)&(df.predict==3)]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 48,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "Int64Index([1393, 2597], dtype='int64')"
      ]
     },
     "execution_count": 48,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "df[(df.label==5)&(df.predict==3)].index"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 54,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<Figure size 864x1008 with 2 Axes>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction([x_Test[i] for i in df[(df.label==5)&(df.predict==3)].index],[y_Test[i] for i in df[(df.label==5)&(df.predict==3)].index],prediction,idx=0)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": null,
   "metadata": {},
   "outputs": [],
   "source": []
  }
 ],
 "metadata": {
  "kernelspec": {
   "display_name": "Python 3",
   "language": "python",
   "name": "python3"
  },
  "language_info": {
   "codemirror_mode": {
    "name": "ipython",
    "version": 3
   },
   "file_extension": ".py",
   "mimetype": "text/x-python",
   "name": "python",
   "nbconvert_exporter": "python",
   "pygments_lexer": "ipython3",
   "version": "3.8.3"
  }
 },
 "nbformat": 4,
 "nbformat_minor": 2
}
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">舊版</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>{
 "cells": [
  {
   "cell_type": "code",
   "execution_count": 1,
   "metadata": {},
   "outputs": [
    {
     "name": "stderr",
     "output_type": "stream",
     "text": [
      "Using TensorFlow backend.\n"
     ]
    }
   ],
   "source": [
    "import numpy as np\n",
    "import pandas as pd\n",
    "import keras\n",
    "from keras.utils import np_utils\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 2,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "((array([[[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         ..., \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]]], dtype=uint8),\n",
       "  array([5, 0, 4, ..., 5, 6, 8], dtype=uint8)),\n",
       " (array([[[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         ..., \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]],\n",
       "  \n",
       "         [[0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          ..., \n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0],\n",
       "          [0, 0, 0, ..., 0, 0, 0]]], dtype=uint8),\n",
       "  array([7, 2, 1, ..., 4, 5, 6], dtype=uint8)))"
      ]
     },
     "execution_count": 2,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "keras.datasets.mnist.load_data()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 3,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "(x_Train, y_Train), (x_Test, y_Test) = keras.datasets.mnist.load_data()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 4,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "x_train_image: (60000, 28, 28)\n",
      "y_train_label: (60000,)\n"
     ]
    }
   ],
   "source": [
    "print('x_train_image:',x_Train.shape)\n",
    "print('y_train_label:',y_Train.shape)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 5,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "x_test_image: (10000, 28, 28)\n",
      "y_test_label: (10000,)\n"
     ]
    }
   ],
   "source": [
    "print('x_test_image:',x_Test.shape)\n",
    "print('y_test_label:',y_Test.shape)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 6,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def plot_image(image):\n",
    "    fig = plt.gcf()\n",
    "    fig.set_size_inches(2, 2)\n",
    "    plt.imshow(image, cmap='binary')\n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 7,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([[  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   3,\n",
       "         18,  18,  18, 126, 136, 175,  26, 166, 255, 247, 127,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,  30,  36,  94, 154, 170,\n",
       "        253, 253, 253, 253, 253, 225, 172, 253, 242, 195,  64,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,  49, 238, 253, 253, 253, 253,\n",
       "        253, 253, 253, 253, 251,  93,  82,  82,  56,  39,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,  18, 219, 253, 253, 253, 253,\n",
       "        253, 198, 182, 247, 241,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,  80, 156, 107, 253, 253,\n",
       "        205,  11,   0,  43, 154,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,  14,   1, 154, 253,\n",
       "         90,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0, 139, 253,\n",
       "        190,   2,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  11, 190,\n",
       "        253,  70,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  35,\n",
       "        241, 225, 160, 108,   1,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "         81, 240, 253, 253, 119,  25,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,  45, 186, 253, 253, 150,  27,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,  16,  93, 252, 253, 187,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0, 249, 253, 249,  64,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,  46, 130, 183, 253, 253, 207,   2,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  39,\n",
       "        148, 229, 253, 253, 253, 250, 182,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,  24, 114, 221,\n",
       "        253, 253, 253, 253, 201,  78,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,  23,  66, 213, 253, 253,\n",
       "        253, 253, 198,  81,   2,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,  18, 171, 219, 253, 253, 253, 253,\n",
       "        195,  80,   9,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,  55, 172, 226, 253, 253, 253, 253, 244, 133,\n",
       "         11,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0, 136, 253, 253, 253, 212, 135, 132,  16,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0],\n",
       "       [  0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,\n",
       "          0,   0]], dtype=uint8)"
      ]
     },
     "execution_count": 7,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "x_Train[0]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 8,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\njM9gOIVbmEoAAAAASUVORK5CYII=\n",
      "text/plain": [
       "<matplotlib.figure.Figure at 0x114be46a0>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_image(x_Train[0])"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 9,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "5"
      ]
     },
     "execution_count": 9,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "y_Train[0]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 10,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def plot_images_labels_prediction(images,labels,\n",
    "                                  prediction,idx,num=10):\n",
    "    fig = plt.gcf()\n",
    "    fig.set_size_inches(12, 14)\n",
    "    if num>25: num=25 \n",
    "    for i in range(0, num):\n",
    "        ax=plt.subplot(5,5, 1+i)\n",
    "        ax.imshow(images[idx], cmap='binary')\n",
    "        title= \"label=\" +str(labels[idx])\n",
    "        if len(prediction)>0:\n",
    "            title+=\",predict=\"+str(prediction[idx]) \n",
    "            \n",
    "        ax.set_title(title,fontsize=10) \n",
    "        ax.set_xticks([]);ax.set_yticks([])        \n",
    "        idx+=1 \n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 11,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\nt29flSN5zubkk09WedWqVWGzOze++eYbld26p1atWiHnfOGFF0ocly+4MwsAAABvUcwCAADAWxSz\nAAAA8Fb+wew/AAAG10lEQVTK98zu379fZbd/tXv37iUeY+TIkSp36tRJ5fPOO09ld722zp07q+yu\nS1mc7du3qzx06FCVGzZsqHJ2drbK5cuXL/EcSK5o+x6XLVum8u233x7P4SBOWrRoofK7776r8vTp\n00P2ufjii1WuUKFCTGN4/vnnVR43blxMx4Mf3J9Fbl80UtPs2bNV7t27t8ruMzDVqlVTeebMmSHH\nrF69usp33nmnykuXLlXZ7aEtaT38goKCkHM2aNBAZffad9JJJ4Xsk6q4MwsAAABvUcwCAADAWxSz\nAAAA8FbK9cy668jed999Ko8dOzbs/pdccknIa3fccYfKbv/Kjh07VHbXa/zkk09UdvtZhwwZEnJO\nt692/vz5Kv/xj39UuUuXLmGP6fbTFOfMM88scRscO7cHqaS1A//xj3+o/Omnn4Zs06xZs9gHhrhq\n1KiRyvfee2/Cz+n29dMzWzq4z0643GdGtmzZorI7V5Eczz77rMpu76l7zejTp0/U55gwYYLK/fr1\nU3nlypVRHe/w4cMhr7k92z71yLq4MwsAAABvUcwCAADAWxSzAAAA8BbFLAAAALwV+ANghw4dUnnE\niBEqP/zwwyoff/zxKv/9739X+Q9/+EPIOdwHvtzFht0HxFavXq3yKaecovLTTz+tsttELSKye/du\nlVesWKHySy+9pPJrr72msvtAmKu4Bwe+/PLLsPsgNrfccovK7kMAJZk0aVLIa0888URMY0J6WLhw\nYdBDQADKlg3/I9hdCH/fvn2JHA4i1K1bN5V79OihsvtA2LFwv+Rg/fr1YbfPyclRuXnz5iWeo379\n+tEPLEVxZxYAAADeopgFAACAtyhmAQAA4K3Ae2bdPkK3R7Zy5coqu32KXbt2Vfn9998POceUKVNU\nfvPNN1Xeu3evyu4XNfTu3VvlSPphMjMzVb744ovD5lmzZqns9tS6Hn/88RLHgPhq2rRp0EPAMXC/\niMXtT73gggtUrlixYsLH9MILL6j8pz/9KeHnROpxey+bNGmi8oYNG1R2e+wnTpyYmIEhrEGDBsX9\nmLt27VJ5zpw5Yd9v3LixyldddVXcx+QT7swCAADAWxSzAAAA8BbFLAAAALwVeM/sqFGjwr5/8OBB\nlceOHavyyJEjVd68eXPUY/jb3/6m8j333KNyRkZG1MeMlrs+bnHr5SJY7nrE48ePV/nzzz8Pu/+T\nTz5Z4jFPOumkYxwdfrV8+XKVH3roIZXffvttlfPz81WOxxqRhYWFKrt9+oMHD1Z5z549JR6zUqVK\nKiejtxfJddFFF6m8bds2lR977LFkDgdJ5PY/u+vZ165dW+V33nkn4WPyCXdmAQAA4C2KWQAAAHiL\nYhYAAADeCrxntk6dOipv375dZfe7qNeuXRv2eL/73e9CXjv//PNVzs7OVjkrK0vlZPTIwn+nnXaa\nyl988UVAI8HR3D7kvLy8sNu7ffhVqlSJeQyLFi1SOTc3V2VjTNj9O3bsGPLagAEDVO7UqdOxDQ7e\ncOdJuXLlAhoJ4mnLli0hr02ePFnlMmX0vcZ+/fqpXL9+/fgPzGPcmQUAAIC3KGYBAADgLYpZAAAA\neCvwntlly5apPG/ePJVXr16tcq1atVTu06ePytWrVw85B31GSAS3h+m1114LaCSIRRDfb+9ex664\n4gqVi1uTuEKFCgkdE1LPrl27VHZ/Pvbo0SOZw0GcdOnSJeQ1t4/2+uuvV9ldDx8ad2YBAADgLYpZ\nAAAAeItiFgAAAN4KvGfWXdPR7RNxM5AqmjVrFjZ/+umnyRwOikyZMkXl8ePHqzxt2rS4n7Nx48Yq\nV6pUSeX27durfPPNN6vcokWLuI8J/pk9e7bKbp+0e42Bn3r16hXy2ogRI1R2++gRHndmAQAA4C2K\nWQAAAHiLYhYAAADeCrxnFvBVo0aNVM7LywtoJDjamWeeqfLTTz+tcps2bVS+9957VS4sLFQ5Ozs7\n5Bxdu3ZVuVu3birXqVMnssECR+nQoYPKn332mcoVK1ZM5nCQIMOGDYvoNUSOO7MAAADwFsUsAAAA\nvEUxCwAAAG9RzAIAAMBbPAAGIK2VL19e5f79+4fNQFBycnKCHgLgJe7MAgAAwFsUswAAAPAWxSwA\nAAC8RTELAAAAb1HMAgAAwFsUswAAAPAWxSwAAAC8RTELAAAAb1HMAgAAwFsUswAAAPAWxSwAAAC8\nZay1kW9szA4R2ZK44SCJGllraybiwMyTtMNcQSSYJ4gUcwWRiHieRFXMAgAAAKmENgMAAAB4i2IW\nAAAA3qKYBQAAgLcoZgEAAOAtilkAAAB4i2IWAAAA3qKYBQAAgLcoZgEAAOAtilkAAAB46/8ACIfA\npDsuoacAAAAASUVORK5CYII=\n",
      "text/plain": [
       "<matplotlib.figure.Figure at 0x11f356a20>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction(x_Train,y_Train,[],0,10)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 12,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<matplotlib.figure.Figure at 0x11bfc8748>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction(x_Test,y_Test,[],0,10)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 13,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "(60000, 28, 28)"
      ]
     },
     "execution_count": 13,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "x_Train.shape"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 14,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "# 多加一個顏色的維度 \n",
    "x_Train4D=x_Train.reshape(x_Train.shape[0],28,28,1).astype('float32')\n",
    "x_Test4D=x_Test.reshape(x_Test.shape[0],28,28,1).astype('float32')"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 15,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "(60000, 28, 28, 1)"
      ]
     },
     "execution_count": 15,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "x_Train4D.shape"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 16,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "# 將數值縮小到0~1\n",
    "x_Train4D_normalize = x_Train4D / 255\n",
    "x_Test4D_normalize = x_Test4D / 255"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 17,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "# 把類別做Onehot encoding\n",
    "y_TrainOneHot = np_utils.to_categorical(y_Train)\n",
    "y_TestOneHot = np_utils.to_categorical(y_Test)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 18,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([5, 0, 4, ..., 5, 6, 8], dtype=uint8)"
      ]
     },
     "execution_count": 18,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "y_Train"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 19,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([[ 0.,  0.,  0., ...,  0.,  0.,  0.],\n",
       "       [ 1.,  0.,  0., ...,  0.,  0.,  0.],\n",
       "       [ 0.,  0.,  0., ...,  0.,  0.,  0.],\n",
       "       ..., \n",
       "       [ 0.,  0.,  0., ...,  0.,  0.,  0.],\n",
       "       [ 0.,  0.,  0., ...,  0.,  0.,  0.],\n",
       "       [ 0.,  0.,  0., ...,  0.,  1.,  0.]])"
      ]
     },
     "execution_count": 19,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "y_TrainOneHot"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": null,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": []
  },
  {
   "cell_type": "code",
   "execution_count": null,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": []
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 建立CNN模型"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 20,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "from keras.models import Sequential\n",
    "from keras.layers import Dense,Dropout,Flatten,Conv2D,MaxPooling2D"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 21,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "model = Sequential()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 22,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "#filter為16, Kernel size為(5,5),Padding為(same)\n",
    "model.add(Conv2D(filters=16,\n",
    "                 kernel_size=(5,5),\n",
    "                 padding='same',\n",
    "                 input_shape=(28,28,1), \n",
    "                 activation='relu'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 23,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "# MaxPooling size為(2,2)\n",
    "model.add(MaxPooling2D(pool_size=(2, 2)))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 24,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "model.add(Conv2D(filters=36,\n",
    "                 kernel_size=(5,5),\n",
    "                 padding='same',\n",
    "                 activation='relu'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 25,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "model.add(MaxPooling2D(pool_size=(2, 2)))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 26,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "# Drop掉部分神經元避免overfitting\n",
    "model.add(Dropout(0.25))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 27,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "# 平坦化\n",
    "model.add(Flatten())"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 28,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "model.add(Dense(128, activation='relu'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 29,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "model.add(Dropout(0.5))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 30,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "model.add(Dense(10,activation='softmax'))"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 31,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "_________________________________________________________________\n",
      "Layer (type)                 Output Shape              Param #   \n",
      "=================================================================\n",
      "conv2d_1 (Conv2D)            (None, 28, 28, 16)        416       \n",
      "_________________________________________________________________\n",
      "max_pooling2d_1 (MaxPooling2 (None, 14, 14, 16)        0         \n",
      "_________________________________________________________________\n",
      "conv2d_2 (Conv2D)            (None, 14, 14, 36)        14436     \n",
      "_________________________________________________________________\n",
      "max_pooling2d_2 (MaxPooling2 (None, 7, 7, 36)          0         \n",
      "_________________________________________________________________\n",
      "dropout_1 (Dropout)          (None, 7, 7, 36)          0         \n",
      "_________________________________________________________________\n",
      "flatten_1 (Flatten)          (None, 1764)              0         \n",
      "_________________________________________________________________\n",
      "dense_1 (Dense)              (None, 128)               225920    \n",
      "_________________________________________________________________\n",
      "dropout_2 (Dropout)          (None, 128)               0         \n",
      "_________________________________________________________________\n",
      "dense_2 (Dense)              (None, 10)                1290      \n",
      "=================================================================\n",
      "Total params: 242,062\n",
      "Trainable params: 242,062\n",
      "Non-trainable params: 0\n",
      "_________________________________________________________________\n",
      "None\n"
     ]
    }
   ],
   "source": [
    "print(model.summary())"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## 訓練模型"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 32,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "model.compile(loss='categorical_crossentropy', optimizer='adam',metrics=['accuracy']) "
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 33,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "Train on 48000 samples, validate on 12000 samples\n",
      "Epoch 1/20\n",
      " - 42s - loss: 0.5100 - acc: 0.8393 - val_loss: 0.1049 - val_acc: 0.9694\n",
      "Epoch 2/20\n",
      " - 37s - loss: 0.1466 - acc: 0.9566 - val_loss: 0.0671 - val_acc: 0.9801\n",
      "Epoch 3/20\n",
      " - 37s - loss: 0.1030 - acc: 0.9700 - val_loss: 0.0561 - val_acc: 0.9837\n",
      "Epoch 4/20\n",
      " - 36s - loss: 0.0824 - acc: 0.9750 - val_loss: 0.0459 - val_acc: 0.9878\n",
      "Epoch 5/20\n",
      " - 36s - loss: 0.0708 - acc: 0.9788 - val_loss: 0.0422 - val_acc: 0.9877\n",
      "Epoch 6/20\n",
      " - 37s - loss: 0.0624 - acc: 0.9811 - val_loss: 0.0378 - val_acc: 0.9890\n",
      "Epoch 7/20\n",
      " - 35s - loss: 0.0534 - acc: 0.9835 - val_loss: 0.0355 - val_acc: 0.9899\n",
      "Epoch 8/20\n",
      " - 37s - loss: 0.0503 - acc: 0.9849 - val_loss: 0.0364 - val_acc: 0.9890\n",
      "Epoch 9/20\n",
      " - 36s - loss: 0.0455 - acc: 0.9859 - val_loss: 0.0352 - val_acc: 0.9900\n",
      "Epoch 10/20\n",
      " - 36s - loss: 0.0416 - acc: 0.9865 - val_loss: 0.0333 - val_acc: 0.9908\n",
      "Epoch 11/20\n",
      " - 35s - loss: 0.0390 - acc: 0.9879 - val_loss: 0.0317 - val_acc: 0.9916\n",
      "Epoch 12/20\n",
      " - 35s - loss: 0.0346 - acc: 0.9893 - val_loss: 0.0317 - val_acc: 0.9918\n",
      "Epoch 13/20\n",
      " - 36s - loss: 0.0340 - acc: 0.9896 - val_loss: 0.0298 - val_acc: 0.9918\n",
      "Epoch 14/20\n",
      " - 36s - loss: 0.0332 - acc: 0.9906 - val_loss: 0.0296 - val_acc: 0.9919\n",
      "Epoch 15/20\n",
      " - 35s - loss: 0.0290 - acc: 0.9907 - val_loss: 0.0305 - val_acc: 0.9918\n",
      "Epoch 16/20\n",
      " - 37s - loss: 0.0297 - acc: 0.9906 - val_loss: 0.0289 - val_acc: 0.9921\n",
      "Epoch 17/20\n",
      " - 36s - loss: 0.0263 - acc: 0.9913 - val_loss: 0.0291 - val_acc: 0.9918\n",
      "Epoch 18/20\n",
      " - 38s - loss: 0.0277 - acc: 0.9913 - val_loss: 0.0295 - val_acc: 0.9918\n",
      "Epoch 19/20\n",
      " - 37s - loss: 0.0225 - acc: 0.9925 - val_loss: 0.0295 - val_acc: 0.9913\n",
      "Epoch 20/20\n",
      " - 36s - loss: 0.0214 - acc: 0.9933 - val_loss: 0.0325 - val_acc: 0.9919\n"
     ]
    }
   ],
   "source": [
    "train_history=model.fit(x=x_Train4D_normalize, \n",
    "                        y=y_TrainOneHot,validation_split=0.2, \n",
    "                        epochs=20, batch_size=300,verbose=2)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 34,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def show_train_history(train_acc,test_acc):\n",
    "    plt.plot(train_history.history[train_acc])\n",
    "    plt.plot(train_history.history[test_acc])\n",
    "    plt.title('Train History')\n",
    "    plt.ylabel('Accuracy')\n",
    "    plt.xlabel('Epoch')\n",
    "    plt.legend(['train', 'test'], loc='upper left')\n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 35,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n",
      "text/plain": [
       "<matplotlib.figure.Figure at 0x11f448eb8>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "show_train_history('acc','val_acc')"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 36,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\nr729nYaGBmpqati4cSOPPPLIpJ9fRGSyRFlSeBQ4xcyWESSDK4GrCw8wsyZgj7u7ma0iSFL7owoo\nGY/R0ZvF3Se1EdjcuXN57Wtfyyte8QrS6TQLFiwY2nfRRRdx8803c9ppp3HqqadyzjnnTNp5RUQm\nW2RJwd2zZvYx4FdAHFjj7k+b2XXh/puBdwEfNbMs0ANc6REOGp2Mx8i7k8s7ifjktgz+4Q9/OOL2\n6upq7r777hH3DdYbNDY2smHDhqHtn/rUpyY1NhGRYkVapxDeElo7bNvNBcvfBL4ZZQyFCtsqJOJT\ndVYRkZmjYlo0Q7RtFUREyoGSgoiIDKmopJCIGwYM5KegsYKIyAxUUUkhZkYiHiObVUlBRGQkFZUU\nILiFFEVPqSIi5aACk4KRneQGbBPtOhvga1/7Gt3d3ZMaj4jIRFVgUohNekWzkoKIlItS93005RJx\nI+dOLp8nHpucnFjYdfab3/xm5s+fz5133klfXx+XX345X/ziF+nq6uKKK66gpaWFXC7H5z73Ofbs\n2cOLL77IBRdcQGNjI/fdd9+kxCMiMlHllxTuvhF2PzXq7jn5PDUDeawqDsV2ddF0Oqz++1F3F3ad\nfc899/CTn/yEP/7xj7g7l1xyCQ8++CCtra0sXLiQX/7yl0DQJ1Imk+GrX/0q9913H42NkXX5JCJS\ntIq7fTTY51E+ot407rnnHu655x7OPPNMzjrrLDZu3MimTZs4/fTT+fWvf82nP/1pHnroITKZTCTn\nFxE5HuVXUhjjL3qAbDbH1t0dLG6oYc6sqkk/vbvzmc98ho985CNH7Vu/fj1r167ls5/9LBdeeCGf\n/3xko4+KiExIxZUUkrHJb9Vc2HX2W9/6VtasWUNnZycAO3fuZO/evbz44ovU1NRwzTXXcMMNN7B+\n/fqjXisiUmrlV1I4hljMSMQm9wmkwq6zV69ezdVXX81rXvMaAGpra7n99tvZvHkzN9xwA7FYjGQy\nyU033QTAtddey0UXXcTChQtV0SwiJWcR9lQdiZUrV/q6deuO2PbMM89w2mmnFf0em/Z0kIzHWNo4\n69gHT0Pj/bwiImb2mLuvPNZxFXf7CNSqWURkNBWaFIyskoKIyFHKJimM5zZYMh4jm3fyM7C31Jl2\nu09EZpaySAqpVIr9+/cX/YOZmKHjKrg7+/fvJ5VKlToUESlTZfH00eLFi2lpaaG1tbWo4/sGcrR2\n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\n",
      "text/plain": [
       "<matplotlib.figure.Figure at 0x11f51b7b8>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "show_train_history('loss','val_loss')"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 評估模型準確率"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 37,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "10000/10000 [==============================] - 3s 270us/step\n"
     ]
    },
    {
     "data": {
      "text/plain": [
       "0.99280000000000002"
      ]
     },
     "execution_count": 37,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "scores = model.evaluate(x_Test4D_normalize , y_TestOneHot)\n",
    "scores[1]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 預測結果"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 38,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "prediction=model.predict_classes(x_Test4D_normalize)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 39,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "array([7, 2, 1, 0, 4, 1, 4, 9, 5, 9])"
      ]
     },
     "execution_count": 39,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "prediction[:10]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# 查看預測結果"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 40,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "import matplotlib.pyplot as plt\n",
    "def plot_images_labels_prediction(images,labels,prediction,idx,num=10):\n",
    "    fig = plt.gcf()\n",
    "    fig.set_size_inches(12, 14)\n",
    "    if num>25: num=25 \n",
    "    for i in range(0, num):\n",
    "        ax=plt.subplot(5,5, 1+i)\n",
    "        ax.imshow(images[idx], cmap='binary')\n",
    "\n",
    "        ax.set_title(\"label=\" +str(labels[idx])+\n",
    "                     \",predict=\"+str(prediction[idx])\n",
    "                     ,fontsize=10) \n",
    "        \n",
    "        ax.set_xticks([]);ax.set_yticks([])        \n",
    "        idx+=1 \n",
    "    plt.show()"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 41,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\n7XGSUTMLAAAA5BOmGQAAACBYNLMAAAAIFs0sAAAAgkUzCwAAgGDRzAIAACBYNLMAAAAIFs0sAAAA\ngkUzCwAAgGDRzAIAACBYNLMAAAAIFs0sAAAAgkUzCwAAgGDRzAIAACBYNLMAAAAIFs0sAAAAgkUz\nCwAAgGDRzAIAACBYNLMAAAAIFs0sAAAAgkUzCwAAgGDRzAIAACBYNLMAAAAIFs0sAAAAgkUzCwAA\ngGDRzAIAACBYNLMAAAAIFs0sAAAAghVpM6uqm1I8X6aq72Z4zCdVtWea27ZS1TmqukVVb8jkdapC\nVVeqakns/uwU216sqntncOycnFPUcj1WKuzTSVW3ZbpfZUU5VirsV63nFLVcjxVVbaSqE1V1kaq+\nqaptM3mtyor4fSUn5xSlPBgnXVV1o6ouiN0GZ/JalRXxOMnJOUUtD8YK7ylVVOhXZteLyNUiMrSq\nB1LV2pXZzzl3RIpNLhaRTBqUrJ0TLFUtEpF7ROSFKh4nX8ZK1s4JxkARWeCcaycifUTkr5U9UB6N\nlaydE4xZzrkOsdvtlT1IHo0TkSydEwzeU6qoWppZVS1W1ZdV9W1VXayqZ1R4uraqPq2qy1R1vKrW\nj+1zqKq+pqrzVXWGqjbN9HWdc6udc2+JyA8p6tukqsNVdUmsztLY4zNV9X5VnSci16hqqao+q6pv\nxW5HxrbbU1VfiO0/SkS04rEr3L8pdv4LVXVI7P/aOorI07H/y62XrXMKVa7GSsxVIvKsiKxOUl8w\nYyXdcwpVDsdKGxF5RUTEOfeeiJSpapME9YU0VtI6pxDl+D0lnfpCGicFjfeUn+6H957inIvsJiKb\nYv+tLSINYvdLRGS5lP8hlomIE5EjY889LiI3iEgdEZktIqWxx3uJyOOx+0+KSM/Y/eEisiDB7Y9e\nHbeKyA1J6nQi0jt2f7CIPBS7P1NE/lZhuzEiclTsfjMRWRa7/4CIDI7d7x47Xon3Z3By7Jzqx3Lj\nCq/RscJrZOWcQrvleqyIyD4i8pqU/w/eT/uFPFbSPafQbnkwVu4WkeGx+4eJyDYROTTwsZLWOYV0\ny4Nx0lXK/yVtkYhMF5EDd1JnSOMkrXMK7ZYHY4X3lCreKnU5uhJURO5W1S4iskPKf8n+2KF/4pz7\nd+z+aCn/J/TnRaStiLyoqiIiRSLyhX9Q51z/LNW3Q0TGVahhQoXnxlW4f4KItInVJCLSQFWLRaSL\n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\nAAAI1v8B+WxvLOwBqnIAAAAASUVORK5CYII=\n",
      "text/plain": [
       "<matplotlib.figure.Figure at 0x11fb415f8>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction(x_Test,y_Test,prediction,idx=0)"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# confusion matrix\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 42,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/html": [
       "<div>\n",
       "<style>\n",
       "    .dataframe thead tr:only-child th {\n",
       "        text-align: right;\n",
       "    }\n",
       "\n",
       "    .dataframe thead th {\n",
       "        text-align: left;\n",
       "    }\n",
       "\n",
       "    .dataframe tbody tr th {\n",
       "        vertical-align: top;\n",
       "    }\n",
       "</style>\n",
       "<table border=\"1\" class=\"dataframe\">\n",
       "  <thead>\n",
       "    <tr style=\"text-align: right;\">\n",
       "      <th>predict</th>\n",
       "      <th>0</th>\n",
       "      <th>1</th>\n",
       "      <th>2</th>\n",
       "      <th>3</th>\n",
       "      <th>4</th>\n",
       "      <th>5</th>\n",
       "      <th>6</th>\n",
       "      <th>7</th>\n",
       "      <th>8</th>\n",
       "      <th>9</th>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>label</th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "      <th></th>\n",
       "    </tr>\n",
       "  </thead>\n",
       "  <tbody>\n",
       "    <tr>\n",
       "      <th>0</th>\n",
       "      <td>977</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>1</th>\n",
       "      <td>0</td>\n",
       "      <td>1130</td>\n",
       "      <td>1</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2</th>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "      <td>1024</td>\n",
       "      <td>0</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>3</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>3</th>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1007</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>4</th>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>979</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>2</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>5</th>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>12</td>\n",
       "      <td>0</td>\n",
       "      <td>875</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>1</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>6</th>\n",
       "      <td>1</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>2</td>\n",
       "      <td>951</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>7</th>\n",
       "      <td>0</td>\n",
       "      <td>3</td>\n",
       "      <td>3</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1016</td>\n",
       "      <td>1</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>8</th>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>2</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>968</td>\n",
       "      <td>2</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>9</th>\n",
       "      <td>1</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>6</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>0</td>\n",
       "      <td>1</td>\n",
       "      <td>1001</td>\n",
       "    </tr>\n",
       "  </tbody>\n",
       "</table>\n",
       "</div>"
      ],
      "text/plain": [
       "predict    0     1     2     3    4    5    6     7    8     9\n",
       "label                                                         \n",
       "0        977     0     0     1    0    0    1     0    1     0\n",
       "1          0  1130     1     2    0    0    1     1    0     0\n",
       "2          1     1  1024     0    2    0    0     1    3     0\n",
       "3          0     0     0  1007    0    1    0     0    2     0\n",
       "4          0     0     0     0  979    0    0     0    1     2\n",
       "5          2     0     0    12    0  875    1     0    1     1\n",
       "6          1     2     0     0    1    2  951     0    1     0\n",
       "7          0     3     3     2    0    0    0  1016    1     3\n",
       "8          1     0     1     2    0    0    0     0  968     2\n",
       "9          1     0     0     0    6    0    0     0    1  1001"
      ]
     },
     "execution_count": 42,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "import pandas as pd\n",
    "pd.crosstab(y_Test,prediction,\n",
    "            rownames=['label'],colnames=['predict'])"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 43,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "df = pd.DataFrame({'label':y_Test, 'predict':prediction})"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 44,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/html": [
       "<div>\n",
       "<style>\n",
       "    .dataframe thead tr:only-child th {\n",
       "        text-align: right;\n",
       "    }\n",
       "\n",
       "    .dataframe thead th {\n",
       "        text-align: left;\n",
       "    }\n",
       "\n",
       "    .dataframe tbody tr th {\n",
       "        vertical-align: top;\n",
       "    }\n",
       "</style>\n",
       "<table border=\"1\" class=\"dataframe\">\n",
       "  <thead>\n",
       "    <tr style=\"text-align: right;\">\n",
       "      <th></th>\n",
       "      <th>label</th>\n",
       "      <th>predict</th>\n",
       "    </tr>\n",
       "  </thead>\n",
       "  <tbody>\n",
       "    <tr>\n",
       "      <th>340</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>1299</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>1393</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>1737</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2035</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2369</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2597</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2810</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>2970</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>3157</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>4360</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "    <tr>\n",
       "      <th>5937</th>\n",
       "      <td>5</td>\n",
       "      <td>3</td>\n",
       "    </tr>\n",
       "  </tbody>\n",
       "</table>\n",
       "</div>"
      ],
      "text/plain": [
       "      label  predict\n",
       "340       5        3\n",
       "1299      5        3\n",
       "1393      5        3\n",
       "1737      5        3\n",
       "2035      5        3\n",
       "2369      5        3\n",
       "2597      5        3\n",
       "2810      5        3\n",
       "2970      5        3\n",
       "3157      5        3\n",
       "4360      5        3\n",
       "5937      5        3"
      ]
     },
     "execution_count": 44,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "df[(df.label==5)&(df.predict==3)]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 45,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "Int64Index([340, 1299, 1393, 1737, 2035, 2369, 2597, 2810, 2970, 3157, 4360,\n",
       "            5937],\n",
       "           dtype='int64')"
      ]
     },
     "execution_count": 45,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "df[(df.label==5)&(df.predict==3)].index"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 46,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "image/png": "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\nHz/e5Pvuu89k/4Ma4vHf8DV9+nSTa9asWcTRlTyuzAIAACBYFLMAAAAIFsUsAAAAgpXzPbPffPON\nyX4PYevWrU32+39S8cYbb5js9+WuXbvW5O3bt5scrzft2GOPTXiO/fffP+1xIixbt2412e9VExHZ\ntm2byTVq1DC5SZMmGR8Xct+sWbMi911yySUm+6879erVM7ldu3aZHxjSMm7cOJP9Htpk6tSpY3L7\n9u1N7tSpU9EGVshNN91kst8z+/nnn5vs/84VEVm+fHmxxwHrn//8p8nPPvusyQ8//LDJv/32m8l+\nr/QFF1wQOceTTz5pckg9sj6uzAIAACBYFLMAAAAIFsUsAAAAgpXzPbP+2on+upxvvvmmyW+99Vax\nz+mvCev3pvl9jQ888EDkGOeff77JBxxwQLHHhbBMnjzZ5NWrVyfdx+9fY96UD36P7GWXXRbZxn8d\n8teZfeWVV0xu2bJlhkaHoho7dqzJI0aMMHnAgAEmb9y40WT/PSD+/n4uCV988UWJn7O0vfjiiyb/\n7W9/M9nvjc7Pz094vIULF0buu/baa03+7rvvTF61alXCYzZu3Njk3r17m3zVVVcl3D90XJkFAABA\nsChmAQAAECyKWQAAAAQr53tm/b4wv1812WddF8VBBx1ksv/5xb169TL5tNNOy/gYkJi/PuvEiRNN\n7tChg8kVKmT/7zZ/DF26dEm6j98bedttt2V0TEjO/4zzSy+91OQWLVpE9unTp09a5/B7YocNG2Zy\nsj59keg6svTI5j7/99eNN95o8umnn27y22+/bbK/PvmHH36YwdEhVd9++63Js2fPNrlr164mV6tW\nLeHxFi9eHLkvWU+sX/v4dceoUaNMrl27dsLjlTVcmQUAAECwKGYBAAAQLIpZAAAABCvne2YPPPBA\nkydNmmTyP/7xj6THePTRR00+9dRTTT766KNN9tf6RO7ZuXOnybfccovJZ555psn77LNPxsfw+uuv\nm+x/TvqWLVuSHsNfr7Bq1arFHxjScsIJJ5js99B+8sknkX38n7W/HrbfK5ns8ZdfftnkeD2zdevW\nNZke2fA1atQoYfbfn/HTTz8lPaa/Dqyf165da7I/1+rXr58wH3744UnHUNb4r8vVq1c3ecaMGcU+\nh9/jOnjwYJMPO+wwk1u3bl3sc5YlXJkFAABAsChmAQAAECyKWQAAAAQr53tmfaecckrCHA89sGVP\n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\ntkGDBtkeUpm2cuXKhI8ffPDBJTSS4uncubPJY8aMMXnKlCkmDxs2zOSbbropOwMrQ/bee2+Tr732\nWpP9HsN4vvzyS5P99YGT8XtkU+mZ9fvsX3/9dZND+hz1ssBf17dXr16Rbfz+1JJ4HRo+fLjJ/mvj\nNddck/UxlDcPPfSQyf7avaeffrrJpdGnvHHjxsh9fq//XXfdZfKmTZtMzs/PN9l/D0dp4sosAAAA\ngkUxCwAAgGBRzAIAACBY9MwWwc8//2xyvB6k8ePHm9yyZUuT/c92R/FMnDjR5MGDB5t80EEHleRw\nRESkbdu2Jjds2DDpPuvXr0+Y/d7K5cuXF3F05dcee+xhst/39fzzz5u8bdu2rI+pSpUqJsfrfW7f\nvr3JTZo0yeqYkJj/b7F58+aRbfw+5xtvvNHk/v37p3VOfw3Z+++/P7KN30ffqFGjYp0TyR1//PEm\nn3HGGSbXq1fP5OOOOy5yjIsuuijhOY455hiTK1Wy5dthhx1msv/+izlz5kSOuXr16oTn9L3yyism\n++8/KE1cmQUAAECwKGYBAAAQLIpZAAAABIue2RR8/fXXJvvrC/pryIqInHrqqSb7PbRF+Sx27J7f\nY+jnp556KukxPvzwQ5OXLVtmst9z5P8MnXMmz507N+HjqRwj2eMovpNPPtnkww8/3OTFixdn/Jwt\nWrQweejQoSb7PfbIPS+88ILJ8d4H4fe03nnnnSa/9NJLCY/pvwb5v3vi/R45++yzTX7xxRcj2yCz\nWrVqZfLs2bNNHj16tMkvv/xy5Bh///vfE56jevXqCR+vVq2ayevWrUu4fSruuecek+P1+uYKrswC\nAAAgWBSzAAAACBbFLAAAAIJFz2wcCxYsMPmss84yee3atSbH+3zixx57zOQaNWpkaHQoim7duhV7\nG7/vyV+/ceTIkekPzLN06VKTjzjiCJP9z/S+7rrrin1OWJMmTTLZX7dTROT11183ecOGDSZfddVV\nJh911FEmX3zxxSbvs88+aY8TuSUvLy9y3yOPPGKy38965ZVXmuyvVZtsjVh/LWuR6JqnyL7KlSub\n3KxZs4TZXwddRGTnzp0mDx8+3ORNmzaZ7L9XZ9asWSb7dUnjxo0j5/Tf1zFw4ECT/bVrK1asGDlG\nruDKLAAAAIJFMQsAAIBgUcwCAAAgWBSzAAAACBZvAIvj6KOPNvm7774rpZEgl3Tu3Dnh4yNGjCih\nkSCbDjnkEJP9N3Pu7j4gGf8NYPxuKZ+qVq2adJvbb7+9BEZSdnBlFgAAAMGimAUAAECwKGYBAAAQ\nLIpZAAAABItiFgAAAMGimAUAAECwKGYBAAAQLIpZAAAABItiFgAAAMGimAUAAECwKGYBAAAQLHXO\npb6x6vcisjJ7w0EJOtg5l5eNAzNPyhzmClLBPEGqmCtIRcrzJK1iFgAAAMgltBkAAAAgWBSzAAAA\nCBbFLAAAAIJFMQsAAIBgUcwCAAAgWBSzAAAACBbFLAAAAIJFMQsAAIBgUcwCAAAgWP8HhBigGsJM\n4MIAAAAASUVORK5CYII=\n",
      "text/plain": [
       "<matplotlib.figure.Figure at 0x11bd31d68>"
      ]
     },
     "metadata": {},
     "output_type": "display_data"
    }
   ],
   "source": [
    "plot_images_labels_prediction([x_Test[i] for i in df[(df.label==5)&(df.predict==3)].index],[y_Test[i] for i in df[(df.label==5)&(df.predict==3)].index],prediction,idx=0)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": null,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": []
  }
 ],
 "metadata": {
  "kernelspec": {
   "display_name": "Python 3",
   "language": "python",
   "name": "python3"
  },
  "language_info": {
   "codemirror_mode": {
    "name": "ipython",
    "version": 3
   },
   "file_extension": ".py",
   "mimetype": "text/x-python",
   "name": "python",
   "nbconvert_exporter": "python",
   "pygments_lexer": "ipython3",
   "version": "3.6.1"
  }
 },
 "nbformat": 4,
 "nbformat_minor": 2
}
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">感謝你閱讀完這篇文章，如果你覺得這些文章對你有幫助請在底下幫我拍個手（長按最多可以拍50下手）。</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">[Python資料分析＆機器學習]這系列文章是我在Hahow上面所開設課程的講義，如果你是新手想著看影片一步一步學習，可以參考這門課：<a href="https://hahow.in/cr/pydataml" target="_self">https://hahow.in/cr/pydataml</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">如果你對什麼主題的文章有興趣的話，歡迎透過這個連結告訴我：<a href="https://yehjames.typeform.com/to/XIIVQC" target="_self">https://yehjames.typeform.com/to/XIIVQC</a><br></br>有任何問題也歡迎在底下留言或是來信告訴我： <a href="mailto:yehjames23@gmail.com" target="_self">yehjames23@gmail.com</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">參考閱讀</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;"><a href="https://www.tenlong.com.tw/products/9789864342167" target="_self">TensorFlow+Keras 深度學習人工智慧實務應用</a></li><li class="ff3" style="font-size:22px;"><a href="https://www.udemy.com/deeplearning/" target="_self">Udemy Deep learning 課程</a></li><li class="ff3" style="font-size:22px;"><a href="https://www.tenlong.com.tw/products/9789864764846" target="_self">Deep Learning｜用Python進行深度學習的基礎理論實作</a></li><li class="ff3" style="font-size:22px;"><a href="https://mp.weixin.qq.com/s/EZGqfM61POfOZBA-QklNJA" target="_self">【机器学习】彻底搞懂CNN</a></li></ol></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
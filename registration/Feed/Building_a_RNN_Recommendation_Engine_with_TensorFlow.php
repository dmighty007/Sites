<!DOCTYPE html>
                <html>
                <head>
                    <title>Building a RNN Recommendation Engine with TensorFlow</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/decathlontechnology/building-a-rnn-recommendation-engine-with-tensorflow-505644aa9ff3"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@alfonso.carta?source=post_page-----505644aa9ff3--------------------------------">Author : Alfonso CARTA</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Building a RNN Recommendation Engine with TensorFlow</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ZBhTKm4ynbegYG2Ta3-ixA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ZBhTKm4ynbegYG2Ta3-ixA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ZBhTKm4ynbegYG2Ta3-ixA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ZBhTKm4ynbegYG2Ta3-ixA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ZBhTKm4ynbegYG2Ta3-ixA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ZBhTKm4ynbegYG2Ta3-ixA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ZBhTKm4ynbegYG2Ta3-ixA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ZBhTKm4ynbegYG2Ta3-ixA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ZBhTKm4ynbegYG2Ta3-ixA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ZBhTKm4ynbegYG2Ta3-ixA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ZBhTKm4ynbegYG2Ta3-ixA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ZBhTKm4ynbegYG2Ta3-ixA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ZBhTKm4ynbegYG2Ta3-ixA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ZBhTKm4ynbegYG2Ta3-ixA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ZBhTKm4ynbegYG2Ta3-ixA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Recommendation engines are powerful tools that make browsing content easier. Moreover, a great recommendation system helps users find things they wouldn’t have thought to look for on their own. For these reasons, recommendation tools can dramatically boost e-commerce turnover. Here we show how we — at Decathlon France — implemented a RNN (<em>recurrent neural network</em>) recommendation system that outperforms our previous model (ALS, alternating least square) by more than 20% on Precision metric (off-line).</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">We suggest you the great <a href="https://medium.com/decathlondevelopers/personalization-strategy-and-recommendation-systems-at-décathlon-canada-d9cb3d37f675" target="_self">article of our Canadian colleagues</a> if you are looking for a more comprehensive introduction on recommendation systems.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Business Problem</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Decathlon online catalog is quite large, we sell tens of thousands of different items on our online platform. Such a wide choice can be an obstacle for users looking for new compelling new content. Of course customers can use search to access content. To this regard, a recommendation engine can come in handy, since it can display items that users might not have thought to search for on their own, and so hugely improve customer experience and conversion rate.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With the aim of improving our previous solution (ALS), we developed a new recommendation engine (Deep Learning based) to personalize the homepage of <a href="http://www.decathlon.fr" target="_self">www.decathlon.fr</a> for each identified customer. Hence, every identified user sees different and personalized recommendations.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Data Science Solution</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Our previous recommender system is a <a href="http://en.wikipedia.org/wiki/Recommender_system#Collaborative_filtering" target="_self">Collaborative filtering</a> implemented with <code>spark.ml</code> library. The <code>spark.ml</code> package uses the <a href="http://dl.acm.org/citation.cfm?id=1608614" target="_self">alternating least squares (ALS)</a> algorithm to learn the latent factors of a user-item association matrix.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Collaborative filtering is commonly used for recommender systems. However, it turns out to be a rigid framework preventing the use of any other useful metadata. Moreover, it assumes that users and items are only linearly depended. More recent works (<a href="https://netflixtechblog.com/supporting-content-decision-makers-with-machine-learning-995b7b76006f" target="_self">Netflix</a>, <a href="https://static.googleusercontent.com/media/research.google.com/en//pubs/archive/45530.pdf" target="_self">YouTube</a>, <a href="https://tbtech.co/how-deep-learning-is-central-to-spotifys-strategy/" target="_self">Spotify</a>) have shown that deep learning frameworks outperform classical factorization methods thanks to the use of more rich <strong>non-linear transformations of the input data</strong> as well as the addition of <strong>useful metadata</strong>.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Our deep learning approach is inspired by <a href="https://www.tensorflow.org/tutorials/text/text_generation" target="_self">recent text generation techniques</a> that use RNN models capable of generating subsequent words from a given phrase (sequence of words). For our recommendation problem, we replaced sequence of words with sequence of items and applied the same methodology (the figure below depicts the NLP and Recommendation analogy).</p></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*6LYYunWpL7tLzE6vEOIKQg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*6LYYunWpL7tLzE6vEOIKQg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*6LYYunWpL7tLzE6vEOIKQg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*6LYYunWpL7tLzE6vEOIKQg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*6LYYunWpL7tLzE6vEOIKQg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*6LYYunWpL7tLzE6vEOIKQg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*6LYYunWpL7tLzE6vEOIKQg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*6LYYunWpL7tLzE6vEOIKQg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*6LYYunWpL7tLzE6vEOIKQg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*6LYYunWpL7tLzE6vEOIKQg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*6LYYunWpL7tLzE6vEOIKQg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*6LYYunWpL7tLzE6vEOIKQg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*6LYYunWpL7tLzE6vEOIKQg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*6LYYunWpL7tLzE6vEOIKQg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*6LYYunWpL7tLzE6vEOIKQg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">NLP and Recommandation analogy to predict the next more likely word and item respectively</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Input Data</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The data used for developing our recommendation engine consist of temporal ordered sequences of bought items and recency (of purchased items) sequences for each identified customer. Here is an example of our input data:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*EWEYzskZKC26NyvwEH5BwA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*EWEYzskZKC26NyvwEH5BwA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*EWEYzskZKC26NyvwEH5BwA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*EWEYzskZKC26NyvwEH5BwA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*EWEYzskZKC26NyvwEH5BwA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*EWEYzskZKC26NyvwEH5BwA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*EWEYzskZKC26NyvwEH5BwA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*EWEYzskZKC26NyvwEH5BwA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*EWEYzskZKC26NyvwEH5BwA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*EWEYzskZKC26NyvwEH5BwA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*EWEYzskZKC26NyvwEH5BwA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*EWEYzskZKC26NyvwEH5BwA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*EWEYzskZKC26NyvwEH5BwA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*EWEYzskZKC26NyvwEH5BwA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*EWEYzskZKC26NyvwEH5BwA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Input data sample</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Where:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><code>customer_id</code> : is the customer unique identifier;</li><li class="ff3" style="font-size:22px;"><code>item_id</code> : strings containing sequences of bought item ids for each customer;</li><li class="ff3" style="font-size:22px;"><code>nb_days</code>: strings containing sequences of number of days passed from item purchase and last training date (kind of purchase recency for each bought item).</li></ul></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4"><strong>NB</strong>: <code>item_id</code> and <code>nb_days</code><strong> </strong>sequences<strong> </strong>are temporally ordered.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Feature Transformation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Features <code>item_id</code> and <code>nb_days</code> need be appropriately transformed before feeding them to the model. Namely, <code>item_id</code> will be tokenized and encoded whereas <code>nb_days</code> will be bucketed.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Tokenization & Encoding of </strong><code>item_id</code></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>In order to prepare the input data for the RNN model, each sequence of bought items is tokenized and each item in the sequence is integer-encoded.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is achieved by using the <code>Tokenizer</code> class from <code>tensorflow.keras.preprocessing.text</code> which allows to vectorize a text corpus, by turning each text into a sequence of integers (check out the <a href="https://www.tensorflow.org/api_docs/python/tf/keras/preprocessing/text/Tokenizer" target="_self">doc</a> for more details). For example, the above strings of item sequences become the following arrays (<code>numpy</code>):</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><code>"15431,164271,300287,300358"</code> -&gt; <code>[74, 276, 362, 119]</code></li><li class="ff3" style="font-size:22px;"><code>"1733,11687,15623,103080,1733,310789"</code> -&gt; <code>[1, 2, 33, 289, 1, 27]</code>.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Bucketing of </strong><code>nb_days</code></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The <code>nb_days</code> feature contains variable length sequences of integer values ranging from 365 to 1. This because we extracted one year transaction history and so 365 represent the oldest time (one year old expressed in days) for a purchased item and 1 the most recent one.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We decided to bucket <code>nb_days</code> into 100 bins (this value can be changed if needed), denoted by discrete values ranging from 1 to 100. For example, the above strings of recency sequences become the following arrays (<code>numpy</code>):</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><code>'354,354,327,327'</code> -&gt; <code>[96, 96, 89, 89]</code></li><li class="ff3" style="font-size:22px;"><code>'116,116,116,8,8,1'</code> -&gt; <code>[32, 32, 32, 2, 2, 1]</code>.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This transformation can easily implemented with <code>tensorflow.feature_column.bucketized_column</code>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Create Input and Target features tensor</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In order to train the model, we need to create a <em>tensor</em> containing the input and target features.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Notably, the <strong>input features</strong> are the transformed version of <code>item_id</code> and <code>nb_days</code> without the last element, whereas the <strong>target feature</strong> is the shifted version of <code>item_id</code> (without the first element).</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is because we want to make the RNN model learn to predict the next item of the target sequence given the previous input features.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For example, if the transformed feature of <code>item_id</code>, <code>nb_days</code> are <code>[74, 276, 362, 119]</code> and <code>[96, 96, 89, 89]</code> respectively, then the <em>feature</em> tensor will be:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>{<br/>'item_id': [74, 276, 362],<br/>'nb_days': [96, 96, 89],<br/>'target': [276, 362, 119]<br/>}</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Padding</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In order to have all sequences of the same length, input and target features are then padded via the <code>pad_sequences()</code> function from <code>tensorflow.keras.preprocessing.sequence</code>. For our purpose we found that fixing the maximal length of each sequence to 20 (<code>max_len</code>, part of the program configuration) worked fine. This value corresponds to 80th percentile of sequences’ length, i.e. 80% of <code>item_id</code> sequences are made up of at most 20 items.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For example, with <code>max_len = 5</code> the feature tensor of the above example would become:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>{<br/>'item_id': [0, 0, 74, 276, 362],<br/>'nb_days': [0, 0, 96, 96, 89],<br/>'target': [0, 0, 276, 362, 119]<br/>}</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Feature Data</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The final feature data is a dictionary whose keys are <code>item_id</code><strong>, </strong><code>nb_days</code><strong>, </strong><code>target</code><strong> </strong>and<strong> </strong>values are <code>N x max_length</code><strong> </strong><em>numpy</em> arrays where <code>N</code> denotes the number of sequences used for training (at most the number of users) and <code>max_length</code><strong> </strong>is the maximal length used for padding.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>train_dict = {<br/>              'item_id': [[0, 0,...,0, 74, 276, 362], ...]<br/>              'nb_days': [[0, 0,...,0, 96, 96, 89], ...]<br/>              'target':  [[0, 0,...0, 276, 362, 119], ...]<br/>             }</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Eventually, we used the <code>tf.data.Dataset.from_tensor_slices</code><strong> </strong>function to create a train dataset to be used for the model training (see code below).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import tensorflow as tf

def create_train_tfdata(train_feat_dict, train_target_tensor,
                        batch_size, buffer_size=None):
    """
    Create train tf dataset for model train input
    :param train_feat_dict: dict, containing the features tensors for train data
    :param train_target_tensor: np.array(), the training TARGET tensor
    :param batch_size: (int) size of the batch to work with
    :param buffer_size: (int) Optional. Default is None. Size of the buffer
    :return: (tuple) 1st element is the training dataset,
                     2nd is the number of steps per epoch (based on batch size)
    """
    if buffer_size is None:
        buffer_size = batch_size*50

    train_steps_per_epoch = len(train_target_tensor) // batch_size

    train_dataset = tf.data.Dataset.from_tensor_slices((train_feat_dict,
                                                        train_target_tensor)).cache()
    train_dataset = train_dataset.shuffle(buffer_size).batch(batch_size)
    train_dataset = train_dataset.repeat().prefetch(tf.data.experimental.AUTOTUNE)
    
    return train_dataset, train_steps_per_epoch
  
  train_feat_dict = {'item_id': train_dict['item_id'],
                     'nb_days': train_dict['nb_days']}
  train_target_tensor = train_dict['target']
  
  train_dataset, train_steps_per_epoch = create_train_tfdata(train_feat_dict,
                                                             train_target_tensor,
                                                             batch_size=512)
  </pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">TensorFlow implementation of the train dataset creation</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Model</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The modeling strategy that has been implemented here consists in predicting, for each user, the next most likely bought product, based on the sequence of previous bought items (<code>item_id</code> feature) and the purchase recency (<code>nb_days</code> feature).</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">The <code>nb_days</code> feature played a pivotal role in drastically improving model performance. In fact, this feature helps the model to better follow the seasonal behavior of purchases and hence recommend more adapted products across time.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Finally, we also added a <a href="https://lilianweng.github.io/lil-log/2018/06/24/attention-attention.html" target="_self">self-attention layer</a> which has been identified as a performance booster for sequence-to-sequence model architectures, as it is in our case.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The model implemented here is hence an <strong>RNN model coupled with a self-attention layer</strong> having the following architecture:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*CC4Syi4C8S5ypHjeSURs-g.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*CC4Syi4C8S5ypHjeSURs-g.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*CC4Syi4C8S5ypHjeSURs-g.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*CC4Syi4C8S5ypHjeSURs-g.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*CC4Syi4C8S5ypHjeSURs-g.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*CC4Syi4C8S5ypHjeSURs-g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*CC4Syi4C8S5ypHjeSURs-g.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*CC4Syi4C8S5ypHjeSURs-g.png 640w, https://miro.medium.com/v2/resize:fit:720/1*CC4Syi4C8S5ypHjeSURs-g.png 720w, https://miro.medium.com/v2/resize:fit:750/1*CC4Syi4C8S5ypHjeSURs-g.png 750w, https://miro.medium.com/v2/resize:fit:786/1*CC4Syi4C8S5ypHjeSURs-g.png 786w, https://miro.medium.com/v2/resize:fit:828/1*CC4Syi4C8S5ypHjeSURs-g.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*CC4Syi4C8S5ypHjeSURs-g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*CC4Syi4C8S5ypHjeSURs-g.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*CC4Syi4C8S5ypHjeSURs-g.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Recommendation Engine model architecture</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The hyper-parameters of the model are:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><code>emb_item_id_units</code>: each item (<code>item_id</code>) will be encoded (embedded) in a dense vector with <code>shape = (1, emb_item_id_units)</code></li><li class="ff3" style="font-size:22px;"><code>emb_nb_days_units</code>: each bucketed recency value (<code>nb_days</code>) will be encoded (embedded) in a dense vector with <code>shape = (1, emb_nb_days_units)</code></li><li class="ff3" style="font-size:22px;"><code>recurrent_dropout</code>: drop-out value of the LSTM layer</li><li class="ff3" style="font-size:22px;"><code>rnn_units</code>: number of units ("neurons") of the LSTM layer</li><li class="ff3" style="font-size:22px;"><code>learning_rate</code>: learning rate for training the model</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">whereas the (not-tunable) parameters are:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><code>max_length</code>: the maximal length of each sequence of items, as seen in the data pre-processing section</li><li class="ff3" style="font-size:22px;"><code>item_id_vocab_size</code>: the number of unique items + 1 (to take into account the zero padding)</li><li class="ff3" style="font-size:22px;"><code>batch_size</code>: number of samples (sequences) that are fed to the model at the same time for training</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here you can find the TensorFlow implementation of the above recommender architecture:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def build_model(hp, max_len, item_vocab_size):
    """
    Build a model given the hyper-parameters with item and nb_days input features
    :param hp: (kt.HyperParameters) hyper-parameters to use when building this model
    :return: built and compiled tensorflow model 
    """
    inputs = {}
    inputs['item_id'] = tf.keras.Input(batch_input_shape=[None, max_len],
                                       name='item_id', dtype=tf.int32)
    # create encoding padding mask
    encoding_padding_mask = tf.math.logical_not(tf.math.equal(inputs['item_id'], 0))

    # nb_days bucketized
    inputs['nb_days'] = tf.keras.Input(batch_input_shape=[None, max_len],
                                       name='nb_days', dtype=tf.int32)

    # Pass categorical input through embedding layer
    # with size equals to tokenizer vocabulary size
    # Remember that vocab_size is len of item tokenizer + 1
    # (for the padding '0' value)
    
    embedding_item = tf.keras.layers.Embedding(input_dim=item_vocab_size,
                                               output_dim=hp.get('embedding_item'),
                                               name='embedding_item'
                                              )(inputs['item_id'])
    # nbins=100, +1 for zero padding
    embedding_nb_days = tf.keras.layers.Embedding(input_dim=100 + 1,
                                                  output_dim=hp.get('embedding_nb_days'),
                                                  name='embedding_nb_days'
                                                 )(inputs['nb_days'])

    #  Concatenate embedding layers
    concat_embedding_input = tf.keras.layers.Concatenate(
     name='concat_embedding_input')([embedding_item, embedding_nb_days])

    concat_embedding_input = tf.keras.layers.BatchNormalization(
     name='batchnorm_inputs')(concat_embedding_input)
    
    # LSTM layer
    rnn = tf.keras.layers.LSTM(units=hp.get('rnn_units_cat'),
                                   return_sequences=True,
                                   stateful=False,
                                   recurrent_initializer='glorot_normal',
                                   name='LSTM_cat'
                                   )(concat_embedding_input)

    rnn = tf.keras.layers.BatchNormalization(name='batchnorm_lstm')(rnn)

    # Self attention so key=value in inputs
    att = tf.keras.layers.Attention(use_scale=False, causal=True,
                                    name='attention')(inputs=[rnn, rnn],
                                                      mask=[encoding_padding_mask,
                                                            encoding_padding_mask])

    # Last layer is a fully connected one
    output = tf.keras.layers.Dense(item_vocab_size, name='output')(att)

    model = tf.keras.Model(inputs, output)

    model.compile(
        optimizer=tf.keras.optimizers.Adam(hp.get('learning_rate')),
        loss=loss_function,
        metrics=['sparse_categorical_accuracy'])
    
    return model
</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">TensorFlow implementation of the RNN recommendation engine</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As Loss function we used a modified version of the <code>tf.keras.losses.sparse_categorical_crossentropy</code>, where we skipped loss calculation on the zero padded elements:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def loss_function(real, pred):
    """
    We redefine our own loss function in order to get rid of the '0' value
    which is the one used for padding. This to avoid that the model optimize itself
    by predicting this value because it is the padding one.
    
    :param real: the truth
    :param pred: predictions
    :return: a masked loss where '0' in real (due to padding)
                are not taken into account for the evaluation
    """

    # to check that pred is numric and not nan
    mask = tf.math.logical_not(tf.math.equal(real, 0))
    loss_object_ = tf.keras.losses.SparseCategoricalCrossentropy(from_logits=True,
                                                                 reduction='none')
    loss_ = loss_object_(real, pred)
    mask = tf.cast(mask, dtype=loss_.dtype)
    loss_ *= mask

    return tf.reduce_mean(loss_)</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">TensorFlow implementation of custom loss function</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>Hyper-Parameter Optimization</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Model hyper-parameters have been tuned using the <a href="https://research.google/pubs/pub47036/" target="_self">Hyperband optimization algorithm</a> implemented in the <code>keras-tuner</code><a href="https://keras-team.github.io/keras-tuner/" target="_self"> library</a>, which allows one to make distributable hyper-parameter optimization for <em>TensorFlow</em> models in few lines of code</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Notably, hyper-parameter optimization is carried out using <em>validation dataset</em> which consists of 10% of randomly selected samples from training data. Moreover, we used <code>sparse_categorical_accuracy</code> as metric to rank optimization trials.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We tried several values for the <code>batch_size</code> parameter, and eventually ended up using <code>batch_size=512</code>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Training</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The final model is trained on all available data with the best hyper-parameter obtained at the end of the previous optimization phase.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def fit_model(model, train_dataset, steps_per_epoch, epochs):
    """
    Fit the Keras model on the training dataset for a number of given epochs
    :param model: tf model to be trained
    :param train_dataset: (tf.data.Dataset object) the training dataset
                          used to fit the model
    :param steps_per_epoch: (int) Total number of steps (batches of samples) before 
                            declaring one epoch finished and starting the next epoch.
    :param epochs: (int) the number of epochs for the fitting phase
    :return: tuple (mirrored_model, history) with trained model and model history
    """
    
    # mirrored_strategy allows to use multi GPUs when available
    mirrored_strategy = tf.distribute.experimental.MultiWorkerMirroredStrategy(
        tf.distribute.experimental.CollectiveCommunication.AUTO)
    
    with mirrored_strategy.scope():
        mirrored_model = model

    history = mirrored_model.fit(train_dataset,
                                 steps_per_epoch=steps_per_epoch,
                                 epochs=epochs, verbose=2)

    return mirrored_model, history</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">TensorFlow implementation of the fitting method</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Results</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Before going live with our new recommender system, we adopted a <strong>backtesting strategy</strong> in order to evaluate the model predicting performance. In fact, backtesting assesses the viability of a model by discovering how it would have played out retrospectively using historical data.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">The underlying theory is that any model that worked well in the past is likely to work well in the future, and conversely, any model that performed poorly in the past is likely to perform poorly in the future.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To this aim, we used one year of historical transactions as training data and we tested the model performance on the subsequent month (see picture below).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Xw0VeTZuhR-skgZsWL71Fg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Xw0VeTZuhR-skgZsWL71Fg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Xw0VeTZuhR-skgZsWL71Fg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Xw0VeTZuhR-skgZsWL71Fg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Xw0VeTZuhR-skgZsWL71Fg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Xw0VeTZuhR-skgZsWL71Fg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Xw0VeTZuhR-skgZsWL71Fg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Xw0VeTZuhR-skgZsWL71Fg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Xw0VeTZuhR-skgZsWL71Fg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Xw0VeTZuhR-skgZsWL71Fg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Xw0VeTZuhR-skgZsWL71Fg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Xw0VeTZuhR-skgZsWL71Fg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Xw0VeTZuhR-skgZsWL71Fg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Xw0VeTZuhR-skgZsWL71Fg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Xw0VeTZuhR-skgZsWL71Fg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Backtesting strategy representation</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The table below shows the benchmark performance of several models during the backtesting. We used classical metrics employed to rank recommender models’ results, i.e. <a href="https://en.wikipedia.org/wiki/Precision_and_recall" target="_self">Precision, Recall</a>, <a href="https://en.wikipedia.org/wiki/Mean_reciprocal_rank" target="_self">MRR</a>, <a href="https://en.wikipedia.org/wiki/Evaluation_measures_(information_retrieval)" target="_self">MAP</a> and <a href="https://dl.acm.org/doi/pdf/10.1145/1864708.1864761" target="_self">Coverage</a>, all of them calculated on the best five recommended items per user.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9BW88qEpFVoxxMzi9jtRCQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9BW88qEpFVoxxMzi9jtRCQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9BW88qEpFVoxxMzi9jtRCQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9BW88qEpFVoxxMzi9jtRCQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9BW88qEpFVoxxMzi9jtRCQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9BW88qEpFVoxxMzi9jtRCQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*9BW88qEpFVoxxMzi9jtRCQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9BW88qEpFVoxxMzi9jtRCQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*9BW88qEpFVoxxMzi9jtRCQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*9BW88qEpFVoxxMzi9jtRCQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*9BW88qEpFVoxxMzi9jtRCQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*9BW88qEpFVoxxMzi9jtRCQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*9BW88qEpFVoxxMzi9jtRCQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*9BW88qEpFVoxxMzi9jtRCQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*9BW88qEpFVoxxMzi9jtRCQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Benchmark of backtesting results (orange-production, green-challenger, gray-baseline)</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The orange line represents the actual <em>production</em> model (ALS) performance, the one we aim to improve. We developed several versions of the RNN recommender system (<em>challengers</em>, green lines) with increasing level of complexity.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The simplest RNN, containing only the <code>item_id</code> as feature, was close to the ALS performances, but inferior on almost all metrics.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4"><strong>The greatest improvement boost was due to the adding of the </strong><code>nb_days</code><strong> feature</strong>. This temporal feature allowed to the RNN based recommender system to clearly surpass the ALS model on all the given metrics. Finally, the addition of the <em>attention layer </em>ulteriorly improved the RNN overall performances.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For the sake of comparability, we also calculated some (simple) <em>baselines</em> (grey lines in the table) which clearly show the performance gap with the more sophisticated models (ALS and RNN versions).</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Online A/B test are ongoing and preliminary results confirm the superior performance of the RNN recommendation engine.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Conclusions</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We have described our new deep neural network architecture for recommending items on Decathlon websites and showed how to implement it using TensorFlow. The model — inspired by recent text regeneration techniques — uses a Recurrent Neural Network (RNN) architecture whose inputs are sequences of bought items associated with sequences of purchase recencies (<em>nb_days</em> feature). Since deep learning models require special representation of input features, we also described how to properly transform those input sequences (<em>item_id</em> and <em>nb_days</em>) before feeding them to the model.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Finally, by means of a backtesting strategy we demonstrated how the use of <em>nb_days </em>feature was pivotal in outperforming our historical production model based on a matrix factorization approach (ALS).</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">This new deep learning architecture opens new perspective by giving us the possibility of adding new features (related to users and items) which can further improve the model performance and user experience.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>How about you? Do you have experience in Deep Learning & Recommender systems? Let us know in the comments below!</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">🙏🏼 If you enjoy reading this article, please consider giving it a few 👏👏👏.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">💌 Follow our latest posts on <a href="https://twitter.com/decathlondev" target="_self">Twitter</a> and <a href="https://www.linkedin.com/company/decathlondevelopers/" target="_self">LinkedIn</a> and discover our sport tech initiatives like open APIs on our <a href="https://developers.decathlon.com/" target="_self">developers</a> website 🚀</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">👩‍💻? 👨‍💻? Interested in joining <strong>Decathlon Tech Team</strong>? check out our <a href="https://developers.decathlon.com/careers" target="_self">carriers portal</a> to see the different exciting opportunities !</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>Very warm thank you to </em>the AI Personalization team and especially to Claire Deltrel & David Degardin who greatly contributed to this project.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
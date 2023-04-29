<!DOCTYPE html>
                <html>
                <head>
                    <title>A Comprehensive Hands-on Guide to Transfer Learning with Real-World Applications in Deep Learning</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/a-comprehensive-hands-on-guide-to-transfer-learning-with-real-world-applications-in-deep-learning-212bf3b2f27a"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://djsarkar.medium.com/?source=post_page-----212bf3b2f27a--------------------------------">Author : Dipanjan (DJ) Sarkar</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>A Comprehensive Hands-on Guide to Transfer Learning with Real-World Applications in Deep Learning</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">Deep Learning on Steroids with the Power of Knowledge Transfer!</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*aYIUR82O7bRiJSMdf8BdsQ.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Source: Pixabay</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Introduction</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Humans have an inherent ability to transfer knowledge across tasks. What we acquire as knowledge while learning about one task, we utilize in the same way to solve related tasks. The more related the tasks, the easier it is for us to transfer, or cross-utilize our knowledge. Some simple examples would be,</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Know how to ride a motorbike ⮫ Learn how to ride a car</li><li class="ff3" style="font-size:22px;">Know how to play classic piano ⮫ Learn how to play jazz piano</li><li class="ff3" style="font-size:22px;">Know math and statistics ⮫ Learn machine learning</li></ul></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:59%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 441px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*TIMA09tVqZe7tA6DckoP6g.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*TIMA09tVqZe7tA6DckoP6g.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*TIMA09tVqZe7tA6DckoP6g.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*TIMA09tVqZe7tA6DckoP6g.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*TIMA09tVqZe7tA6DckoP6g.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*TIMA09tVqZe7tA6DckoP6g.png 1100w, https://miro.medium.com/v2/resize:fit:882/format:webp/1*TIMA09tVqZe7tA6DckoP6g.png 882w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 441px" srcset="https://miro.medium.com/v2/resize:fit:640/1*TIMA09tVqZe7tA6DckoP6g.png 640w, https://miro.medium.com/v2/resize:fit:720/1*TIMA09tVqZe7tA6DckoP6g.png 720w, https://miro.medium.com/v2/resize:fit:750/1*TIMA09tVqZe7tA6DckoP6g.png 750w, https://miro.medium.com/v2/resize:fit:786/1*TIMA09tVqZe7tA6DckoP6g.png 786w, https://miro.medium.com/v2/resize:fit:828/1*TIMA09tVqZe7tA6DckoP6g.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*TIMA09tVqZe7tA6DckoP6g.png 1100w, https://miro.medium.com/v2/resize:fit:882/1*TIMA09tVqZe7tA6DckoP6g.png 882w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/441/1*TIMA09tVqZe7tA6DckoP6g.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In each of the above scenarios, we don’t learn everything from scratch when we attempt to learn new aspects or topics. We transfer and leverage our knowledge from what we have learnt in the past!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Conventional machine learning and deep learning algorithms, so far, have been traditionally designed to work in isolation. These algorithms are trained to solve specific tasks. The models have to be rebuilt from scratch once the feature-space distribution changes. <mark>Transfer learning is the idea of overcoming the isolated learning paradigm and utilizing knowledge acquired for one task to solve related ones.</mark> In this article, we will do a comprehensive coverage of the concepts, scope and real-world applications of transfer learning and even showcase some hands-on examples. To be more specific, we will be covering the following.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><strong>Motivation for Transfer Learning</strong></li><li class="ff3" style="font-size:22px;"><strong>Understanding Transfer Learning</strong></li><li class="ff3" style="font-size:22px;"><strong>Transfer Learning Strategies</strong></li><li class="ff3" style="font-size:22px;"><strong>Transfer Learning for Deep Learning</strong></li><li class="ff3" style="font-size:22px;"><strong>Deep Transfer Learning Strategies</strong></li><li class="ff3" style="font-size:22px;"><strong>Types of Deep Transfer Learning</strong></li><li class="ff3" style="font-size:22px;"><strong>Applications of Transfer Learning</strong></li><li class="ff3" style="font-size:22px;"><strong>Case Study 1: Image Classification with a Data Availability Constraint</strong></li><li class="ff3" style="font-size:22px;"><strong>Case Study 2: Multi-Class Fine-grained Image Classification with Large Number of Classes and Less Data Availability</strong></li><li class="ff3" style="font-size:22px;"><strong>Transfer Learning Advantages</strong></li><li class="ff3" style="font-size:22px;"><strong>Transfer Learning Challenges</strong></li><li class="ff3" style="font-size:22px;"><strong>Conclusion & Future Scope</strong></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will look at transfer learning as a general high-level concept which started right from the days of machine learning and statistical modeling, however, we will be more focused around deep learning in this article.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4"><strong>Note:</strong> All the case studies will cover step by step details with code and outputs. The case studies depicted here and their results are purely based on actual experiments which we conducted when we implemented and tested these models while working on our book: <a href="https://github.com/dipanjanS/hands-on-transfer-learning-with-python" target="_self">Hands on Transfer Learning with Python</a> (details at the end of this article).</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This article aims to be an attempt to cover theoretical concepts as well as demonstrate practical hands-on examples of deep learning applications in one place, given the information overload which is out there on the web. All examples will be covered in Python using keras with a tensorflow backend, a perfect match for people who are veterans or just getting started with deep learning! <em>Interested in PyTorch? Feel free to convert these examples and contact me and I’ll feature your work here and on GitHub!</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Motivation for Transfer Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We have already briefly discussed that humans don’t learn everything from the ground up and leverage and transfer their knowledge from previously learnt domains to newer domains and tasks. Given the craze for <a href="https://en.wikipedia.org/wiki/Artificial_general_intelligence" target="_self">True Artificial General Intelligence</a>, transfer learning is something which data scientists and researchers believe can further our progress towards <a href="https://en.wikipedia.org/wiki/Artificial_general_intelligence" target="_self">AGI</a>. In fact, <a href="https://en.wikipedia.org/wiki/Andrew_Ng" target="_self">Andrew Ng</a>, renowned professor and data scientist, who has been associated with Google Brain, Baidu, Stanford and Coursera, recently gave an amazing tutorial in NIPS 2016 called <a href="https://media.nips.cc/Conferences/2016/Slides/6203-Slides.pdf" target="_self">‘Nuts and bolts of building AI applications using Deep Learning’</a><strong> </strong>where he mentioned,</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">After supervised learning — Transfer Learning will be the next driver of ML commercial success</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I recommend interested folks to check out <a href="https://www.youtube.com/watch?v=wjqaz6m42wU" target="_self">his interesting tutorial</a> from NIPS 2016.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:80%;"><iframe  scrolling="auto" width="854.0" height="480.0" frameborder="0" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2Fwjqaz6m42wU%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dwjqaz6m42wU&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2Fwjqaz6m42wU%2Fhqdefault.jpg&key=a19fcc184b9711e1b4764040d3dc5c07&type=text%2Fhtml&schema=youtube" allowfullscreen=""></iframe></div><br><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In fact, transfer learning is not a concept which just cropped up in the 2010s. The Neural Information Processing Systems (NIPS) 1995 workshop <em>Learning to Learn: Knowledge Consolidation and Transfer in Inductive Systems</em> is believed to have provided the initial motivation for research in this field. Since then, terms such as <em>Learning to Learn</em>, <em>Knowledge Consolidation</em>, and <em>Inductive Transfer</em> have been used interchangeably with transfer learning. Invariably, different researchers and academic texts provide definitions from different contexts. In their famous book, <em>Deep Learning</em>, Goodfellow et al refer to transfer learning in the context of generalization. Their definition is as follows:</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">Situation where what has been learned in one setting is exploited to improve generalization in another setting.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thus, the key motivation, especially considering the context of deep learning is the fact that most models which solve complex problems need a whole lot of data, and getting vast amounts of labeled data for supervised models can be really difficult, considering the time and effort it takes to label data points. A simple example would be the <a href="http://image-net.org/index" target="_self">ImageNet dataset</a><strong>,</strong> which has millions of images pertaining to different categories, thanks to years of hard work starting at Stanford!</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*mVyfM2CojCs7xu3QlNefkg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*mVyfM2CojCs7xu3QlNefkg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*mVyfM2CojCs7xu3QlNefkg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*mVyfM2CojCs7xu3QlNefkg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*mVyfM2CojCs7xu3QlNefkg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*mVyfM2CojCs7xu3QlNefkg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*mVyfM2CojCs7xu3QlNefkg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*mVyfM2CojCs7xu3QlNefkg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*mVyfM2CojCs7xu3QlNefkg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*mVyfM2CojCs7xu3QlNefkg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*mVyfM2CojCs7xu3QlNefkg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*mVyfM2CojCs7xu3QlNefkg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*mVyfM2CojCs7xu3QlNefkg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*mVyfM2CojCs7xu3QlNefkg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*mVyfM2CojCs7xu3QlNefkg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">The popular ImageNet Challenge based on the ImageNet Database</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">However, getting such a dataset for every domain is tough. Besides, most deep learning models are very specialized to a particular domain or even a specific task. While these might be state-of-the-art models, with really high accuracy and beating all benchmarks, it would be only on very specific datasets and end up suffering a significant loss in performance when used in a new task which might still be similar to the one it was trained on. This forms the motivation for transfer learning, which goes beyond specific tasks and domains, and tries to see how to leverage knowledge from pre-trained models and use it to solve new problems!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Understanding Transfer Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The first thing to remember here is that, transfer learning, is not a new concept which is very specific to deep learning. There is a stark difference between the traditional approach of building and training machine learning models, and using a methodology following transfer learning principles.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9GTEzcO8KxxrfutmtsPs3Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9GTEzcO8KxxrfutmtsPs3Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9GTEzcO8KxxrfutmtsPs3Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9GTEzcO8KxxrfutmtsPs3Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9GTEzcO8KxxrfutmtsPs3Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9GTEzcO8KxxrfutmtsPs3Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*9GTEzcO8KxxrfutmtsPs3Q.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9GTEzcO8KxxrfutmtsPs3Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*9GTEzcO8KxxrfutmtsPs3Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*9GTEzcO8KxxrfutmtsPs3Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*9GTEzcO8KxxrfutmtsPs3Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*9GTEzcO8KxxrfutmtsPs3Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*9GTEzcO8KxxrfutmtsPs3Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*9GTEzcO8KxxrfutmtsPs3Q.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*9GTEzcO8KxxrfutmtsPs3Q.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Traditional Learning vs Transfer Learning</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Traditional learning is isolated and occurs purely based on specific tasks, datasets and training separate isolated models on them. No knowledge is retained which can be transferred from one model to another. In transfer learning, you can leverage knowledge (features, weights etc) from previously trained models for training newer models and even tackle problems like having less data for the newer task!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s understand the preceding explanation with the help of an example. Let’s assume our task is to identify objects in images within a restricted domain of a restaurant. Let’s mark this task in its defined scope as <strong>T1</strong>. Given the dataset for this task, we train a model and tune it to perform well (generalize) on unseen data points from the same domain (restaurant). Traditional supervised ML algorithms break down when we do not have sufficient training examples for the required tasks in given domains. Suppose, we now must detect objects from images in a park or a café (say, task <strong>T2</strong>). Ideally, we should be able to apply the model trained for <strong>T1</strong>, but in reality, we face performance degradation and models that do not generalize well. This happens for a variety of reasons, which we can liberally and collectively term as the model’s bias towards training data and domain.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Transfer learning should enable us to utilize knowledge from previously learned tasks and apply them to newer, related ones. If we have significantly more data for task <strong>T1</strong>, we may utilize its learning, and generalize this knowledge (features, weights) for task <strong>T2</strong> (which has significantly less data). In the case of problems in the computer vision domain, certain low-level features, such as edges, shapes, corners and intensity, can be shared across tasks, and thus enable knowledge transfer among tasks! Also, as we have depicted in the earlier figure, knowledge from an existing task acts as an additional input when learning a new target task.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Formal Definition</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now take a look at a formal definition for transfer learning and then utilize it to understand different strategies. In their paper, <a href="https://www.cse.ust.hk/~qyang/Docs/2009/tkde_transfer_learning.pdf" target="_self">A Survey on Transfer Learning</a>, Pan and Yang use domain, task, and marginal probabilities to present a framework for understanding transfer learning. The framework is defined as follows:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A domain, <strong>D</strong>, is defined as a two-element tuple consisting of feature space, <strong>ꭕ</strong>, and marginal probability, <strong>P(Χ)</strong>, where <strong>Χ </strong>is a sample data point. Thus, we can represent the domain mathematically as <strong>D = {ꭕ, P(Χ)}</strong></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:82%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 607px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*R9JG_ONZytPJKiGVIiUWGg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*R9JG_ONZytPJKiGVIiUWGg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*R9JG_ONZytPJKiGVIiUWGg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*R9JG_ONZytPJKiGVIiUWGg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*R9JG_ONZytPJKiGVIiUWGg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*R9JG_ONZytPJKiGVIiUWGg.png 1100w, https://miro.medium.com/v2/resize:fit:1214/format:webp/1*R9JG_ONZytPJKiGVIiUWGg.png 1214w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 607px" srcset="https://miro.medium.com/v2/resize:fit:640/1*R9JG_ONZytPJKiGVIiUWGg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*R9JG_ONZytPJKiGVIiUWGg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*R9JG_ONZytPJKiGVIiUWGg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*R9JG_ONZytPJKiGVIiUWGg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*R9JG_ONZytPJKiGVIiUWGg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*R9JG_ONZytPJKiGVIiUWGg.png 1100w, https://miro.medium.com/v2/resize:fit:1214/1*R9JG_ONZytPJKiGVIiUWGg.png 1214w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/607/1*R9JG_ONZytPJKiGVIiUWGg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here <strong>xᵢ</strong><em> </em>represents a specific vector as represented in the above depiction. A task, <strong>T</strong>, on the other hand, can be defined as a two-element tuple of the label space, <strong>γ</strong>, and objective function, <strong>η</strong>. The objective function can also be denoted as<strong> P(γ| Χ)</strong> from a probabilistic view point.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*wg-mmqrWuBQJJ0hu6CTRrw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*wg-mmqrWuBQJJ0hu6CTRrw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*wg-mmqrWuBQJJ0hu6CTRrw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*wg-mmqrWuBQJJ0hu6CTRrw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*wg-mmqrWuBQJJ0hu6CTRrw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*wg-mmqrWuBQJJ0hu6CTRrw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*wg-mmqrWuBQJJ0hu6CTRrw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*wg-mmqrWuBQJJ0hu6CTRrw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*wg-mmqrWuBQJJ0hu6CTRrw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*wg-mmqrWuBQJJ0hu6CTRrw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*wg-mmqrWuBQJJ0hu6CTRrw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*wg-mmqrWuBQJJ0hu6CTRrw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*wg-mmqrWuBQJJ0hu6CTRrw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*wg-mmqrWuBQJJ0hu6CTRrw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*wg-mmqrWuBQJJ0hu6CTRrw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thus, armed with these definitions and representations, we can define transfer learning as follows, thanks to <a href="http://ruder.io/transfer-learning/" target="_self">an excellent article</a> from Sebastian Ruder.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*J5GsN8izqdRR4sdxt6mwEg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*J5GsN8izqdRR4sdxt6mwEg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*J5GsN8izqdRR4sdxt6mwEg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*J5GsN8izqdRR4sdxt6mwEg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*J5GsN8izqdRR4sdxt6mwEg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*J5GsN8izqdRR4sdxt6mwEg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*J5GsN8izqdRR4sdxt6mwEg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*J5GsN8izqdRR4sdxt6mwEg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*J5GsN8izqdRR4sdxt6mwEg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*J5GsN8izqdRR4sdxt6mwEg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*J5GsN8izqdRR4sdxt6mwEg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*J5GsN8izqdRR4sdxt6mwEg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*J5GsN8izqdRR4sdxt6mwEg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*J5GsN8izqdRR4sdxt6mwEg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*J5GsN8izqdRR4sdxt6mwEg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Scenarios</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now take a look at the typical scenarios involving transfer learning based on our previous definition.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*KgkqmR18XoFUkzmy-UjjKw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*KgkqmR18XoFUkzmy-UjjKw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*KgkqmR18XoFUkzmy-UjjKw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*KgkqmR18XoFUkzmy-UjjKw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*KgkqmR18XoFUkzmy-UjjKw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*KgkqmR18XoFUkzmy-UjjKw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*KgkqmR18XoFUkzmy-UjjKw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*KgkqmR18XoFUkzmy-UjjKw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*KgkqmR18XoFUkzmy-UjjKw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*KgkqmR18XoFUkzmy-UjjKw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*KgkqmR18XoFUkzmy-UjjKw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*KgkqmR18XoFUkzmy-UjjKw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*KgkqmR18XoFUkzmy-UjjKw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*KgkqmR18XoFUkzmy-UjjKw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*KgkqmR18XoFUkzmy-UjjKw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To give some more clarity on the difference between the terms <strong>domain </strong>and <strong>task</strong>, the following figure tries to explain them with some examples.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*vE8VO6isG0fSVYzgci3DuQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*vE8VO6isG0fSVYzgci3DuQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*vE8VO6isG0fSVYzgci3DuQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*vE8VO6isG0fSVYzgci3DuQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*vE8VO6isG0fSVYzgci3DuQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*vE8VO6isG0fSVYzgci3DuQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*vE8VO6isG0fSVYzgci3DuQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*vE8VO6isG0fSVYzgci3DuQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*vE8VO6isG0fSVYzgci3DuQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*vE8VO6isG0fSVYzgci3DuQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*vE8VO6isG0fSVYzgci3DuQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*vE8VO6isG0fSVYzgci3DuQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*vE8VO6isG0fSVYzgci3DuQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*vE8VO6isG0fSVYzgci3DuQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*vE8VO6isG0fSVYzgci3DuQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Key Takeaways</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Transfer learning, as we have seen so far, is having the ability to utilize existing knowledge from the source learner in the target task. During the process of transfer learning, the following three important questions must be answered:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><strong>What to transfer:</strong> This is the first and the most important step in the whole process. We try to seek answers about which part of the knowledge can be transferred from the source to the target in order to improve the performance of the target task. When trying to answer this question, we try to identify which portion of knowledge is source-specific and what is common between the source and the target.</li><li class="ff3" style="font-size:22px;"><strong>When to transfer:</strong> There can be scenarios where transferring knowledge for the sake of it may make matters worse than improving anything (also known as negative transfer). We should aim at utilizing transfer learning to improve target task performance/results and not degrade them. We need to be careful about when to transfer and when not to.</li><li class="ff3" style="font-size:22px;"><strong>How to transfer:</strong> Once the <em>what </em>and <em>when </em>have been answered, we can proceed towards identifying ways of actually transferring the knowledge across domains/tasks. This involves changes to existing algorithms and different techniques, which we will cover in later sections of this article. Also, specific case studies are lined up in the end for a better understanding of how to transfer.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This should help us define the various scenarios where transfer learning can be applied and possible techniques, which we will discuss in the next section.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Transfer Learning Strategies</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are different transfer learning strategies and techniques, which can be applied based on the domain, task at hand, and the availability of data. I really like the following figure from the paper on transfer learning we mentioned earlier, <a href="https://www.cse.ust.hk/~qyang/Docs/2009/tkde_transfer_learning.pdf" target="_self">A Survey on Transfer Learning</a><em>.</em></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:83%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 611px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*mEHO0-LifV7MgwXSpY9wyQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*mEHO0-LifV7MgwXSpY9wyQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*mEHO0-LifV7MgwXSpY9wyQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*mEHO0-LifV7MgwXSpY9wyQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*mEHO0-LifV7MgwXSpY9wyQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*mEHO0-LifV7MgwXSpY9wyQ.png 1100w, https://miro.medium.com/v2/resize:fit:1222/format:webp/1*mEHO0-LifV7MgwXSpY9wyQ.png 1222w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 611px" srcset="https://miro.medium.com/v2/resize:fit:640/1*mEHO0-LifV7MgwXSpY9wyQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*mEHO0-LifV7MgwXSpY9wyQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*mEHO0-LifV7MgwXSpY9wyQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*mEHO0-LifV7MgwXSpY9wyQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*mEHO0-LifV7MgwXSpY9wyQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*mEHO0-LifV7MgwXSpY9wyQ.png 1100w, https://miro.medium.com/v2/resize:fit:1222/1*mEHO0-LifV7MgwXSpY9wyQ.png 1222w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/611/1*mEHO0-LifV7MgwXSpY9wyQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Transfer Learning Strategies</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thus, based on the previous figure, transfer learning methods can be categorized based on the type of traditional ML algorithms involved, such as:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><strong>Inductive Transfer learning:</strong> In this scenario, the source and target domains are the same, yet the source and target tasks are different from each other. The algorithms try to utilize the inductive biases of the source domain to help improve the target task. Depending upon whether the source domain contains labeled data or not, this can be further divided into two subcategories, similar to multitask learning and self-taught learning, respectively.</li><li class="ff3" style="font-size:22px;"><strong>Unsupervised Transfer Learning:</strong> This setting is similar to inductive transfer itself, with a focus on unsupervised tasks in the target domain. The source and target domains are similar, but the tasks are different. In this scenario, labeled data is unavailable in either of the domains.</li><li class="ff3" style="font-size:22px;"><strong>Transductive Transfer Learning:</strong> In this scenario, there are similarities between the source and target tasks, but the corresponding domains are different. In this setting, the source domain has a lot of labeled data, while the target domain has none. This can be further classified into subcategories, referring to settings where either the feature spaces are different or the marginal probabilities.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can summarize the different settings and scenarios for each of the above techniques in the following table.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ZEJeJS06czdyPwov5EbCuQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ZEJeJS06czdyPwov5EbCuQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ZEJeJS06czdyPwov5EbCuQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ZEJeJS06czdyPwov5EbCuQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ZEJeJS06czdyPwov5EbCuQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ZEJeJS06czdyPwov5EbCuQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ZEJeJS06czdyPwov5EbCuQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ZEJeJS06czdyPwov5EbCuQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ZEJeJS06czdyPwov5EbCuQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ZEJeJS06czdyPwov5EbCuQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ZEJeJS06czdyPwov5EbCuQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ZEJeJS06czdyPwov5EbCuQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ZEJeJS06czdyPwov5EbCuQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ZEJeJS06czdyPwov5EbCuQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ZEJeJS06czdyPwov5EbCuQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Types of Transfer Learning Strategies and their Settings</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The three transfer categories discussed in the previous section outline different settings where transfer learning can be applied, and studied in detail. To answer the question of what to transfer across these categories, some of the following approaches can be applied:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><strong>Instance transfer:</strong> Reusing knowledge from the source domain to the target task is usually an ideal scenario. In most cases, the source domain data cannot be reused directly. Rather, there are certain instances from the source domain that can be reused along with target data to improve results. In case of inductive transfer, modifications such as AdaBoost by Dai and their co-authors help utilize training instances from the source domain for improvements in the target task.</li><li class="ff3" style="font-size:22px;"><strong>Feature-representation transfer:</strong> This approach aims to minimize domain divergence and reduce error rates by identifying good feature representations that can be utilized from the source to target domains. Depending upon the availability of labeled data, supervised or unsupervised methods may be applied for feature-representation-based transfers.</li><li class="ff3" style="font-size:22px;"><strong>Parameter transfer:</strong> This approach works on the assumption that the models for related tasks share some parameters or prior distribution of hyperparameters. Unlike multitask learning, where both the source and target tasks are learned simultaneously, for transfer learning, we may apply additional weightage to the loss of the target domain to improve overall performance.</li><li class="ff3" style="font-size:22px;"><strong>Relational-knowledge transfer:</strong> Unlike the preceding three approaches, the relational-knowledge transfer attempts to handle non-IID data, such as data that is not independent and identically distributed. In other words, data, where each data point has a relationship with other data points; for instance, social network data utilizes relational-knowledge-transfer techniques.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The following table clearly summarizes the relationship between different transfer learning strategies and what to transfer.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*xK81ohzG-tLRKVexowUvgw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*xK81ohzG-tLRKVexowUvgw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*xK81ohzG-tLRKVexowUvgw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*xK81ohzG-tLRKVexowUvgw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*xK81ohzG-tLRKVexowUvgw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*xK81ohzG-tLRKVexowUvgw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*xK81ohzG-tLRKVexowUvgw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*xK81ohzG-tLRKVexowUvgw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*xK81ohzG-tLRKVexowUvgw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*xK81ohzG-tLRKVexowUvgw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*xK81ohzG-tLRKVexowUvgw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*xK81ohzG-tLRKVexowUvgw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*xK81ohzG-tLRKVexowUvgw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*xK81ohzG-tLRKVexowUvgw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*xK81ohzG-tLRKVexowUvgw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Transfer Learning Strategies and Types of Transferable Components</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now utilize this understanding and learn how transfer learning is applied in the context of deep learning.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Transfer Learning for Deep Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The strategies we discussed in the previous section are general approaches which can be applied towards machine learning techniques, which brings us to the question, can transfer learning really be applied in the context of deep learning?</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*nMEcHwB18CTqfY0mTd-s1g.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*nMEcHwB18CTqfY0mTd-s1g.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*nMEcHwB18CTqfY0mTd-s1g.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*nMEcHwB18CTqfY0mTd-s1g.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*nMEcHwB18CTqfY0mTd-s1g.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*nMEcHwB18CTqfY0mTd-s1g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*nMEcHwB18CTqfY0mTd-s1g.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*nMEcHwB18CTqfY0mTd-s1g.png 640w, https://miro.medium.com/v2/resize:fit:720/1*nMEcHwB18CTqfY0mTd-s1g.png 720w, https://miro.medium.com/v2/resize:fit:750/1*nMEcHwB18CTqfY0mTd-s1g.png 750w, https://miro.medium.com/v2/resize:fit:786/1*nMEcHwB18CTqfY0mTd-s1g.png 786w, https://miro.medium.com/v2/resize:fit:828/1*nMEcHwB18CTqfY0mTd-s1g.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*nMEcHwB18CTqfY0mTd-s1g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*nMEcHwB18CTqfY0mTd-s1g.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*nMEcHwB18CTqfY0mTd-s1g.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Deep learning models are representative of what is also known as <strong>inductive learning</strong>. The objective for inductive-learning algorithms is to infer a mapping from a set of training examples. For instance, in cases of classification, the model learns mapping between input features and class labels. In order for such a learner to generalize well on unseen data, its algorithm works with a set of assumptions related to the distribution of the training data. These sets of assumptions are known as <strong>inductive bias</strong>. The inductive bias or assumptions can be characterized by multiple factors, such as the hypothesis space it restricts to and the search process through the hypothesis space. Thus, these biases impact how and what is learned by the model on the given task and domain.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Ww3AMxZeoiB84GVSRBr4Bw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Ww3AMxZeoiB84GVSRBr4Bw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Ww3AMxZeoiB84GVSRBr4Bw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Ww3AMxZeoiB84GVSRBr4Bw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Ww3AMxZeoiB84GVSRBr4Bw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Ww3AMxZeoiB84GVSRBr4Bw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Ww3AMxZeoiB84GVSRBr4Bw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Ww3AMxZeoiB84GVSRBr4Bw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Ww3AMxZeoiB84GVSRBr4Bw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Ww3AMxZeoiB84GVSRBr4Bw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Ww3AMxZeoiB84GVSRBr4Bw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Ww3AMxZeoiB84GVSRBr4Bw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Ww3AMxZeoiB84GVSRBr4Bw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Ww3AMxZeoiB84GVSRBr4Bw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Ww3AMxZeoiB84GVSRBr4Bw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Ideas for deep transfer learning</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Inductive transfer techniques</strong> utilize the inductive biases of the source task to assist the target task. This can be done in different ways, such as by adjusting the inductive bias of the target task by limiting the model space, narrowing down the hypothesis space, or making adjustments to the search process itself with the help of knowledge from the source task. This process is depicted visually in the following figure.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:82%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 605px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*yjBaWnApTg_4Mz1xrHBJZg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*yjBaWnApTg_4Mz1xrHBJZg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*yjBaWnApTg_4Mz1xrHBJZg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*yjBaWnApTg_4Mz1xrHBJZg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*yjBaWnApTg_4Mz1xrHBJZg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*yjBaWnApTg_4Mz1xrHBJZg.png 1100w, https://miro.medium.com/v2/resize:fit:1210/format:webp/1*yjBaWnApTg_4Mz1xrHBJZg.png 1210w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 605px" srcset="https://miro.medium.com/v2/resize:fit:640/1*yjBaWnApTg_4Mz1xrHBJZg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*yjBaWnApTg_4Mz1xrHBJZg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*yjBaWnApTg_4Mz1xrHBJZg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*yjBaWnApTg_4Mz1xrHBJZg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*yjBaWnApTg_4Mz1xrHBJZg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*yjBaWnApTg_4Mz1xrHBJZg.png 1100w, https://miro.medium.com/v2/resize:fit:1210/1*yjBaWnApTg_4Mz1xrHBJZg.png 1210w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/605/1*yjBaWnApTg_4Mz1xrHBJZg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Inductive transfer (Source: Transfer learning, Lisa Torrey and Jude Shavlik)</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Apart from inductive transfer, inductive-learning algorithms also utilize Bayesian and Hierarchical transfer techniques to assist with improvements in the learning and performance of the target task.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Deep Transfer Learning Strategies</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Deep learning has made considerable progress in recent years. This has enabled us to tackle complex problems and yield amazing results. However, the training time and the amount of data required for such deep learning systems are much more than that of traditional ML systems. There are various deep learning networks with state-of-the-art performance (sometimes as good or even better than human performance) that have been developed and tested across domains such as computer vision and natural language processing (NLP). In most cases, teams/people share the details of these networks for others to use. These pre-trained networks/models form the basis of transfer learning in the context of deep learning, or what I like to call <strong>‘deep transfer learning’</strong>. Let’s look at the two most popular strategies for deep transfer learning.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Off-the-shelf Pre-trained Models as Feature Extractors</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Deep learning systems and models are layered architectures that learn different features at different layers (hierarchical representations of layered features). These layers are then finally connected to a last layer (usually a fully connected layer, in the case of supervised learning) to get the final output. This layered architecture allows us to utilize a pre-trained network (such as Inception V3 or VGG) without its final layer as a fixed feature extractor for other tasks.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*qfQ3hmHLwApXZBN-A85r8g.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*qfQ3hmHLwApXZBN-A85r8g.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*qfQ3hmHLwApXZBN-A85r8g.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*qfQ3hmHLwApXZBN-A85r8g.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*qfQ3hmHLwApXZBN-A85r8g.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*qfQ3hmHLwApXZBN-A85r8g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*qfQ3hmHLwApXZBN-A85r8g.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*qfQ3hmHLwApXZBN-A85r8g.png 640w, https://miro.medium.com/v2/resize:fit:720/1*qfQ3hmHLwApXZBN-A85r8g.png 720w, https://miro.medium.com/v2/resize:fit:750/1*qfQ3hmHLwApXZBN-A85r8g.png 750w, https://miro.medium.com/v2/resize:fit:786/1*qfQ3hmHLwApXZBN-A85r8g.png 786w, https://miro.medium.com/v2/resize:fit:828/1*qfQ3hmHLwApXZBN-A85r8g.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*qfQ3hmHLwApXZBN-A85r8g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*qfQ3hmHLwApXZBN-A85r8g.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*qfQ3hmHLwApXZBN-A85r8g.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Transfer Learning with Pre-trained Deep Learning Models as Feature Extractors</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">The key idea here is to just leverage the pre-trained model’s weighted layers to extract features but not to update the weights of the model’s layers during training with new data for the new task.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For instance, if we utilize AlexNet without its final classification layer, it will help us transform images from a new domain task into a 4096-dimensional vector based on its hidden states, thus enabling us to extract features from a new domain task, utilizing the knowledge from a source-domain task. This is one of the most widely utilized methods of performing transfer learning using deep neural networks.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now a question might arise, how well do these pre-trained off-the-shelf features really work in practice with different tasks?</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*cdqFwsX3ol0WPfkqDEfKiA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*cdqFwsX3ol0WPfkqDEfKiA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*cdqFwsX3ol0WPfkqDEfKiA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*cdqFwsX3ol0WPfkqDEfKiA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*cdqFwsX3ol0WPfkqDEfKiA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*cdqFwsX3ol0WPfkqDEfKiA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*cdqFwsX3ol0WPfkqDEfKiA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*cdqFwsX3ol0WPfkqDEfKiA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*cdqFwsX3ol0WPfkqDEfKiA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*cdqFwsX3ol0WPfkqDEfKiA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*cdqFwsX3ol0WPfkqDEfKiA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*cdqFwsX3ol0WPfkqDEfKiA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*cdqFwsX3ol0WPfkqDEfKiA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*cdqFwsX3ol0WPfkqDEfKiA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*cdqFwsX3ol0WPfkqDEfKiA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It definitely seems to work really well in real-world tasks, and if the chart in the above table is not very clear, the following figure should make things more clear with regard to their performance in different computer vision based tasks!</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*d__1oSbHOSEq6m4bFflE5g.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*d__1oSbHOSEq6m4bFflE5g.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*d__1oSbHOSEq6m4bFflE5g.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*d__1oSbHOSEq6m4bFflE5g.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*d__1oSbHOSEq6m4bFflE5g.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*d__1oSbHOSEq6m4bFflE5g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*d__1oSbHOSEq6m4bFflE5g.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*d__1oSbHOSEq6m4bFflE5g.png 640w, https://miro.medium.com/v2/resize:fit:720/1*d__1oSbHOSEq6m4bFflE5g.png 720w, https://miro.medium.com/v2/resize:fit:750/1*d__1oSbHOSEq6m4bFflE5g.png 750w, https://miro.medium.com/v2/resize:fit:786/1*d__1oSbHOSEq6m4bFflE5g.png 786w, https://miro.medium.com/v2/resize:fit:828/1*d__1oSbHOSEq6m4bFflE5g.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*d__1oSbHOSEq6m4bFflE5g.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*d__1oSbHOSEq6m4bFflE5g.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*d__1oSbHOSEq6m4bFflE5g.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Performance of off-the-shelf pre-trained models vs. specialized task-focused deep learning models</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Based on the red and pink bars in the above figure, you can clearly see that the features from the pre-trained models consistently out-perform very specialized task-focused deep learning models.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Fine Tuning Off-the-shelf Pre-trained Models</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is a more involved technique, where we do not just replace the final layer (for classification/regression), but we also selectively retrain some of the previous layers. Deep neural networks are highly configurable architectures with various hyperparameters. As discussed earlier, the initial layers have been seen to capture generic features, while the later ones focus more on the specific task at hand. An example is depicted in the following figure on a face-recognition problem, where initial lower layers of the network learn very generic features and the higher layers learn very task-specific features.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*BBZGHtI_vhDBeqsIbgMj1w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*BBZGHtI_vhDBeqsIbgMj1w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*BBZGHtI_vhDBeqsIbgMj1w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*BBZGHtI_vhDBeqsIbgMj1w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*BBZGHtI_vhDBeqsIbgMj1w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*BBZGHtI_vhDBeqsIbgMj1w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*BBZGHtI_vhDBeqsIbgMj1w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*BBZGHtI_vhDBeqsIbgMj1w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*BBZGHtI_vhDBeqsIbgMj1w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*BBZGHtI_vhDBeqsIbgMj1w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*BBZGHtI_vhDBeqsIbgMj1w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*BBZGHtI_vhDBeqsIbgMj1w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*BBZGHtI_vhDBeqsIbgMj1w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*BBZGHtI_vhDBeqsIbgMj1w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*BBZGHtI_vhDBeqsIbgMj1w.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Using this insight, we may freeze (fix weights) certain layers while retraining, or fine-tune the rest of them to suit our needs. In this case, we utilize the knowledge in terms of the overall architecture of the network and use its states as the starting point for our retraining step. This, in turn, helps us achieve better performance with less training time.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Lut6GJXQ6dGhnH9gQJQxgg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Lut6GJXQ6dGhnH9gQJQxgg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Lut6GJXQ6dGhnH9gQJQxgg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Lut6GJXQ6dGhnH9gQJQxgg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Lut6GJXQ6dGhnH9gQJQxgg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Lut6GJXQ6dGhnH9gQJQxgg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Lut6GJXQ6dGhnH9gQJQxgg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Lut6GJXQ6dGhnH9gQJQxgg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Lut6GJXQ6dGhnH9gQJQxgg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Lut6GJXQ6dGhnH9gQJQxgg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Lut6GJXQ6dGhnH9gQJQxgg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Lut6GJXQ6dGhnH9gQJQxgg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Lut6GJXQ6dGhnH9gQJQxgg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Lut6GJXQ6dGhnH9gQJQxgg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Lut6GJXQ6dGhnH9gQJQxgg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Freezing or Fine-tuning?</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This brings us to the question, should we freeze layers in the network to use them as feature extractors or should we also fine-tune layers in the process?</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*AUI4rH8_tbb7x4xkBsHu2Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*AUI4rH8_tbb7x4xkBsHu2Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*AUI4rH8_tbb7x4xkBsHu2Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*AUI4rH8_tbb7x4xkBsHu2Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*AUI4rH8_tbb7x4xkBsHu2Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*AUI4rH8_tbb7x4xkBsHu2Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*AUI4rH8_tbb7x4xkBsHu2Q.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*AUI4rH8_tbb7x4xkBsHu2Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*AUI4rH8_tbb7x4xkBsHu2Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*AUI4rH8_tbb7x4xkBsHu2Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*AUI4rH8_tbb7x4xkBsHu2Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*AUI4rH8_tbb7x4xkBsHu2Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*AUI4rH8_tbb7x4xkBsHu2Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*AUI4rH8_tbb7x4xkBsHu2Q.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*AUI4rH8_tbb7x4xkBsHu2Q.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This should give us a good perspective on what each of these strategies are and when should they be used!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Pre-trained Models</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One of the fundamental requirements for transfer learning is the presence of models that perform well on source tasks. Luckily, the deep learning world believes in sharing. Many of the state-of-the art deep learning architectures have been openly shared by their respective teams. These span across different domains, such as computer vision and NLP, the two most popular domains for deep learning applications. Pre-trained models are usually shared in the form of the millions of parameters/weights the model achieved while being trained to a stable state. Pre-trained models are available for everyone to use through different means. The famous deep learning Python library, keras, provides an interface to download some popular models. You can also access pre-trained models from the web since most of them have been open-sourced.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>For computer vision</strong>, you can leverage some popular models including,</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><a href="https://www.kaggle.com/keras/vgg16/home" target="_self">VGG-16</a></li><li class="ff3" style="font-size:22px;"><a href="https://www.kaggle.com/keras/vgg19/home" target="_self">VGG-19</a></li><li class="ff3" style="font-size:22px;"><a href="https://arxiv.org/abs/1512.00567" target="_self">Inception V3</a></li><li class="ff3" style="font-size:22px;"><a href="https://arxiv.org/abs/1610.02357" target="_self">XCeption</a></li><li class="ff3" style="font-size:22px;"><a href="https://www.kaggle.com/keras/resnet50/home" target="_self">ResNet-50</a></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>For natural language processing</strong> tasks, things become more difficult due to the varied nature of NLP tasks. You can leverage word embedding models including,</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><a href="https://en.wikipedia.org/wiki/Word2vec" target="_self">Word2Vec</a></li><li class="ff3" style="font-size:22px;"><a href="https://nlp.stanford.edu/projects/glove/" target="_self">GloVe</a></li><li class="ff3" style="font-size:22px;"><a href="https://fasttext.cc/" target="_self">FastText</a></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But wait, that’s not all! Recently, there have been some excellent advancements towards transfer learning for NLP. Most notably,</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><a href="https://arxiv.org/abs/1803.11175" target="_self">Universal Sentence Encoder by Google</a></li><li class="ff3" style="font-size:22px;"><a href="https://arxiv.org/abs/1810.04805" target="_self">Bidirectional Encoder Representations from Transformers (BERT) by Google</a></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">They definitely hold a lot of promise and I’m sure they will be widely adopted pretty soon for real-world applications.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Types of Deep Transfer Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The literature on transfer learning has gone through a lot of iterations, and as mentioned at the start of this chapter, the terms associated with it have been used loosely and often interchangeably. Hence, it is sometimes confusing to differentiate between <em>transfer learning</em>, <em>domain adaptation</em>, and <em>multi-task learning</em>. Rest assured, these are all related and try to solve similar problems. In general, you should always think of transfer learning as a general concept or principle, where we will try to solve a target task using source task-domain knowledge.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Domain Adaptation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Domain adaption is usually referred to in scenarios where the marginal probabilities between the source and target domains are different, such as <strong>P(Xₛ) ≠ P(Xₜ)</strong>. There is an inherent shift or drift in the data distribution of the source and target domains that requires tweaks to transfer the learning. For instance, a corpus of movie reviews labeled as positive or negative would be different from a corpus of product-review sentiments. A classifier trained on movie-review sentiment would see a different distribution if utilized to classify product reviews. Thus, domain adaptation techniques are utilized in transfer learning in these scenarios.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Domain Confusion</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We learned different transfer learning strategies and even discussed the three questions of what, when, and how to transfer knowledge from the source to the target. In particular, we discussed how feature-representation transfer can be useful. It is worth re-iterating that different layers in a deep learning network capture different sets of features. We can utilize this fact to learn domain-invariant features and improve their transferability across domains. Instead of allowing the model to learn any representation, we nudge the representations of both domains to be as similar as possible. This can be achieved by applying certain pre-processing steps directly to the representations themselves. Some of these have been discussed by Baochen Sun, Jiashi Feng, and Kate Saenko in their paper<em> </em><a href="https://arxiv.org/abs/1511.05547" target="_self">‘Return of Frustratingly Easy Domain Adaptation’</a>. This nudge toward the similarity of representation has also been presented by Ganin et. al. in their paper, <a href="https://arxiv.org/abs/1505.07818" target="_self">‘Domain-Adversarial Training of Neural Networks’</a>. The basic idea behind this technique is to add another objective to the source model to encourage similarity by confusing the domain itself, hence domain confusion.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Multitask Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Multitask learning is a slightly different flavor of the transfer learning world. In the case of multitask learning, several tasks are learned simultaneously without distinction between the source and targets. In this case, the learner receives information about multiple tasks at once, as compared to transfer learning, where the learner initially has no idea about the target task. This is depicted in the following figure.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*2Ty4jeNZanX97JQNk9teUg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*2Ty4jeNZanX97JQNk9teUg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*2Ty4jeNZanX97JQNk9teUg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*2Ty4jeNZanX97JQNk9teUg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*2Ty4jeNZanX97JQNk9teUg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*2Ty4jeNZanX97JQNk9teUg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*2Ty4jeNZanX97JQNk9teUg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*2Ty4jeNZanX97JQNk9teUg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*2Ty4jeNZanX97JQNk9teUg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*2Ty4jeNZanX97JQNk9teUg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*2Ty4jeNZanX97JQNk9teUg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*2Ty4jeNZanX97JQNk9teUg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*2Ty4jeNZanX97JQNk9teUg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*2Ty4jeNZanX97JQNk9teUg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*2Ty4jeNZanX97JQNk9teUg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Multitask learning: Learner receives information from all tasks simultaneously</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">One-shot Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Deep learning systems are data-hungry by nature, such that they need many training examples to learn the weights. This is one of the limiting aspects of deep neural networks, though such is not the case with human learning. For instance, once a child is shown what an apple looks like, they can easily identify a different variety of apple (with one or a few training examples); this is not the case with ML and deep learning algorithms. One-shot learning is a variant of transfer learning, where we try to infer the required output based on just one or a few training examples. This is essentially helpful in real-world scenarios where it is not possible to have labeled data for every possible class (if it is a classification task), and in scenarios where new classes can be added often. The landmark paper by Fei-Fei and their co-authors, <a href="https://ieeexplore.ieee.org/document/1597116/" target="_self">‘One Shot Learning of Object Categories’</a>, is supposedly what coined the term one-shot learning and the research in this sub-field. This paper presented a variation on a Bayesian framework for representation learning for object categorization. This approach has since been improved upon, and applied using deep learning systems.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Zero-shot Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Zero-shot learning is another extreme variant of transfer learning, which relies on no labeled examples to learn a task. This might sound unbelievable, especially when learning using examples is what most supervised learning algorithms are about. Zero-data learning or zero-short learning methods, make clever adjustments during the training stage itself to exploit additional information to understand unseen data. In their book on <em>Deep Learning</em>, Goodfellow and their co-authors present zero-shot learning as a scenario where three variables are learned, such as the traditional input variable, <strong>x</strong>, the traditional output variable, <strong>y</strong>, and the additional random variable that describes the task, <strong>T</strong>. The model is thus trained to learn the conditional probability distribution of <strong>P(y | x, T)</strong>. Zero-shot learning comes in handy in scenarios such as machine translation, where we may not even have labels in the target language.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Applications of Transfer Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Deep learning is definitely one of the specific categories of algorithms that has been utilized to reap the benefits of transfer learning very successfully. The following are a few examples:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><strong>Transfer learning for NLP:</strong> Textual data presents all sorts of challenges when it comes to ML and deep learning. These are usually transformed or vectorized using different techniques. Embeddings, such as Word2vec and FastText, have been prepared using different training datasets. These are utilized in different tasks, such as sentiment analysis and document classification, by transferring the knowledge from the source tasks. Besides this, newer models like the Universal Sentence Encoder and BERT definitely present a myriad of possibilities for the future.</li><li class="ff3" style="font-size:22px;"><strong>Transfer learning for Audio/Speech:</strong> Similar to domains like NLP and Computer Vision, deep learning has been successfully used for tasks based on audio data. For instance, Automatic Speech Recognition (ASR) models developed for English have been successfully used to improve speech recognition performance for other languages, such as German. Also, automated-speaker identification is another example where transfer learning has greatly helped.</li><li class="ff3" style="font-size:22px;"><strong>Transfer learning for Computer Vision:</strong> Deep learning has been quite successfully utilized for various computer vision tasks, such as object recognition and identification, using different CNN architectures. In their paper, How transferable are features in deep neural networks, Yosinski and their co-authors (https://arxiv.org/abs/1411.1792) present their findings on how the lower layers act as conventional computer-vision feature extractors, such as edge detectors, while the final layers work toward task-specific features.</li></ul></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*495mUnP8maaDeVluUTdiTw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*495mUnP8maaDeVluUTdiTw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*495mUnP8maaDeVluUTdiTw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*495mUnP8maaDeVluUTdiTw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*495mUnP8maaDeVluUTdiTw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*495mUnP8maaDeVluUTdiTw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*495mUnP8maaDeVluUTdiTw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*495mUnP8maaDeVluUTdiTw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*495mUnP8maaDeVluUTdiTw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*495mUnP8maaDeVluUTdiTw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*495mUnP8maaDeVluUTdiTw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*495mUnP8maaDeVluUTdiTw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*495mUnP8maaDeVluUTdiTw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*495mUnP8maaDeVluUTdiTw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*495mUnP8maaDeVluUTdiTw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thus, these findings have helped in utilizing existing state-of-the-art models, such as VGG, AlexNet, and Inceptions, for target tasks, such as style transfer and face detection, that were different from what these models were trained for initially. Let’s explore some real-world case studies now and build some deep transfer learning models!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Case Study 1: Image Classification with a Data Availability Constraint</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this simple case study, will be working on an image categorization problem with the constraint of having a very small number of training samples per category. The dataset for our problem is available on Kaggle and is one of the most popular computer vision based datasets out there.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Main Objective</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The dataset that we will be using, comes from the very popular <a href="https://www.kaggle.com/c/dogs-vs-cats/data" target="_self">Dogs vs. Cats Challenge</a><strong>,</strong> where our primary objective is to build a deep learning model that can successfully recognize and categorize images into either a <strong>cat </strong>or a <strong>dog</strong>.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*R-ItxBW2SWarITBKe7HZuA.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*R-ItxBW2SWarITBKe7HZuA.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*R-ItxBW2SWarITBKe7HZuA.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*R-ItxBW2SWarITBKe7HZuA.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*R-ItxBW2SWarITBKe7HZuA.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*R-ItxBW2SWarITBKe7HZuA.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*R-ItxBW2SWarITBKe7HZuA.gif 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*R-ItxBW2SWarITBKe7HZuA.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*R-ItxBW2SWarITBKe7HZuA.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*R-ItxBW2SWarITBKe7HZuA.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*R-ItxBW2SWarITBKe7HZuA.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*R-ItxBW2SWarITBKe7HZuA.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*R-ItxBW2SWarITBKe7HZuA.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*R-ItxBW2SWarITBKe7HZuA.gif 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*R-ItxBW2SWarITBKe7HZuA.gif"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Source: becominghuman.ai</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In terms of ML, this is a binary classification problem based on images. Before getting started, I would like to thank <em>Francois Chollet</em> for not only creating the amazing deep learning framework, <code>keras</code>, but also for talking about the real-world problem where transfer learning is effective in his book, <a href="https://www.manning.com/books/deep-learning-with-python" target="_self">‘Deep Learning with Python’</a>. I’ve have taken that as an inspiration to portray the true power of transfer learning in this chapter, and all results are based on building and running each model in my own GPU-based cloud setup (AWS p2.x)</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Building Datasets</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To start, download the <code>train.zip</code> file from the dataset page and store it in your local system. Once downloaded, unzip it into a folder. This folder will contain 25,000 images of dogs and cats; that is, 12,500 images per category. While we can use all 25,000 images and build some nice models on them, if you remember, our problem objective includes the added constraint of having a small number of images per category. Let’s build our own dataset for this purpose.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>import</strong> <strong>glob</strong><br/><strong>import</strong> <strong>numpy</strong> <strong>as</strong> <strong>np</strong><br/><strong>import</strong> <strong>os</strong><br/><strong>import</strong> <strong>shutil</strong></span><span><strong>np.random.seed(42)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now load up all the images in our original training data folder as follows:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>files = glob.glob('train/*')

cat_files = [fn for fn in files if 'cat' in fn]
dog_files = [fn for fn in files if 'dog' in fn]
len(cat_files), len(dog_files)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>(12500, 12500)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can verify with the preceding output that we have 12,500 images for each category. Let’s now build our smaller dataset, so that we have 3,000 images for training, 1,000 images for validation, and 1,000 images for our test dataset (with equal representation for the two animal categories).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>cat_train = np.random.choice(cat_files, size=1500, replace=False)
dog_train = np.random.choice(dog_files, size=1500, replace=False)
cat_files = list(set(cat_files) - set(cat_train))
dog_files = list(set(dog_files) - set(dog_train))

cat_val = np.random.choice(cat_files, size=500, replace=False)
dog_val = np.random.choice(dog_files, size=500, replace=False)
cat_files = list(set(cat_files) - set(cat_val))
dog_files = list(set(dog_files) - set(dog_val))

cat_test = np.random.choice(cat_files, size=500, replace=False)
dog_test = np.random.choice(dog_files, size=500, replace=False)

print('Cat datasets:', cat_train.shape, cat_val.shape, cat_test.shape)
print('Dog datasets:', dog_train.shape, dog_val.shape, dog_test.shape)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Cat datasets: (1500,) (500,) (500,)<br/>Dog datasets: (1500,) (500,) (500,)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that our datasets have been created, let’s write them out to our disk in separate folders, so that we can come back to them anytime in the future without worrying if they are present in our main memory.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>train_dir = 'training_data'
val_dir = 'validation_data'
test_dir = 'test_data'

train_files = np.concatenate([cat_train, dog_train])
validate_files = np.concatenate([cat_val, dog_val])
test_files = np.concatenate([cat_test, dog_test])

os.mkdir(train_dir) if not os.path.isdir(train_dir) else None
os.mkdir(val_dir) if not os.path.isdir(val_dir) else None
os.mkdir(test_dir) if not os.path.isdir(test_dir) else None

for fn in train_files:
    shutil.copy(fn, train_dir)

for fn in validate_files:
    shutil.copy(fn, val_dir)
    
for fn in test_files:
    shutil.copy(fn, test_dir)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Since this is an image categorization problem, we will be leveraging CNN models or ConvNets to try and tackle this problem. We will start by building simple CNN models from scratch, then try to improve using techniques such as regularization and image augmentation. Then, we will try and leverage pre-trained models to unleash the true power of transfer learning!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Preparing Datasets</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Before we jump into modeling, let’s load and prepare our datasets. To start with, we load up some basic dependencies.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>import</strong> <strong>glob</strong><br/><strong>import</strong> <strong>numpy</strong> <strong>as</strong> <strong>np</strong><br/><strong>import</strong> <strong>matplotlib.pyplot</strong> <strong>as</strong> <strong>plt</strong><br/><strong>from</strong> <strong>keras.preprocessing.image</strong> <strong>import</strong> <strong>ImageDataGenerator, load_img, img_to_array, array_to_img</strong></span><span><strong>%matplotlib inline</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now load our datasets, using the following code snippet.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>IMG_DIM = (150, 150)

train_files = glob.glob('training_data/*')
train_imgs = [img_to_array(load_img(img, target_size=IMG_DIM)) for img in train_files]
train_imgs = np.array(train_imgs)
train_labels = [fn.split('\\')[1].split('.')[0].strip() for fn in train_files]

validation_files = glob.glob('validation_data/*')
validation_imgs = [img_to_array(load_img(img, target_size=IMG_DIM)) for img in validation_files]
validation_imgs = np.array(validation_imgs)
validation_labels = [fn.split('\\')[1].split('.')[0].strip() for fn in validation_files]

print('Train dataset shape:', train_imgs.shape, 
      '\tValidation dataset shape:', validation_imgs.shape)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Train dataset shape: (3000, 150, 150, 3) 	<br/>Validation dataset shape: (1000, 150, 150, 3)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can clearly see that we have 3000 training images and 1000 validation images. Each image is of size <code>150 x 150</code> and has three channels for red, green, and blue (RGB), hence giving each image the <code>(150, 150, 3)</code> dimensions. We will now scale each image with pixel values between <code>(0, 255)</code> to values between <code>(0, 1)</code> because deep learning models work really well with small input values.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>train_imgs_scaled = train_imgs.astype('float32')
validation_imgs_scaled  = validation_imgs.astype('float32')
train_imgs_scaled /= 255
validation_imgs_scaled /= 255

print(train_imgs[0].shape)
array_to_img(train_imgs[0])</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:19%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 163px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*LraXByKILhiC5DeRS2Kkng.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*LraXByKILhiC5DeRS2Kkng.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*LraXByKILhiC5DeRS2Kkng.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*LraXByKILhiC5DeRS2Kkng.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*LraXByKILhiC5DeRS2Kkng.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*LraXByKILhiC5DeRS2Kkng.png 1100w, https://miro.medium.com/v2/resize:fit:326/format:webp/1*LraXByKILhiC5DeRS2Kkng.png 326w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 163px" srcset="https://miro.medium.com/v2/resize:fit:640/1*LraXByKILhiC5DeRS2Kkng.png 640w, https://miro.medium.com/v2/resize:fit:720/1*LraXByKILhiC5DeRS2Kkng.png 720w, https://miro.medium.com/v2/resize:fit:750/1*LraXByKILhiC5DeRS2Kkng.png 750w, https://miro.medium.com/v2/resize:fit:786/1*LraXByKILhiC5DeRS2Kkng.png 786w, https://miro.medium.com/v2/resize:fit:828/1*LraXByKILhiC5DeRS2Kkng.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*LraXByKILhiC5DeRS2Kkng.png 1100w, https://miro.medium.com/v2/resize:fit:326/1*LraXByKILhiC5DeRS2Kkng.png 326w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/163/1*LraXByKILhiC5DeRS2Kkng.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The preceding output shows one of the sample images from our training dataset. Let’s now set up some basic configuration parameters and also encode our text class labels into numeric values (otherwise, Keras will throw an error).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>batch_size = 30
num_classes = 2
epochs = 30
input_shape = (150, 150, 3)

# encode text category labels
from sklearn.preprocessing import LabelEncoder

le = LabelEncoder()
le.fit(train_labels)
train_labels_enc = le.transform(train_labels)
validation_labels_enc = le.transform(validation_labels)

print(train_labels[1495:1505], train_labels_enc[1495:1505])</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>['cat', 'cat', 'cat', 'cat', 'cat', 'dog', 'dog', 'dog', 'dog', 'dog'] [0 0 0 0 0 1 1 1 1 1]</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can see that our encoding scheme assigns the number <code>0</code> to the <code>cat</code> labels and <code>1</code> to the <code>dog</code> labels. We are now ready to build our first CNN-based deep learning model.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Simple CNN Model from Scratch</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will start by building a basic CNN model with three convolutional layers, coupled with max pooling for auto-extraction of features from our images and also downsampling the output convolution feature maps.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*9P9lwRZv25LJJ8mK.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*9P9lwRZv25LJJ8mK.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*9P9lwRZv25LJJ8mK.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*9P9lwRZv25LJJ8mK.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*9P9lwRZv25LJJ8mK.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*9P9lwRZv25LJJ8mK.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/0*9P9lwRZv25LJJ8mK.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*9P9lwRZv25LJJ8mK.png 640w, https://miro.medium.com/v2/resize:fit:720/0*9P9lwRZv25LJJ8mK.png 720w, https://miro.medium.com/v2/resize:fit:750/0*9P9lwRZv25LJJ8mK.png 750w, https://miro.medium.com/v2/resize:fit:786/0*9P9lwRZv25LJJ8mK.png 786w, https://miro.medium.com/v2/resize:fit:828/0*9P9lwRZv25LJJ8mK.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*9P9lwRZv25LJJ8mK.png 1100w, https://miro.medium.com/v2/resize:fit:1400/0*9P9lwRZv25LJJ8mK.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*9P9lwRZv25LJJ8mK.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">A Typical CNN (Source: Wikipedia)</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We assume you have enough knowledge about CNNs and hence, won’t cover theoretical details. Feel free to refer to my book or any other resources on the web which explain convolutional neural networks! Let’s leverage Keras and build our CNN model architecture now.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout
from keras.models import Sequential
from keras import optimizers

model = Sequential()

model.add(Conv2D(16, kernel_size=(3, 3), activation='relu', 
                 input_shape=input_shape))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(64, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(128, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Flatten())
model.add(Dense(512, activation='relu'))
model.add(Dense(1, activation='sigmoid'))


model.compile(loss='binary_crossentropy',
              optimizer=optimizers.RMSprop(),
              metrics=['accuracy'])

model.summary()


'''
Layer (type)                 Output Shape              Param #   
=================================================================
conv2d_1 (Conv2D)            (None, 148, 148, 16)      448       
_________________________________________________________________
max_pooling2d_1 (MaxPooling2 (None, 74, 74, 16)        0         
_________________________________________________________________
conv2d_2 (Conv2D)            (None, 72, 72, 64)        9280      
_________________________________________________________________
max_pooling2d_2 (MaxPooling2 (None, 36, 36, 64)        0         
_________________________________________________________________
conv2d_3 (Conv2D)            (None, 34, 34, 128)       73856     
_________________________________________________________________
max_pooling2d_3 (MaxPooling2 (None, 17, 17, 128)       0         
_________________________________________________________________
flatten_1 (Flatten)          (None, 36992)             0         
_________________________________________________________________
dense_1 (Dense)              (None, 512)               18940416  
_________________________________________________________________
dense_2 (Dense)              (None, 1)                 513       
=================================================================
Total params: 19,024,513
Trainable params: 19,024,513
Non-trainable params: 0
_________________________________________________________________
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The preceding output shows us our basic CNN model summary. Just like we mentioned before, we are using three convolutional layers for feature extraction. The flatten layer is used to flatten out <code>128</code> of the <code>17 x 17</code> feature maps that we get as output from the third convolution layer. This is fed to our dense layers to get the final prediction of whether the image should be a <strong>dog (1)</strong> or a <strong>cat (0)</strong>. All of this is part of the model training process, so let’s train our model using the following snippet which leverages the <code>fit(…)</code> function.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The following terminology is very important with regard to training our model:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">The <code>batch_size</code> indicates the total number of images passed to the model per iteration.</li><li class="ff3" style="font-size:22px;">The weights of the units in layers are updated after each iteration.</li><li class="ff3" style="font-size:22px;">The total number of iterations is always equal to the total number of training samples divided by the <code>batch_size</code></li><li class="ff3" style="font-size:22px;">An epoch is when the complete dataset has passed through the network once, that is, all the iterations are completed based on data batches.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We use a <code>batch_size</code> of 30 and our training data has a total of 3,000 samples, which indicates that there will be a total of 100 iterations per epoch. We train the model for a total of 30 epochs and validate it consequently on our validation set of 1,000 images.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>history = model.fit(x=train_imgs_scaled, y=train_labels_enc,
                    validation_data=(validation_imgs_scaled, validation_labels_enc),
                    batch_size=batch_size,
                    epochs=epochs,
                    verbose=1)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Train on 3000 samples, validate on 1000 samples<br/>Epoch 1/30<br/>3000/3000 - 10s - loss: 0.7583 - acc: 0.5627 - val_loss: 0.7182 - val_acc: 0.5520<br/>Epoch 2/30<br/>3000/3000 - 8s - loss: 0.6343 - acc: 0.6533 - val_loss: 0.5891 - val_acc: 0.7190<br/>...<br/>...<br/>Epoch 29/30<br/>3000/3000 - 8s - loss: 0.0314 - acc: 0.9950 - val_loss: 2.7014 - val_acc: 0.7140<br/>Epoch 30/30<br/>3000/3000 - 8s - loss: 0.0147 - acc: 0.9967 - val_loss: 2.4963 - val_acc: 0.7220</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Looks like our model is kind of overfitting, based on the training and validation accuracy values. We can plot our model accuracy and errors using the following snippet to get a better perspective.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>f, (ax1, ax2) = plt.subplots(1, 2, figsize=(12, 4))
t = f.suptitle('Basic CNN Performance', fontsize=12)
f.subplots_adjust(top=0.85, wspace=0.3)

epoch_list = list(range(1,31))
ax1.plot(epoch_list, history.history['acc'], label='Train Accuracy')
ax1.plot(epoch_list, history.history['val_acc'], label='Validation Accuracy')
ax1.set_xticks(np.arange(0, 31, 5))
ax1.set_ylabel('Accuracy Value')
ax1.set_xlabel('Epoch')
ax1.set_title('Accuracy')
l1 = ax1.legend(loc="best")

ax2.plot(epoch_list, history.history['loss'], label='Train Loss')
ax2.plot(epoch_list, history.history['val_loss'], label='Validation Loss')
ax2.set_xticks(np.arange(0, 31, 5))
ax2.set_ylabel('Loss Value')
ax2.set_xlabel('Epoch')
ax2.set_title('Loss')
l2 = ax2.legend(loc="best")</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*LqZZegAkPPeJPQ1vW-9Z8w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*LqZZegAkPPeJPQ1vW-9Z8w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*LqZZegAkPPeJPQ1vW-9Z8w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*LqZZegAkPPeJPQ1vW-9Z8w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*LqZZegAkPPeJPQ1vW-9Z8w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*LqZZegAkPPeJPQ1vW-9Z8w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*LqZZegAkPPeJPQ1vW-9Z8w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*LqZZegAkPPeJPQ1vW-9Z8w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*LqZZegAkPPeJPQ1vW-9Z8w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*LqZZegAkPPeJPQ1vW-9Z8w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*LqZZegAkPPeJPQ1vW-9Z8w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*LqZZegAkPPeJPQ1vW-9Z8w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*LqZZegAkPPeJPQ1vW-9Z8w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*LqZZegAkPPeJPQ1vW-9Z8w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*LqZZegAkPPeJPQ1vW-9Z8w.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Vanilla CNN Model Performance</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can clearly see that after 2–3 epochs the model starts overfitting on the training data. The average accuracy we get in our validation set is around <strong>72%</strong>, which is not a bad start! Can we improve upon this model?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">CNN Model with Regularization</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s improve upon our base CNN model by adding in one more convolution layer, another dense hidden layer. Besides this, we will add dropout of <code>0.3</code> after each hidden dense layer to enable regularization. Basically, dropout is a powerful method of regularizing in deep neural nets. It can be applied separately to both input layers and the hidden layers. Dropout randomly masks the outputs of a fraction of units from a layer by setting their output to zero (in our case, it is 30% of the units in our dense layers).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>model = Sequential()

model.add(Conv2D(16, kernel_size=(3, 3), activation='relu', 
                 input_shape=input_shape))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(64, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(128, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(128, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Flatten())
model.add(Dense(512, activation='relu'))
model.add(Dropout(0.3))
model.add(Dense(512, activation='relu'))
model.add(Dropout(0.3))
model.add(Dense(1, activation='sigmoid'))


model.compile(loss='binary_crossentropy',
              optimizer=optimizers.RMSprop(),
              metrics=['accuracy'])
              
              
history = model.fit(x=train_imgs_scaled, y=train_labels_enc,
                    validation_data=(validation_imgs_scaled, validation_labels_enc),
                    batch_size=batch_size,
                    epochs=epochs,
                    verbose=1)                      </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Train on 3000 samples, validate on 1000 samples<br/>Epoch 1/30<br/>3000/3000 - 7s - loss: 0.6945 - acc: 0.5487 - val_loss: 0.7341 - val_acc: 0.5210<br/>Epoch 2/30<br/>3000/3000 - 7s - loss: 0.6601 - acc: 0.6047 - val_loss: 0.6308 - val_acc: 0.6480<br/>...<br/>...<br/>Epoch 29/30<br/>3000/3000 - 7s - loss: 0.0927 - acc: 0.9797 - val_loss: 1.1696 - val_acc: 0.7380<br/>Epoch 30/30<br/>3000/3000 - 7s - loss: 0.0975 - acc: 0.9803 - val_loss: 1.6790 - val_acc: 0.7840</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*vnm4GAESnLF10qCiGJGKXQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*vnm4GAESnLF10qCiGJGKXQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*vnm4GAESnLF10qCiGJGKXQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*vnm4GAESnLF10qCiGJGKXQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*vnm4GAESnLF10qCiGJGKXQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*vnm4GAESnLF10qCiGJGKXQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*vnm4GAESnLF10qCiGJGKXQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*vnm4GAESnLF10qCiGJGKXQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*vnm4GAESnLF10qCiGJGKXQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*vnm4GAESnLF10qCiGJGKXQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*vnm4GAESnLF10qCiGJGKXQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*vnm4GAESnLF10qCiGJGKXQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*vnm4GAESnLF10qCiGJGKXQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*vnm4GAESnLF10qCiGJGKXQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*vnm4GAESnLF10qCiGJGKXQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Vanilla CNN Model with Regularization Performance</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can clearly see from the preceding outputs that we still end up overfitting the model, though it takes slightly longer and we also get a slightly better validation accuracy of around <strong>78%</strong>, which is decent but not amazing. The reason for model overfitting is because we have much less training data and the model keeps seeing the same instances over time across each epoch. A way to combat this would be to leverage an image augmentation strategy to augment our existing training data with images that are slight variations of the existing images. We will cover this in detail in the following section. Let’s save this model for the time being so we can use it later to evaluate its performance on the test data.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>model.save(‘cats_dogs_basic_cnn.h5’)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">CNN Model with Image Augmentation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s improve upon our regularized CNN model by adding in more data using a proper image augmentation strategy. Since our previous model was trained on the same small sample of data points each time, it wasn’t able to generalize well and ended up overfitting after a few epochs. The idea behind image augmentation is that we follow a set process of taking in existing images from our training dataset and applying some image transformation operations to them, such as rotation, shearing, translation, zooming, and so on, to produce new, altered versions of existing images. Due to these random transformations, we don’t get the same images each time, and we will leverage Python generators to feed in these new images to our model during training.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The Keras framework has an excellent utility called <code>ImageDataGenerator</code> that can help us in doing all the preceding operations. Let’s initialize two of the data generators for our training and validation datasets.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>train_datagen = ImageDataGenerator(rescale=1./255, zoom_range=0.3, rotation_range=50,
                                   width_shift_range=0.2, height_shift_range=0.2, shear_range=0.2, 
                                   horizontal_flip=True, fill_mode='nearest')

val_datagen = ImageDataGenerator(rescale=1./255)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are a lot of options available in <code>ImageDataGenerator</code> and we have just utilized a few of them. Feel free to check out the <a href="https://keras.io/preprocessing/image/" target="_self">documentation</a> to get a more detailed perspective. In our training data generator, we take in the raw images and then perform several transformations on them to generate new images. These include the following.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Zooming the image randomly by a factor of <code>0.3</code> using the <code>zoom_range</code> parameter.</li><li class="ff3" style="font-size:22px;">Rotating the image randomly by <code>50</code> degrees using the <code>rotation_range</code><strong> </strong>parameter.</li><li class="ff3" style="font-size:22px;">Translating the image randomly horizontally or vertically by a <code>0.2</code> factor of the image’s width or height using the <code>width_shift_range</code> and the <code>height_shift_range</code> parameters.</li><li class="ff3" style="font-size:22px;">Applying shear-based transformations randomly using the <code>shear_range</code><strong> </strong>parameter.</li><li class="ff3" style="font-size:22px;">Randomly flipping half of the images horizontally using the <code>horizontal_flip</code><strong> </strong>parameter.</li><li class="ff3" style="font-size:22px;">Leveraging the <code>fill_mode</code> parameter to fill in new pixels for images after we apply any of the preceding operations (especially rotation or translation). In this case, we just fill in the new pixels with their nearest surrounding pixel values.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s see how some of these generated images might look so that you can understand them better. We will take two sample images from our training dataset to illustrate the same. The first image is an image of a cat.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>mg_id = 2595
cat_generator = train_datagen.flow(train_imgs[img_id:img_id+1], train_labels[img_id:img_id+1],
                                   batch_size=1)
cat = [next(cat_generator) for i in range(0,5)]
fig, ax = plt.subplots(1,5, figsize=(16, 6))
print('Labels:', [item[1][0] for item in cat])
l = [ax[i].imshow(cat[i][0][0]) for i in range(0,5)]</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*OTb-WjszHutpDg4nobjG4w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*OTb-WjszHutpDg4nobjG4w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*OTb-WjszHutpDg4nobjG4w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*OTb-WjszHutpDg4nobjG4w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*OTb-WjszHutpDg4nobjG4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*OTb-WjszHutpDg4nobjG4w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*OTb-WjszHutpDg4nobjG4w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*OTb-WjszHutpDg4nobjG4w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*OTb-WjszHutpDg4nobjG4w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*OTb-WjszHutpDg4nobjG4w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*OTb-WjszHutpDg4nobjG4w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*OTb-WjszHutpDg4nobjG4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*OTb-WjszHutpDg4nobjG4w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*OTb-WjszHutpDg4nobjG4w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*OTb-WjszHutpDg4nobjG4w.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Image Augmentation on a Cat Image</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can clearly see in the previous output that we generate a new version of our training image each time (with translations, rotations, and zoom) and also we assign a label of cat to it so that the model can extract relevant features from these images and also remember that these are cats. Let’s look at how image augmentation works on a sample dog image now.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>img_id = 1991
dog_generator = train_datagen.flow(train_imgs[img_id:img_id+1], train_labels[img_id:img_id+1],
                                   batch_size=1)
dog = [next(dog_generator) for i in range(0,5)]
fig, ax = plt.subplots(1,5, figsize=(15, 6))
print('Labels:', [item[1][0] for item in dog])
l = [ax[i].imshow(dog[i][0][0]) for i in range(0,5)]</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Cejzyd9kVycbuVALlvjxVw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Cejzyd9kVycbuVALlvjxVw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Cejzyd9kVycbuVALlvjxVw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Cejzyd9kVycbuVALlvjxVw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Cejzyd9kVycbuVALlvjxVw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Cejzyd9kVycbuVALlvjxVw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Cejzyd9kVycbuVALlvjxVw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Cejzyd9kVycbuVALlvjxVw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Cejzyd9kVycbuVALlvjxVw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Cejzyd9kVycbuVALlvjxVw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Cejzyd9kVycbuVALlvjxVw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Cejzyd9kVycbuVALlvjxVw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Cejzyd9kVycbuVALlvjxVw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Cejzyd9kVycbuVALlvjxVw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Cejzyd9kVycbuVALlvjxVw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Image Augmentation on a Dog Image</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This shows us how image augmentation helps in creating new images, and how training a model on them should help in combating overfitting. Remember for our validation generator, we just need to send the validation images (original ones) to the model for evaluation; hence, we just scale the image pixels (between 0–1) and do not apply any transformations. We just apply image augmentation transformations only on our training images. Let’s now train a CNN model with regularization using the image augmentation data generators we created. We will use the same model architecture from before.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>train_generator = train_datagen.flow(train_imgs, train_labels_enc, batch_size=30)
val_generator = val_datagen.flow(validation_imgs, validation_labels_enc, batch_size=20)
input_shape = (150, 150, 3)

from keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout
from keras.models import Sequential
from keras import optimizers

model = Sequential()

model.add(Conv2D(16, kernel_size=(3, 3), activation='relu', 
                 input_shape=input_shape))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(64, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(128, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Conv2D(128, kernel_size=(3, 3), activation='relu'))
model.add(MaxPooling2D(pool_size=(2, 2)))

model.add(Flatten())
model.add(Dense(512, activation='relu'))
model.add(Dropout(0.3))
model.add(Dense(512, activation='relu'))
model.add(Dropout(0.3))
model.add(Dense(1, activation='sigmoid'))

model.compile(loss='binary_crossentropy',
              optimizer=optimizers.RMSprop(lr=1e-4),
              metrics=['accuracy'])
              
history = model.fit_generator(train_generator, steps_per_epoch=100, epochs=100,
                              validation_data=val_generator, validation_steps=50, 
                              verbose=1)              </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We reduce the default learning rate by a factor of 10 here for our optimizer to prevent the model from getting stuck in a local minima or overfit, as we will be sending a lot of images with random transformations. To train the model, we need to slightly modify our approach now, since we are using data generators. We will leverage the <code>fit_generator(…)</code><strong> </strong>function from Keras to train this model. The <code>train_generator</code> generates 30 images each time, so we will use the <code>steps_per_epoch</code> parameter and set it to 100 to train the model on 3,000 randomly generated images from the training data for each epoch. Our <code>val_generator</code> generates 20 images each time so we will set the <code>validation_steps</code> parameter to 50 to validate our model accuracy on all the 1,000 validation images (remember we are not augmenting our validation dataset).</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Epoch 1/100<br/>100/100 - 12s - loss: 0.6924 - acc: 0.5113 - val_loss: 0.6943 - val_acc: 0.5000<br/>Epoch 2/100<br/>100/100 - 11s - loss: 0.6855 - acc: 0.5490 - val_loss: 0.6711 - val_acc: 0.5780<br/>Epoch 3/100<br/>100/100 - 11s - loss: 0.6691 - acc: 0.5920 - val_loss: 0.6642 - val_acc: 0.5950<br/>...<br/>...<br/>Epoch 99/100<br/>100/100 - 11s - loss: 0.3735 - acc: 0.8367 - val_loss: 0.4425 - val_acc: 0.8340<br/>Epoch 100/100<br/>100/100 - 11s - loss: 0.3733 - acc: 0.8257 - val_loss: 0.4046 - val_acc: 0.8200</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We get a validation accuracy jump to around <strong>82%</strong>, which is almost <strong>4–5%</strong> better than our previous model. Also, our training accuracy is very similar to our validation accuracy, indicating our model isn’t overfitting anymore. The following depict the model accuracy and loss per epoch.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*unHphvqGaHoFdZOs1ZH9XQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*unHphvqGaHoFdZOs1ZH9XQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*unHphvqGaHoFdZOs1ZH9XQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*unHphvqGaHoFdZOs1ZH9XQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*unHphvqGaHoFdZOs1ZH9XQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*unHphvqGaHoFdZOs1ZH9XQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*unHphvqGaHoFdZOs1ZH9XQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*unHphvqGaHoFdZOs1ZH9XQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*unHphvqGaHoFdZOs1ZH9XQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*unHphvqGaHoFdZOs1ZH9XQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*unHphvqGaHoFdZOs1ZH9XQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*unHphvqGaHoFdZOs1ZH9XQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*unHphvqGaHoFdZOs1ZH9XQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*unHphvqGaHoFdZOs1ZH9XQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*unHphvqGaHoFdZOs1ZH9XQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Vanilla CNN Model with Image Augmentation Performance</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">While there are some spikes in the validation accuracy and loss, overall, we see that it is much closer to the training accuracy, with the loss indicating that we obtained a model that generalizes much better as compared to our previous models. Let’s save this model now so we can evaluate it later on our test dataset.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>model.save(‘cats_dogs_cnn_img_aug.h5’)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now try and leverage the power of transfer learning to see if we can build a better model!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Leveraging Transfer Learning with Pre-trained CNN Models</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Pre-trained models are used in the following two popular ways when building new models or reusing them:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Using a pre-trained model as a feature extractor</li><li class="ff3" style="font-size:22px;">Fine-tuning the pre-trained model</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will cover both of them in detail in this section. The pre-trained model that we will be using in this chapter is the popular VGG-16 model, created by the <a href="http://www.robots.ox.ac.uk/~vgg/research/very_deep/" target="_self">Visual Geometry Group</a> at the University of Oxford, which specializes in building very deep convolutional networks for large-scale visual recognition.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A pre-trained model like the VGG-16 is an already pre-trained model on a huge dataset (ImageNet) with a lot of diverse image categories. Considering this fact, the model should have learned a robust hierarchy of features, which are spatial, rotation, and translation invariant with regard to features learned by CNN models. Hence, the model, having learned a good representation of features for over a million images belonging to 1,000 different categories, can act as a good feature extractor for new images suitable for computer vision problems. These new images might never exist in the ImageNet dataset or might be of totally different categories, but the model should still be able to extract relevant features from these images.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This gives us an advantage of using pre-trained models as effective feature extractors for new images, to solve diverse and complex computer vision tasks, such as solving our cat versus dog classifier with fewer images, or even building a dog breed classifier, a facial expression classifier, and much more! Let’s briefly discuss the VGG-16 model architecture before unleashing the power of transfer learning on our problem.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Understanding the VGG-16 model</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The VGG-16 model is a 16-layer (convolution and fully connected) network built on the ImageNet database, which is built for the purpose of image recognition and classification. This model was built by Karen Simonyan and Andrew Zisserman and is mentioned in their paper titled <a href="https://arxiv.org/pdf/1409.1556.pdf" target="_self">‘Very Deep Convolutional Networks for Large-Scale Image Recognition’</a><em>. </em>I recommend all interested readers to go and read up on the excellent literature in this paper. The architecture of the VGG-16 model is depicted in the following figure.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:82%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 605px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*E7zhhan7Sp7hats4jkKdeA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*E7zhhan7Sp7hats4jkKdeA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*E7zhhan7Sp7hats4jkKdeA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*E7zhhan7Sp7hats4jkKdeA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*E7zhhan7Sp7hats4jkKdeA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*E7zhhan7Sp7hats4jkKdeA.png 1100w, https://miro.medium.com/v2/resize:fit:1210/format:webp/1*E7zhhan7Sp7hats4jkKdeA.png 1210w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 605px" srcset="https://miro.medium.com/v2/resize:fit:640/1*E7zhhan7Sp7hats4jkKdeA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*E7zhhan7Sp7hats4jkKdeA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*E7zhhan7Sp7hats4jkKdeA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*E7zhhan7Sp7hats4jkKdeA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*E7zhhan7Sp7hats4jkKdeA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*E7zhhan7Sp7hats4jkKdeA.png 1100w, https://miro.medium.com/v2/resize:fit:1210/1*E7zhhan7Sp7hats4jkKdeA.png 1210w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/605/1*E7zhhan7Sp7hats4jkKdeA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">VGG-16 Model Architecture</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can clearly see that we have a total of <code>13</code> convolution layers using <code>3 x 3</code> convolution filters along with max pooling layers for downsampling and a total of two fully connected hidden layers of <code>4096</code> units in each layer followed by a dense layer of <code>1000</code> units, where each unit represents one of the image categories in the ImageNet database. We do not need the last three layers since we will be using our own fully connected dense layers to predict whether images will be a dog or a cat. We are more concerned with the first five blocks, so that we can leverage the VGG model as an effective feature extractor.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For one of the models, we will use it as a simple feature extractor by freezing all the five convolution blocks to make sure their weights don’t get updated after each epoch. For the last model, we will apply fine-tuning to the VGG model, where we will unfreeze the last two blocks (Block 4 and Block 5) so that their weights get updated in each epoch (per batch of data) as we train our own model. We represent the preceding architecture, along with the two variants (basic feature extractor and fine-tuning) that we will be using, in the following block diagram, so you can get a better visual perspective.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*W91k18rRAZfJnsM8bhUDXA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*W91k18rRAZfJnsM8bhUDXA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*W91k18rRAZfJnsM8bhUDXA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*W91k18rRAZfJnsM8bhUDXA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*W91k18rRAZfJnsM8bhUDXA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*W91k18rRAZfJnsM8bhUDXA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*W91k18rRAZfJnsM8bhUDXA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*W91k18rRAZfJnsM8bhUDXA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*W91k18rRAZfJnsM8bhUDXA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*W91k18rRAZfJnsM8bhUDXA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*W91k18rRAZfJnsM8bhUDXA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*W91k18rRAZfJnsM8bhUDXA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*W91k18rRAZfJnsM8bhUDXA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*W91k18rRAZfJnsM8bhUDXA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*W91k18rRAZfJnsM8bhUDXA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Block Diagram showing Transfer Learning Strategies on the VGG-16 Model</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thus, we are mostly concerned with leveraging the convolution blocks of the VGG-16 model and then flattening the final output (from the feature maps) so that we can feed it into our own dense layers for our classifier.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Pre-trained CNN model as a Feature Extractor</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s leverage Keras, load up the VGG-16 model, and freeze the convolution blocks so that we can use it as just an image feature extractor.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>
from keras.applications import vgg16
from keras.models import Model
import keras

vgg = vgg16.VGG16(include_top=False, weights='imagenet', 
                                     input_shape=input_shape)

output = vgg.layers[-1].output
output = keras.layers.Flatten()(output)
vgg_model = Model(vgg.input, output)

vgg_model.trainable = False
for layer in vgg_model.layers:
    layer.trainable = False
    
import pandas as pd
pd.set_option('max_colwidth', -1)
layers = [(layer, layer.name, layer.trainable) for layer in vgg_model.layers]
pd.DataFrame(layers, columns=['Layer Type', 'Layer Name', 'Layer Trainable'])    </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:81%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 600px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 1100w, https://miro.medium.com/v2/resize:fit:1200/format:webp/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 1200w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 600px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 1100w, https://miro.medium.com/v2/resize:fit:1200/1*ywiwIzQqtPmvg1gDuAzZ0Q.png 1200w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/600/1*ywiwIzQqtPmvg1gDuAzZ0Q.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It is quite clear from the preceding output that all the layers of the VGG-16 model are frozen, which is good, because we don’t want their weights to change during model training. The last activation feature map in the VGG-16 model (output from <code>block5_pool</code>) gives us the bottleneck features, which can then be flattened and fed to a fully connected deep neural network classifier. The following snippet shows what the bottleneck features look like for a sample image from our training data.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>bottleneck_feature_example = vgg.predict(train_imgs_scaled[0:1])<br/>print(bottleneck_feature_example.shape)<br/>plt.imshow(bottleneck_feature_example[0][:,:,0])</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:34%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 272px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*KGp2CENBMn--aPUsXfNRfw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*KGp2CENBMn--aPUsXfNRfw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*KGp2CENBMn--aPUsXfNRfw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*KGp2CENBMn--aPUsXfNRfw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*KGp2CENBMn--aPUsXfNRfw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*KGp2CENBMn--aPUsXfNRfw.png 1100w, https://miro.medium.com/v2/resize:fit:544/format:webp/1*KGp2CENBMn--aPUsXfNRfw.png 544w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 272px" srcset="https://miro.medium.com/v2/resize:fit:640/1*KGp2CENBMn--aPUsXfNRfw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*KGp2CENBMn--aPUsXfNRfw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*KGp2CENBMn--aPUsXfNRfw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*KGp2CENBMn--aPUsXfNRfw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*KGp2CENBMn--aPUsXfNRfw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*KGp2CENBMn--aPUsXfNRfw.png 1100w, https://miro.medium.com/v2/resize:fit:544/1*KGp2CENBMn--aPUsXfNRfw.png 544w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/272/1*KGp2CENBMn--aPUsXfNRfw.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Sample Bottleneck Features</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We flatten the bottleneck features in the vgg_model object to make them ready to be fed to our fully connected classifier. A way to save time in model training is to use this model and extract out all the features from our training and validation datasets and then feed them as inputs to our classifier. Let’s extract out the bottleneck features from our training and validation sets now.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>def get_bottleneck_features(model, input_imgs):
    features = model.predict(input_imgs, verbose=0)
    return features
    
train_features_vgg = get_bottleneck_features(vgg_model, train_imgs_scaled)
validation_features_vgg = get_bottleneck_features(vgg_model, validation_imgs_scaled)

print('Train Bottleneck Features:', train_features_vgg.shape, 
      '\tValidation Bottleneck Features:', validation_features_vgg.shape)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Train Bottleneck Features: (3000, 8192) 	<br/>Validation Bottleneck Features: (1000, 8192)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The preceding output tells us that we have successfully extracted the flattened bottleneck features of dimension <code>1 x 8192</code> for our 3,000 training images and our 1,000 validation images. Let’s build the architecture of our deep neural network classifier now, which will take these features as input.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout, InputLayer
from keras.models import Sequential
from keras import optimizers

input_shape = vgg_model.output_shape[1]

model = Sequential()
model.add(InputLayer(input_shape=(input_shape,)))
model.add(Dense(512, activation='relu', input_dim=input_shape))
model.add(Dropout(0.3))
model.add(Dense(512, activation='relu'))
model.add(Dropout(0.3))
model.add(Dense(1, activation='sigmoid'))

model.compile(loss='binary_crossentropy',
              optimizer=optimizers.RMSprop(lr=1e-4),
              metrics=['accuracy'])

model.summary()


'''
_________________________________________________________________
Layer (type)                 Output Shape              Param #   
=================================================================
input_2 (InputLayer)         (None, 8192)              0         
_________________________________________________________________
dense_1 (Dense)              (None, 512)               4194816   
_________________________________________________________________
dropout_1 (Dropout)          (None, 512)               0         
_________________________________________________________________
dense_2 (Dense)              (None, 512)               262656    
_________________________________________________________________
dropout_2 (Dropout)          (None, 512)               0         
_________________________________________________________________
dense_3 (Dense)              (None, 1)                 513       
=================================================================
Total params: 4,457,985
Trainable params: 4,457,985
Non-trainable params: 0
_________________________________________________________________
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Just like we mentioned previously, bottleneck feature vectors of size 8192 serve as input to our classification model. We use the same architecture as our previous models here with regard to the dense layers. Let’s train this model now.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>history = model.fit(x=train_features_vgg, y=train_labels_enc,
                    validation_data=(validation_features_vgg, validation_labels_enc),
                    batch_size=batch_size,
                    epochs=epochs,
                    verbose=1)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Train on 3000 samples, validate on 1000 samples<br/>Epoch 1/30<br/>3000/3000 - 1s 373us/step - loss: 0.4325 - acc: 0.7897 - val_loss: 0.2958 - val_acc: 0.8730<br/>Epoch 2/30<br/>3000/3000 - 1s 286us/step - loss: 0.2857 - acc: 0.8783 - val_loss: 0.3294 - val_acc: 0.8530<br/>Epoch 3/30<br/>3000/3000 - 1s 289us/step - loss: 0.2353 - acc: 0.9043 - val_loss: 0.2708 - val_acc: 0.8700<br/>...<br/>...<br/>Epoch 29/30<br/>3000/3000 - 1s 287us/step - loss: 0.0121 - acc: 0.9943 - val_loss: 0.7760 - val_acc: 0.8930<br/>Epoch 30/30<br/>3000/3000 - 1s 287us/step - loss: 0.0102 - acc: 0.9987 - val_loss: 0.8344 - val_acc: 0.8720</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*LfuJT_A7cVRTVi9lGm1CLA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*LfuJT_A7cVRTVi9lGm1CLA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*LfuJT_A7cVRTVi9lGm1CLA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*LfuJT_A7cVRTVi9lGm1CLA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*LfuJT_A7cVRTVi9lGm1CLA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*LfuJT_A7cVRTVi9lGm1CLA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*LfuJT_A7cVRTVi9lGm1CLA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*LfuJT_A7cVRTVi9lGm1CLA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*LfuJT_A7cVRTVi9lGm1CLA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*LfuJT_A7cVRTVi9lGm1CLA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*LfuJT_A7cVRTVi9lGm1CLA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*LfuJT_A7cVRTVi9lGm1CLA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*LfuJT_A7cVRTVi9lGm1CLA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*LfuJT_A7cVRTVi9lGm1CLA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*LfuJT_A7cVRTVi9lGm1CLA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Pre-trained CNN (feature extractor) Performance</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We get a model with a validation accuracy of close to 88%, almost a 5–6% improvement from our basic CNN model with image augmentation, which is excellent. The model does seem to be overfitting though. There is a decent gap between the model train and validation accuracy after the fifth epoch, which kind of makes it clear that the model is overfitting on the training data after that. But overall, this seems to be the best model so far. Let’s try using our image augmentation strategy on this model. Before that, we save this model to disk using the following code.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>model.save('cats_dogs_tlearn_basic_cnn.h5')</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Pre-trained CNN model as a Feature Extractor with Image Augmentation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will leverage the same data generators for our train and validation datasets that we used before. The code for building them is depicted as follows for ease of understanding.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>train_datagen = ImageDataGenerator(rescale=1./255, zoom_range=0.3, rotation_range=50,
                                   width_shift_range=0.2, height_shift_range=0.2, shear_range=0.2, 
                                   horizontal_flip=True, fill_mode='nearest')

val_datagen = ImageDataGenerator(rescale=1./255)

train_generator = train_datagen.flow(train_imgs, train_labels_enc, batch_size=30)
val_generator = val_datagen.flow(validation_imgs, validation_labels_enc, batch_size=20)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now build our deep learning model and train it. We won’t extract the bottleneck features like last time since we will be training on data generators; hence, we will be passing the <code>vgg_model</code> object as an input to our own model. We bring the learning rate slightly down since we will be training for 100 epochs and don’t want to make any sudden abrupt weight adjustments to our model layers. Do remember that the VGG-16 model’s layers are still frozen here, and we are still using it as a basic feature extractor only.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout, InputLayer
from keras.models import Sequential
from keras import optimizers

model = Sequential()
model.add(vgg_model)
model.add(Dense(512, activation='relu', input_dim=input_shape))
model.add(Dropout(0.3))
model.add(Dense(512, activation='relu'))
model.add(Dropout(0.3))
model.add(Dense(1, activation='sigmoid'))

model.compile(loss='binary_crossentropy',
              optimizer=optimizers.RMSprop(lr=2e-5),
              metrics=['accuracy'])
              
history = model.fit_generator(train_generator, steps_per_epoch=100, epochs=100,
                              validation_data=val_generator, validation_steps=50, 
                              verbose=1)              </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Epoch 1/100<br/>100/100 - 45s 449ms/step - loss: 0.6511 - acc: 0.6153 - val_loss: 0.5147 - val_acc: 0.7840<br/>Epoch 2/100<br/>100/100 - 41s 414ms/step - loss: 0.5651 - acc: 0.7110 - val_loss: 0.4249 - val_acc: 0.8180<br/>Epoch 3/100<br/>100/100 - 41s 415ms/step - loss: 0.5069 - acc: 0.7527 - val_loss: 0.3790 - val_acc: 0.8260<br/>...<br/>...<br/>Epoch 99/100<br/>100/100 - 42s 417ms/step - loss: 0.2656 - acc: 0.8907 - val_loss: 0.2757 - val_acc: 0.9050<br/>Epoch 100/100<br/>100/100 - 42s 418ms/step - loss: 0.2876 - acc: 0.8833 - val_loss: 0.2665 - val_acc: 0.9000</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*AynpG5ernB5_ZRgGnrSprA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*AynpG5ernB5_ZRgGnrSprA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*AynpG5ernB5_ZRgGnrSprA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*AynpG5ernB5_ZRgGnrSprA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*AynpG5ernB5_ZRgGnrSprA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*AynpG5ernB5_ZRgGnrSprA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*AynpG5ernB5_ZRgGnrSprA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*AynpG5ernB5_ZRgGnrSprA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*AynpG5ernB5_ZRgGnrSprA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*AynpG5ernB5_ZRgGnrSprA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*AynpG5ernB5_ZRgGnrSprA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*AynpG5ernB5_ZRgGnrSprA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*AynpG5ernB5_ZRgGnrSprA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*AynpG5ernB5_ZRgGnrSprA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*AynpG5ernB5_ZRgGnrSprA.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Pre-trained CNN (feature extractor) with Image Augmentation Performance</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can see that our model has an overall validation accuracy of <strong>90%</strong>, which is a slight improvement from our previous model, and also the train and validation accuracy are quite close to each other, indicating that the model is not overfitting. Let’s save this model on the disk now for future evaluation on the test data.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>model.save(‘cats_dogs_tlearn_img_aug_cnn.h5’)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now fine-tune the VGG-16 model to build our last classifier, where we will unfreeze blocks 4 and 5, as we depicted in our block diagram earlier.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Pre-trained CNN model with Fine-tuning and Image Augmentation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now leverage our VGG-16 model object stored in the <code>vgg_model</code> variable and unfreeze convolution blocks 4 and 5 while keeping the first three blocks frozen. The following code helps us achieve this.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>vgg_model.trainable = True

set_trainable = False
for layer in vgg_model.layers:
    if layer.name in ['block5_conv1', 'block4_conv1']:
        set_trainable = True
    if set_trainable:
        layer.trainable = True
    else:
        layer.trainable = False
        
layers = [(layer, layer.name, layer.trainable) for layer in vgg_model.layers]
pd.DataFrame(layers, columns=['Layer Type', 'Layer Name', 'Layer Trainable'])       </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:81%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 598px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 1100w, https://miro.medium.com/v2/resize:fit:1196/format:webp/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 1196w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 598px" srcset="https://miro.medium.com/v2/resize:fit:640/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 1100w, https://miro.medium.com/v2/resize:fit:1196/1*tdTyK_sF9ZHVoQlOY8BfBQ.png 1196w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/598/1*tdTyK_sF9ZHVoQlOY8BfBQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can clearly see from the preceding output that the convolution and pooling layers pertaining to blocks 4 and 5 are now trainable. This means the weights for these layers will also get updated with backpropagation in each epoch as we pass each batch of data. We will use the same data generators and model architecture as our previous model and train our model. We reduce the learning rate slightly, since we don’t want to get stuck at any local minimal, and we also do not want to suddenly update the weights of the trainable VGG-16 model layers by a big factor that might adversely affect the model.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>train_datagen = ImageDataGenerator(rescale=1./255, zoom_range=0.3, rotation_range=50,
                                   width_shift_range=0.2, height_shift_range=0.2, shear_range=0.2, 
                                   horizontal_flip=True, fill_mode='nearest')
val_datagen = ImageDataGenerator(rescale=1./255)
train_generator = train_datagen.flow(train_imgs, train_labels_enc, batch_size=30)
val_generator = val_datagen.flow(validation_imgs, validation_labels_enc, batch_size=20)

from keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout, InputLayer
from keras.models import Sequential
from keras import optimizers

model = Sequential()
model.add(vgg_model)
model.add(Dense(512, activation='relu', input_dim=input_shape))
model.add(Dropout(0.3))
model.add(Dense(512, activation='relu'))
model.add(Dropout(0.3))
model.add(Dense(1, activation='sigmoid'))

model.compile(loss='binary_crossentropy',
              optimizer=optimizers.RMSprop(lr=1e-5),
              metrics=['accuracy'])
              
history = model.fit_generator(train_generator, steps_per_epoch=100, epochs=100,
                              validation_data=val_generator, validation_steps=50, 
                              verbose=1)              
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Epoch 1/100<br/>100/100 - 64s 642ms/step - loss: 0.6070 - acc: 0.6547 - val_loss: 0.4029 - val_acc: 0.8250<br/>Epoch 2/100<br/>100/100 - 63s 630ms/step - loss: 0.3976 - acc: 0.8103 - val_loss: 0.2273 - val_acc: 0.9030<br/>Epoch 3/100<br/>100/100 - 63s 631ms/step - loss: 0.3440 - acc: 0.8530 - val_loss: 0.2221 - val_acc: 0.9150<br/>...<br/>...<br/>Epoch 99/100<br/>100/100 - 63s 629ms/step - loss: 0.0243 - acc: 0.9913 - val_loss: 0.2861 - val_acc: 0.9620<br/>Epoch 100/100<br/>100/100 - 63s 629ms/step - loss: 0.0226 - acc: 0.9930 - val_loss: 0.3002 - val_acc: 0.9610</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*hnjWJsBJLxP4DoLe-YmqFg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*hnjWJsBJLxP4DoLe-YmqFg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*hnjWJsBJLxP4DoLe-YmqFg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*hnjWJsBJLxP4DoLe-YmqFg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*hnjWJsBJLxP4DoLe-YmqFg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*hnjWJsBJLxP4DoLe-YmqFg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*hnjWJsBJLxP4DoLe-YmqFg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*hnjWJsBJLxP4DoLe-YmqFg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*hnjWJsBJLxP4DoLe-YmqFg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*hnjWJsBJLxP4DoLe-YmqFg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*hnjWJsBJLxP4DoLe-YmqFg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*hnjWJsBJLxP4DoLe-YmqFg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*hnjWJsBJLxP4DoLe-YmqFg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*hnjWJsBJLxP4DoLe-YmqFg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*hnjWJsBJLxP4DoLe-YmqFg.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Pre-trained CNN (fine-tuning) with Image Augmentation Performance</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can see from the preceding output that our model has obtained a validation accuracy of around <strong>96%</strong>, which is a <strong>6%</strong> improvement from our previous model. Overall, this model has gained a <strong>24%</strong> improvement in validation accuracy from our first basic CNN model. This really shows how useful transfer learning can be. We can see that accuracy values are really excellent here, and although the model looks like it might be slightly overfitting on the training data, we still get great validation accuracy. Let’s save this model to disk now using the following code.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>model.save('cats_dogs_tlearn_finetune_img_aug_cnn.h5')</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s now put all our models to the test by actually evaluating their performance on our test dataset.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Evaluating our Deep Learning Models on Test Data</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will now evaluate the five different models that we built so far, by first testing them on our test dataset, because just validation is not enough! We have also built a nifty utility module called <code>model_evaluation_utils</code>, which we will be using to evaluate the performance of our deep learning models. Let's load up the necessary dependencies and our saved models before getting started.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># load dependencies
import glob
import numpy as np
import matplotlib.pyplot as plt
from keras.preprocessing.image import load_img, img_to_array, array_to_img
from keras.models import load_model
import model_evaluation_utils as meu
%matplotlib inline

# load saved models
basic_cnn = load_model('cats_dogs_basic_cnn.h5')
img_aug_cnn = load_model('cats_dogs_cnn_img_aug.h5')
tl_cnn = load_model('cats_dogs_tlearn_basic_cnn.h5')
tl_img_aug_cnn = load_model('cats_dogs_tlearn_img_aug_cnn.h5')
tl_img_aug_finetune_cnn = load_model('cats_dogs_tlearn_finetune_img_aug_cnn.h5')

# load other configurations
IMG_DIM = (150, 150)
input_shape = (150, 150, 3)
num2class_label_transformer = lambda l: ['cat' if x == 0 else 'dog' for x in l]
class2num_label_transformer = lambda l: [0 if x == 'cat' else 1 for x in l]

# load VGG model for bottleneck features
from keras.applications import vgg16
from keras.models import Model
import keras

vgg = vgg16.VGG16(include_top=False, weights='imagenet', 
                  input_shape=input_shape)
output = vgg.layers[-1].output
output = keras.layers.Flatten()(output)
vgg_model = Model(vgg.input, output)
vgg_model.trainable = False

def get_bottleneck_features(model, input_imgs):
    features = model.predict(input_imgs, verbose=0)
    return features</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s time now for the final test, where we literally test the performance of our models by making predictions on our test dataset. Let’s load up and prepare our test dataset first before we try making predictions.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>IMG_DIM = (150, 150)

test_files = glob.glob('test_data/*')
test_imgs = [img_to_array(load_img(img, target_size=IMG_DIM)) for img in test_files]
test_imgs = np.array(test_imgs)
test_labels = [fn.split('/')[1].split('.')[0].strip() for fn in test_files]

test_imgs_scaled = test_imgs.astype('float32')
test_imgs_scaled /= 255
test_labels_enc = class2num_label_transformer(test_labels)

print('Test dataset shape:', test_imgs.shape)
print(test_labels[0:5], test_labels_enc[0:5])
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Test dataset shape: (1000, 150, 150, 3)<br/>['dog', 'dog', 'dog', 'dog', 'dog'] [1, 1, 1, 1, 1]</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that we have our scaled dataset ready, let’s evaluate each model by making predictions for all the test images, and then evaluate the model performance by checking how accurate are the predictions.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Model 1: Basic CNN Performance</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>predictions = basic_cnn.predict_classes(test_imgs_scaled, verbose=0)
predictions = num2class_label_transformer(predictions)
meu.display_model_performance_metrics(true_labels=test_labels, predicted_labels=predictions, 
                                      classes=list(set(test_labels)))</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:89%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 652px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*AOLqnbeHOPKSzMmW.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*AOLqnbeHOPKSzMmW.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*AOLqnbeHOPKSzMmW.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*AOLqnbeHOPKSzMmW.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*AOLqnbeHOPKSzMmW.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*AOLqnbeHOPKSzMmW.png 1100w, https://miro.medium.com/v2/resize:fit:1304/format:webp/0*AOLqnbeHOPKSzMmW.png 1304w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 652px" srcset="https://miro.medium.com/v2/resize:fit:640/0*AOLqnbeHOPKSzMmW.png 640w, https://miro.medium.com/v2/resize:fit:720/0*AOLqnbeHOPKSzMmW.png 720w, https://miro.medium.com/v2/resize:fit:750/0*AOLqnbeHOPKSzMmW.png 750w, https://miro.medium.com/v2/resize:fit:786/0*AOLqnbeHOPKSzMmW.png 786w, https://miro.medium.com/v2/resize:fit:828/0*AOLqnbeHOPKSzMmW.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*AOLqnbeHOPKSzMmW.png 1100w, https://miro.medium.com/v2/resize:fit:1304/0*AOLqnbeHOPKSzMmW.png 1304w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/652/0*AOLqnbeHOPKSzMmW.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Model 2: Basic CNN with Image Augmentation Performance</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>predictions = img_aug_cnn.predict_classes(test_imgs_scaled, verbose=0)
predictions = num2class_label_transformer(predictions)
meu.display_model_performance_metrics(true_labels=test_labels, predicted_labels=predictions, 
                                      classes=list(set(test_labels)))</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:89%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 652px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*EBkfi1lpHScEbn93.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*EBkfi1lpHScEbn93.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*EBkfi1lpHScEbn93.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*EBkfi1lpHScEbn93.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*EBkfi1lpHScEbn93.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*EBkfi1lpHScEbn93.png 1100w, https://miro.medium.com/v2/resize:fit:1304/format:webp/0*EBkfi1lpHScEbn93.png 1304w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 652px" srcset="https://miro.medium.com/v2/resize:fit:640/0*EBkfi1lpHScEbn93.png 640w, https://miro.medium.com/v2/resize:fit:720/0*EBkfi1lpHScEbn93.png 720w, https://miro.medium.com/v2/resize:fit:750/0*EBkfi1lpHScEbn93.png 750w, https://miro.medium.com/v2/resize:fit:786/0*EBkfi1lpHScEbn93.png 786w, https://miro.medium.com/v2/resize:fit:828/0*EBkfi1lpHScEbn93.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*EBkfi1lpHScEbn93.png 1100w, https://miro.medium.com/v2/resize:fit:1304/0*EBkfi1lpHScEbn93.png 1304w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/652/0*EBkfi1lpHScEbn93.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Model 3: Transfer Learning — Pre-trained CNN as a Feature Extractor Performance</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>test_bottleneck_features = get_bottleneck_features(vgg_model, test_imgs_scaled)

predictions = tl_cnn.predict_classes(test_bottleneck_features, verbose=0)
predictions = num2class_label_transformer(predictions)
meu.display_model_performance_metrics(true_labels=test_labels, predicted_labels=predictions, 
                                      classes=list(set(test_labels)))</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:89%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 651px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*97GP2J8M_eWUh9rp.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*97GP2J8M_eWUh9rp.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*97GP2J8M_eWUh9rp.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*97GP2J8M_eWUh9rp.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*97GP2J8M_eWUh9rp.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*97GP2J8M_eWUh9rp.png 1100w, https://miro.medium.com/v2/resize:fit:1302/format:webp/0*97GP2J8M_eWUh9rp.png 1302w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 651px" srcset="https://miro.medium.com/v2/resize:fit:640/0*97GP2J8M_eWUh9rp.png 640w, https://miro.medium.com/v2/resize:fit:720/0*97GP2J8M_eWUh9rp.png 720w, https://miro.medium.com/v2/resize:fit:750/0*97GP2J8M_eWUh9rp.png 750w, https://miro.medium.com/v2/resize:fit:786/0*97GP2J8M_eWUh9rp.png 786w, https://miro.medium.com/v2/resize:fit:828/0*97GP2J8M_eWUh9rp.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*97GP2J8M_eWUh9rp.png 1100w, https://miro.medium.com/v2/resize:fit:1302/0*97GP2J8M_eWUh9rp.png 1302w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/651/0*97GP2J8M_eWUh9rp.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Model 4: Transfer Learning — Pre-trained CNN as a Feature Extractor with Image Augmentation Performance</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>predictions = tl_img_aug_cnn.predict_classes(test_imgs_scaled, verbose=0)
predictions = num2class_label_transformer(predictions)
meu.display_model_performance_metrics(true_labels=test_labels, predicted_labels=predictions, 
                                      classes=list(set(test_labels)))</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:89%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 651px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*ysqO0F3kvLjp-7Za.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*ysqO0F3kvLjp-7Za.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*ysqO0F3kvLjp-7Za.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*ysqO0F3kvLjp-7Za.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*ysqO0F3kvLjp-7Za.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*ysqO0F3kvLjp-7Za.png 1100w, https://miro.medium.com/v2/resize:fit:1302/format:webp/0*ysqO0F3kvLjp-7Za.png 1302w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 651px" srcset="https://miro.medium.com/v2/resize:fit:640/0*ysqO0F3kvLjp-7Za.png 640w, https://miro.medium.com/v2/resize:fit:720/0*ysqO0F3kvLjp-7Za.png 720w, https://miro.medium.com/v2/resize:fit:750/0*ysqO0F3kvLjp-7Za.png 750w, https://miro.medium.com/v2/resize:fit:786/0*ysqO0F3kvLjp-7Za.png 786w, https://miro.medium.com/v2/resize:fit:828/0*ysqO0F3kvLjp-7Za.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*ysqO0F3kvLjp-7Za.png 1100w, https://miro.medium.com/v2/resize:fit:1302/0*ysqO0F3kvLjp-7Za.png 1302w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/651/0*ysqO0F3kvLjp-7Za.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Model 5: Transfer Learning — Pre-trained CNN with Fine-tuning and Image Augmentation Performance</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>predictions = tl_img_aug_finetune_cnn.predict_classes(test_imgs_scaled, verbose=0)
predictions = num2class_label_transformer(predictions)
meu.display_model_performance_metrics(true_labels=test_labels, predicted_labels=predictions, 
                                      classes=list(set(test_labels)))</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:89%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 651px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*MPusSF5KCSiiK-lF.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*MPusSF5KCSiiK-lF.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*MPusSF5KCSiiK-lF.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*MPusSF5KCSiiK-lF.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*MPusSF5KCSiiK-lF.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*MPusSF5KCSiiK-lF.png 1100w, https://miro.medium.com/v2/resize:fit:1302/format:webp/0*MPusSF5KCSiiK-lF.png 1302w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 651px" srcset="https://miro.medium.com/v2/resize:fit:640/0*MPusSF5KCSiiK-lF.png 640w, https://miro.medium.com/v2/resize:fit:720/0*MPusSF5KCSiiK-lF.png 720w, https://miro.medium.com/v2/resize:fit:750/0*MPusSF5KCSiiK-lF.png 750w, https://miro.medium.com/v2/resize:fit:786/0*MPusSF5KCSiiK-lF.png 786w, https://miro.medium.com/v2/resize:fit:828/0*MPusSF5KCSiiK-lF.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*MPusSF5KCSiiK-lF.png 1100w, https://miro.medium.com/v2/resize:fit:1302/0*MPusSF5KCSiiK-lF.png 1302w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/651/0*MPusSF5KCSiiK-lF.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can see that we definitely have some interesting results. Each subsequent model performs better than the previous model, which is expected, since we tried more advanced techniques with each new model.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Our worst model is our basic CNN model, with a model accuracy and F1-score of around <strong>78%</strong>, and our best model is our fine-tuned model with transfer learning and image augmentation, which gives us a model accuracy and F1-score of <strong>96%</strong>, which is really amazing considering we trained our model from our 3,000 image training dataset. Let’s plot the ROC curves of our worst and best models now.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># worst model - basic CNN 
meu.plot_model_roc_curve(basic_cnn, test_imgs_scaled, 
                         true_labels=test_labels_enc, 
                         class_names=[0, 1]) 

# best model - transfer learning with fine-tuning & image augmentation 
meu.plot_model_roc_curve(tl_img_aug_finetune_cnn, test_imgs_scaled, 
                         true_labels=test_labels_enc, 
                         class_names=[0, 1])</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:80%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 594px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*R3iaYz_UQP-fhvQ-.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*R3iaYz_UQP-fhvQ-.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*R3iaYz_UQP-fhvQ-.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*R3iaYz_UQP-fhvQ-.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*R3iaYz_UQP-fhvQ-.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*R3iaYz_UQP-fhvQ-.png 1100w, https://miro.medium.com/v2/resize:fit:1188/format:webp/0*R3iaYz_UQP-fhvQ-.png 1188w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 594px" srcset="https://miro.medium.com/v2/resize:fit:640/0*R3iaYz_UQP-fhvQ-.png 640w, https://miro.medium.com/v2/resize:fit:720/0*R3iaYz_UQP-fhvQ-.png 720w, https://miro.medium.com/v2/resize:fit:750/0*R3iaYz_UQP-fhvQ-.png 750w, https://miro.medium.com/v2/resize:fit:786/0*R3iaYz_UQP-fhvQ-.png 786w, https://miro.medium.com/v2/resize:fit:828/0*R3iaYz_UQP-fhvQ-.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*R3iaYz_UQP-fhvQ-.png 1100w, https://miro.medium.com/v2/resize:fit:1188/0*R3iaYz_UQP-fhvQ-.png 1188w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/594/0*R3iaYz_UQP-fhvQ-.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">ROC curve of our worst vs. best model</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This should give you a good idea of how much of a difference pre-trained models and transfer learning can make, especially in tackling complex problems when we have constraints like less data. We encourage you to try out similar strategies with your own data!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Case Study 2: Multi-Class Fine-grained Image Classification with Large Number of Classes and Less Data Availability</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now in this case study, let us level up the game and make the task of image classification even more exciting. We built a simple binary classification model in the previous case study (albeit we used some complex techniques for solving the small data constraint problem!). In this case-study, we will be concentrating toward the task of fine-grained image classification. Unlike usual image classification tasks, fine-grained image classification refers to the task of recognizing different sub-classes within a higher-level class.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Main Objective</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To help understand this task better, we will be focusing our discussion around the <a href="http://vision.stanford.edu/aditya86/ImageNetDogs/" target="_self">Stanford Dogs</a> dataset. This dataset, as the name suggests, contains images of different dog breeds. In this case, the task is to identify each of those dog breeds. Hence, the high-level concept is the dog itself, while the task is to categorize different subconcepts or subclasses — in this case, breeds — correctly.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We will be leveraging the dataset available through <a href="https://www.kaggle.com/c/dog-breed-identification/data" target="_self">Kaggle</a> available <a href="https://www.kaggle.com/c/dog-breed-identification/data" target="_self">here</a>. We will only be using the train dataset since it has labeled data. This dataset contains around 10,000 labeled images of 120 different dog breeds. Thus our task is to build a fine-grained 120-class classification model to categorize 120 different dog breeds. Definitely challenging!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Loading and Exploring the Dataset</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s take a look at how our dataset looks like by loading the data and viewing a sample batch of images.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import scipy as sp
import numpy as np
import pandas as pd
import PIL
import scipy.ndimage as spi
import matplotlib.pyplot as plt
%matplotlib inline
np.random.seed(42)

DATASET_PATH = r'../kaggle_train/'
LABEL_PATH = r'../kaggle_labels/labels.csv'

# This function prepares a random batch from the dataset
def load_batch(dataset_df, batch_size = 25):
    batch_df = dataset_df.loc[np.random.permutation(np.arange(0,
                                                              len(dataset_df)))[:batch_size],:]
    return batch_df
    
# This function plots sample images in specified size and in defined grid
def plot_batch(images_df, grid_width, grid_height, im_scale_x, im_scale_y):
    f, ax = plt.subplots(grid_width, grid_height)
    f.set_size_inches(12, 12)
    
    img_idx = 0
    for i in range(0, grid_width):
        for j in range(0, grid_height):
            ax[i][j].axis('off')
            ax[i][j].set_title(images_df.iloc[img_idx]['breed'][:10])
            ax[i][j].imshow(sp.misc.imresize(spi.imread(DATASET_PATH + images_df.iloc[img_idx]['id']+'.jpg'),
                                             (im_scale_x,im_scale_y)))
            img_idx += 1
            
    plt.subplots_adjust(left=0, bottom=0, right=1, top=1, wspace=0, hspace=0.25)

# load dataset and visualize sample data
dataset_df = pd.read_csv(LABEL_PATH)
batch_df = load_batch(dataset_df, batch_size=36)
plot_batch(batch_df, grid_width=6, grid_height=6,
           im_scale_x=64, im_scale_y=64)
    </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*wXTapW8YIN5oMvplc21t_Q.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*wXTapW8YIN5oMvplc21t_Q.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*wXTapW8YIN5oMvplc21t_Q.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*wXTapW8YIN5oMvplc21t_Q.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*wXTapW8YIN5oMvplc21t_Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*wXTapW8YIN5oMvplc21t_Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*wXTapW8YIN5oMvplc21t_Q.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*wXTapW8YIN5oMvplc21t_Q.png 640w, https://miro.medium.com/v2/resize:fit:720/1*wXTapW8YIN5oMvplc21t_Q.png 720w, https://miro.medium.com/v2/resize:fit:750/1*wXTapW8YIN5oMvplc21t_Q.png 750w, https://miro.medium.com/v2/resize:fit:786/1*wXTapW8YIN5oMvplc21t_Q.png 786w, https://miro.medium.com/v2/resize:fit:828/1*wXTapW8YIN5oMvplc21t_Q.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*wXTapW8YIN5oMvplc21t_Q.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*wXTapW8YIN5oMvplc21t_Q.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*wXTapW8YIN5oMvplc21t_Q.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Sample dog breed images and labels</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">From the preceding grid, we can see that there is a lot of variation, in terms of resolution, lighting, zoom levels, and so on, available along with the fact that images do not just contain just a single dog but other dogs and surrounding items as well. This is going to be a challenge!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Building Datasets</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s start by looking at how the dataset labels look like to get an idea of what we are dealing with.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>data_labels = pd.read_csv('labels/labels.csv')<br/>target_labels = data_labels['breed']</strong></span><span><strong>print(len(set(target_labels)))<br/>data_labels.head()</strong></span><span><strong>------------------<br/>120</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:46%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 354px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*x0ztSuZirCc6Ya3UmFY0ag.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*x0ztSuZirCc6Ya3UmFY0ag.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*x0ztSuZirCc6Ya3UmFY0ag.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*x0ztSuZirCc6Ya3UmFY0ag.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*x0ztSuZirCc6Ya3UmFY0ag.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*x0ztSuZirCc6Ya3UmFY0ag.png 1100w, https://miro.medium.com/v2/resize:fit:708/format:webp/1*x0ztSuZirCc6Ya3UmFY0ag.png 708w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 354px" srcset="https://miro.medium.com/v2/resize:fit:640/1*x0ztSuZirCc6Ya3UmFY0ag.png 640w, https://miro.medium.com/v2/resize:fit:720/1*x0ztSuZirCc6Ya3UmFY0ag.png 720w, https://miro.medium.com/v2/resize:fit:750/1*x0ztSuZirCc6Ya3UmFY0ag.png 750w, https://miro.medium.com/v2/resize:fit:786/1*x0ztSuZirCc6Ya3UmFY0ag.png 786w, https://miro.medium.com/v2/resize:fit:828/1*x0ztSuZirCc6Ya3UmFY0ag.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*x0ztSuZirCc6Ya3UmFY0ag.png 1100w, https://miro.medium.com/v2/resize:fit:708/1*x0ztSuZirCc6Ya3UmFY0ag.png 708w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/354/1*x0ztSuZirCc6Ya3UmFY0ag.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">What we do next is to add in the exact image path for each image present in the disk using the following code. This will help us in easily locating and loading up the images during model training.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>train_folder = 'train/'
data_labels['image_path'] = data_labels.apply(lambda row: (train_folder + row["id"] + ".jpg" ), 
                                              axis=1)
data_labels.head()</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:86%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 633px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*lNgE8Ww9MJOxkH2SAk_mew.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*lNgE8Ww9MJOxkH2SAk_mew.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*lNgE8Ww9MJOxkH2SAk_mew.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*lNgE8Ww9MJOxkH2SAk_mew.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*lNgE8Ww9MJOxkH2SAk_mew.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lNgE8Ww9MJOxkH2SAk_mew.png 1100w, https://miro.medium.com/v2/resize:fit:1266/format:webp/1*lNgE8Ww9MJOxkH2SAk_mew.png 1266w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 633px" srcset="https://miro.medium.com/v2/resize:fit:640/1*lNgE8Ww9MJOxkH2SAk_mew.png 640w, https://miro.medium.com/v2/resize:fit:720/1*lNgE8Ww9MJOxkH2SAk_mew.png 720w, https://miro.medium.com/v2/resize:fit:750/1*lNgE8Ww9MJOxkH2SAk_mew.png 750w, https://miro.medium.com/v2/resize:fit:786/1*lNgE8Ww9MJOxkH2SAk_mew.png 786w, https://miro.medium.com/v2/resize:fit:828/1*lNgE8Ww9MJOxkH2SAk_mew.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*lNgE8Ww9MJOxkH2SAk_mew.png 1100w, https://miro.medium.com/v2/resize:fit:1266/1*lNgE8Ww9MJOxkH2SAk_mew.png 1266w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/633/1*lNgE8Ww9MJOxkH2SAk_mew.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s now time to prepare our train, test and validation datasets. We will leverage the following code to help us build these datasets!</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from sklearn.model_selection import train_test_split
from keras.preprocessing.image import img_to_array, load_img

# load dataset
train_data = np.array([img_to_array(load_img(img, target_size=(299, 299)))
                           for img in data_labels['image_path'].values.tolist()
                      ]).astype('float32')

# create train and test datasets
x_train, x_test, y_train, y_test = train_test_split(train_data, target_labels, 
                                                    test_size=0.3, 
                                                    stratify=np.array(target_labels), 
                                                    random_state=42)

# create train and validation datasets
x_train, x_val, y_train, y_val = train_test_split(x_train, y_train, 
                                                  test_size=0.15, 
                                                  stratify=np.array(y_train), 
                                                  random_state=42)

print('Initial Dataset Size:', train_data.shape)
print('Initial Train and Test Datasets Size:', x_train.shape, x_test.shape)
print('Train and Validation Datasets Size:', x_train.shape, x_val.shape)
print('Train, Test and Validation Datasets Size:', x_train.shape, x_test.shape, x_val.shape)
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Initial Dataset Size: (10222, 299, 299, 3)</strong></span><span><strong>Initial Train and Test Datasets Size: (7155, 299, 299, 3) (3067, 299, 299, 3)</strong></span><span><strong>Train and Validation Datasets Size: (6081, 299, 299, 3) (1074, 299, 299, 3)</strong></span><span><strong>Train, Test and Validation Datasets Size: (6081, 299, 299, 3) (3067, 299, 299, 3) (1074, 299, 299, 3)</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We also need to convert the text class labels to one-hot encoded labels, else our model will not run.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>y_train_ohe = pd.get_dummies(y_train.reset_index(drop=True)).as_matrix()
y_val_ohe = pd.get_dummies(y_val.reset_index(drop=True)).as_matrix()
y_test_ohe = pd.get_dummies(y_test.reset_index(drop=True)).as_matrix()

y_train_ohe.shape, y_test_ohe.shape, y_val_ohe.shape</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>((6081, 120), (3067, 120), (1074, 120))</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Everything looks to be in order. Now, if you remember from the previous case study, image augmentation is a great way to deal with having less data per class. In this case, we have a total of 10222 samples and 120 classes. This means, an average of only 85 images per class! We do this using the <code>ImageDataGenerator</code> utility from <code>keras.</code></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from keras.preprocessing.image import ImageDataGenerator
BATCH_SIZE = 32

# Create train generator.
train_datagen = ImageDataGenerator(rescale=1./255, 
                                   rotation_range=30, 
                                   width_shift_range=0.2,
                                   height_shift_range=0.2, 
                                   horizontal_flip = 'true')
train_generator = train_datagen.flow(x_train, y_train_ohe, shuffle=False, 
                                     batch_size=BATCH_SIZE, seed=1)
                                     
# Create validation generator
val_datagen = ImageDataGenerator(rescale = 1./255)
val_generator = train_datagen.flow(x_val, y_val_ohe, shuffle=False, 
                                   batch_size=BATCH_SIZE, seed=1)                                     </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that we have our data ready, the next step is to actually build our deep learning model!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Transfer Learning with Google’s Inception V3 Model</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now that our datasets are ready, let’s get started with the modeling process. We already know how to build a deep convolutional network from scratch. We also understand the amount of fine-tuning required to achieve good performance. For this task, we will be utilizing concepts of transfer learning. A pre-trained model is the basic ingredient required to begin with the task of transfer learning.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In this case study, we will concentrate on utilizing a pre-trained model as a feature extractor. We know, a deep learning model is basically a stacking of interconnected layers of neurons, with the final one acting as a classifier. This architecture enables deep neural networks to capture different features at different levels in the network. Thus, we can utilize this property to use them as feature extractors. This is made possible by removing the final layer or using the output from the penultimate layer. This output from the penultimate layer is then fed into an additional set of layers, followed by a classification layer. We will be using the <a href="https://www.kaggle.com/google-brain/inception-v3/home" target="_self">Inception V3 Model</a> from Google as our pre-trained model.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>from keras.models import Model
from keras.optimizers import Adam
from keras.layers import GlobalAveragePooling2D
from keras.layers import Dense
from keras.applications.inception_v3 import InceptionV3
from keras.utils.np_utils import to_categorical

# Get the InceptionV3 model so we can do transfer learning
base_inception = InceptionV3(weights='imagenet', include_top=False, 
                             input_shape=(299, 299, 3))
                             
# Add a global spatial average pooling layer
out = base_inception.output
out = GlobalAveragePooling2D()(out)
out = Dense(512, activation='relu')(out)
out = Dense(512, activation='relu')(out)
total_classes = y_train_ohe.shape[1]
predictions = Dense(total_classes, activation='softmax')(out)

model = Model(inputs=base_inception.input, outputs=predictions)

# only if we want to freeze layers
for layer in base_inception.layers:
    layer.trainable = False
    
# Compile 
model.compile(Adam(lr=.0001), loss='categorical_crossentropy', metrics=['accuracy']) 
model.summary()


'''
Layer (type)                    Output Shape         Param #     Connected to                     
==================================================================================================
input_1 (InputLayer)            (None, 299, 299, 3)  0                                            
__________________________________________________________________________________________________
conv2d_1 (Conv2D)               (None, 149, 149, 32) 864         input_1[0][0]                    
__________________________________________________________________________________________________
batch_normalization_1 (BatchNor (None, 149, 149, 32) 96          conv2d_1[0][0]                   
__________________________________________________________________________________________________
activation_1 (Activation)       (None, 149, 149, 32) 0           batch_normalization_1[0][0]      
__________________________________________________________________________________________________
...
...
...
mixed10 (Concatenate)           (None, 8, 8, 2048)   0           activation_86[0][0]              
                                                                 mixed9_1[0][0]                   
                                                                 concatenate_2[0][0]              
                                                                 activation_94[0][0]              
__________________________________________________________________________________________________
global_average_pooling2d_1 (Glo (None, 2048)         0           mixed10[0][0]                    
__________________________________________________________________________________________________
dense_1 (Dense)                 (None, 512)          1049088     global_average_pooling2d_1[0][0] 
__________________________________________________________________________________________________
dense_2 (Dense)                 (None, 512)          262656      dense_1[0][0]                    
__________________________________________________________________________________________________
dense_3 (Dense)                 (None, 120)          61560       dense_2[0][0]                    
==================================================================================================
Total params: 23,176,088
Trainable params: 1,373,304
Non-trainable params: 21,802,784
__________________________________________________________________________________________________
'''</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Based on the previous output, you can clearly see that the Inception V3 model is huge with a lot of layers and parameters. Let’s start training our model now. We train the model using the <code>fit_generator(...)</code> method to leverage the data augmentation prepared in the previous step. We set the batch size to <code>32</code>, and train the model for 15 epochs.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># Train the model
batch_size = BATCH_SIZE
train_steps_per_epoch = x_train.shape[0] // batch_size
val_steps_per_epoch = x_val.shape[0] // batch_size

history = model.fit_generator(train_generator,
                              steps_per_epoch=train_steps_per_epoch,
                              validation_data=val_generator,
                              validation_steps=val_steps_per_epoch,
                              epochs=15, verbose=1)</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Epoch 1/15<br/>190/190 - 155s 816ms/step - loss: 4.1095 - acc: 0.2216 - val_loss: 2.6067 - val_acc: 0.5748<br/>Epoch 2/15<br/>190/190 - 159s 836ms/step - loss: 2.1797 - acc: 0.5719 - val_loss: 1.0696 - val_acc: 0.7377<br/>Epoch 3/15<br/>190/190 - 155s 815ms/step - loss: 1.3583 - acc: 0.6814 - val_loss: 0.7742 - val_acc: 0.7888<br/>...<br/>...<br/>Epoch 14/15<br/>190/190 - 156s 823ms/step - loss: 0.6686 - acc: 0.8030 - val_loss: 0.6745 - val_acc: 0.7955<br/>Epoch 15/15<br/>190/190 - 161s 850ms/step - loss: 0.6276 - acc: 0.8194 - val_loss: 0.6579 - val_acc: 0.8144</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*H_8o5QZ6qxNMsUJzgT9wlQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*H_8o5QZ6qxNMsUJzgT9wlQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Performance of our Inception V3 Model (feature extractor) on the Dog Breed Dataset</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The model achieves a commendable performance of more than <strong>80%</strong> accuracy on both train and validation sets within just 15 epochs. The plot on the right-hand side shows how quickly the loss drops and converges to around <code>0.5</code>. This is a clear example of how powerful, yet simple, transfer learning can be.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Evaluating our Deep Learning Model on Test Data</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Training and validation performance is pretty good, but how about performance on unseen data? Since we already divided our original dataset into three separate portions. The important thing to remember here is that the test dataset has to undergo similar pre-processing as the training dataset. To account for this, we scale the test dataset as well, before feeding it into the function.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre># scaling test features
x_test /= 255.

# getting model predictions
test_predictions = model.predict(x_test)
predictions = pd.DataFrame(test_predictions, columns=labels_ohe_names.columns)
predictions = list(predictions.idxmax(axis=1))
test_labels = list(y_test)

# evaluate model performance
import model_evaluation_utils as meu
meu.get_metrics(true_labels=test_labels, 
                predicted_labels=predictions)
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span><strong>Accuracy: 0.864<br/>Precision: 0.8783<br/>Recall: 0.864<br/>F1 Score: 0.8591</strong></span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The model achieves an amazing <strong>86%</strong> accuracy as well as F1-score on the test dataset. Given that we just trained for 15 epochs with minimal inputs from our side, transfer learning helped us achieve a pretty decent classifier. We can also check the per-class classification metrics using the following code.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>meu.display_classification_report(true_labels=test_labels, 
                                  predicted_labels=predictions, 
                                  classes=list(labels_ohe_names.columns))
                                  

'''
--------------------------------------------------------------------------
                                  precision    recall  f1-score   support

                 affenpinscher       0.92      0.92      0.92        24
                  afghan_hound       1.00      0.97      0.99        35
           african_hunting_dog       1.00      1.00      1.00        26
                      airedale       0.91      0.94      0.92        32
american_staffordshire_terrier       0.59      0.77      0.67        22
                   appenzeller       0.94      0.70      0.80        23
            australian_terrier       0.90      0.61      0.73        31
                       basenji       1.00      0.79      0.88        33
                        basset       0.83      0.96      0.89        25
                        beagle       0.81      0.97      0.88        31
            bedlington_terrier       1.00      1.00      1.00        27
          bernese_mountain_dog       0.85      1.00      0.92        34
       black-and-tan_coonhound       0.83      0.87      0.85        23
                                     ..............
                                     ..............
                                     ..............
         elsh_springer_spaniel       0.78      0.75      0.77        24
   west_highland_white_terrier       0.91      0.88      0.89        24
                       whippet       0.86      0.64      0.73        28
       wire-haired_fox_terrier       0.81      0.68      0.74        25
             yorkshire_terrier       0.81      0.84      0.82        25

                   avg / total       0.88      0.86      0.86      3067
'''                   </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can also visualize model predictions in a visually appealing way using the following code.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>grid_width = 5
grid_height = 5
f, ax = plt.subplots(grid_width, grid_height)
f.set_size_inches(15, 15)
batch_size = 25
dataset = x_test

labels_ohe_names = pd.get_dummies(target_labels, sparse=True)
labels_ohe = np.asarray(labels_ohe_names)
label_dict = dict(enumerate(labels_ohe_names.columns.values))
model_input_shape = (1,)+model.get_input_shape_at(0)[1:]
random_batch_indx = np.random.permutation(np.arange(0,len(dataset)))[:batch_size]

img_idx = 0
for i in range(0, grid_width):
    for j in range(0, grid_height):
        actual_label = np.array(y_test)[random_batch_indx[img_idx]]
        prediction = model.predict(dataset[random_batch_indx[img_idx]].reshape(model_input_shape))[0]
        label_idx = np.argmax(prediction)
        predicted_label = label_dict.get(label_idx)
        conf = round(prediction[label_idx], 2)
        ax[i][j].axis('off')
        ax[i][j].set_title('Actual: '+actual_label+'\nPred: '+predicted_label + '\nConf: ' +str(conf))
        ax[i][j].imshow(dataset[random_batch_indx[img_idx]])
        img_idx += 1

plt.subplots_adjust(left=0, bottom=0, right=1, top=1, wspace=0.5, hspace=0.55)    </pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*xRJLFQUEzIqgpTPQ1mSmAQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*xRJLFQUEzIqgpTPQ1mSmAQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Model predictions on test data for dog breeds!</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The preceding image presents a visual proof of the model’s performance. As we can see, in most of the cases, the model is not only predicting the correct dog breed, it also does so with very high confidence.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Transfer Learning Advantages</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We have already covered several advantages of transfer learning in some way or the other in the previous sections. Typically transfer learning enables us to build more robust models which can perform a wide variety of tasks.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Helps solve complex real-world problems with several constraints</li><li class="ff3" style="font-size:22px;">Tackle problems like having little or almost no labeled data availability</li><li class="ff3" style="font-size:22px;">Ease of transfering knowledge from one model to another based on domains and tasks</li><li class="ff3" style="font-size:22px;">Provides a path towards achieving Artificial General Intelligence some day in the future!</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Transfer Learning Challenges</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Transfer learning has immense potential and is a commonly required enhancement for existing learning algorithms. Yet, there are certain pertinent issues related to transfer learning that need more research and exploration. Apart from the difficulty of answering the questions of what, when, and how to transfer, negative transfer and transfer bounds present major challenges.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><strong>Negative Transfer:</strong> The cases we have discussed so far talk about improvements in target tasks based on knowledge transfer from the source task. There are cases when transfer learning can lead to a drop in performance. Negative transfer refers to scenarios where the transfer of knowledge from the source to the target does not lead to any improvement, but rather causes a drop in the overall performance of the target task. There can be various reasons for negative transfer, such as cases when the source task is not sufficiently related to the target task, or if the transfer method could not leverage the relationship between the source and target tasks very well. Avoiding negative transfer is very important and requires careful investigation. In their work, Rosenstien and their co-authors present empirically how brute-force transfer degrades performance in target tasks when the source and target are too dissimilar. Bayesian approaches by Bakker and their co-authors, along with other techniques exploring clustering-based solutions to identify relatedness, are being researched to avoid negative transfers.</li><li class="ff3" style="font-size:22px;"><strong>Transfer Bounds:</strong> Quantifying the transfer in transfer learning is also very important, that affects the quality of the transfer and its viability. To gauge the amount for the transfer, Hassan Mahmud and their co-authors used Kolmogorov complexity to prove certain theoretical bounds to analyze transfer learning and measure relatedness between tasks. Eaton and their co-authors presented a novel graph-based approach to measure knowledge transfer. Detailed discussions of these techniques are outside the scope of this article. Readers are encouraged to explore more on these topics using the publications outlined in this section!</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Conclusion & Future Scope</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This concludes perhaps one of my longest articles with a comprehensive coverage about transfer learning concepts, strategies, focus on deep transfer learning, challenges and advantages. We also covered two hands-on real-world case studies to give you a good idea of how to implement these techniques. If you are reading this section, kudos on reading through this pretty long article!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Transfer learning is definitely going to be one of the key drivers for machine learning and deep learning success in mainstream adoption in the industry. I definitely hope to see more pre-trained models and innovative case studies which leverage this concept and methodology. For some of my future articles, you can definitely expect some of the following.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Transfer Learning for NLP</li><li class="ff3" style="font-size:22px;">Transfer Learning on Audio Data</li><li class="ff3" style="font-size:22px;">Transfer Learning for Generative Deep Learning</li><li class="ff3" style="font-size:22px;">More complex Computer Vision problems like Image Captioning</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s hope for more success stories around transfer learning and deep learning which enable us to build more intelligent systems to make the world a better place and drive our own personal goals!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">All of the content above has been adopted in some form from my recent book, <a href="https://github.com/dipanjanS/hands-on-transfer-learning-with-python" target="_self">‘Hands on Transfer Learning with Python’</a><strong> </strong>which is available on the <a href="https://www.packtpub.com/big-data-and-business-intelligence/hands-transfer-learning-python" target="_self">Packt</a> website as well as on <a href="https://www.amazon.com/Hands-Transfer-Learning-Python-TensorFlow-ebook/dp/B07CB455BF/ref=zg_bsnr_16977170011_71?_encoding=UTF8&psc=1&refRID=3VS8TYPZGN776BFEZJVG" target="_self">Amazon</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://www.amazon.com/Hands-Transfer-Learning-Python-TensorFlow-ebook/dp/B07CB455BF/ref=zg_bsnr_16977170011_71?_encoding=UTF8&psc=1&refRID=3VS8TYPZGN776BFEZJVG"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">Hands-On Transfer Learning with Python: Implement advanced deep learning and neural network models…</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">Deep learning simplified by taking supervised, unsupervised, and reinforcement learning to the next level using the…</h3><p>www.amazon.com</p></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Don’t have the time to read through the book or can’t spend right now? Don’t worry, you can still access all the wonderful examples and case studies we implemented on our <a href="https://github.com/dipanjanS/hands-on-transfer-learning-with-python" target="_self">GitHub repository</a>!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://github.com/dipanjanS/hands-on-transfer-learning-with-python"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">dipanjanS/hands-on-transfer-learning-with-python</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">Deep learning simplified by transferring prior learning using the Python deep learning ecosystem …</h3><p>github.com</p></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A big shoutout goes to my co-authors <a href="https://www.linkedin.com/in/baliraghav" target="_self">Raghav</a> & <a href="https://www.linkedin.com/in/tamoghna-ghosh-3b741220" target="_self">Tamoghna</a> for working with me on the book which paved the way for this content!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thanks to Francois Chollet and his amazing book <a href="https://www.manning.com/books/deep-learning-with-python" target="_self">‘Deep Learning with Python’</a> for a lot of the motivation and inspiration behind some of the examples used in this article.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://www.manning.com/books/deep-learning-with-python"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">Deep Learning with Python</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">The clearest explanation of deep learning I have come across…it was a joy to read.</h3><p>www.manning.com</p></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Have feedback for me? Or interested in working with me on research, data science, artificial intelligence or even publishing an article on <a href="https://towardsdatascience.com/" target="_self">TDS</a>? You can reach out to me on <a href="https://www.linkedin.com/in/dipanzan/" target="_self">LinkedIn</a><strong>.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://www.linkedin.com/in/dipanzan/"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">Dipanjan Sarkar — Data Scientist — Intel Corporation | LinkedIn</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">View Dipanjan Sarkar’s profile on LinkedIn, the world’s largest professional community. Dipanjan has 6 jobs listed on…</h3><p>www.linkedin.com</p></a></div></div></div></div></section><br><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thanks to <a href="https://www.linkedin.com/in/durba-dutta-bhaumik-44532ab1/" target="_self">Durba</a> for editing this article.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
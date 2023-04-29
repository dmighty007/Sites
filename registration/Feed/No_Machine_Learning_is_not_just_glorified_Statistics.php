<!DOCTYPE html>
                <html>
                <head>
                    <title>No, Machine Learning is not just glorified Statistics</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/no-machine-learning-is-not-just-glorified-statistics-26d3952234e3"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@joeddav?source=post_page-----26d3952234e3--------------------------------">Author : Joe Davison</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>No, Machine Learning is not just glorified Statistics</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*x7P7gqjo8k2_bj2rTQWAfg.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">original comic by <a href="https://www.instagram.com/sandserifcomics/" target="_self">sandserif</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This meme has been all over social media lately, producing appreciative chuckles across the internet as the hype around deep learning begins to subside. The sentiment that machine learning is really nothing to get excited about, or that it’s just a redressing of age-old statistical techniques, is growing increasingly ubiquitous; the trouble is it isn’t true.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I get it — it’s not fashionable to be part of the overly enthusiastic, hype-drunk crowd of deep learning evangelists. ML experts who in 2013 preached deep learning from the rooftops now use the term only with a hint of chagrin, preferring instead to downplay the power of modern neural networks lest they be associated with the scores of people that still seem to think that <code>import keras</code> is the leap for every hurdle, and that they, in knowing it, have some tremendous advantage over their competition.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">While it’s true that deep learning has outlived its usefulness as a buzzword, <a href="https://www.facebook.com/yann.lecun/posts/10155003011462143" target="_self">as Yann LeCun put it</a>, this overcorrection of attitudes has yielded an unhealthy skepticism about the progress, future, and usefulness of artificial intelligence. This is most clearly seen by the influx of discussion about a looming <em>AI winter</em>, in which AI research is prophesied to stall for many years as it has in decades past.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:80%;"><iframe  scrolling="auto" width="500.0" height="185.0" frameborder="0" src="https://cdn.embedly.com/widgets/media.html?type=text%2Fhtml&key=a19fcc184b9711e1b4764040d3dc5c07&schema=twitter&url=https%3A//twitter.com/ylecun/status/1007099197336760320&image=https%3A//i.embed.ly/1/image%3Furl%3Dhttps%253A%252F%252Fpbs.twimg.com%252Fprofile_images%252F2387565623%252F7gew8nz1z7ik1ch148so_400x400.jpeg%26key%3Da19fcc184b9711e1b4764040d3dc5c07" allowfullscreen=""></iframe></div><br><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The purpose of this post isn’t to argue against an AI winter, however. It is also not to argue that one academic group deserves the credit for deep learning over another; rather, it is to make the case that credit <strong>is</strong> due; that the developments seen go beyond big computers and nicer datasets; that machine learning, with the recent success in deep neural networks and related work, represents the world’s foremost frontier of technological progress.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Machine Learning != Statistics</h4></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4"><mark>“When you’re fundraising, it’s AI. When you’re hiring, it’s ML. When you’re implementing, it’s logistic regression.”</mark>—everyone on Twitter ever</p></blockquote></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The main point to address, and the one that provides the title for this post, is that machine learning is not just glorified statistics—the same-old stuff, just with bigger computers and a fancier name. This notion comes from statistical concepts and terms which are prevalent in machine learning such as <em>regression</em>, <em>weights, biases, models, </em>etc. Additionally, many models approximate what can generally be considered statistical functions: the softmax output of a classification model consists of logits, making the process of training an image classifier a <em>logistic regression</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Though this line of thinking is technically correct, reducing machine learning as a whole to nothing more than a subsidiary of statistics is quite a stretch. In fact, the comparison doesn’t make much sense. Statistics is the field of mathematics which deals with the understanding and interpretation of data. Machine learning is nothing more than a class of computational algorithms (hence its emergence from computer science). In many cases, these algorithms are completely useless in aiding with the understanding of data and assist only in certain types of uninterpretable predictive modeling. In some cases, such as in reinforcement learning, the algorithm may not use a pre-existing dataset at all. Plus, in the case of image processing, referring to images as <em>instances</em> of a dataset with pixels as <em>features</em> was a bit of a stretch to begin with.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The point, of course, is not that computer scientists should get all the credit or that statisticians should not; like any field of research, the contributions that led to today’s success came from a variety of academic disciplines, statistics and mathematics being first among them. However, in order to correctly evaluate the powerful impact and potential of machine learning methods, it is important to first dismantle the misguided notion that modern developments in artificial intelligence are nothing more than age-old statistical techniques with bigger computers and better datasets.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>Machine Learning Does Not Require An Advanced Knowledge of Statistics</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>Hear me out.</em> When I was learning the ropes of machine learning, I was lucky enough to take a fantastic class dedicated to deep learning techniques that was offered as part of my undergraduate computer science program. One of our assigned projects was to implement and train a Wasserstein GAN in TensorFlow.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">At this point, I had taken only an introductory statistics class that was a required general elective, and then promptly forgotten most of it. Needless to say, my statistical skills were not very strong. Yet, I was able to read and understand a paper on a state-of-the-art generative machine learning model, implement it from scratch, and generate quite convincing fake images of non-existent individuals by training it on the MS Celebs dataset.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Throughout the class, my fellow students and I successfully trained models for cancerous tissue image segmentation, neural machine translation, character-based text generation, and image style transfer, all of which employed cutting-edge machine learning techniques invented only in the past few years.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Yet, if you had asked me, or most of the students in that class, how to calculate the variance of a population, or to define marginal probability, you likely would have gotten blank stares.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That seems a bit inconsistent with the claim that AI is just a rebranding of age-old statistical techniques.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">True, an ML expert probably has a stronger stats foundation than a CS undergrad in a deep learning class. Information theory, in general, requires a strong understanding of data and probability, and I would certainly advise anyone interested in becoming a Data Scientist or Machine Learning Engineer to develop a deep intuition of statistical concepts. But the point remains: <em>If machine learning is a subsidiary of statistics, how could someone with virtually no background in stats develop a deep understanding of cutting-edge ML concepts?</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It should also be acknowledged that many machine learning algorithms require a stronger background in statistics and probability than do most neural network techniques, but even these approaches are often referred to as <a href="http://www.stat.cmu.edu/~larry/=sml/" target="_self">statistical machine learning</a><em> </em>or<em> </em><a href="https://lagunita.stanford.edu/courses/HumanitiesSciences/StatLearning/Winter2016/about" target="_self">statistical learning</a>, as if to distinguish themselves from the regular, less statistical kind. Furthermore, most of the hype-fueling innovation in machine learning in recent years has been in the domain of neural networks, so the point is irrelevant.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Of course, machine learning doesn’t live in a world by itself. Again, in the real world, anyone hoping to do cool machine learning stuff is probably working on data problems of a variety of types, and therefore needs to have a strong understanding of statistics as well. None of this is to say that ML never uses or builds on statistical concepts either, but that doesn’t mean they’re the same thing.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>Machine Learning = Representation + Evaluation + Optimization</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To be fair to myself and my classmates, we all had a strong foundation in algorithms, computational complexity, optimization approaches, calculus, linear algebra, and even some probability. All of these, I would argue, are more relevant to the problems we were tackling than knowledge of advanced statistics.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Machine learning is a class of computational algorithms which iteratively “learn” an approximation to some function. Pedro Domingos, a professor of computer science at the University of Washington, <a href="https://homes.cs.washington.edu/~pedrod/papers/cacm12.pdf" target="_self">laid out three components</a> that make up a machine learning algorithm: representation, evaluation, and optimization.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Representation </strong>involves the transformation of inputs from one space to another more useful space which can be more easily interpreted. Think of this in the context of a Convolutional Neural Network. Raw pixels are not useful for distinguishing a dog from a cat, so we transform them to a more useful representation (e.g., logits from a softmax output) which can be interpreted and evaluated.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Evaluation</strong> is essentially the loss function. How effectively did your algorithm transform your data to a more useful space? How closely did your softmax output resemble your one-hot encoded labels (classification)? Did you correctly predict the next word in the unrolled text sequence (text RNN)? How far did your latent distribution diverge from a unit Gaussian (VAE)? These questions tell you how well your representation function is working; more importantly, they define <em>what it will learn to do.</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Optimization</strong> is the last piece of the puzzle. Once you have the evaluation component, you can <strong>optimize</strong> the <strong>representation function</strong><em> </em>in order to improve your <strong>evaluation metric</strong>. In neural networks, this usually means using some variant of stochastic gradient descent to update the weights and biases of your network according to some defined loss function. And voila! You have the world’s best image classifier (at least, if you’re Geoffrey Hinton in 2012, you do).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When training an image classifier, it’s quite irrelevant that the learned representation function has logistic outputs, except for in defining an appropriate loss function. Borrowing statistical terms like <em>logistic regression</em> do give us useful vocabulary to discuss our model space, but they do not redefine them from problems of optimization to problems of data understanding.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Aside: The term artificial intelligence is stupid.</strong><em> An AI problem is just a problem that computers aren’t good at solving yet. In the 19th century, </em><a href="https://books.google.com/books?id=bSM_AQAAMAAJ&pg=PA308&dq=%22Instead+of+simply+reproducing+the+operations+of+man%27s+intelligence,+the+arithmometer+relieves+that+intelligence+from+the+necessity+of+making+the+operations.+Instead+of+repeating+responses+dictated+to+it,+this+instrument+instantaneously+dictates+the+proper+answer+to+the+man+who+asks+it+a+question.+It+is+not+matter+producing+material+effects,+but+matter+which+thinks,+reflects,+reasons%22&hl=en&sa=X&ved=0ahUKEwjxwdSqzvTbAhVjj1QKHa4vDvcQ6AEILjAB#v=onepage&q=%22Instead%20of%20simply%20reproducing%20the%20operations%20of%20man's%20intelligence%2C%20the%20arithmometer%20relieves%20that%20intelligence%20from%20the%20necessity%20of%20making%20the%20operations.%20Instead%20of%20repeating%20responses%20dictated%20to%20it%2C%20this%20instrument%20instantaneously%20dictates%20the%20proper%20answer%20to%20the%20man%20who%20asks%20it%20a%20question.%20It%20is%20not%20matter%20producing%20material%20effects%2C%20but%20matter%20which%20thinks%2C%20reflects%2C%20reasons%22&f=false" target="_self">a mechanical calculator was considered intelligent (link).</a><em> Now that the term has been associated so strongly with deep learning, we’ve started saying artificial general intelligence (AGI) to refer to anything more intelligent than an advanced pattern matching mechanism. Yet, we still don’t even have a consistent definition or understanding of general intelligence. The only thing the term AI does is inspire fear of a so-called “singularity” or a terminator-like killer robot. I wish we could stop using such an empty, sensationalized term to refer to real technological techniques.</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Techniques For Deep Learning</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Further defying the purported statistical nature of deep learning is, well, almost all of the internal workings of deep neural networks. Fully connected nodes consist of weights and biases, sure, but what about convolutional layers? Rectifier activations? Batch normalization? Residual layers? Dropout? Memory and attention mechanisms?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">These innovations have been central to the development of high-performing deep nets, and yet they don’t remotely line up with traditional statistical techniques (probably because they are not statistical techniques at all). If you don’t believe me, try telling a statistician that your model was overfitting, and ask them if they think it’s a good idea to randomly drop half of your model’s 100 million parameters.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And let’s not even talk about model interpretability.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Regression Over 100 Million Variables — No Problem?</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let me also point out the difference between deep nets and traditional statistical models by their scale. Deep neural networks are huge. The VGG-16 ConvNet architecture, for example, <a href="http://cs231n.stanford.edu/slides/2017/cs231n_2017_lecture9.pdf" target="_self">has approximately 138 million parameters</a>. How do you think your average academic advisor would respond to a student wanting to perform a multiple regression of over <em>100 million variables</em>? The idea is ludicrous. That’s because training VGG-16 is not multiple regression — it’s machine learning.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">New Frontiers</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You’ve probably spent the last several years around endless papers, posts, and articles preaching the cool things that machine learning can now do, so I won’t spend too much time on it. I will remind you, however, that not only is deep learning more than previous techniques, it has enabled to us address an <strong>entirely new class of problems.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Prior to 2012, problems involving unstructured and semi-structured data were challenging, at best. Trainable CNNs and LSTMs alone were a huge leap forward on that front. This has yielded considerable progress in fields such as computer vision, natural language processing, speech transcription, and has enabled huge improvement in technologies like face recognition, autonomous vehicles, and conversational AI.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s true that most machine learning algorithms ultimately involve fitting a model to data — from that vantage point, it is a statistical procedure. It’s also true that the space shuttle was ultimately just a flying machine with wings, and yet we don’t see memes mocking the excitement around NASA’s 20th century space exploration as an overhyped rebranding of the airplane.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As with space exploration, the advent of deep learning did not solve all of the world’s problems. There are still significant gaps to overcome in many fields, especially within “artificial intelligence”. That said, it has made a significant contribution to our ability to attack problems with complex unstructured data. Machine learning continues to represent the world’s frontier of technological progress and innovation. It’s much more than a crack in the wall with a shiny new frame.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Edit:</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Many have interpreted this article as a diss on the field of statistics, or as a betrayal of my own superficial understanding of machine learning. In retrospect, I regret directing so much attention on the differences in the ML vs. statistics perspectives rather on my central point: <strong>machine learning is not all hype</strong>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let me be clear: statistics and machine learning are not unrelated by any stretch. Machine learning absolutely utilizes and builds on concepts in statistics, and statisticians rightly make use of machine learning techniques in their work. The distinction between the two fields is unimportant, and something I should not have focused so heavily on. Recently, I have been focusing on the idea of <em>Bayesian neural networks. </em>BNNs<em> </em>involve approximating a probability distribution over a neural network’s parameters given some prior belief. These techniques give a principled approach to uncertainty quantification and yield better-regularized predictions.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I would have to be an idiot in working on these problems to say I’m not “doing statistics”, and I won’t. The fields are not mutually exclusive, but that does not make them the same, and it certainly does not make either without substance or value. A mathematician could point to a theoretical physicist working on Quantum field theory and rightly say that she is doing math, but she might take issue if the mathematician asserted that her field of physics was in fact nothing more than over-hyped math.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So it is with the computational sciences: you may point your finger and say “they’re doing statistics”, and “they” would probably agree. Statistics is invaluable in machine learning research and many statisticians are at the forefront of that work. But ML has developed 100-million parameter neural networks with residual connections and batch normalization, modern activations, dropout and numerous other techniques which have led to advances in several domains, particularly in sequential decision making and computational perception. It has found and made use of incredibly efficient optimization algorithms, taking advantage of automatic differentiation and running in parallel on blindingly fast and cheap GPU technology. All of this is accessible to anyone with even basic programming abilities thanks to high-level, elegantly simple tensor manipulation software. “Oh, AI is just logistic regression” is a bit of an under-sell, don’t ya think?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>If you’re like me and enjoy connecting with fellow machine learning aficionados, follow me on </em><a href="https://twitter.com/joeddav" target="_self">Twitter</a><em> and/or </em><a href="https://www.linkedin.com/in/josephdavison/" target="_self">LinkedIn</a><em>. If you’re looking for ML consulting work, reach out directly to </em><a href="mailto:josephddavison@gmail.com" target="_self">josephddavison@gmail.com</a><em>.</em></p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
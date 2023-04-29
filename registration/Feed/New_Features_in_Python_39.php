<!DOCTYPE html>
                <html>
                <head>
                    <title>New Features in Python 3.9</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://towardsdatascience.com/new-features-in-python39-2529765429fe"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://jamescalam.medium.com/?source=post_page-----2529765429fe--------------------------------">Author : James Briggs</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>New Features in Python 3.9</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">A look at the best features included in the latest iteration of Python</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*L1XrGRLGHUl1OgO7 640w, https://miro.medium.com/v2/resize:fit:720/0*L1XrGRLGHUl1OgO7 720w, https://miro.medium.com/v2/resize:fit:750/0*L1XrGRLGHUl1OgO7 750w, https://miro.medium.com/v2/resize:fit:786/0*L1XrGRLGHUl1OgO7 786w, https://miro.medium.com/v2/resize:fit:828/0*L1XrGRLGHUl1OgO7 828w, https://miro.medium.com/v2/resize:fit:1100/0*L1XrGRLGHUl1OgO7 1100w, https://miro.medium.com/v2/resize:fit:1400/0*L1XrGRLGHUl1OgO7 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*L1XrGRLGHUl1OgO7 640w, https://miro.medium.com/v2/resize:fit:720/0*L1XrGRLGHUl1OgO7 720w, https://miro.medium.com/v2/resize:fit:750/0*L1XrGRLGHUl1OgO7 750w, https://miro.medium.com/v2/resize:fit:786/0*L1XrGRLGHUl1OgO7 786w, https://miro.medium.com/v2/resize:fit:828/0*L1XrGRLGHUl1OgO7 828w, https://miro.medium.com/v2/resize:fit:1100/0*L1XrGRLGHUl1OgO7 1100w, https://miro.medium.com/v2/resize:fit:1400/0*L1XrGRLGHUl1OgO7 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*L1XrGRLGHUl1OgO7"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@pablothewarrior?utm_source=medium&utm_medium=referral" target="_self">Pablo Guerrero</a> on <a href="https://unsplash.com?utm_source=medium&utm_medium=referral" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s that time again, a new version of Python is imminent. Now in beta (3.9.0b3), we will soon be seeing the full release of Python 3.9.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Some of the newest features are incredibly exciting, and it will be amazing to see them used after release. We’ll cover the following:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><strong>Dictionary Union Operators</strong></li><li class="ff3" style="font-size:22px;"><strong>Type Hinting</strong></li><li class="ff3" style="font-size:22px;"><strong>Two New String Methods</strong></li><li class="ff3" style="font-size:22px;"><strong>New Python Parser</strong> — this is very cool</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s take a first look at these new features and how we use them.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>(</em><a href="https://medium.com/code-italia/novit%C3%A0-in-python-3-9-61fddf6bfef7" target="_self">Versione in Italiano</a><em>)</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Dictionary Unions</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One of my favorite new features with a sleek syntax. If we have two dictionaries <code>a</code> and <code>b</code> that we need to merge, we now use the <em>union operators</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We have the <strong>merge </strong>operator <code>|</code>:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>a = {1: <strong>'a'</strong>, 2: <strong>'b'</strong>, 3: <strong>'c'</strong>}<br/>b = {4: <strong>'d'</strong>, 5: <strong>'e'</strong>}</span><span>c = <strong>a | b</strong><br/>print(c)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><code>[Out]: {1: 'a', 2: 'b', 3: 'c', 4: 'd', 5: 'e'}</code></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And the <strong>update </strong>operator <code>|=</code>, which updates the original dictionary:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>a = {1: 'a', 2: 'b', 3: 'c'}<br/>b = {4: 'd', 5: 'e'}</span><span><strong>a |= b</strong><br/>print(a)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><code>[Out]: {1: 'a', 2: 'b', 3: 'c', 4: 'd', 5: 'e'}</code></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If our dictionaries share a <strong>common key</strong>, the key-value pair in the second dictionary will be used:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>a = {1: 'a', 2: 'b', 3: 'c', <strong>6: 'in both'</strong>}<br/>b = {4: 'd', 5: 'e', <strong>6: 'but different'</strong>}</span><span>print(a | b)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><code>[Out]: {1: 'a', 2: 'b', 3: 'c', 6: 'but different', 4: 'd', 5: 'e'}</code></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Dictionary Update with Iterables</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Another cool behavior of the <code>|=</code> operator is the ability to <strong>update </strong>the dictionary with new key-value pairs using an <strong>iterable</strong> object — like a list or generator:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>a = {'a': 'one', 'b': 'two'}<br/><strong>b = ((i, i**2) for i in range(3))</strong></span><span>a |= <strong>b</strong><br/>print(a)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><code>[Out]: {'a': 'one', 'b': 'two', 0: 0, 1: 1, 2: 4}</code></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If we attempt the same with the standard union operator <code>|</code> we will get a <code>TypeError</code> as it will only allow unions between <code>dict</code> types.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:74%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 552px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*hjJrDDymvrkVwtGDyifa4w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*hjJrDDymvrkVwtGDyifa4w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*hjJrDDymvrkVwtGDyifa4w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*hjJrDDymvrkVwtGDyifa4w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*hjJrDDymvrkVwtGDyifa4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*hjJrDDymvrkVwtGDyifa4w.png 1100w, https://miro.medium.com/v2/resize:fit:1104/format:webp/1*hjJrDDymvrkVwtGDyifa4w.png 1104w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 552px" srcset="https://miro.medium.com/v2/resize:fit:640/1*hjJrDDymvrkVwtGDyifa4w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*hjJrDDymvrkVwtGDyifa4w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*hjJrDDymvrkVwtGDyifa4w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*hjJrDDymvrkVwtGDyifa4w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*hjJrDDymvrkVwtGDyifa4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*hjJrDDymvrkVwtGDyifa4w.png 1100w, https://miro.medium.com/v2/resize:fit:1104/1*hjJrDDymvrkVwtGDyifa4w.png 1104w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/552/1*hjJrDDymvrkVwtGDyifa4w.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Type Hinting</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Python is dynamically typed, meaning we don’t need to specify datatypes in our code.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is okay, but sometimes it can be confusing, and suddenly Python’s flexibility becomes more of a nuisance than anything else.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Since 3.5, we could specify types, but it was pretty cumbersome. This update has truly changed that, let’s use an example:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*i-sP6OeH73BfGczYDouk2w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*i-sP6OeH73BfGczYDouk2w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*i-sP6OeH73BfGczYDouk2w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*i-sP6OeH73BfGczYDouk2w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*i-sP6OeH73BfGczYDouk2w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*i-sP6OeH73BfGczYDouk2w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*i-sP6OeH73BfGczYDouk2w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*i-sP6OeH73BfGczYDouk2w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*i-sP6OeH73BfGczYDouk2w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*i-sP6OeH73BfGczYDouk2w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*i-sP6OeH73BfGczYDouk2w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*i-sP6OeH73BfGczYDouk2w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*i-sP6OeH73BfGczYDouk2w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*i-sP6OeH73BfGczYDouk2w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*i-sP6OeH73BfGczYDouk2w.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">No type hinting (left) v type hinting with 3.9 (right)</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In our <code>add_int</code> function, we clearly want to add the same number to itself (for some mysterious undefined reason). But our editor doesn’t know that, and it is perfectly okay to add two strings together using <code>+</code> — so no warning is given.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">What we can now do is specify the expected input type as <code>int</code>. Using this, our editor picks up on the problem immediately.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We can get pretty specific about the types included too, for example:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*pjnGYVlFcR7_ZtaKpPLFJg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*pjnGYVlFcR7_ZtaKpPLFJg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*pjnGYVlFcR7_ZtaKpPLFJg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*pjnGYVlFcR7_ZtaKpPLFJg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*pjnGYVlFcR7_ZtaKpPLFJg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*pjnGYVlFcR7_ZtaKpPLFJg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*pjnGYVlFcR7_ZtaKpPLFJg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*pjnGYVlFcR7_ZtaKpPLFJg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*pjnGYVlFcR7_ZtaKpPLFJg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*pjnGYVlFcR7_ZtaKpPLFJg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*pjnGYVlFcR7_ZtaKpPLFJg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*pjnGYVlFcR7_ZtaKpPLFJg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*pjnGYVlFcR7_ZtaKpPLFJg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*pjnGYVlFcR7_ZtaKpPLFJg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*pjnGYVlFcR7_ZtaKpPLFJg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Type hinting can be used everywhere — and thanks to the new syntax, it now looks much cleaner:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*bwMmOsv5riSfm622yfsstQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*bwMmOsv5riSfm622yfsstQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*bwMmOsv5riSfm622yfsstQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*bwMmOsv5riSfm622yfsstQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*bwMmOsv5riSfm622yfsstQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*bwMmOsv5riSfm622yfsstQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*bwMmOsv5riSfm622yfsstQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*bwMmOsv5riSfm622yfsstQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*bwMmOsv5riSfm622yfsstQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*bwMmOsv5riSfm622yfsstQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*bwMmOsv5riSfm622yfsstQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*bwMmOsv5riSfm622yfsstQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*bwMmOsv5riSfm622yfsstQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*bwMmOsv5riSfm622yfsstQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*bwMmOsv5riSfm622yfsstQ.png"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">We specify sum_dict’s argument as a dict and the returned value as an int. During test definition, we also determine it’s type.</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">String Methods</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Not as glamourous as the other new features, but still worth a mention as it is particularly useful. Two new string methods for removing prefixes and suffixes have been added:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>"Hello world".remove<strong>prefix</strong>("He")</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><code>[Out]: "llo world"</code></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Hello world".remove<strong>suffix</strong>("ld")</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><code>[Out]: "Hello wor"</code></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">New Parser</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This one is more of an out-of-sight change but has the potential of being one of the most significant changes for the future evolution of Python.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Python currently uses a predominantly LL(1)-based grammar, which in turn can be parsed by a LL(1) parser — which parses code top-down, left-to-right, with a lookahead of just one token.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Now, I have almost no idea of how this works — but I can give you a few of the current issues in Python due to the use of this method:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Python contains non-LL(1) grammar; because of this, some parts of the current grammar use workarounds, creating unnecessary complexity.</li><li class="ff3" style="font-size:22px;">LL(1) creates limitations in the Python syntax (without possible workarounds). <a href="https://bugs.python.org/issue12782" target="_self">This issue</a> highlights that the following code simply cannot be implemented using the current parser (raising a <em>SyntaxError</em>):</li></ul></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>with (open("a_really_long_foo") as foo,<br/>      open("a_really_long_bar") as bar):<br/>    pass</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">LL(1) breaks with left-recursion in the parser. Meaning particular recursive syntax can cause an infinite loop in the parse tree. <a style="color:green" href="https://medium.com/u/1ecea0006127?source=post_page-----2529765429fe--------------------------------" target="_self">Guido van Rossum</a>, the creator of Python, <a href="https://medium.com/@gvanrossum_83706/left-recursive-peg-grammars-65dab3c580e1" target="_self">explains this here</a>.</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">All of these factors (and many more that I simply cannot comprehend) have one major impact on Python; they limit the evolution of the language.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The new parser, based on <strong>PEG,</strong> will allow the Python developers significantly more flexibility — something we will begin to notice from <a href="https://docs.python.org/3.9/whatsnew/3.9.html#pep-617-new-parser" target="_self">Python 3.10 onwards</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That is everything we can look forward to with the upcoming Python 3.9. If you really can’t wait, the most recent beta release — 3.9.0b3 — <a href="https://www.python.org/downloads/release/python-390b3/" target="_self">is available here</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you have any questions or suggestions, feel free to reach out via <a href="https://twitter.com/jamescalam" target="_self">Twitter</a> or in the comments below.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Thanks for reading!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you enjoyed this article and want to learn more about some of the lesser-known features in Python, you may be interested in my previous article:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><div class="sketchy"><a href="https://medium.com/lesser-known-python-features-f87af511887"><h2 style="color:blueviolet; font-family:Arial, Helvetica, sans-serif; font-size:25px;">Lesser known Python Features</h2><h3 style="color:rgb(45, 34, 54); font-family:Arial, Helvetica, sans-serif; font-size:20px;">A sample of some lesser known and underrated Python features</h3><p>towardsdatascience.com</p></a></div></div></div></div></section><br><?php include_once 'Elemental/footer.php'; ?>
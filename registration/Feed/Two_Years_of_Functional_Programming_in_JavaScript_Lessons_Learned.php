<!DOCTYPE html>
                <html>
                <head>
                    <title>Two Years of Functional Programming in JavaScript: Lessons Learned</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/hackernoon/two-years-of-functional-programming-in-javascript-lessons-learned-1851667c726"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@nkrkv?source=post_page-----1851667c726--------------------------------">Author : Victor Nakoryakov</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Two Years of Functional Programming in JavaScript: Lessons Learned</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*K5Cmkdx6ADWya5jSHClXIg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*K5Cmkdx6ADWya5jSHClXIg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*K5Cmkdx6ADWya5jSHClXIg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*K5Cmkdx6ADWya5jSHClXIg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*K5Cmkdx6ADWya5jSHClXIg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*K5Cmkdx6ADWya5jSHClXIg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*K5Cmkdx6ADWya5jSHClXIg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*K5Cmkdx6ADWya5jSHClXIg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*K5Cmkdx6ADWya5jSHClXIg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*K5Cmkdx6ADWya5jSHClXIg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*K5Cmkdx6ADWya5jSHClXIg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*K5Cmkdx6ADWya5jSHClXIg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*K5Cmkdx6ADWya5jSHClXIg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*K5Cmkdx6ADWya5jSHClXIg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*K5Cmkdx6ADWya5jSHClXIg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The article is not about learning FP principles or JavaScript FP libraries. There are numerous of good articles on this topic out there. The article is about adventures and consequences of switching to functional JS in one project.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When this story started, I was already a professional programmer with 10+ years of experience. C++, then C#, then Python. I was able to program anything. My confidence in patterns and principles I have obtained extended to a point where I saw no rationale to learn something new. “I know 90% of good parts in programming,” I thought.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Luckily, in May 2016 we started development of <a href="https://xod.io/?utm_source=post&utm_campaign=fp_dev&utm_medium=medium" target="_self">XOD project</a>. XOD is a visual programming IDE for electronics hobbyists. To keep it casual we had to have a web-version of the IDE. Web? JavaScript! Full-blown IDE in JavaScript? Yep, we’ll end nowhere with quick and dirty jQuery; we need something better.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">At the time, a new technology for heavy front-end development was emerging: something called React and its accompanying Flux/Redux patterns. In docs and articles, they were highly interlaced with the concepts of functional programming. I started to explore FP.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Whoa! It’s like I discovered another continent. Australia of development, where programmers walk upside down and data flows on the other side of the road. Of course, I have heard about Haskell, OCaml, LISP, but I used to think that such developers are a sort of marginal intelligentsia who program for the sake of programming, not to release products. My belief in own expertise level quickly eroded.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">XOD is a product with functional and reactive programming principles in its genes. It was not apparent before the development have started. Many things I have “invented” or borrowed from other products are indeed FP basics. So, stars matched, we’re going to create an FRP programming environment with some heavy modern FRP JavaScript.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Anticipating the events, it worth the effort. FP gave the project a very solid and flexible framework. I don’t want to look back to the “classical” programming anymore and definitely, will develop all new projects with functional programming principles in the foreseeable future.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Breaking the barrier</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You’ll find plenty of <a href="https://npms.io/search?q=fp" target="_self">JavaScript functional programming libraries on NPM</a>. One of most notable is <a href="http://ramdajs.com/" target="_self">Ramda</a>. It’s a kind of “lodash” or “Underscore,” but with FP-first in mind. Ramda gives you a few dozens of functions to process your data and compose functions.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Functions alone are good, but you’ll need some FP objects to work with. Another library <a href="https://github.com/ramda/ramda-fantasy" target="_self">Ramda Fantasy</a> will give them to you. You might also note other trending FP libs like <a href="https://github.com/sanctuary-js/sanctuary" target="_self">Sanctuary</a>, <a href="https://github.com/fluture-js/Fluture" target="_self">Fluture</a>, <a href="https://github.com/fantasyland/daggy" target="_self">Daggy</a>. Check them out when you start to get the idea. Begin with Ramda alone, though, to keep your brain in-place.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Here’s the first barrier you stumble upon. If you look at the docs of any FP library, you’ll end up with many WTF questions in the best case. The wild argument order, foreign terminology, unclear practical value of some functions will incline you to stop trying and switch back to the customary programming. So…</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Point #1</strong>. Start learning FP with articles not tied to a particular language or libraries. You need to overview the basic concepts first, understand the benefits, evaluate how your existing code could be transformed to live in the new world.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Many articles about functional programming are written by nerdy mathematician assholes. Reading them without preliminary training is dangerous: categories and morphisms can blow your mind in exchange for nothing.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Fortunately, there are excellent publications to start with. The most influential readings for me were:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><a href="https://mostly-adequate.gitbooks.io/mostly-adequate-guide/" target="_self">Mostly Adequate Guide to Functional Programming</a></li><li class="ff3" style="font-size:22px;"><a href="http://randycoulman.com/blog/categories/thinking-in-ramda/" target="_self">Thinking in Ramda</a></li><li class="ff3" style="font-size:22px;"><a href="https://egghead.io/courses/professor-frisby-introduces-composable-functional-javascript" target="_self">Professor Frisby Introduces Composable Functional JavaScript</a></li><li class="ff3" style="font-size:22px;"><a href="http://adit.io/posts/2013-04-17-functors,_applicatives,_and_monads_in_pictures.html" target="_self">Functors, Applicatives, And Monads In Pictures</a></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Pointless madness</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One of the first unusual concepts you learn when starting to explore FP is tacit programming also known as point-free style or (ironically) pointless coding.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The basic idea is omitting function argument names or, to be more precise, omitting arguments at all:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>export const snapNodeSizeToSlots = R.compose(<br/>  nodeSizeInSlotsToPixels,<br/>  pointToSize,<br/>  nodePositionInPixelsToSlots,<br/>  offsetPoint({ x: WIDTH * 0.75, y: HEIGHT * 1.1 }),<br/>  sizeToPoint<br/>);</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That’s a typical function definition which is entirely made with a composition of other functions. It has no input arguments declared although a call will require them. Even without a context, you can understand the function acts as some conveyor belt taking a size and producing some pixel coordinates. To learn concrete details, you dig into functions comprising the composition. They, in turn, might be a composition of other functions, and so on.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That’s a very powerful technique until you lift it to the point of absurd. When we started using FP tricks aggressively, we took the problem of converting everything to point-free as a puzzle we have to solve again and again:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>// Instead of<br/>const format = (actual, expected) =&gt; {<br/>  const variants = expected.join(‘, ‘);<br/>  return `Value ${actual} is not expected here. Possible variants are: ${variants}`;<br/>}</span><span>// you write<br/>const format = R.converge(<br/>  R.unapply(R.join(‘ ‘)),<br/>  [<br/>    R.always(“Value”),<br/>    R.nthArg(0),<br/>    R.always(“is not expected here. Possible variants are:”),<br/>    R.compose(R.join(‘, ‘), R.nthArg(1))<br/> ]<br/>);</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Argh, what? You’re a cool guy, you’ve solved it. Share the puzzle with others on the code review.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Next, you learn monads and purity. OK, my functions can’t have any side effects from now on. They can’t refer <code>this</code> (that’s fine), they can’t refer time and random (o-o-ok), they can’t refer anything other than the arguments they are given, even the global string constants, even the math Pi. You carry the necessary args, factories, and generators from the outermost function through the nesting chain down to the internals, you explode the signatures, and then you learn the Reader or State monad. Ouch, you infect all your code with sporadic monadic maps and chains, and the bowl of spaghetti is ready!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, combinators! What the funny beasts. Oh, Y-combinator is not only a startup accelerator but a recursion replacement. Let’s use it the next time I came with a problem trivially solvable by recursion or a simple `reduce` call.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Point #2</strong>. <mark>Functional programming is </mark><mark>not</mark><mark> about lambda calculus, monads, morphisms, and combinators. It’s about having many small well-defined </mark><mark>composable</mark><mark> functions without mutations of global state, their arguments, and IO.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In other words, if point-free style helps to communicate better in a particular case, use it. Otherwise, don’t. Don’t use monads because you can, use them when they precisely solve a problem. BTW, do you know that an <code>Array</code> and <code>Promise</code> are monads? If not, it does not stop you from applying them correctly. You should train your intuition to an extent when you understand what monad is required or, better, it is not required at all. It comes with practice, don’t overuse new stuff until you reason about it comfortably.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Alone, switching to small composable functions without side-effects where possible will give you most of the benefits. Start with it.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Either throw an exception or, maybe, return null</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One aspect of switching to FP style used to annoy me a lot. In classical JS you have at least two options to show an error:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;">Return null/undefined instead of a result</li><li class="ff3" style="font-size:22px;">Throw an exception</li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When you pick up FP, you still have these options and as a bonus get <code>Either</code> and <code>Maybe</code> monads. How should I handle errors now? What should the public API of my lib look like?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">From one point of view, <code>Maybe</code>/<code>Either</code> is a more “proper” way, but they might be unfamiliar for library consumers. Nulls and exceptions are customary, but you always end up with `<code>undefined is not a function</code>` in the console. Long story short…</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Point #3</strong>. Don’t be afraid of error handling through <code>Maybe</code>s and <code>Either</code>s. This couple is your best acquisition in the monadic world.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Take a look at the excellent <a href="https://fsharpforfunandprofit.com/rop/" target="_self">Railway oriented programming</a> pattern for the aha-moment. Use Maybes in your public API <em>and</em> if you afraid you won’t be understood, provide thin-wrapper satellites with suffixes like `Unsafe`, `Nullable`, `Exc` for consumption by the imperative JS</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Clarity is a drug</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When you collaborate in a project developed with functional programming principles, you notice the consequence pretty quickly. Doing a review now requires a much lower cognitive load. If you look at the function, the function code is all you should think about. You no longer have to imagine what consequences of mutating this field for that components will be. You don’t think whether a shallow copy, deep copy, or just a reference is more appropriate here. You just don’t have to think broader than the ten lines of code you’re looking at right now.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Then, when you see an old-fashion code, it always looks suspicious. “Hmmm… why it changes a field in <em>my</em> object? Why it stores it in the field, will it mutate the my object without a permission at a random moment?” The classical code starts looking just wrong.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Point #4</strong>. You’ll have to choose FP-compatible libraries and FP-compatible colleagues. The later is especially important. If the friction area is large and one part of the team strives for FP, and another part freely ruins the principles, finally FP will be defeated in the project.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Hiring FP JS developers is harder because it sets a high minimum level. But once you find one, chances you got the best professional possible for your product are high. In XOD we’re all FP adepts, and I’m happy we work together.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Benefits come with victims</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Functional programming is so much different than the mainstream that the mainstream-targeted tools you’re using will stop to work.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Flow and Typescript fail to work correctly because it’s hard for them to express all that currying and argument polymorphism. Although there’re bindings for Ramda, for example, they often give you false alarms, and when there’s indeed an error, the message is very cryptic and unclear.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You could find some libraries that perform type checks at runtime. We use <a href="https://github.com/xodio/hm-def" target="_self">such one</a>. Alas, they don’t scale well. The performance penalty is often higher than the cost of function execution per se. So you can afford the checking only by an explicit enabling it, e.g., for unit tests.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you make a mistake in a deep composition, for example, mess input and output types a bit, you will cry when you see the stack trace.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Error: Can’t find prototype Patch of Node with Id “HJbQvOPL-” from Patch “@/main”<br/> at /home/nailxx/devel/xod/packages/xod-func-tools/dist/monads.js:88:9<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:2491:23<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:860:20<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:14<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_arity.js:7:53<br/> at src/project.js:887:5<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:2491:23<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:860:20<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:14<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:27<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_arity.js:5:45<br/> at _filter (/home/nailxx/devel/xod/node_modules/ramda/src/internal/_filter.js:7:9)<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/filter.js:47:7<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_dispatchable.js:39:15<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_curry2.js:20:46<br/> at f1 (/home/nailxx/devel/xod/node_modules/ramda/src/internal/_curry1.js:17:17)<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:14<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_arity.js:5:45<br/> at src/typeDeduction.js:171:37<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:2491:23<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:864:20<br/> at src/project.js:618:33<br/> at _Right.chain (/home/nailxx/devel/xod/node_modules/ramda-fantasy/src/Either.js:67:10)<br/> at src/project.js:617:8<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:2491:23<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:860:20<br/> at _map (/home/nailxx/devel/xod/node_modules/ramda/src/internal/_map.js:6:19)<br/> at map (/home/nailxx/devel/xod/node_modules/ramda/src/map.js:57:14)<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_dispatchable.js:39:15<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_curry2.js:20:46<br/> at f1 (/home/nailxx/devel/xod/node_modules/ramda/src/internal/_curry1.js:17:17)<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:14<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:27<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:27<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_arity.js:5:45<br/> at validateProject (src/project.js:1031:3)<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:27<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_pipe.js:3:27<br/> at /home/nailxx/devel/xod/node_modules/ramda/src/internal/_arity.js:5:45<br/> at src/flatten.js:1021:5<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:2491:23<br/> at /home/nailxx/devel/xod/node_modules/sanctuary-def/index.js:864:20<br/> at Context.&lt;anonymous&gt; (test/flatten.spec.js:1805:27)</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The most of the trace is pointless when it comes to finding the problem source. Luckily, once FP code runs successfully for the first time, you can be sure it is rock-solid and will bring you no surprises in future. The obvious consequence is a requirement for a thorough unit test suite if you’re doing FP in JS.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Code coverage and breakpoints also break. FP code is more like CSS than JS. Take a look at <a href="https://github.com/xodio/xod/tree/master/packages/xod-project/src/" target="_self">XOD sources</a>. Does it make much sense to place a breakpoint to CSS and execute it step-by-step? What’s the coverage of CSS file? Of course, the effect is not 100%. At the places where you switch back from declarative to imperative style, these tools still work; but now your code is fragmented for the devtools and the experience change wildly.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Point #5</strong>. Once you touch FP you will be unhappy and angry. I had experienced the same emotion as when I switched from Windows to Linux and understood that both suck and I have no way to undo the knowledge. The same with a switch from full-blown IDE to Vim. Hope, you understand the idea.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Can we take the best of both worlds? Get the functional programming without madness and excellent developer experience at the same time? I think so. There’re other JS-targeted languages that are functional from the very beginning: <a href="http://elm-lang.org/" target="_self">Elm</a>, <a href="http://www.purescript.org/" target="_self">PureScript</a>, <a href="https://bucklescript.github.io/" target="_self">OCaml (BuckleScript)</a>, <a href="https://reasonml.github.io/" target="_self">ReasonML</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I’ve tried ReasonML in practice recently, but that’s another story. If you’d like to hear, clap a few times ;)</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
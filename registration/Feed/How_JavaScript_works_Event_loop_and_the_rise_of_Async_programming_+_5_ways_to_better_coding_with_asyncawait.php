<!DOCTYPE html>
                <html>
                <head>
                    <title>How JavaScript works: Event loop and the rise of Async programming + 5 ways to better coding with async/await</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://blog.sessionstack.com/how-javascript-works-event-loop-and-the-rise-of-async-programming-5-ways-to-better-coding-with-2f077c4438b5"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@zlatkov?source=post_page-----2f077c4438b5--------------------------------">Author : Alexander Zlatkov</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>How JavaScript works: Event loop and the rise of Async programming + 5 ways to better coding with async/await</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Welcome to post # 4 of the series dedicated to exploring JavaScript and its building components. In the process of identifying and describing the core elements, we also share some rules of thumb we use when building <a href="https://www.sessionstack.com/?utm_source=medium&utm_medium=blog&utm_content=Post-4-eventloop-intro" target="_self">SessionStack</a>, a JavaScript application that has to be robust and highly-performant in order to stay competitive.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Did you miss the first three chapters? You can find them here:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;"><a href="https://medium.com/how-does-javascript-actually-work-part-1-b0bacc073cf?source=collection_home---2------1----------------" target="_self">An overview of the engine, the runtime, and the call stack</a></li><li class="ff3" style="font-size:22px;"><a href="https://medium.com/how-javascript-works-inside-the-v8-engine-5-tips-on-how-to-write-optimized-code-ac089e62b12e?source=collection_home---2------2----------------" target="_self">Inside Google’s V8 engine + 5 tips on how to write optimized code</a></li><li class="ff3" style="font-size:22px;"><a href="https://medium.com/how-javascript-works-memory-management-how-to-handle-4-common-memory-leaks-3f28b94cfbec?source=collection_home---2------0----------------" target="_self">Memory management + how to handle 4 common memory leaks</a></li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This time we’ll expand on our first post by reviewing the drawbacks to programming in a single-threaded environment and how to overcome them using the Event Loop and async/await in order to build stunning JavaScript UIs. As the tradition goes, at the end of the article we’ll share 5 tips on how to write cleaner code with async/await</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>Why having a single thread is a limitation?</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the <a href="https://medium.com/how-does-javascript-actually-work-part-1-b0bacc073cf" target="_self">first post</a> we launched, we pondered over the question <em>what happens when you have function calls in the Call Stack that take a huge amount of time to be processed</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Imagine, for example, a complex image transformation algorithm that’s running in the browser.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">While the Call Stack has functions to execute, the browser can’t do anything else — it’s being blocked. This means that the browser can’t render, it can’t run any other code, it’s just stuck. And here comes the problem — your app UI is no longer efficient and pleasing.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Your app <strong>is stuck</strong>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In some cases, this might not be such a critical issue. But hey — here’s an even bigger problem. Once your browser starts processing too many tasks in the Call Stack, it may stop being responsive for a long time. At that point, a lot of browsers would take action by raising an error, asking whether they should terminate the page:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s ugly, and it completely ruins your UX:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:61%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 461px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:922/format:webp/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 922w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 461px" srcset="https://miro.medium.com/v2/resize:fit:640/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:922/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg 922w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/461/1*MCt4ZC0dMVhJsgo1u6lpYw.jpeg"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>The building blocks of a JavaScript program</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You may be writing your JavaScript application in a single .js file, but your program is almost certainly comprised of several blocks, only one of which is going to execute <em>now</em>, and the rest will execute <em>later</em>. The most common block unit is the function.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The problem most developers new to JavaScript seem to have is understanding that <em>later</em> doesn’t necessarily happen strictly and immediately after <em>now</em>. In other words, tasks that cannot complete <em>now</em> are, by definition, going to complete asynchronously, which means you won’t have the above-mentioned blocking behavior as you might have subconsciously expected or hoped for.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s take a look at the following example:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>// ajax(..) is some arbitrary Ajax function given by a library
var response = ajax('https://example.com/api');

console.log(response);
// `response` won't have the response</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You’re probably aware that standard Ajax requests don’t complete synchronously, which means that at the time of code execution the ajax(..) function does not yet have any value to return back to be assigned to a response variable.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A simple way of “waiting” for an asynchronous function to return its result is to use a function called <strong>callback:</strong></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>ajax('https://example.com/api', function(response) {
    console.log(response); // `response` is now available
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Just a note: you can actually make <strong>synchronous</strong> Ajax requests. Never, ever do that. If you make a synchronous Ajax request, the UI of your JavaScript app will be blocked — the user won’t be able to click, enter data, navigate, or scroll. This would prevent any user interaction. It’s a terrible practice.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is how it looks like, but please, never do this — don’t ruin the web:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>// This is assuming that you're using jQuery
jQuery.ajax({
    url: 'https://api.example.com/endpoint',
    success: function(response) {
        // This is your callback.
    },
    async: false // And this is a terrible idea
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We used an Ajax request just as an example. You can have any chunk of code execute asynchronously.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This can be done with the <code>setTimeout(callback, milliseconds)</code> function. What the <code>setTimeout</code> function does is to set up an event (a timeout) to happen later. Let’s take a look:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function first() {
    console.log('first');
}
function second() {
    console.log('second');
}
function third() {
    console.log('third');
}
first();
setTimeout(second, 1000); // Invoke `second` after 1000ms
third();</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The output in the console will be the following:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>first<br/>third<br/>second</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>What is the Event Loop?</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We’ll start with a somewhat of an odd claim — despite allowing async JavaScript code (like the <code>setTimeout</code> we just discussed), until ES6, JavaScript itself has actually never had any direct notion of asynchronicity built into it. The JavaScript engine has never done anything more than executing a single chunk of your program at any given moment.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For more details on how JavaScript engines work (Google’s V8 specifically), check one of our <a href="https://medium.com/how-javascript-works-inside-the-v8-engine-5-tips-on-how-to-write-optimized-code-ac089e62b12e" target="_self">previous articles</a> on the topic.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, who tells the JS Engine to execute chunks of your program? In reality, the JS Engine doesn’t run in isolation — it runs inside a <em>hosting </em>environment, which for most developers is the typical web browser or Node.js. Actually, nowadays, JavaScript gets embedded into all kinds of devices, from robots to light bulbs. Every single device represents a different type of hosting environment for the JS Engine.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>The common denominator in all environments is a built-in mechanism called the event loop, which handles the execution of multiple chunks of your program over time, each time invoking the JS Engine.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This means that the JS Engine is just an on-demand execution environment for any arbitrary JS code. It’s the surrounding environment that schedules the events (the JS code executions).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, for example, when your JavaScript program makes an Ajax request to fetch some data from the server, you set up the “response” code in a function (the “callback”), and the JS Engine tells the hosting environment:<br></br>“Hey, I’m going to suspend execution for now, but whenever you finish with that network request, and you have some data, please <em>call</em> this function <em>back</em>.”</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The browser is then set up to listen for the response from the network, and when it has something to return to you, it will schedule the callback function to be executed by inserting it into the <em>event loop</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s look at the below diagram:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*FA9NGxNB6-v1oI2qGEtlRQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*FA9NGxNB6-v1oI2qGEtlRQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*FA9NGxNB6-v1oI2qGEtlRQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*FA9NGxNB6-v1oI2qGEtlRQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*FA9NGxNB6-v1oI2qGEtlRQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*FA9NGxNB6-v1oI2qGEtlRQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*FA9NGxNB6-v1oI2qGEtlRQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*FA9NGxNB6-v1oI2qGEtlRQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*FA9NGxNB6-v1oI2qGEtlRQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*FA9NGxNB6-v1oI2qGEtlRQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*FA9NGxNB6-v1oI2qGEtlRQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*FA9NGxNB6-v1oI2qGEtlRQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*FA9NGxNB6-v1oI2qGEtlRQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*FA9NGxNB6-v1oI2qGEtlRQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*FA9NGxNB6-v1oI2qGEtlRQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can read more about the Memory Heap and the Call Stack in our <a href="https://medium.com/how-does-javascript-actually-work-part-1-b0bacc073cf" target="_self">previous article</a>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And what are these Web APIs? In essence, they are threads that you can’t access, you can just make calls to them. They are the pieces of the browser in which concurrency kicks in. If you’re a Node.js developer, these are the C++ APIs.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">So what is the <em>event loop after all</em>?</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:64%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 478px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*KGBiAxjeD9JT2j6KDo0zUg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*KGBiAxjeD9JT2j6KDo0zUg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*KGBiAxjeD9JT2j6KDo0zUg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*KGBiAxjeD9JT2j6KDo0zUg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*KGBiAxjeD9JT2j6KDo0zUg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*KGBiAxjeD9JT2j6KDo0zUg.png 1100w, https://miro.medium.com/v2/resize:fit:956/format:webp/1*KGBiAxjeD9JT2j6KDo0zUg.png 956w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 478px" srcset="https://miro.medium.com/v2/resize:fit:640/1*KGBiAxjeD9JT2j6KDo0zUg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*KGBiAxjeD9JT2j6KDo0zUg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*KGBiAxjeD9JT2j6KDo0zUg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*KGBiAxjeD9JT2j6KDo0zUg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*KGBiAxjeD9JT2j6KDo0zUg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*KGBiAxjeD9JT2j6KDo0zUg.png 1100w, https://miro.medium.com/v2/resize:fit:956/1*KGBiAxjeD9JT2j6KDo0zUg.png 956w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/478/1*KGBiAxjeD9JT2j6KDo0zUg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The Event Loop has one simple job — to monitor the Call Stack and the Callback Queue. If the Call Stack is empty, the Event Loop will take the first event from the queue and will push it to the Call Stack, which effectively runs it.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Such an iteration is called a <strong>tick </strong>in the Event Loop. Each event is just a function callback.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>console.log('Hi');
setTimeout(function cb1() { 
    console.log('cb1');
}, 5000);
console.log('Bye');</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s “execute” this code and see what happens:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;">The state is clear. The browser console is clear, and the Call Stack is empty.</li></ol></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9fbOuFXJHwhqa6ToCc_v2A.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9fbOuFXJHwhqa6ToCc_v2A.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9fbOuFXJHwhqa6ToCc_v2A.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9fbOuFXJHwhqa6ToCc_v2A.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9fbOuFXJHwhqa6ToCc_v2A.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9fbOuFXJHwhqa6ToCc_v2A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*9fbOuFXJHwhqa6ToCc_v2A.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9fbOuFXJHwhqa6ToCc_v2A.png 640w, https://miro.medium.com/v2/resize:fit:720/1*9fbOuFXJHwhqa6ToCc_v2A.png 720w, https://miro.medium.com/v2/resize:fit:750/1*9fbOuFXJHwhqa6ToCc_v2A.png 750w, https://miro.medium.com/v2/resize:fit:786/1*9fbOuFXJHwhqa6ToCc_v2A.png 786w, https://miro.medium.com/v2/resize:fit:828/1*9fbOuFXJHwhqa6ToCc_v2A.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*9fbOuFXJHwhqa6ToCc_v2A.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*9fbOuFXJHwhqa6ToCc_v2A.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*9fbOuFXJHwhqa6ToCc_v2A.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">2. <code>console.log('Hi')</code> is added to the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*dvrghQCVQIZOfNC27Jrtlw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*dvrghQCVQIZOfNC27Jrtlw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*dvrghQCVQIZOfNC27Jrtlw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*dvrghQCVQIZOfNC27Jrtlw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*dvrghQCVQIZOfNC27Jrtlw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*dvrghQCVQIZOfNC27Jrtlw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*dvrghQCVQIZOfNC27Jrtlw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*dvrghQCVQIZOfNC27Jrtlw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*dvrghQCVQIZOfNC27Jrtlw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*dvrghQCVQIZOfNC27Jrtlw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*dvrghQCVQIZOfNC27Jrtlw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*dvrghQCVQIZOfNC27Jrtlw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*dvrghQCVQIZOfNC27Jrtlw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*dvrghQCVQIZOfNC27Jrtlw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*dvrghQCVQIZOfNC27Jrtlw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">3. <code>console.log('Hi')</code> is executed.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*yn9Y4PXNP8XTz6mtCAzDZQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*yn9Y4PXNP8XTz6mtCAzDZQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">4. <code>console.log('Hi')</code> is removed from the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*iBedryNbqtixYTKviPC1tA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*iBedryNbqtixYTKviPC1tA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*iBedryNbqtixYTKviPC1tA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*iBedryNbqtixYTKviPC1tA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*iBedryNbqtixYTKviPC1tA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*iBedryNbqtixYTKviPC1tA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*iBedryNbqtixYTKviPC1tA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*iBedryNbqtixYTKviPC1tA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*iBedryNbqtixYTKviPC1tA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*iBedryNbqtixYTKviPC1tA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*iBedryNbqtixYTKviPC1tA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*iBedryNbqtixYTKviPC1tA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*iBedryNbqtixYTKviPC1tA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*iBedryNbqtixYTKviPC1tA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*iBedryNbqtixYTKviPC1tA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">5. <code>setTimeout(function cb1() { ... })</code> is added to the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*HIn-BxIP38X6mF_65snMKg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*HIn-BxIP38X6mF_65snMKg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*HIn-BxIP38X6mF_65snMKg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*HIn-BxIP38X6mF_65snMKg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*HIn-BxIP38X6mF_65snMKg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*HIn-BxIP38X6mF_65snMKg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*HIn-BxIP38X6mF_65snMKg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*HIn-BxIP38X6mF_65snMKg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*HIn-BxIP38X6mF_65snMKg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*HIn-BxIP38X6mF_65snMKg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*HIn-BxIP38X6mF_65snMKg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*HIn-BxIP38X6mF_65snMKg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*HIn-BxIP38X6mF_65snMKg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*HIn-BxIP38X6mF_65snMKg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*HIn-BxIP38X6mF_65snMKg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">6. <code>setTimeout(function cb1() { ... })</code> is executed. The browser creates a timer as part of the Web APIs. It is going to handle the countdown for you.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*vd3X2O_qRfqaEpW4AfZM4w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*vd3X2O_qRfqaEpW4AfZM4w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*vd3X2O_qRfqaEpW4AfZM4w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*vd3X2O_qRfqaEpW4AfZM4w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*vd3X2O_qRfqaEpW4AfZM4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*vd3X2O_qRfqaEpW4AfZM4w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*vd3X2O_qRfqaEpW4AfZM4w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*vd3X2O_qRfqaEpW4AfZM4w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*vd3X2O_qRfqaEpW4AfZM4w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*vd3X2O_qRfqaEpW4AfZM4w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*vd3X2O_qRfqaEpW4AfZM4w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*vd3X2O_qRfqaEpW4AfZM4w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*vd3X2O_qRfqaEpW4AfZM4w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*vd3X2O_qRfqaEpW4AfZM4w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*vd3X2O_qRfqaEpW4AfZM4w.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">7. The <code>setTimeout(function cb1() { ... })</code> itself is complete and is removed from the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*_nYLhoZPKD_HPhpJtQeErA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*_nYLhoZPKD_HPhpJtQeErA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*_nYLhoZPKD_HPhpJtQeErA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*_nYLhoZPKD_HPhpJtQeErA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*_nYLhoZPKD_HPhpJtQeErA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*_nYLhoZPKD_HPhpJtQeErA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*_nYLhoZPKD_HPhpJtQeErA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*_nYLhoZPKD_HPhpJtQeErA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*_nYLhoZPKD_HPhpJtQeErA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*_nYLhoZPKD_HPhpJtQeErA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*_nYLhoZPKD_HPhpJtQeErA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*_nYLhoZPKD_HPhpJtQeErA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*_nYLhoZPKD_HPhpJtQeErA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*_nYLhoZPKD_HPhpJtQeErA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*_nYLhoZPKD_HPhpJtQeErA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">8. <code>console.log('Bye')</code> is added to the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*1NAeDnEv6DWFewX_C-L8mg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*1NAeDnEv6DWFewX_C-L8mg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*1NAeDnEv6DWFewX_C-L8mg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*1NAeDnEv6DWFewX_C-L8mg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*1NAeDnEv6DWFewX_C-L8mg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*1NAeDnEv6DWFewX_C-L8mg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*1NAeDnEv6DWFewX_C-L8mg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*1NAeDnEv6DWFewX_C-L8mg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*1NAeDnEv6DWFewX_C-L8mg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*1NAeDnEv6DWFewX_C-L8mg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*1NAeDnEv6DWFewX_C-L8mg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*1NAeDnEv6DWFewX_C-L8mg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*1NAeDnEv6DWFewX_C-L8mg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*1NAeDnEv6DWFewX_C-L8mg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*1NAeDnEv6DWFewX_C-L8mg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">9. <code>console.log('Bye')</code> is executed.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*UwtM7DmK1BmlBOUUYEopGQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*UwtM7DmK1BmlBOUUYEopGQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*UwtM7DmK1BmlBOUUYEopGQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*UwtM7DmK1BmlBOUUYEopGQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*UwtM7DmK1BmlBOUUYEopGQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*UwtM7DmK1BmlBOUUYEopGQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*UwtM7DmK1BmlBOUUYEopGQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*UwtM7DmK1BmlBOUUYEopGQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*UwtM7DmK1BmlBOUUYEopGQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*UwtM7DmK1BmlBOUUYEopGQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*UwtM7DmK1BmlBOUUYEopGQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*UwtM7DmK1BmlBOUUYEopGQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*UwtM7DmK1BmlBOUUYEopGQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*UwtM7DmK1BmlBOUUYEopGQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*UwtM7DmK1BmlBOUUYEopGQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">10. <code>console.log('Bye')</code> is removed from the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*-vHNuJsJVXvqq5dLHPt7cQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*-vHNuJsJVXvqq5dLHPt7cQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*-vHNuJsJVXvqq5dLHPt7cQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*-vHNuJsJVXvqq5dLHPt7cQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*-vHNuJsJVXvqq5dLHPt7cQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*-vHNuJsJVXvqq5dLHPt7cQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*-vHNuJsJVXvqq5dLHPt7cQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*-vHNuJsJVXvqq5dLHPt7cQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*-vHNuJsJVXvqq5dLHPt7cQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*-vHNuJsJVXvqq5dLHPt7cQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*-vHNuJsJVXvqq5dLHPt7cQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*-vHNuJsJVXvqq5dLHPt7cQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*-vHNuJsJVXvqq5dLHPt7cQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*-vHNuJsJVXvqq5dLHPt7cQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*-vHNuJsJVXvqq5dLHPt7cQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">11. After at least 5000 ms, the timer completes and it pushes the <code>cb1</code> callback to the Callback Queue.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*eOj6NVwGI2N78onh6CuCbA.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*eOj6NVwGI2N78onh6CuCbA.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*eOj6NVwGI2N78onh6CuCbA.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*eOj6NVwGI2N78onh6CuCbA.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*eOj6NVwGI2N78onh6CuCbA.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*eOj6NVwGI2N78onh6CuCbA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*eOj6NVwGI2N78onh6CuCbA.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*eOj6NVwGI2N78onh6CuCbA.png 640w, https://miro.medium.com/v2/resize:fit:720/1*eOj6NVwGI2N78onh6CuCbA.png 720w, https://miro.medium.com/v2/resize:fit:750/1*eOj6NVwGI2N78onh6CuCbA.png 750w, https://miro.medium.com/v2/resize:fit:786/1*eOj6NVwGI2N78onh6CuCbA.png 786w, https://miro.medium.com/v2/resize:fit:828/1*eOj6NVwGI2N78onh6CuCbA.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*eOj6NVwGI2N78onh6CuCbA.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*eOj6NVwGI2N78onh6CuCbA.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*eOj6NVwGI2N78onh6CuCbA.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">12. The Event Loop takes <code>cb1</code> from the Callback Queue and pushes it to the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*jQMQ9BEKPycs2wFC233aNg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*jQMQ9BEKPycs2wFC233aNg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*jQMQ9BEKPycs2wFC233aNg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*jQMQ9BEKPycs2wFC233aNg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*jQMQ9BEKPycs2wFC233aNg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*jQMQ9BEKPycs2wFC233aNg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*jQMQ9BEKPycs2wFC233aNg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*jQMQ9BEKPycs2wFC233aNg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*jQMQ9BEKPycs2wFC233aNg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*jQMQ9BEKPycs2wFC233aNg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*jQMQ9BEKPycs2wFC233aNg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*jQMQ9BEKPycs2wFC233aNg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*jQMQ9BEKPycs2wFC233aNg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*jQMQ9BEKPycs2wFC233aNg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*jQMQ9BEKPycs2wFC233aNg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">13. <code>cb1</code> is executed and adds <code>console.log('cb1')</code> to the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*hpyVeL1zsaeHaqS7mU4Qfw.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*hpyVeL1zsaeHaqS7mU4Qfw.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*hpyVeL1zsaeHaqS7mU4Qfw.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*hpyVeL1zsaeHaqS7mU4Qfw.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*hpyVeL1zsaeHaqS7mU4Qfw.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*hpyVeL1zsaeHaqS7mU4Qfw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*hpyVeL1zsaeHaqS7mU4Qfw.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*hpyVeL1zsaeHaqS7mU4Qfw.png 640w, https://miro.medium.com/v2/resize:fit:720/1*hpyVeL1zsaeHaqS7mU4Qfw.png 720w, https://miro.medium.com/v2/resize:fit:750/1*hpyVeL1zsaeHaqS7mU4Qfw.png 750w, https://miro.medium.com/v2/resize:fit:786/1*hpyVeL1zsaeHaqS7mU4Qfw.png 786w, https://miro.medium.com/v2/resize:fit:828/1*hpyVeL1zsaeHaqS7mU4Qfw.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*hpyVeL1zsaeHaqS7mU4Qfw.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*hpyVeL1zsaeHaqS7mU4Qfw.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*hpyVeL1zsaeHaqS7mU4Qfw.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">14. <code>console.log('cb1')</code> is executed.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*lvOtCg75ObmUTOxIS6anEQ.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*lvOtCg75ObmUTOxIS6anEQ.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*lvOtCg75ObmUTOxIS6anEQ.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*lvOtCg75ObmUTOxIS6anEQ.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*lvOtCg75ObmUTOxIS6anEQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lvOtCg75ObmUTOxIS6anEQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*lvOtCg75ObmUTOxIS6anEQ.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*lvOtCg75ObmUTOxIS6anEQ.png 640w, https://miro.medium.com/v2/resize:fit:720/1*lvOtCg75ObmUTOxIS6anEQ.png 720w, https://miro.medium.com/v2/resize:fit:750/1*lvOtCg75ObmUTOxIS6anEQ.png 750w, https://miro.medium.com/v2/resize:fit:786/1*lvOtCg75ObmUTOxIS6anEQ.png 786w, https://miro.medium.com/v2/resize:fit:828/1*lvOtCg75ObmUTOxIS6anEQ.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*lvOtCg75ObmUTOxIS6anEQ.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*lvOtCg75ObmUTOxIS6anEQ.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*lvOtCg75ObmUTOxIS6anEQ.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">15. <code>console.log('cb1')</code> is removed from the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Jyyot22aRkKMF3LN1bgE-w.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Jyyot22aRkKMF3LN1bgE-w.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Jyyot22aRkKMF3LN1bgE-w.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Jyyot22aRkKMF3LN1bgE-w.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Jyyot22aRkKMF3LN1bgE-w.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Jyyot22aRkKMF3LN1bgE-w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Jyyot22aRkKMF3LN1bgE-w.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Jyyot22aRkKMF3LN1bgE-w.png 640w, https://miro.medium.com/v2/resize:fit:720/1*Jyyot22aRkKMF3LN1bgE-w.png 720w, https://miro.medium.com/v2/resize:fit:750/1*Jyyot22aRkKMF3LN1bgE-w.png 750w, https://miro.medium.com/v2/resize:fit:786/1*Jyyot22aRkKMF3LN1bgE-w.png 786w, https://miro.medium.com/v2/resize:fit:828/1*Jyyot22aRkKMF3LN1bgE-w.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*Jyyot22aRkKMF3LN1bgE-w.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Jyyot22aRkKMF3LN1bgE-w.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Jyyot22aRkKMF3LN1bgE-w.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">16. <code>cb1</code> is removed from the Call Stack.</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*t2Btfb_tBbBxTvyVgKX0Qg.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*t2Btfb_tBbBxTvyVgKX0Qg.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*t2Btfb_tBbBxTvyVgKX0Qg.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*t2Btfb_tBbBxTvyVgKX0Qg.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*t2Btfb_tBbBxTvyVgKX0Qg.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*t2Btfb_tBbBxTvyVgKX0Qg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*t2Btfb_tBbBxTvyVgKX0Qg.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*t2Btfb_tBbBxTvyVgKX0Qg.png 640w, https://miro.medium.com/v2/resize:fit:720/1*t2Btfb_tBbBxTvyVgKX0Qg.png 720w, https://miro.medium.com/v2/resize:fit:750/1*t2Btfb_tBbBxTvyVgKX0Qg.png 750w, https://miro.medium.com/v2/resize:fit:786/1*t2Btfb_tBbBxTvyVgKX0Qg.png 786w, https://miro.medium.com/v2/resize:fit:828/1*t2Btfb_tBbBxTvyVgKX0Qg.png 828w, https://miro.medium.com/v2/resize:fit:1100/1*t2Btfb_tBbBxTvyVgKX0Qg.png 1100w, https://miro.medium.com/v2/resize:fit:1400/1*t2Btfb_tBbBxTvyVgKX0Qg.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*t2Btfb_tBbBxTvyVgKX0Qg.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A quick recap:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*TozSrkk92l8ho6d8JxqF_w.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*TozSrkk92l8ho6d8JxqF_w.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*TozSrkk92l8ho6d8JxqF_w.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*TozSrkk92l8ho6d8JxqF_w.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*TozSrkk92l8ho6d8JxqF_w.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*TozSrkk92l8ho6d8JxqF_w.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*TozSrkk92l8ho6d8JxqF_w.gif 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*TozSrkk92l8ho6d8JxqF_w.gif 640w, https://miro.medium.com/v2/resize:fit:720/1*TozSrkk92l8ho6d8JxqF_w.gif 720w, https://miro.medium.com/v2/resize:fit:750/1*TozSrkk92l8ho6d8JxqF_w.gif 750w, https://miro.medium.com/v2/resize:fit:786/1*TozSrkk92l8ho6d8JxqF_w.gif 786w, https://miro.medium.com/v2/resize:fit:828/1*TozSrkk92l8ho6d8JxqF_w.gif 828w, https://miro.medium.com/v2/resize:fit:1100/1*TozSrkk92l8ho6d8JxqF_w.gif 1100w, https://miro.medium.com/v2/resize:fit:1400/1*TozSrkk92l8ho6d8JxqF_w.gif 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*TozSrkk92l8ho6d8JxqF_w.gif"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s interesting to note that ES6 specifies how the event loop should work, meaning that technically it’s within the scope of the JS engine’s responsibilities, which is no longer playing just a hosting environment role. One main reason for this change is the introduction of Promises in ES6 because the latter require access to a direct, fine-grained control over scheduling operations on the event loop queue (we’ll discuss them in a greater detail later).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">How setTimeout(…) works</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s important to note that <code>setTimeout(…)</code> doesn’t automatically put your callback on the event loop queue. It sets up a timer. When the timer expires, the environment places your callback into the event loop, so that some future tick will pick it up and execute it. Take a look at this code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>setTimeout(myCallback, 1000);</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That doesn’t mean that <code>myCallback</code> will be executed in 1,000 ms but rather that, in 1,000 ms, <code>myCallback</code> will be added to the event loop queue. The queue, however, might have other events that have been added earlier — your callback will have to wait.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are quite a few articles and tutorials on getting started with async code in JavaScript that suggest doing a <code>setTimeout(callback, 0)</code>. Well, now you know what the Event Loop does and how setTimeout works: calling setTimeout with 0 as a second argument just defers the callback until the Call Stack is clear.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Take a look at the following code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>console.log('Hi');
setTimeout(function() {
    console.log('callback');
}, 0);
console.log('Bye');</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Although the wait time is set to 0 ms, the result in the browser console will be the following:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>Hi<br/>Bye<br/>callback</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">What are Jobs in ES6 ?</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A new concept called the “Job Queue” was introduced in ES6. It’s a layer on top of the Event Loop queue. You are most likely to bump into it when dealing with the asynchronous behavior of Promises (we’ll talk about them too).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We’ll just touch on the concept now so that when we discuss async behavior with Promises, later on, you understand how those actions are being scheduled and processed.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Imagine it like this: the Job Queue is a queue that’s attached to the end of every tick in the Event Loop queue. Certain async actions that may occur during a tick of the event loop will not cause a whole new event to be added to the event loop queue, but will instead add an item (aka Job) to the end of the current tick’s Job queue.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This means that you can add another functionality to be executed later, and you can rest assured that it will be executed right after, before anything else.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A Job can also cause more Jobs to be added to the end of the same queue. In theory, it’s possible for a Job “loop” (a Job that keeps adding other Jobs, etc.) to spin indefinitely, thus starving the program of the necessary resources needed to move on to the next event loop tick. Conceptually, this would be similar to just expressing a long-running or infinite loop (like <code>while (true)</code> ..) in your code.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Jobs are kind of like the <code>setTimeout(callback, 0)</code> “hack” but implemented in such a way that they introduce a much more well-defined and guaranteed ordering: later, but as soon as possible.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>Callbacks</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you already know, callbacks are by far the most common way to express and manage asynchronicity in JavaScript programs. Indeed, the callback is the most fundamental async pattern in the JavaScript language. Countless JS programs, even very sophisticated and complex ones, have been written on top of no other async foundation than the callback.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Except that callbacks don’t come with no shortcomings. Many developers are trying to find better async patterns. It’s impossible, however, to effectively use any abstraction if you don’t understand what’s actually under the hood.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the following chapter, we’ll explore couple of these abstractions in-depth to show why more sophisticated async patterns (that will be discussed in subsequent posts) are necessary and even recommended.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Nested Callbacks</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Look at the following code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>listen('click', function (e){
    setTimeout(function(){
        ajax('https://api.example.com/endpoint', function (text){
            if (text == "hello") {
	        doSomething();
	    }
	    else if (text == "world") {
	        doSomethingElse();
            }
        });
    }, 500);
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We’ve got a chain of three functions nested together, each one representing a step in an asynchronous series.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This kind of code is often called a “callback hell”. But the “callback hell” actually has almost nothing to do with the nesting/indentation. It’s a much deeper problem than that.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">First, we’re waiting for the “click” event, then we’re waiting for the timer to fire, then we’re waiting for the Ajax response to come back, at which point it might get all repeated again.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">At first glance, this code may seem to map its asynchrony naturally to sequential steps like:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>listen('click', function (e) {
	// ..
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Then we have:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>setTimeout(function(){
    // ..
}, 500);</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Then later we have:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>ajax('https://api.example.com/endpoint', function (text){
    // ..
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And finally:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>if (text == "hello") {
    doSomething();
}
else if (text == "world") {
    doSomethingElse();
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So, such a sequential way of expressing your async code seems a lot more natural, doesn’t it? There must be such a way, right?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Promises</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Take a look at the following code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>var x = 1;
var y = 2;
console.log(x + y);</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s all very straightforward: it sums the values of <code>x</code> and <code>y</code> and prints it to the console. What if, however, the value of <code>x</code> or <code>y </code>was missing and was still to be determined? Say, we need to retrieve the values of both <code>x</code> and <code>y</code> from the server, before they can be used in the expression. Let’s imagine that we have a function <code>loadX</code> and <code>loadY</code> that respectively load the values of <code>x</code> and <code>y</code> from the server. Then, imagine that we have a function <code>sum</code> that sums the values of <code>x</code> and <code>y</code> once both of them are loaded.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It could look like this (quite ugly, isn’t it):</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function sum(getX, getY, callback) {
    var x, y;
    getX(function(result) {
        x = result;
        if (y !== undefined) {
            callback(x + y);
        }
    });
    getY(function(result) {
        y = result;
        if (x !== undefined) {
            callback(x + y);
        }
    });
}
// A sync or async function that retrieves the value of `x`
function fetchX() {
    // ..
}


// A sync or async function that retrieves the value of `y`
function fetchY() {
    // ..
}
sum(fetchX, fetchY, function(result) {
    console.log(result);
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There is something very important here — in that snippet, we treated <code>x</code> and <code>y</code> as <strong>future</strong> values, and we expressed an operation <code>sum(…)</code> that (from the outside) did not care whether <code>x</code> or <code>y</code> or both were or weren’t available right away.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Of course, this rough callbacks-based approach leaves much to be desired. It’s just a first tiny step towards understanding the benefits of reasoning about <em>future values</em> without worrying about the time aspect of when they will be available.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Promise Value</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s just briefly glimpse at how we can express the<code> x + y</code> example with Promises:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function sum(xPromise, yPromise) {
	// `Promise.all([ .. ])` takes an array of promises,
	// and returns a new promise that waits on them
	// all to finish
	return Promise.all([xPromise, yPromise])

	// when that promise is resolved, let's take the
	// received `X` and `Y` values and add them together.
	.then(function(values){
		// `values` is an array of the messages from the
		// previously resolved promises
		return values[0] + values[1];
	} );
}

// `fetchX()` and `fetchY()` return promises for
// their respective values, which may be ready
// *now* or *later*.
sum(fetchX(), fetchY())

// we get a promise back for the sum of those
// two numbers.
// now we chain-call `then(...)` to wait for the
// resolution of that returned promise.
.then(function(sum){
    console.log(sum);
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are two layers of Promises in this snippet.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><code>fetchX()</code> and <code>fetchY()</code> are called directly, and the values they return (promises!) are passed to <code>sum(...)</code>. The underlying values these promises represent may be ready <em>now</em> or <em>later</em>, but each promise normalizes its behavior to be the same regardless. We reason about <code>x</code> and <code>y</code> values in a time-independent way. They are <em>future values</em>, period.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The second layer is the promise that <code>sum(...)</code> creates <br></br>(via <code>Promise.all([ ... ])</code>) and returns, which we wait on by calling <code>then(...)</code>. When the <code>sum(...)</code>operation completes, our sum <em>future value</em> is ready and we can print it out. We hide the logic for waiting on the <code>x</code> and <code>y</code> <em>future values</em> inside of <code>sum(...)</code> .</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Note</strong>: Inside <code>sum(…)</code>, the <code>Promise.all([ … ])</code> call creates a promise (which is waiting on <code>promiseX</code> and <code>promiseY</code> to resolve). The chained call to <code>.then(...) </code>creates another promise, which the return<br></br><code>values[0] + values[1]</code> line immediately resolves (with the result of the addition). Thus, the <code>then(...)</code> call we chain off the end of the <code>sum(...)</code> call — at the end of the snippet — is actually operating on that second promise returned, rather than the first one created by <code>Promise.all([ ... ])</code>. Also, although we are not chaining off the end of that second <code>then(...)</code>, it too has created another promise, had we chosen to observe/use it. This Promise chaining stuff will be explained in much greater detail later in this chapter.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">With Promises, the <code>then(...)</code> call can actually take two functions, the first for fulfillment (as shown earlier), and the second for rejection:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>sum(fetchX(), fetchY())
.then(
    // fullfillment handler
    function(sum) {
        console.log( sum );
    },
    // rejection handler
    function(err) {
    	console.error( err ); // bummer!
    }
);</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If something went wrong when getting <code>x</code> or <code>y</code>, or something somehow failed during the addition, the promise that <code>sum(...) </code>returns would be rejected, and the second callback error handler passed to <code>then(...)</code> would receive the rejection value from the promise.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Because Promises encapsulate the time-dependent state — waiting on the fulfillment or rejection of the underlying value — from the outside, the Promise itself is time-independent, and thus Promises can be composed (combined) in predictable ways regardless of the timing or outcome underneath.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Moreover, once a Promise is resolved, it stays that way forever — it becomes an <em>immutable value</em> at that point — and can then be <em>observed</em> as many times as necessary.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s really useful that you can actually chain promises:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function delay(time) {
    return new Promise(function(resolve, reject){
        setTimeout(resolve, time);
    });
}

delay(1000)
.then(function(){
    console.log("after 1000ms");
    return delay(2000);
})
.then(function(){
    console.log("after another 2000ms");
})
.then(function(){
    console.log("step 4 (next Job)");
    return delay(5000);
})
// ...</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Calling <code>delay(2000)</code> creates a promise that will fulfill in 2000ms, and then we return that from the first <code>then(...)</code> fulfillment callback, which causes the second <code>then(...)</code>'s promise to wait on that 2000ms promise.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Note</strong>: Because a Promise is externally immutable once resolved, it’s now safe to pass that value around to any party, knowing that it cannot be modified accidentally or maliciously. This is especially true in relation to multiple parties observing the resolution of a Promise. It’s not possible for one party to affect another party’s ability to observe Promise resolution. Immutability may sound like an academic topic, but it’s actually one of the most fundamental and important aspects of Promise design, and shouldn’t be casually passed over.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>To Promise or not to Promise?</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">An important detail about Promises is knowing for sure if some value is an actual Promise or not. In other words, is it a value that will behave like a Promise?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We know that Promises are constructed by the <code>new Promise(…)</code> syntax, and you might think that <code>p instanceof Promise</code> would be a sufficient check. Well, not quite.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Mainly because you can receive a Promise value from another browser window (e.g. iframe), which would have its own Promise, different from the one in the current window or frame, and that check would fail to identify the Promise instance.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Moreover, a library or framework may choose to vend its own Promises and not use the native ES6 Promise implementation to do so. In fact, you may very well be using Promises with libraries in older browsers that have no Promise at all.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Swallowing exceptions</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If at any point in the creation of a Promise, or in the observation of its resolution, a JavaScript exception error occurs, such as a <code>TypeError</code> or <code>ReferenceError</code>, that exception will be caught, and it will force the Promise in question to become rejected.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For example:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>var p = new Promise(function(resolve, reject){
    foo.bar();	  // `foo` is not defined, so error!
    resolve(374); // never gets here :(
});

p.then(
    function fulfilled(){
        // never gets here :(
    },
    function rejected(err){
        // `err` will be a `TypeError` exception object
	// from the `foo.bar()` line.
    }
);</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">But what happens if a Promise is fulfilled yet there was a JS exception error during the observation (in a <code>then(…)</code> registered callback)? Even though it won’t be lost, you may find the way they’re handled a bit surprising. Until you dig a little deeper:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>var p = new Promise( function(resolve,reject){
	resolve(374);
});

p.then(function fulfilled(message){
    foo.bar();
    console.log(message);   // never reached
},
    function rejected(err){
        // never reached
    }
);</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It looks like the exception from <code>foo.bar()</code> really did get swallowed. It wasn’t, though. There was something deeper that went wrong, however, which we failed to listen for. The <code>p.then(…)</code> call itself returns another promise, and it’s that<em> </em>promise that will be rejected with the <code>TypeError</code> exception.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>Handling uncaught exceptions</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">There are other approaches which many would say are <em>better</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">A common suggestion is that Promises should have a <code>done(…)</code> added to them, which essentially marks the Promise chain as “done.” <code>done(…)</code>doesn’t create and return a Promise, so the callbacks passed to <code>done(..)</code> are obviously not wired up to report problems to a chained Promise that doesn’t exist.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s treated as you might usually expect in uncaught error conditions: any exception inside a <code>done(..)</code> rejection handler would be thrown as a global uncaught error (in the developer console, basically):</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>var p = Promise.resolve(374);

p.then(function fulfilled(msg){
    // numbers don't have string functions,
    // so will throw an error
    console.log(msg.toLowerCase());
})
.done(null, function() {
    // If an exception is caused here, it will be thrown globally 
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7"><strong>What’s happening in ES8? Async/await</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">JavaScript ES8 introduced <code>async/await</code><em> </em>that makes the job of working with Promises easier. We’ll briefly go through the possibilities <code>async/await</code> offers and how to leverage them to write async code.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">How to use async/await?</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You define an asynchronous function using the <code>async</code> function declaration. Such functions return an <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/AsyncFunction" target="_self">AsyncFunction</a> object. The <code>AsyncFunction</code> object represents the asynchronous function which executes the code, contained within that function.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When an async function is called, it returns a <code>Promise</code> . When the async function returns a value, that’s not a <code>Promise</code> , a <code>Promise</code> will be automatically created and it will be resolved with the returned value from the function. When the <code>async</code> function throws an exception, the <code>Promise</code> will be rejected with the thrown value.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">An <code>async</code> function can contain an <code>await</code> expression, that pauses the execution of the function and waits for the passed Promise’s resolution, and then resumes the async function’s execution and returns the resolved value.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can think of a <code>Promise</code> in JavaScript as the equivalent of Java’s <code>Future</code> or <code>C#</code>'s Task.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">The purpose of <code>async/await</code> is to simplify the behavior of using promises.</p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s take a look at the following example:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>// Just a standard JavaScript function
function getNumber1() {
    return Promise.resolve('374');
}
// This function does the same as getNumber1
async function getNumber2() {
    return 374;
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Similarly, functions that are throwing exceptions are equivalent to functions that return promises that have been rejected:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function f1() {
    return Promise.reject('Some error');
}
async function f2() {
    throw 'Some error';
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The <code>await</code> keyword can only be used in <code>async</code> functions and allows you to synchronously wait on a Promise. If we use promises outside of an <code>async</code> function, we’ll still have to use <code>then</code> callbacks:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>async function loadData() {
    // `rp` is a request-promise function.
    var promise1 = rp('https://api.example.com/endpoint1');
    var promise2 = rp('https://api.example.com/endpoint2');
   
    // Currently, both requests are fired, concurrently and
    // now we'll have to wait for them to finish
    var response1 = await promise1;
    var response2 = await promise2;
    return response1 + ' ' + response2;
}
// Since, we're not in an `async function` anymore
// we have to use `then`.
loadData().then(() => console.log('Done'));</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You can also define async functions using an “async function expression”. An async function expression is very similar to and has almost the same syntax as, an async function statement. The main difference between an async function expression and an async function statement is the function name, which can be omitted in async function expressions to create anonymous functions. An async function expression can be used as an IIFE (Immediately Invoked Function Expression) which runs as soon as it is defined.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It looks like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>var loadData = async function() {
    // `rp` is a request-promise function.
    var promise1 = rp('https://api.example.com/endpoint1');
    var promise2 = rp('https://api.example.com/endpoint2');
   
    // Currently, both requests are fired, concurrently and
    // now we'll have to wait for them to finish
    var response1 = await promise1;
    var response2 = await promise2;
    return response1 + ' ' + response2;
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">More importantly, async/await is supported in all major browsers:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*z-A-JIe5OWFtgyd2. 640w, https://miro.medium.com/v2/resize:fit:720/0*z-A-JIe5OWFtgyd2. 720w, https://miro.medium.com/v2/resize:fit:750/0*z-A-JIe5OWFtgyd2. 750w, https://miro.medium.com/v2/resize:fit:786/0*z-A-JIe5OWFtgyd2. 786w, https://miro.medium.com/v2/resize:fit:828/0*z-A-JIe5OWFtgyd2. 828w, https://miro.medium.com/v2/resize:fit:1100/0*z-A-JIe5OWFtgyd2. 1100w, https://miro.medium.com/v2/resize:fit:1400/0*z-A-JIe5OWFtgyd2. 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*z-A-JIe5OWFtgyd2. 640w, https://miro.medium.com/v2/resize:fit:720/0*z-A-JIe5OWFtgyd2. 720w, https://miro.medium.com/v2/resize:fit:750/0*z-A-JIe5OWFtgyd2. 750w, https://miro.medium.com/v2/resize:fit:786/0*z-A-JIe5OWFtgyd2. 786w, https://miro.medium.com/v2/resize:fit:828/0*z-A-JIe5OWFtgyd2. 828w, https://miro.medium.com/v2/resize:fit:1100/0*z-A-JIe5OWFtgyd2. 1100w, https://miro.medium.com/v2/resize:fit:1400/0*z-A-JIe5OWFtgyd2. 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*z-A-JIe5OWFtgyd2."></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">If this compatibility is not what you are after, there are also several JS transpilers like <a href="https://babeljs.io/docs/plugins/transform-async-to-generator/" target="_self">Babel</a> and <a href="https://www.typescriptlang.org/docs/handbook/release-notes/typescript-2-3.html" target="_self">TypeScript.</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">At the end of the day, the important thing is not to blindly choose the “latest” approach to writing async code. It’s essential to understand the internals of async JavaScript, learn why it’s so critical and comprehend in-depth the internals of the method you have chosen. Every approach has pros and cons as with everything else in programming.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">5 Tips on writing highly maintainable, non-brittle async code</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;"><strong>Clean code: </strong>Using async/await allows you to write a lot less code. Every time you use async/await you skip a few unnecessary steps: write .then, create an anonymous function to handle the response, name the response from that callback e.g.</li></ol></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>// `rp` is a request-promise function.
rp(‘https://api.example.com/endpoint1').then(function(data) {
 // …
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Versus:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>// `rp` is a request-promise function.
var response = await rp(‘https://api.example.com/endpoint1');</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">2. <strong>Error handling: </strong>Async/await makes it possible to handle both sync and async errors with the same code construct — the well-known try/catch statements. Let’s see how it looks with Promises:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function loadData() {
    try { // Catches synchronous errors.
        getJSON().then(function(response) {
            var parsed = JSON.parse(response);
            console.log(parsed);
        }).catch(function(e) { // Catches asynchronous errors
            console.log(e); 
        });
    } catch(e) {
        console.log(e);
    }
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Versus:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>async function loadData() {
    try {
        var data = JSON.parse(await getJSON());
        console.log(data);
    } catch(e) {
        console.log(e);
    }
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">3.<strong> Conditionals: </strong>Writing conditional code with <code>async/await</code> is a lot more straightforward:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function loadData() {
  return getJSON()
    .then(function(response) {
      if (response.needsAnotherRequest) {
        return makeAnotherRequest(response)
          .then(function(anotherResponse) {
            console.log(anotherResponse)
            return anotherResponse
          })
      } else {
        console.log(response)
        return response
      }
    })
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Versus:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>async function loadData() {
  var response = await getJSON();
  if (response.needsAnotherRequest) {
    var anotherResponse = await makeAnotherRequest(response);
    console.log(anotherResponse)
    return anotherResponse
  } else {
    console.log(response);
    return response;    
  }
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">4. <strong>Stack Frames: </strong>Unlike with <code>async/await</code>, the error stack returned from a promise chain gives no clue of where the error happened. Look at the following:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>function loadData() {
  return callAPromise()
    .then(callback1)
    .then(callback2)
    .then(callback3)
    .then(() => {
      throw new Error("boom");
    })
}
loadData()
  .catch(function(e) {
    console.log(err);
// Error: boom at callAPromise.then.then.then.then (index.js:8:13)
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Versus:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>async function loadData() {
  await callAPromise1()
  await callAPromise2()
  await callAPromise3()
  await callAPromise4()
  await callAPromise5()
  throw new Error("boom");
}
loadData()
  .catch(function(e) {
    console.log(err);
    // output
    // Error: boom at loadData (index.js:7:9)
});</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">5. <strong>Debugging: </strong>If you have used promises, you know that debugging them is a nightmare. For example, if you set a breakpoint inside a .then block and use debug shortcuts like “stop-over”, the debugger will not move to the following .then because it only “steps” through synchronous code.<br></br>With <code>async/await</code> you can step through await calls exactly as if they were normal synchronous functions.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Why is wiring <strong>async JavaScript code is important</strong> <strong>for libraries?</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let me give you an example with our own product, <a href="https://www.sessionstack.com/?utm_source=medium&utm_medium=blog&utm_content=Post-4-eventloop-outro" target="_self">SessionStack. </a>The SessionStack library records everything in your web app/website: all DOM changes, user interactions, JavaScript exceptions, stack traces, failed network requests, and debug messages.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And this all has to happen in your production environment without impacting any of the UX. We need to heavily optimize our code and make it asynchronous as much as possible so that we can increase the number of events that are being processed by the Event Loop.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">And not just the library! When you replay a user session in SessionStack, we have to render everything that happened in your user’s browser at the time the problem occurred, and we have to reconstruct the whole state, allowing you to jump back and forth in the session timeline. In order to make this possible, we’re heavily employing the async opportunities that JavaScript provides.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><strong>Interested in SessionStack? Get started in minutes </strong><a href="https://www.sessionstack.com/?utm_source=medium&utm_medium=blog&utm_content=Post-4-eventloop-GetStarted" target="_self">with our Free plan</a><strong>.</strong></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Happy with SessionStack? Leave a review and <a href="https://bit.ly/G2reviewsBlogHJSW" target="_self">get a Gift card!</a></p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/0*bz8cisGN3YGrB7Cb.png 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/0*bz8cisGN3YGrB7Cb.png 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/0*bz8cisGN3YGrB7Cb.png 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/0*bz8cisGN3YGrB7Cb.png 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/0*bz8cisGN3YGrB7Cb.png 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/0*bz8cisGN3YGrB7Cb.png 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/0*bz8cisGN3YGrB7Cb.png 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/0*bz8cisGN3YGrB7Cb.png 640w, https://miro.medium.com/v2/resize:fit:720/0*bz8cisGN3YGrB7Cb.png 720w, https://miro.medium.com/v2/resize:fit:750/0*bz8cisGN3YGrB7Cb.png 750w, https://miro.medium.com/v2/resize:fit:786/0*bz8cisGN3YGrB7Cb.png 786w, https://miro.medium.com/v2/resize:fit:828/0*bz8cisGN3YGrB7Cb.png 828w, https://miro.medium.com/v2/resize:fit:1100/0*bz8cisGN3YGrB7Cb.png 1100w, https://miro.medium.com/v2/resize:fit:1400/0*bz8cisGN3YGrB7Cb.png 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/0*bz8cisGN3YGrB7Cb.png"></picture></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Resources:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ul><li class="ff3" style="font-size:22px;"><a href="https://github.com/getify/You-Dont-Know-JS/blob/master/async%20%26%20performance/ch2.md" target="_self">https://github.com/getify/You-Dont-Know-JS/blob/master/async%20%26%20performance/ch2.md</a></li><li class="ff3" style="font-size:22px;"><a href="https://github.com/getify/You-Dont-Know-JS/blob/master/async%20%26%20performance/ch3.md" target="_self">https://github.com/getify/You-Dont-Know-JS/blob/master/async%20%26%20performance/ch3.md</a></li><li class="ff3" style="font-size:22px;"><a href="http://nikgrozev.com/2017/10/01/async-await/" target="_self">http://nikgrozev.com/2017/10/01/async-await/</a></li></ul></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Interested in more about JavaScript? Check out all <a href="https://blog.sessionstack.com/how-javascript-works/home" target="_self">“How JavaScript works” publications here</a>.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
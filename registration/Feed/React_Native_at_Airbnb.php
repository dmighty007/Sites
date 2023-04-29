<!DOCTYPE html>
                <html>
                <head>
                    <title>React Native at Airbnb</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/airbnb-engineering/react-native-at-airbnb-f95aa460be1c"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@gpeal?source=post_page-----f95aa460be1c--------------------------------">Author : Gabriel Peal</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>React Native at Airbnb</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">In 2016, we took a big bet on React Native. Two years later, we’re ready to share our experience with the world and show what’s next.</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*P9Kc_EWojKpqfc1-_AhnSg.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Years later, it’s still possible to book a meeting in our Airstream</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>This is the first in a series of blog posts in which we outline our experience with React Native and </em><mark>what</mark><em> is next for mobile at Airbnb.</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When Airbnb launched 10 years ago, smartphones were in their infancy. Since then, smartphones have become an essential tool to navigate our everyday lives, especially as more and more people travel around the globe. As a community that enables new forms of travel for millions of people, having a world-class app is crucial. Mobile devices are oftentimes their primary or only form of communication while away from home.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Since our first three guests stayed in Rausch Street in 2008, mobile usage has increased from zero to millions of bookings per year. Our apps give hosts the ability to manage their listings on the go and provide travelers with inspiration to discover new places and experiences right at their fingertips.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">To keep up with the accelerated pace of mobile usage, we’ve grown our team to more than 100 mobile engineers to enable new experiences and improve existing ones.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Placing a Bet on React Native</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We are continually evaluating new technologies to enable us to improve the experience of using Airbnb for guests and hosts, move quickly, and maintain a great developer experience. In 2016, one of those technologies was React Native. Back then, we recognized how important mobile was becoming to our business but simply didn’t have enough mobile engineers to reach our goals. As a result, we began to explore alternative options. Our website is built primarily with React. It has been a highly effective and universally liked web framework within Airbnb. Because of this, we saw React Native as an opportunity to open up mobile development to more engineers as well as ship code more quickly by leveraging its cross-platform nature.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When we began investing in React Native, we knew that there were risks. We were adding a new, fast-moving and unproven platform to our codebase that had the potential to fragment it instead of unifying it. We also knew that if we were going to invest in React Native, we wanted to do it right. Our goals with React Native were:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;">Allow us to <strong>move faster </strong>as an organization.</li><li class="ff3" style="font-size:22px;">Maintain the <strong>quality bar</strong> set by native.</li><li class="ff3" style="font-size:22px;">Write product code <strong>once</strong> for mobile instead of <strong>twice</strong>.</li><li class="ff3" style="font-size:22px;">Improve upon the <strong>developer experience</strong>.</li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Our Experience</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Over the past two years, that experiment turned into a serious effort. We have built an incredibly strong integration into our apps to enable complex native features such as shared element transitions, parallax, and geofencing as well as bridges to our existing native infrastructure such as networking, experimentation, and internationalization.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We have launched a number of critical products for Airbnb using React Native. React Native enabled us to launch <a href="https://www.airbnb.com/s/experiences" target="_self">Experiences</a>, an entirely new business for Airbnb, as well as dozens of other features from reviews to gift cards. Many of these features were built at a time where we simply did not have enough native engineers to achieve our goals.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Different teams had a wide range of experiences with React Native. React Native proved to be an incredible tool at times while posing technical and organizational challenges in others. In this series, we provide a detailed account of our experiences with it and what we’re doing next.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>In part two</mark><mark>, we enumerate what worked and what didn’t with React Native as a technology.</mark></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><a href="https://medium.com/airbnb-engineering/building-a-cross-platform-mobile-team-3e1837b40a88" target="_self">In part three</a>, we enumerate some of the organizational challenges associated with building a cross-platform mobile team.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><a href="https://medium.com/airbnb-engineering/sunsetting-react-native-1868ba28e30a" target="_self">In part four</a>, we highlight where we stand with React Native today and what its future at Airbnb looks like.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><a href="https://medium.com/airbnb-engineering/whats-next-for-mobile-at-airbnb-5e71618576ab" target="_self">In part five</a>, we take our top learnings from React Native and use them to make native even better.</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
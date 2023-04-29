<!DOCTYPE html>
                <html>
                <head>
                    <title>Functional Programming? Don’t Even Bother, It’s a Silly Toy</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://betterprogramming.pub/fp-toy-7f52ea0a947e"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://suzdalnitski.medium.com/?source=post_page-----7f52ea0a947e--------------------------------">Author : Ilya Suzdalnitski</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Functional Programming? Don’t Even Bother, It’s a Silly Toy</h3></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 text-muted">It will make your productivity plummet</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Perhaps you’ve heard of so-called “functional” programming. Maybe you’ve even been wondering whether you should try it next.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The short answer is <em>hell no!</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Functional programming is full of flaws, is not suitable for real-world projects, and will make your productivity plummet. Why? Keep reading to find out!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Functional Programming is Unable to Fulfill Complex Enterprise Requirements</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9__SLLrrHmofyvibgu5itw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9__SLLrrHmofyvibgu5itw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9__SLLrrHmofyvibgu5itw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9__SLLrrHmofyvibgu5itw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9__SLLrrHmofyvibgu5itw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9__SLLrrHmofyvibgu5itw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*9__SLLrrHmofyvibgu5itw.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9__SLLrrHmofyvibgu5itw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*9__SLLrrHmofyvibgu5itw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*9__SLLrrHmofyvibgu5itw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*9__SLLrrHmofyvibgu5itw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*9__SLLrrHmofyvibgu5itw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*9__SLLrrHmofyvibgu5itw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*9__SLLrrHmofyvibgu5itw.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*9__SLLrrHmofyvibgu5itw.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@seanpollock?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Sean Pollock</a> on <a href="https://unsplash.com/search/photos/enterprise?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><em>Real-world enterprise software demands a complex set of rigorous and compulsory requirements pertaining to the expected amount of embedded abstractions within the software solution. In other words, object-oriented programming enables the programmer to utilize multiple mechanisms of abstraction that fully satisfy the complex requirements demanded by the enterprise.</em></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That was a mouthful, but bear with me! Things will become crystal-clear in a moment.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So-called “functional” programming has no proper mechanism of abstraction since it is based on mathematics (which obviously is inferior and has no applications in the real world apart from academia). Unlike OOP, functional programming makes no attempt to fulfill the numerous rigorous and complex requirements demanded by the enterprise.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This code snippet to demonstrates the issues prevalent with functional programming:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import { filter, first, get } from 'lodash/fp';

const filterByType = type =>
  filter( x => x.type === type );

const fruits = [
  { type: 'apple', price: 1.99 },
  { type: 'orange', price: 2.99 },
  { type: 'grape', price: 44.95 }  
];

const getFruitPrice = type => fruits =>
  fruits
  |> filterByType(type)
  |> first
  |> get('price');

const getApplePrice = getFruitPrice('apple');

console.log('apple price', getApplePrice(fruits));</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If this makes you angry, you’are not alone!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Functional programming makes no attempt to properly abstract and encapsulate the functionality, as typically is demanded by any serious enterprise.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">No self-respecting software engineer would ever write anything like this! If they do, then immediately they should be fired by any seriously large enterprise to prevent further damage. In the next section, we’ll take a look at a properly abstracted OOP program.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Functional Software Solutions Aren’t Future-Proof</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*xrWyrkFrT5Zl2rvNlIFm9w.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://www.pexels.com/@karatara-278139?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels" target="_self">karatara </a>from <a href="https://www.pexels.com/photo/male-statue-decor-931317/?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels" target="_self">Pexels</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It’s no secret that the foremost duty of any professional and self-respecting software engineer is to write future-proof code that satisfies complex business requirements.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In contrast with the disastrous functional code snippet above, let’s take a quick look at a properly abstracted OOP program. It does the same thing, but in an abstract and a future-proof way:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class Fruit {
  constructor(type, price) {
    this.type = type;
    this.price = price;
  }
}

class AbstractFruitFactory {
  make(type, price) {
    return new Fruit(type, price);
  }
}

class AppleFactory extends AbstractFruitFactory {
  make(price) {
    return super.make("apple", price);
  }
}

class OrangeFactory extends AbstractFruitFactory {
  make(price) {
    return super.make("orange", price);
  }
}

class GrapeFactory extends AbstractFruitFactory {
  make(price) {
    return super.make("grape", price);
  }
}

class FruitRepository {
  constructor() {
    this.fruitList = [];
  }

  locate(strategy) {
    return strategy.locate(this.fruitList);
  }

  put(fruit) {
    this.fruitList.push(fruit);
  }
}

class FruitLocationStrategy {
  constructor(fruitType) {
    this.fruitType = fruitType;
  }

  locate(list) {
    return list.find(x => x.type === this.fruitType);
  }
}

class FruitPriceLocator {
  constructor(fruitRepository, locationStrategy) {
    this.fruitRepository = fruitRepository;
    this.locationStrategy = locationStrategy;
  }

  locatePrice() {
    return this.fruitRepository.locate(this.locationStrategy).price;
  }
}

const appleFactory = new AppleFactory();
const orangeFactory = new OrangeFactory();
const grapeFactory = new GrapeFactory();

const fruitRepository = new FruitRepository();
fruitRepository.put(appleFactory.make(1.99));
fruitRepository.put(orangeFactory.make(2.99));
fruitRepository.put(grapeFactory.make(44.95));

const appleLocationStrategy = new FruitLocationStrategy("apple");

const applePriceLocator = new FruitPriceLocator(
  fruitRepository,
  appleLocationStrategy
);

const applePrice = applePriceLocator.locatePrice();

console.log("apple", applePrice);
</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see, this has all of the core functionality properly abstracted. This code is <em>solid</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Don’t let the simplicity fool you! It completely fulfills all of the complex business requirements that would typically be demanded by any seriously large enterprise.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This robust solution is completely future-proof, and properly makes use of enterprise-grade dependency injection.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Serious Management Needs Serious Features</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*h3_4ruihrcX0b5EwwQYMUw.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*h3_4ruihrcX0b5EwwQYMUw.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://www.pexels.com/@rawpixel?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels" target="_self">rawpixel.com </a>from <a href="https://www.pexels.com/photo/person-using-macbook-pro-while-holding-mug-1493370/?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels" target="_self">Pexels</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Hopefully by now the development team has fulfilled the complex business requirements pertaining to code abstraction, as set forth by the enterprise. The developer resources should now shift focus towards implementing the features defined by the project managers.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As any real-world enterprise product manager knows, only new features delivered have real business value. They shouldn’t be allowed to waste their resources on time-wasters like unit-testing and refactoring.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;"><mark>It is obvious that so-called “functional” programming is flawed, it makes redundant things like refactoring and unit testing unnecessarily easy.</mark> This, in turn, will act as a distraction to the development team — they might accidentally waste time on those useless activities, instead of delivering new features.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This example clearly demonstrates the inferiority of functional programming — it makes refactoring too easy:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>// before refactoring:

// calculator.js:
const isValidInput = text => true;

const btnAddClick = (aText, bText) => {
  if (!isValidInput(aText) || !isValidInput(bText)) {
    return;
  }
}


// after refactoring:

// inputValidator.js:
export const isValidInput = text => true;

// calculator.js:
import { isValidInput } from './inputValidator';

const btnAddClick = (aText, bText, _isValidInput = isValidInput) => {
  if (!_isValidInput(aText) || !_isValidInput(bText)) {
    return;
  }
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If such refactoring makes you cringe from its simplicity, then you’re not alone! Six lines of code before the refactor, and only seven lines of code after? You must be kidding me!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s contrast it with a proper refactor of object-oriented code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>// before refactoring:
public class CalculatorForm {
    private string aText, bText;
    
    private bool IsValidInput(string text) => true;
    
    private void btnAddClick(object sender, EventArgs e) {
        if ( !IsValidInput(bText) || !IsValidInput(aText) ) {
            return;
        }
    }
}


// after refactoring:
public class CalculatorForm {
    private string aText, bText;
    
    private readonly IInputValidator _inputValidator;
    
    public CalculatorForm(IInputValidator inputValidator) {
        _inputValidator = inputValidator;
    }
    
    private void btnAddClick(object sender, EventArgs e) {
        if ( !_inputValidator.IsValidInput(bText)
            || !_inputValidator.IsValidInput(aText) ) {
            return;
        }
    }
}

public interface IInputValidator {
    bool IsValidInput(string text);
}

public class InputValidator : IInputValidator {
    public bool IsValidInput(string text) => true;
}

public class InputValidatorFactory {
    public IInputValidator CreateInputValidator() => new InputValidator();
}</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">That’s what proper programming looks like! Nine lines of code before, and 22 after. There’s more effort required to refactor, which will make the enterprise developer resources think twice before engaging in such wasteful activity as refactoring.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">The Fallacy of Declarative Code</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*MTb-Xx5D0H6LUJu_cQ9fMQ.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@officestock?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Sebastian Herrmann</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The so-called “functional” programmers erroneously pride themselves in writing declarative code. That’s nothing to be proud of — such code merely creates an illusion<strong> </strong>of productivity.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The core responsibility of any developer should consist of thinking about proper rigorous object-oriented abstractions (as also demanded by any seriously large enterprise).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s take a look at properly abstracted OOP code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>class CountryUserSelectionStrategy {
  constructor(country) {
    this.country = country;
  }
  
  isMatch(user) {
    return user.country === this.country;
  }
}

class UserSelector {
  constructor(repository, userSelectionStrategy) {
    this.repository = repository;
    this.userSelectionStrategy = userSelectionStrategy;
  }
  
  selectUser() {    
    let user = null;

    for (const u in users) {
      if ( this.userSelectionStrategy.isMatch(u) ) {
        user = u;
        break;
      }
    }
    
    return user;
  }
}

const userRepository = new UserRepository();
const userInitializer = new UserInitializer();
userInitializer.initialize(userRepository);

const americanSelectionStrategy = new CountryUserSelectionStrategy('USA');
const americanUserSelector = new UserSelector(userRepository, americanSelectionStrategy);

const american = americanUserSelector.selectUser();

console.log('American', american);</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Please focus on the imperative loop at line 20. Ignore the minor boilerplate OOP code, unrelated to the task at hand. It had to be included in order to make the code sample adhere to the rigorous abstraction requirements set forth by the serious enterprise.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Declarative code, on the other hand, is too concise, and erroneously makes the developers focus on the less important things, like business logic. Contrast the robust enterprise solution described above to a snippet of inferior “declarative” code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>SELECT * FROM Users WHERE Country=’USA’;</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">SQL makes me cringe every single time because of being declarative. Why SQL? Why can’t they have the developers make use of proper enterprise-grade abstractions and write normal object-oriented code? Especially when we already have those tools at our disposal. It’s mind-blowing.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Real World Modelling</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*EwSXqvKmlIJXlEAv7cizRQ.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@jkozoski?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Juliana Kozoski</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Object-Oriented Programming is genius. Unlike “functional” programming, it perfectly models the real world with advanced techniques like inheritance, polymorphism, and encapsulation.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Any self-respecting software developer should be making use of inheritance on a daily basis to achieve code reusability. As I said earlier, inheritance perfectly models the real world. Cats, for example, always inherit their properties and behaviors from a single abstract real-world animal. Life originated in the ocean a few billion years ago. Therefore all mammals (including the cats) have inherited the properties of the primordial fish, like <code>garfield.fishHead</code>, and their methods like <code>garfield.swim </code>and <code>garfield.layCaviar</code>. No wonder cats enjoy <a href="https://www.youtube.com/watch?v=jQZtk-fCWQ4" target="_self">bathing</a> and swimming so much! Humans are actually the same, we can easily start laying caviar if we want to!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Our programs should always follow similar hierarchical approaches to code organization. Functional programming erroneously rids the developers of such amazing code sharing constructs inspired by the real world. This has far-reaching consequences, especially in seriously complex enterprise software.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Functions Should Always be Bound to Objects</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*dhgHI3diCVPA2JWYYqnWRA.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*dhgHI3diCVPA2JWYYqnWRA.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@pawel_czerwinski?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Paweł Czerwiński</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This is just common sense and also perfectly models the real world. The notebook you buy at Chapters comes with a built-in “write method”. This method is to be called whenever you’re planning to write things down. You may not realize this, but you also have methods like <code>.eat(veggies)</code>, <code>doHomeWork</code> . This is just common sense, how else would your mom be able to make you eat your veggies and have you complete your homework? Of course, she used to call those methods directly!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">No job in the real world can be done without hiring a dedicated<code>Manager</code> that coordinates tasks. Young people probably need a manager to satisfy their basic human needs, you know, things like “netflix-n-chill”. Who is going to coordinate the entire process, after all? If they’re smart, then they’d hire multiple managers, just like OOP recommends.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In the real world, creating anything new and cool also requires having a dedicated <code>Factory</code>. Leonardo owned a <code>MonaLisaFactory</code> , Trump builds a secret<code>WallFactory</code>. Russia used to have a <code>CommunismFactory</code> , and nowadays mainly maintains its<code>CorruptionFactory</code>, hidden somewhere deep within the dungeons of Kremlin.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">One can clearly see that this is just another nail in the “functional” coffin since it makes no attempt to model the real world. The functions are allowed to exist separately from objects, which is plain wrong. Functional programming, obviously, is unsuitable for any serious real-world coding.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Functional Programming Provides no Opportunity for Growth</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*Zr97p4ocoq0PwjA9IK2qmA.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@elijahhail?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Elijah Hail</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">First and foremost, software engineers should focus on constant improvement and growth. A vast amount of knowledge has to be acquired by a software engineer in order to truly master Object-Oriented Programming.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">First, they’d have to learn advanced OOP techniques like inheritance, abstraction, encapsulation, and polymorphism. Then they should familiarize themselves with a multitude of design patterns (like the Singleton), and start making use of them in their code. There about 30 basic design patterns that have to be learned. Ideally, somewhere around this point, the developer should start making use of various enterprise-grade abstraction techniques in their code.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The next step is to get familiar with techniques like Domain-Driven Design and to learn to break down the monolith. It is also recommended to learn proper refactoring tools, like Resharper, since OOP code is not trivial to refactor.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">It takes at least 20–30 years to get good with OOP. Even then most people with 30 years of OOP experience haven’t truly mastered it. The learning path is rough, filled with uncertainty. A lifetime of learning awaits the OOP developer, how exciting is that?</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">What about the poor functional programmers? Unfortunately, there’s not much to learn. I have personally taught a few junior developers functional programming in JavaScript, and they became really good at it in about half a year. They simply had to understand a few basic concepts and then learned to apply them pretty quickly. Where’s the thrill of lifetime learning? I wouldn’t envy them.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Success is a Journey, Not a Destination</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*9LMAdr5MeLPhlPFh4kOXzg.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@visualsbyroyalz?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Anastase Maragos</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s admit it, we programmers are being paid for our time. Just as the construction workers who’ve been digging holes not far from my house for the past two years (btw they’re building a ̶w̶a̶l̶l road).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s define programmer productivity. Everyone who has worked in any seriously large enterprise knows the simple formula for success:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>productivity = lines_of_code x bugs_fixed</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Bugs Fixed</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Human brains are really bad at working with state, we can only hold about five items in our working memory at a given time. State in programming usually refers any data in memory — e.g. fields/variables in OOP. Working with mutable state is very similar to juggling. I don’t know too many people who can juggle three balls, let alone five.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">OOP makes good use of this weakness. Almost everything is mutable in OOP. Thank god that OOP takes the matter of developer productivity seriously! In OOP all of the mutable state is also shared by reference! This means that you not only have to think about the mutable state of the object that you currently are working with, you also have to think about the mutable state of 10–50 of other objects that it interacts with! This is akin to trying to juggle 50 balls at the same time, and also has the added benefit of acting as a really good exercise for our brain-muscle.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Bugs? Yes, eventually we will drop some of the balls that we’ve been juggling. We will maybe miss some smallish details from the interaction of those 50 objects. But who cares, really? Bugs should be reported by customers in production, that’s how any seriously large enterprise works. Then the bugs go into the JIRA backlog (serious enterprise-grade software as well). A few years from now the bugs will be fixed. Problem solved!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">God, I love using my mobile banking app. It is very advanced, the bank values my business and they take my privacy seriously. The bugs are just features (I was told)!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So-called “functional” programming erroneously isolates state and makes the state immutable. This has an unfortunate consequence of reducing complexity, and thus reducing the number of bugs. Having fewer bugs in the codebase means that we will have fewer bugs to fix. Contractors won’t be able to keep charging their clients for those bug fixes. Developers working in any seriously large enterprise will start looking bad in the eyes of their managers, while seriously jeopardizing their chances of success within the organization.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Lines of Code</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We should also be able to show continuous progress to our management. And what is the most effective way to show progress? Lines of code, of course! Had we all switched to functional programming, we’d make the management very upset and suspicious. The “declarative” code would have made our code more concise, and the lines of code would decrease drastically. Up to 3–5 times less code to achieve the exact same goal, this is unacceptable!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">In other words, our productivity would plummet in the face of serious enterprise management, and our jobs once again would be put in jeopardy. It is in our best interests to stay away from the “functional” programming.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The same advice applies to the contractors who charge their clients for hours worked. Here’s a simple formula for success:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>lines_of_code = time_to_write = $$$pure_profit$$$</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">This formula for success, of course, also directly applies to the serious software contractors who get paid for the lines of code:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre><span>if (1 == '1') {<br/>  doStuff();<br/>} else {<br/>  // pure profit<br/>}</span></pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Spaghetti is Our Bread and Butter</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Unlike Functional Programming, OOP offers us a consistent way to write spaghetti code — a real boon to developer productivity. Spaghetti code equates to more billable hours, which translates to pure profit for the serious OOP engineers. Spaghetti doesn’t only taste delicious, it is the bread and butter of OOP programmers!</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Object-orientation is a true boon for contractors and employees of serious enterprise alike.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Bug Prevention Department</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*rb3aVdxq12opwW8FDTz9rA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*rb3aVdxq12opwW8FDTz9rA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*rb3aVdxq12opwW8FDTz9rA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*rb3aVdxq12opwW8FDTz9rA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*rb3aVdxq12opwW8FDTz9rA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*rb3aVdxq12opwW8FDTz9rA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*rb3aVdxq12opwW8FDTz9rA.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*rb3aVdxq12opwW8FDTz9rA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*rb3aVdxq12opwW8FDTz9rA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*rb3aVdxq12opwW8FDTz9rA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*rb3aVdxq12opwW8FDTz9rA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*rb3aVdxq12opwW8FDTz9rA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*rb3aVdxq12opwW8FDTz9rA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*rb3aVdxq12opwW8FDTz9rA.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*rb3aVdxq12opwW8FDTz9rA.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@icons8?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Icons8 team</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">You should not fear using OOP. Once again, those pesky bugs are nothing to worry about! Any serious enterprise has an entire bug prevention department (aka customer support), whose main job is to protect their developer resources from angry customers. It’s the customer’s fault that they can’t use the app properly, after all.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The developers should not be bothered with such irrelevant things as bug reports. This ensures that none of the enterprise resources are wasted, and allows the developers to focus on implementing new features while making use of proper enterprise-grade object-oriented abstractions and complex design patterns.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">Bug Report Process</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">An elaborate and rigorous process is typically put in place to protect enterprise resources. Once a customer has encountered a bug, they typically have to look for the customer support phone number online. Then the customer is presented with an advanced and interactive phone menu consisting of various options. It usually takes two to five minutes to listen to the menu and select the correct option. The least persistent customers usually fall off at this step.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Then the customer is usually told that the company is experiencing an “unexpectedly large volume of calls”, and that “the average wait time is 56 minutes”. They usually apologize for the inconvenience and mention how much they value the business of the customer. Most of the customers will usually decide not to report the bug at this step. To keep the customer entertained, inspirational music typically is being played. They’re also told to check out the awesome new app. The app that the customer was having trouble with in the first place.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After the 56-minute wait is over, the call gets routed to a call center located somewhere in The Northern Americas. The local American employees typically go through rigorous training that enables them to speak with a thick Indian or Bulgarian accent. The agent mentions that the app in question is not his responsibility but happily will transfer the client to another department.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">After another 42 minute wait, an agent happily tells the customer that this bug actually is a feature, and recommends the user to go through the help section of the app. If the customer is still being persistent, the agent might create a support ticket and the customer might even hear back! The bug can’t be reproduced.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I hope by now you are convinced, that worrying about bugs is not the job of a developer. Serious measures are typically put in place by the enterprise to protect their developer resources.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Avoid Rookie Job Interview Mistakes</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*NiQBQdOFDnvqUwoRtyIu7Q.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@austindistel?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Austin Distel</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">If you are actively looking for a job, then put some effort into removing all of the “functional” nonsense from your resume or nobody will take you seriously. Nobody in the real enterprise world is trained in childish things like “function composition”, “purity”, “monads” or “immutability”. You don’t want to look like an outsider. Speaking about such things will make your interviewer appear dumb, and will completely annihilate your chances of success.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The enterprise technical recruiters also go through mandatory rigorous training, which enables them to properly differentiate between serious technologies like Java and JavaScript.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Be sure to sprinkle words throughout your resume that demonstrate your extensive knowledge of the various rigorous enterprise-grade abstraction techniques like classes, inheritance, design patterns, dependency injection, SOLID, abstract factory, and singleton.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When asked to implement the classical FizzBuzz job interview problem on the whiteboard, make sure that you come well-prepared. This is your opportunity to shine and demonstrate your rigorous enterprise-grade system design abilities. Your first step is to adequately design the solution while making use of proper OOP design patterns and rigorous enterprise-grade abstraction techniques. <a href="https://github.com/EnterpriseQualityCoding/FizzBuzzEnterpriseEdition" target="_self">FizzBuzzEnterpriseEdition</a> is a good starting point. Many make the rookie mistake of relying on inferior design techniques like functions. No wonder they never hear back from the potential employer.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Functional Programming Can’t Possibly be Used to Build Serious Software Solutions</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*ntIFzdCPPHIWPa04YaS0zw.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*ntIFzdCPPHIWPa04YaS0zw.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@markusspiske?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Markus Spiske</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Having considered all of the serious and rigorous arguments above, one can now clearly see that nothing good ever came out of this so-called “functional” programming. It’s clear it should be avoided at all costs.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">The so-called “functional” programming was a fad of the last couple of years. It’s good that it is already going away! The big fish like Facebook and Microsoft have long ago realized the limitations of functional programming and the clear superiority of object-oriented approaches to code organization. They’re shifting their resources towards a new generation of object-oriented languages, namely <a href="https://reasonml.github.io/" target="_self">ReasonOL</a> and <a href="https://www.microsoft.com/en-us/research/project/bosque-programming-language/" target="_self">BosqueOOP</a>. Such languages bring state mutability to a whole new level and fortunately have no support for useless functional things like immutable data structures.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">The Boon of Gods</h4></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*-QinJHw2Oh6kvXVYapWdfw.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/max/700/1*-QinJHw2Oh6kvXVYapWdfw.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Image by <a href="https://pixabay.com/users/janeb13-725943/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1159966" target="_self">Welcome to all and thank you for your visit ! ツ</a> from <a href="https://pixabay.com/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1159966" target="_self">Pixabay</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">So you might ask what are the alternatives to the so-called “functional” programming? Object-Oriented Programming, silly! It was bestowed upon us by the one true god of programming himself. OOP is a force to be reckoned with. It is the ultimate tool for developer productivity and will always keep you and your teammates busy (and employed).</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">May the <em>(object-oriented)</em> force be with you. And your codes. I’m one with the force. Peace.</p></div></div></div></section><section data-bs-version="5.1" class="content7 cid-ttbhFZC4Ql" id="content7-8" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
        <div class="container"><div class="row justify-content-center"><div class="col-12 col-md-9"><blockquote><p class="ff4">For a more in-depth explanation, check out my other article <a href="https://medium.com/@ilyasz/object-oriented-programming-the-trillion-dollar-disaster-️-92a4b666c7c7" target="_self">Object-Oriented Programming, the Boon of Gods</a><strong>.</strong></p></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
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
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">PS&gt; As most of you have guessed, the post is a satire. To all of the new developers out there — don’t take this seriously, FP is great! Invest some time into learning functional programming, and you will be ahead of most of your peers.<br></br>I hope you’ve enjoyed reading this post as much as I’ve enjoyed writing it!</p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
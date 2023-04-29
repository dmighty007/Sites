<!DOCTYPE html>
                <html>
                <head>
                    <title>Passing Data Between a Parent and Child in React</title>
                <?php include_once 'Elemental/header.php'; ?><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><br><br><h5> This article is reformatted from originally published at <a href="https://medium.com/@jasminegump/passing-data-between-a-parent-and-child-in-react-deea2ec8e654"><strong>TDS(Towards Data Science)</strong></a></h5></br><h5> <a href="https://medium.com/@jasminegump?source=post_page-----deea2ec8e654--------------------------------">Author : Jasmine Gump</a> </h5></div></div></div></section><section data-bs-version="5.1" class="content4 cid-tt5SM2WLsM" id="content4-2" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-9">
                        <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                            <strong>Passing Data Between a Parent and Child in React</h3></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="image_style" style="width:96%;"><picture><source sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/format:webp/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/format:webp/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/format:webp/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/format:webp/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/format:webp/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/format:webp/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/format:webp/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 1400w" type="image/webp"/><source data-testid="og" sizes="(min-resolution: 4dppx) and (max-width: 700px) 50vw, (-webkit-min-device-pixel-ratio: 4) and (max-width: 700px) 50vw, (min-resolution: 3dppx) and (max-width: 700px) 67vw, (-webkit-min-device-pixel-ratio: 3) and (max-width: 700px) 65vw, (min-resolution: 2.5dppx) and (max-width: 700px) 80vw, (-webkit-min-device-pixel-ratio: 2.5) and (max-width: 700px) 80vw, (min-resolution: 2dppx) and (max-width: 700px) 100vw, (-webkit-min-device-pixel-ratio: 2) and (max-width: 700px) 100vw, 700px" srcset="https://miro.medium.com/v2/resize:fit:640/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 640w, https://miro.medium.com/v2/resize:fit:720/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 720w, https://miro.medium.com/v2/resize:fit:750/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 750w, https://miro.medium.com/v2/resize:fit:786/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 786w, https://miro.medium.com/v2/resize:fit:828/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 828w, https://miro.medium.com/v2/resize:fit:1100/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 1100w, https://miro.medium.com/v2/resize:fit:1400/1*hoPFfja-AbwKVHNuL-xrAA.jpeg 1400w"/><img alt="" loading="lazy" role="presentation" src="https://miro.medium.com/v2/resize:fit:700/1*hoPFfja-AbwKVHNuL-xrAA.jpeg"></picture></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Photo by <a href="https://unsplash.com/@oowgnuj?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Jungwoo Hong</a> on <a href="https://unsplash.com/s/photos/arrows?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_self">Unsplash</a></p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Today I’ll be going over how data is passed between parent and child components in React. There are two directions a data can go and it’s the following:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;">From parent to child</li><li class="ff3" style="font-size:22px;">From child to parent</li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I’ll be going over these in the following sections.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><strong>Passing Data From Parent to Child</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">When you need to pass data from a parent to child class component, you do this by using <em>props</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For example, let’s say you have two class components, <em>Parent</em> and <em>Child</em>, and you want to pass a state in the parent to the child. You would do something like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import React from 'react';

class Parent extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            data: 'Data from parent'
        }
    }

    render(){
        const {data} = this.state;
        return(
            <div>
                <Child dataParentToChild = {data}/>
            </div>
        )
    }
}

class Child extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            data: this.props.dataParentToChild
        }
    }

    render(){
        const {data} = this.state;
        return(
            <div>
                {data}
            </div>
        )
    }
}

export default Parent;</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Parent to Child Using Class Components</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see, the parent component passes <em>props</em> to the child component and the child can then access the data from the parent via <em>this.props</em>.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">For the same example, if you have two function components instead of class components, you don’t even need to use props. You can do something like the following:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import React from 'react';

function Parent(){
    const data = 'Data from parent';
    return(
        <div>
            <Child dataParentToChild = {data}/>
        </div>
    )
}

function Child ({dataParentToChild}){
    return(
        <div>
            {dataParentToChild}
        </div>
    )
}

export default Parent;</pre></div><p class="mbr-description mbr-fonts-style mt-2 align-center display-12 text-muted" style="font-size:12px;">Parent to Child using Function Components</p><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Passing Data from <strong>Child to Parent</strong></h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Passing the data from the child to parent component is a bit trickier. In order to do this, you need to do the following steps:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;">Create a callback function in the parent component. This callback function will get the data from the child component.</li><li class="ff3" style="font-size:22px;">Pass the callback function in the parent as a prop to the child component.</li><li class="ff3" style="font-size:22px;">The child component calls the parent callback function using <em>props</em>.</li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">Let’s see how these steps are implemented using an example. You have two class components, Parent and Child. The Child component has a form that can be submitted in order to send its data up to the Parent component. It would look something like this:</p></div></div></div></section><section data-bs-version="5.1" class="image3 cid-tt612oXwA9" id="image3-5" style="padding-top:0px; padding-bottom:0px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="image-wrapper"><div class="iframe"><pre>import React from 'react';

class Parent extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            data: null
        }
    }

    handleCallback = (childData) =>{
        this.setState({data: childData})
    }

    render(){
        const {data} = this.state;
        return(
            <div>
                <Child parentCallback = {this.handleCallback}/>
                {data}
            </div>
        )
    }
}

class Child extends React.Component{
  
    onTrigger = (event) => {
        this.props.parentCallback("Data from child");
        event.preventDefault();
    }

    render(){
        return(
        <div>
            <form onSubmit = {this.onTrigger}>
                <input type = "submit" value = "Submit"/>
            </form>
        </div>
        )
    }
}

export default Parent;</pre></div><br></div></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">As you can see, when the Child component is triggered, it will call the Parent component’s callback function with data it wants to pass to the parent. The Parent’s callback function will handle the data it received from the child.</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Conclusion</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">We’ve gone over passing data between a parent and child components in React. Just as a recap, here’s the different methods we’ve covered:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><ol><li class="ff3" style="font-size:22px;">Passing data from parent to child class components</li><li class="ff3" style="font-size:22px;">Passing data from parent to child function components</li><li class="ff3" style="font-size:22px;">Passing data from child to parent</li></ol></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Citation</h4></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">I used the following resources to help me understand these topics:</p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">[1]. Alex Sears. <em>Parent-Child Component Communication.(2020). </em><a href="https://scotch.io/courses/getting-started-with-react/parent-child-component-communication" target="_self">https://scotch.io/courses/getting-started-with-react/parent-child-component-communication</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">[2]. Sakshi Chahal. <em>Passing Data Between React Components — Parent, Children, Siblings.</em> (2020). <a href="https://towardsdatascience.com/passing-data-between-react-components-parent-children-siblings-a64f89e24ecf" target="_self">https://towardsdatascience.com/passing-data-between-react-components-parent-children-siblings-a64f89e24ecf</a></p></div></div></div></section><section data-bs-version="5.1" class="content5 cid-tt5UseJ9wk" id="content5-4" style="padding-top:0px; padding-bottom:0px;background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9"><p class="ff3" style="font-size:22px;">[3]. Ruth M. Pardee. <em>Passing Data Between React Components</em>. (2020). <a href="https://medium.com/@ruthmpardee/passing-data-between-react-components-103ad82ebd17" target="_self">https://medium.com/@ruthmpardee/passing-data-between-react-components-103ad82ebd17</a></p></div></div></div></section><?php include_once 'Elemental/footer.php'; ?>
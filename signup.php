<?php session_start();
    define('TITLE',"Register");
    
    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
    include 'included/HTML-head.php';
?>  
<style>
    .gradient-custom-3 {
      /* fallback for old browsers */
      background: #84fab0;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }
    .gradient-custom-4 {
      /* fallback for old browsers */
      background: #84fab0;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }

      #identicon {
        width: 220px;
        height: 220px;
        margin: 0 auto;
        display: inline-block;
      }

      #identicon-input {
        width:100%;
        padding:4px;
        padding-left:14px;
        padding-right:14px;
        text-align:center;
        padding-top: 6px;
        border: 0;
        border-bottom: 1px solid rgb(172, 172, 172);
        overflow: hidden;
        text-overflow: ellipsis;
        color: #111;
        background-color: #ffffff00;
      }

      #identicon-input:focus {
        outline: none;
      }
      .buttons {
        display:inline-block;
        width:40px;
        box-sizing:border-box;
        padding:5px;
      }
      #button-png:hover {
        background-color:#f6ecff;
      }
      .svg-button {
        fill:#6a6b6c;
        fill-rule:evenodd;
        cursor:pointer;
      }

      .svg-button:hover {
        fill:#868789;
      }

      .ma-spinner {
        display: inline-block;
        position: relative;
        width: 40px;
        height: 40px;
        margin-top: 90px;
      }

      .ma-spinner div {
        position: absolute;
        border: 4px solid #ababab;
        opacity: 1;
        border-radius: 50%;
        animation: ma-spinner 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
      }
      .ma-spinner div:nth-child(2) {
        animation-delay: -0.5s;
      }

      @keyframes ma-spinner {
        0% {
          top: 23px;
          left: 23px;
          width: 0;
          height: 0;
          opacity: 1;
        }
        100% {
          top: 0px;
          left: 0px;
          width: 46px;
          height: 46px;
          opacity: 0;
        }
      }

      .noselect {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
</style>
  </head>
  <body>
  <section class="vh-100 bg-image"
  style="background-image: url('img/5333978.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                        
              <?php
                            
                            if(isset($_GET['error']))
                            {
                                if($_GET['error'] == 'emptyfields')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Fill In All The Fields
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invalidmailuid')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Please enter a valid email and user name
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invalidmail')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Please enter a valid email
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invaliduid')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Please enter a valid user name
                                          </div>';
                                }
                                else if ($_GET['error'] == 'passwordcheck')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Passwords donot match
                                          </div>';
                                }
                                else if ($_GET['error'] == 'usertaken')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> This User name is already taken
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invalidimagetype')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Invalid image type 
                                          </div>';
                                }
                                else if ($_GET['error'] == 'imguploaderror')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Image upload error, please try again
                                          </div>';
                                }
                                else if ($_GET['error'] == 'imgsizeexceeded')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Image too large
                                          </div>';
                                }
                                else if ($_GET['error'] == 'sqlerror')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Website Error: </strong> Contact admin to have the issue fixed
                                          </div>';
                                }
                            }
                            else if (isset($_GET['signup']) == 'success')
                            {
                                
                              header("Location: login.php?");
                              exit();
                              //echo '<div class="alert alert-success" role="alert">
                               //         <strong>Signup Successful</strong> Please Login from the login menu
                               //       </div>';
                            }
                        ?>
              <form id="signup-form" action="included/signup.inc.php" method='post' 
                                  enctype="multipart/form-data">

                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" id="name" name="uid" placeholder="Username" maxlength="25">
                <!--<label for="name">Username</label>-->
                </div>

                <div class="form-outline mb-4">
                <!--<label for="email">Email</label>-->
                  <input type="email" class="form-control form-control-lg" id="email" name="mail" placeholder="Email">
                  
                </div>

                <div class="form-outline mb-4">
                <!--<label for="pwd">Password</label>-->
                <input type="password" class="form-control form-control-lg" id="pwd" name="pwd" placeholder="Password">
                  
                </div>

                <div class="form-outline mb-4">
                <input type="password" class="form-control form-control-lg" id="pwd-repeat" name="pwd-repeat" 
                                   placeholder="Repeat Password">
                <!--<label for="pwd-repeat">Confirmation</label>-->
                </div>
                <div class="form-group col-md-6" style="display:none;">
                  <label for="f-name">First Name</label>
                  <input type="text" class="form-control" id="f-name" name="f-name" oninput="getNewIdenticon(this.value)" onfocus="stopDemoNow()" >
                </div>
                <div class="form-group col-md-6" style="display:none;">
                            <label for="l-name">Last Name</label>
                            <input type="text" class="form-control" id="l-name" name="l-name" placeholder="Last name" maxlength="35">
                </div>
                        <div class="form-row" style="display:none;">
                            <div class="form-group col-md-6 align-self-center">
                                <label >Gender</label><br>
                                <input id="toggle-on" class="toggle toggle-left" name="gender" value="m" type="radio" checked>
                                <label for="toggle-on" class="btn-r">M</label>
                                <input id="toggle-off" class="toggle toggle-right" name="gender" value="f" type="radio">
                                <label for="toggle-off" class="btn-r">F</label>
                            </div>
                            <div class="form-group col-md-6 align-self-center">
                                <img id="blah" class="rounded" src="#" alt="your image" class="img-responsive rounded"
                                     style="height: 200px; width: 190px; object-fit: cover;">
                                <br><br><label class="btn btn-primary ">
                                    Set Avatar <input type="file" id="imgInp" name='dp' hidden>
                              </label>
                            </div>
                        </div>
                        <div class="form-row" style="display:none;">
                            <div class="form-group col-md-12">
                                <label for="headline">Headline</label>
                            <input type="text" class="form-control" id="headline" name="headline" 
                                   placeholder="Your profile headline" 
                                   maxlength="120">
                            </div>
                        </div>
                        <div class="form-group" style="display:none;">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="6" maxlength="1000"
                            placeholder="Tell people about yourself"></textarea>
                          </div>

                <!--<p class="identicon-link" id="identicon-link" target="_blank">-->
                      <div id="identicon" ><!--onload="newIdenticon()">-->
                        <div class="ma-spinner"><div></div><div></div></div>
                      </div>
                          <!--</p>-->

                    <div class="noselect">
                      <h5>Change your avatar!</h5>
                      <div class="buttons">
                        <div style="cursor:pointer;" onclick="newIdenticon()">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><title>Change</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M30,0A30,30,0,1,1,0,30,30,30,0,0,1,30,0Z" class="svg-button" /><path d="M43.11,43.11A18.56,18.56,0,0,0,31.89,11.55a1.45,1.45,0,0,0-1.12.37A1.39,1.39,0,0,0,30.3,13v.17a1.44,1.44,0,0,0,1.29,1.43A15.5,15.5,0,0,1,41,41l-.35.35a.6.6,0,0,1-.85,0l-3.23-3.23a.6.6,0,0,0-1,.42V48a.6.6,0,0,0,.6.6h9.47a.58.58,0,0,0,.55-.37.57.57,0,0,0-.13-.65L42.76,44.3a.6.6,0,0,1,0-.84l.35-.35ZM14.51,30A15.44,15.44,0,0,1,19,19l.35-.34a.58.58,0,0,1,.84,0l3.24,3.23a.6.6,0,0,0,1-.42V12a.6.6,0,0,0-.6-.6H14.42a.58.58,0,0,0-.55.37.57.57,0,0,0,.13.65l3.24,3.24a.6.6,0,0,1,0,.84l-.35.35A18.55,18.55,0,0,0,28.11,48.45,1.46,1.46,0,0,0,29.7,47v-.16a1.44,1.44,0,0,0-1.29-1.44A15.51,15.51,0,0,1,14.51,30Z" style="fill:#fff;pointer-events: none;"/></g></g></svg>
                        </div>
                      </div>
                      <!--
                      <div class="buttons">
                        <a class="identicon-link" target="_blank" title="Open">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><title>Link</title><path d="M30,0A30,30,0,1,1,0,30,30,30,0,0,1,30,0Z" class="svg-button" /><path d="M46.08,13.93a4.08,4.08,0,0,0-2.86-1.19H34.38A1.36,1.36,0,0,0,33,14.09h0a1.34,1.34,0,0,0,1.33,1.35h8.21l-2,2h0l-1.24,1.23h0L27.69,30.35a1.35,1.35,0,0,0,1.9,1.91l11.57-11.6,3.21-3.2h0l.19-.18-.07,8.26a1.35,1.35,0,1,0,2.7,0l.07-8.74h0A4,4,0,0,0,46.08,13.93Z" style="fill:#fff;fill-rule:evenodd"/><path d="M38.46,31.23a1.26,1.26,0,0,0-1.26,1.26h0v11a1.34,1.34,0,0,1-.38.91h0a1.24,1.24,0,0,1-.85.34H16.54a1.34,1.34,0,0,1-.91-.38,1.29,1.29,0,0,1-.37-.91V24.07a1.29,1.29,0,0,1,.37-.91h0a1.33,1.33,0,0,1,.91-.37h10.9a1.26,1.26,0,0,0,0-2.52H16.54a3.78,3.78,0,0,0-2.69,1.16h0a3.78,3.78,0,0,0-1.11,2.68V43.45a3.8,3.8,0,0,0,3.8,3.8H36a3.74,3.74,0,0,0,2.6-1l.08-.08a3.77,3.77,0,0,0,1.12-2.68v-11a1.27,1.27,0,0,0-1.26-1.26Z" style="fill:#fff;fill-rule:evenodd"/></svg>
                        </a>
                      </div>

                      <div class="buttons">
                        <div style="cursor:pointer;" onclick="downloadPng()">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><title>Download</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M30,0A30,30,0,1,1,0,30,30,30,0,0,1,30,0Z" class="svg-button" /><path d="M44.64,40.33a1.62,1.62,0,0,1,1.12-.46,1.59,1.59,0,0,1,1.59,1.58,5.6,5.6,0,0,1-5.6,5.6H18.25a5.6,5.6,0,0,1-5.6-5.6,1.59,1.59,0,0,1,1.59-1.58,1.62,1.62,0,0,1,1.12.46,1.58,1.58,0,0,1,.46,1.12,2.42,2.42,0,0,0,2.43,2.43h23.5a2.42,2.42,0,0,0,2.43-2.43,1.58,1.58,0,0,1,.46-1.12Zm-17.72-3-7.27-7.37a1.59,1.59,0,0,1,0-2.24,1.59,1.59,0,0,1,2.24,0l7.26,7.36a1,1,0,0,0,.35.23,1,1,0,0,0,.41.08,1,1,0,0,0,.42-.08,1,1,0,0,0,.35-.23l7.4-7.37a1.59,1.59,0,0,1,2.24,0,1.58,1.58,0,0,1,.46,1.12A1.56,1.56,0,0,1,40.33,30l-7.39,7.37a4.24,4.24,0,0,1-3,1.24,4.19,4.19,0,0,1-1.63-.32,4.45,4.45,0,0,1-1.38-.92Zm4.2-5.89a1.59,1.59,0,0,1-2.71-1.12V13.94a1.55,1.55,0,0,1,.47-1.12,1.57,1.57,0,0,1,2.24,0,1.55,1.55,0,0,1,.47,1.12V30.3a1.55,1.55,0,0,1-.47,1.12Z" style="fill:#fff;pointer-events: none;"/></g></g></svg>
                        </div>
                      </div>
                      -->

                    </div>

                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="signup-submit" value="Register!">
                </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? 
                    <a href="login.php" class="fw-bold text-body"><u>Login here</u></a>
                  </p>

                </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <script type="text/javascript" src="multiavatar.js?v=013"></script>

    <!-- PRODUCTION -->
    <!-- <script type="text/javascript" src="multiavatar.min.js?v=002"></script> -->


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/save-svg-as-png/1.4.17/saveSvgAsPng.min.js"></script>

    <script>
      /*
      CryptoJS v3.1.2
      code.google.com/p/crypto-js
      (c) 2009-2013 by Jeff Mott. All rights reserved.
      code.google.com/p/crypto-js/wiki/License
      */
      var CryptoJS=CryptoJS||function(h,s){var f={},t=f.lib={},g=function(){},j=t.Base={extend:function(a){g.prototype=this;var c=new g;a&&c.mixIn(a);c.hasOwnProperty("init")||(c.init=function(){c.$super.init.apply(this,arguments)});c.init.prototype=c;c.$super=this;return c},create:function(){var a=this.extend();a.init.apply(a,arguments);return a},init:function(){},mixIn:function(a){for(var c in a)a.hasOwnProperty(c)&&(this[c]=a[c]);a.hasOwnProperty("toString")&&(this.toString=a.toString)},clone:function(){return this.init.prototype.extend(this)}},
      q=t.WordArray=j.extend({init:function(a,c){a=this.words=a||[];this.sigBytes=c!=s?c:4*a.length},toString:function(a){return(a||u).stringify(this)},concat:function(a){var c=this.words,d=a.words,b=this.sigBytes;a=a.sigBytes;this.clamp();if(b%4)for(var e=0;e<a;e++)c[b+e>>>2]|=(d[e>>>2]>>>24-8*(e%4)&255)<<24-8*((b+e)%4);else if(65535<d.length)for(e=0;e<a;e+=4)c[b+e>>>2]=d[e>>>2];else c.push.apply(c,d);this.sigBytes+=a;return this},clamp:function(){var a=this.words,c=this.sigBytes;a[c>>>2]&=4294967295<<
      32-8*(c%4);a.length=h.ceil(c/4)},clone:function(){var a=j.clone.call(this);a.words=this.words.slice(0);return a},random:function(a){for(var c=[],d=0;d<a;d+=4)c.push(4294967296*h.random()|0);return new q.init(c,a)}}),v=f.enc={},u=v.Hex={stringify:function(a){var c=a.words;a=a.sigBytes;for(var d=[],b=0;b<a;b++){var e=c[b>>>2]>>>24-8*(b%4)&255;d.push((e>>>4).toString(16));d.push((e&15).toString(16))}return d.join("")},parse:function(a){for(var c=a.length,d=[],b=0;b<c;b+=2)d[b>>>3]|=parseInt(a.substr(b,
      2),16)<<24-4*(b%8);return new q.init(d,c/2)}},k=v.Latin1={stringify:function(a){var c=a.words;a=a.sigBytes;for(var d=[],b=0;b<a;b++)d.push(String.fromCharCode(c[b>>>2]>>>24-8*(b%4)&255));return d.join("")},parse:function(a){for(var c=a.length,d=[],b=0;b<c;b++)d[b>>>2]|=(a.charCodeAt(b)&255)<<24-8*(b%4);return new q.init(d,c)}},l=v.Utf8={stringify:function(a){try{return decodeURIComponent(escape(k.stringify(a)))}catch(c){throw Error("Malformed UTF-8 data");}},parse:function(a){return k.parse(unescape(encodeURIComponent(a)))}},
      x=t.BufferedBlockAlgorithm=j.extend({reset:function(){this._data=new q.init;this._nDataBytes=0},_append:function(a){"string"==typeof a&&(a=l.parse(a));this._data.concat(a);this._nDataBytes+=a.sigBytes},_process:function(a){var c=this._data,d=c.words,b=c.sigBytes,e=this.blockSize,f=b/(4*e),f=a?h.ceil(f):h.max((f|0)-this._minBufferSize,0);a=f*e;b=h.min(4*a,b);if(a){for(var m=0;m<a;m+=e)this._doProcessBlock(d,m);m=d.splice(0,a);c.sigBytes-=b}return new q.init(m,b)},clone:function(){var a=j.clone.call(this);
      a._data=this._data.clone();return a},_minBufferSize:0});t.Hasher=x.extend({cfg:j.extend(),init:function(a){this.cfg=this.cfg.extend(a);this.reset()},reset:function(){x.reset.call(this);this._doReset()},update:function(a){this._append(a);this._process();return this},finalize:function(a){a&&this._append(a);return this._doFinalize()},blockSize:16,_createHelper:function(a){return function(c,d){return(new a.init(d)).finalize(c)}},_createHmacHelper:function(a){return function(c,d){return(new w.HMAC.init(a,
      d)).finalize(c)}}});var w=f.algo={};return f}(Math);
      (function(h){for(var s=CryptoJS,f=s.lib,t=f.WordArray,g=f.Hasher,f=s.algo,j=[],q=[],v=function(a){return 4294967296*(a-(a|0))|0},u=2,k=0;64>k;){var l;a:{l=u;for(var x=h.sqrt(l),w=2;w<=x;w++)if(!(l%w)){l=!1;break a}l=!0}l&&(8>k&&(j[k]=v(h.pow(u,0.5))),q[k]=v(h.pow(u,1/3)),k++);u++}var a=[],f=f.SHA256=g.extend({_doReset:function(){this._hash=new t.init(j.slice(0))},_doProcessBlock:function(c,d){for(var b=this._hash.words,e=b[0],f=b[1],m=b[2],h=b[3],p=b[4],j=b[5],k=b[6],l=b[7],n=0;64>n;n++){if(16>n)a[n]=
      c[d+n]|0;else{var r=a[n-15],g=a[n-2];a[n]=((r<<25|r>>>7)^(r<<14|r>>>18)^r>>>3)+a[n-7]+((g<<15|g>>>17)^(g<<13|g>>>19)^g>>>10)+a[n-16]}r=l+((p<<26|p>>>6)^(p<<21|p>>>11)^(p<<7|p>>>25))+(p&j^~p&k)+q[n]+a[n];g=((e<<30|e>>>2)^(e<<19|e>>>13)^(e<<10|e>>>22))+(e&f^e&m^f&m);l=k;k=j;j=p;p=h+r|0;h=m;m=f;f=e;e=r+g|0}b[0]=b[0]+e|0;b[1]=b[1]+f|0;b[2]=b[2]+m|0;b[3]=b[3]+h|0;b[4]=b[4]+p|0;b[5]=b[5]+j|0;b[6]=b[6]+k|0;b[7]=b[7]+l|0},_doFinalize:function(){var a=this._data,d=a.words,b=8*this._nDataBytes,e=8*a.sigBytes;
      d[e>>>5]|=128<<24-e%32;d[(e+64>>>9<<4)+14]=h.floor(b/4294967296);d[(e+64>>>9<<4)+15]=b;a.sigBytes=4*d.length;this._process();return this._hash},clone:function(){var a=g.clone.call(this);a._hash=this._hash.clone();return a}});s.SHA256=g._createHelper(f);s.HmacSHA256=g._createHmacHelper(f)})(Math);

    </script>
    <script>
      // Demo avatars for home page
      demoAvatars = [
        'Clementine',
        'Morty',
        'Rodion Raskolnikov',
        'Sam Solo',
        'Starcrasher',
        'Shack',
        'Desmond',
        'Snake Harrison',
        'Pandemonium',
        'Broomhilda',
        'Cosmo Blue',
        'Blue Meal Shake',
        'Cryptonaut',
        'Lancaster',
        'Maggot',
        'Matrix',
        'Hiro',
        'Mavericat',
        'Huxley',
        'Elton David-Black',
        'Katerina Zoo',
        'Bloomdalf',
        'Emma',
        'The Elephant\'s Cat',
        'Nigel Ziemssen',
        'Sir Henchard',
        'Philip Klaus',
        'Daniel Marlowe',
        'Joachim Molesworth',
        'Molly Deronda',
        'Protagonist',
        'Lancelot',
        'Pechorin Bloom',
        'Kim',
        'Kim Patel',
        'Lorelei',
        'Battle Wooster',
        'Horatius',
        'Rhett James',
        'Moby Dick',
        'James Bolling',
        'Binx Bond',
        'Patrick Gatsby',
        'Inigo Argo',
        'Jay Bateman',
        'Victor Montoya',
        'Angela Flagg',
        'Randall Zone',
        'Major Salt',
        'Milo Minderbender',
        'Major Machine',
        'Skeleto',
        'Heep Starr',
        '11th Monster',
        'Wunderlick',
        'Big Brother',
        'Gonlithli',
        'Ebenezer Dimmsdale',
        'Hester Vega',
        'Honey Bunny',
        'Vincent Plant',
        'Butch Wallace',
        'Marsellus Coolidge',
        'Tuco',
        'Angel Boy',
        'Pablo Grimes',
        'Bounty Hunter',
        'Agent Smith',
        'Oracle',
        'Apoc State',
        'Switch',
        'Choi',
        'Angel Eyes',
        'Spoon Eyes',
        'Papillon',
        'Snooze 11',
        'Projectionist',
        'Landlady',
        'Ned Ramirez',
        'Michael Shimada',
        'Sonny Zen',
        'Bruno Fox',
        'Joker',
        'Lucius Tattaglia',
        'Scareblow',
        'Sugar Crash',
        'Neurostatic',
        'Kambei Corleone',
        'Shichiroji Karatoza',
        'Kuninori Bun Lord',
        'Bun Pusher',
        'Etno',
        'Wiggly Corleone',
        'Magnetofon',
        'Hitpagadee',
        'Doge',
        'Doge Panda',
        'Doge Locamotiv',
        'Doge Bulls',
        'Doge Lavrinovich',
        'Weeberblitz',
        'Arkadion',
        'Ninesouls',
        'Psycat',
        'Indoqueen',
        'DoubleDanceDragon',
        'Kinestetic Moves',
        'Zen Flash',
        'Orbit Escape',
        'Sin Azucar',
        'Particle Machine',
        'Spanglinga',
        'Pandalion',
        'Music Razor',
        'Bugzilla',
        'Bugz Bunuel',
        'Satoshi',
        'Nakamoto',
        'МЦ ДРУИД',
        'Jekaterina',
        'Quito',
        'Buenos Aires',
        'Ouarzazate',
        'Bogota',
        'Essaouira',
        'Extremadura',
        'Guadalajara',
        'Aphex',
        'Squarepusher',
        'Orbital',
        'Mozart',
        'Tesla',
        'Linux',
        'Ki',
        'Eshkoshka',
        'Aphex Maiden',
        'Iron Twin',
      ]

      var randomDemo = demoAvatars[Math.floor(Math.random()*demoAvatars.length)];
      demoAvatars.splice(demoAvatars.indexOf(randomDemo), 1);


      // Individual page

      //var customUrl = window.location.href.split("/").pop();
      //customUrl = customUrl.replace(/%20/g, ' ');

      //if (customUrl == 'index.html' || customUrl == 'demo.html') {
      //  customUrl = '';
      //}
      //if (customUrl.indexOf('?') >= 0) {
      // customUrl = customUrl.substring(0, customUrl.indexOf('?'));
      //}
      //if (customUrl.length > 0) {
      // randomDemo = customUrl;
      //}

      //var uniqueString = document.getElementById('identicon');
      //uniqueString.innerHTML = "kgdhsj987hshj";
      //console.log(uniqueSritng.innerHTML);
      // Generate initial avatar
      //getById('f-name').value = randomDemo;
      //var randomDemo = "jdhksjhgsjs"
      var iSVG = multiavatar(randomDemo.replaceAll(/\s/g,''));
      getById('identicon').innerHTML = iSVG;
      getById('f-name').value = randomDemo.replaceAll(/\s/g,'');
      //console.log(randomDemo);
      var iSVG = multiavatar(randomDemo.replaceAll(/\s/g,''));
      getById('identicon').innerHTML = iSVG;


      // Update links
      var links = document.getElementsByClassName('link-back');
      for (var i=0, len=links.length|0; i<len; i=i+1|0) {
        links[i].setAttribute('href', 'https://multiavatar.com');
      }

      function updateLinks(link) {
        var links = document.getElementsByClassName('identicon-link');
        for (var i=0, len=links.length|0; i<len; i=i+1|0) {
          links[i].setAttribute('href', 'https://multiavatar.com/'+link);
        }
      }
      //updateLinks(randomDemo);
      

      // Default demo to generate random avatars

      var liAddress = randomDemo;

      function identiconDemo() {
        
        if (liAddress.length > 0) {
          setTimeout(function() {
            liAddress = liAddress.substring(0, liAddress.length - 1);
            getById('f-name').value = liAddress.replaceAll(/\s/g,'');
            var iSVG = multiavatar(liAddress.replaceAll(/\s/g,''));
      
            getById('identicon').innerHTML = iSVG;

            updateLinks(liAddress);

            identiconDemo();
          }, 30)
        }
        else {
          createNew();
        }
      }


      liNewAddress = "";
      newA = ""

      function createNew() {
        
        if (newA.length != liNewAddressLength) {
          setTimeout(function() {
            newA += liNewAddress.substring(1,0);
            liNewAddress = liNewAddress.substring(1);
            getById('f-name').value = newA.replaceAll(/\s/g,'');
            var iSVG = multiavatar(newA.replaceAll(/\s/g,''));

            getById('identicon').innerHTML = iSVG;

            updateLinks(liNewAddress);

            createNew();
          }, 30)
        }
        else {
          liAddress = newA;
          newA = "";
          runDemo();
          // console.log('end');
          
          updateLinks(liAddress);
        }
      }


      function getNewIdenticon(string) {
        if (string == '') {
          var loaderHtml = '<div class="ma-spinner"><div></div><div></div></div>';
          getById('identicon').innerHTML = loaderHtml;
        }
        else {
          var iSVG = multiavatar(string.replaceAll(/\s/g,''));
          liAddress = string;
          getById('identicon').innerHTML = iSVG;
          
          updateLinks(string);
        }
      }


      stopDemo = false;

      function stopDemoNow() {
        stopDemo = true;
      }


      function runDemo() {
        if (stopDemo) { return; }
        setTimeout(function() {
          if (stopDemo) { return; }
          if(demoAvatars.length != 0) {
            liNewAddress = demoAvatars[Math.floor(Math.random()*demoAvatars.length)];
            liNewAddressLength = liNewAddress.length;
            identiconDemo();
            demoAvatars.splice(demoAvatars.indexOf(liNewAddress), 1);
          }
        }, 3000)
      }

      //if (customUrl.length == 0) {
      //  runDemo();
      //}
      

      // "New" button press
      function newIdenticon() {
        // document.body.style.backgroundColor = '#fff';
        stopDemoNow();

        var randomHash = CryptoJS.SHA256(''+Math.random()).toString().substring(0,20);
        var randomHashConstructed = '';

        function runIt() {
          setTimeout(function() {
            if (randomHashConstructed.length < 20) {
              var lastChar = randomHash.substring(randomHash.length - 1);
              randomHash = randomHash.slice(0, -1);
              // console.log(randomHash);

              randomHashConstructed += lastChar;

              // console.log(randomHashConstructed)
              randomHashConstructed = randomHashConstructed.replaceAll(/\s/g,'')
              getNewIdenticon(randomHashConstructed);
              getById('f-name').value = randomHashConstructed;
              runIt();
            }
          }, 3)
        }
        runIt();
      }
      //document.onload(newIdenticon());

      // New on N key press
      document.onkeydown = function(evt) {
        if (evt.srcElement.nodeName != "INPUT") {
          evt = evt || window.event;
          var isN = false;
          if ("key" in evt) {
            isN = (evt.key === "n" || evt.key === "N");
          } else {
            isN = (evt.keyCode === 78);
          }
          if (isN) {
            newIdenticon();
          }
        }
      }

      // Helper functions

      function getById(id) {
        return document.getElementById(id);
      }

      function divHide(id) {
        document.getElementById(id).style.display = 'none';
      }

      function divShow(id) {
        document.getElementById(id).style.display = "block";
      }
      //runIt();
    </script>

 


</body>
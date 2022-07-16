<?php include_once 'cmn_head.php';?>
<style>

nav > .nav.nav-tabs{

border: none;
  color:#fff;
  background:#272e38;
  border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
border: none;
  padding: 18px 25px;
  color:#fff;
  background:#272e38;
  border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
{
content: "";
position: relative;
bottom: -60px;
left: -10%;
border: 0px solid transparent;
border-top-color: #309da1 ;
}
.tab-content{
background: #fdfdfd;
  line-height: 25px;
  border: 1px solid #ddd;
  border-top:5px solid #309da1;
  border-bottom:5px solid #309da1;
  padding:30px 25px;
  width:800px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus,nav > div a.nav-item.nav-link.active
{
border: none;
  background: #309da1 !important;
  color:#fff;
  border-radius:0;
  transition:background 0.20s linear;
}

#header-image[data-v-6eac0c7d] {
    background-image: url(https://hub.livspace.com/my-account-assets/images/Web_referral.svg);
    height: 400px;
    background-size: cover;
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    margin: 0 -15px;
}

.referral-content[data-v-6eac0c7d] {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
}
#referal-content[data-v-6eac0c7d] {
    background-color: #ffffff;
}
.referal-content-wrap[data-v-6eac0c7d] {
    width: 70%;
    margin: auto;
}

#referral-form-card[data-v-6eac0c7d] {
    box-shadow: 0px 0px 10px rgb(0 0 0 / 15%);
    border-radius: 5px;
}

#referral-form-card[data-v-57b574e2] {
    box-shadow: 0px 0px 10px rgb(0 0 0 / 15%);
    border-radius: 5px;
    position: relative;
    top: -6rem;
}
.referral-form[data-v-57b574e2] {
    max-width: 400px;
    margin: auto;
}
.secondary-text-color[data-v-57b574e2] {
    color: #26273d;
    font-family: Roboto;
}
.form-input[data-v-57fbc572] {
    width: 100%;
    margin-bottom: 15px;
    position: relative;
}

.form-input input[data-v-57fbc572] {
    border: 1px solid #ccc;
    width: inherit;
    height: 50px;
    box-shadow: none;
    border-radius: 4px;
    outline: none;
    padding: 5px 15px;
    box-sizing: border-box;
    color: #26273d;
    font-family: Roboto;
    font-size: 15px;
}
.form-input label[data-v-57fbc572] {
    position: absolute;
    top: 13px;
    left: 15px;
    color: #676777;
    font-family: Roboto;
    font-size: 15px;
    letter-spacing: 0;
    line-height: 24px;
    transition: all 0.2s ease-in-out;
}

.form-input-phone[data-v-0bbd6d31] {
    height: 50px;
    margin-bottom: 15px;
}

.d-flex {
    display: flex!important;
}

.form-input-phone input[data-v-0bbd6d31] {
    border: 1px solid #ccc;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    width: inherit;
    box-shadow: none;
    outline: none;
    padding: 5px 15px;
    box-sizing: border-box;
    color: #26273d;
    font-family: Roboto;
    font-size: 15px;
    order: 1;
}

.flex-grow-1 {
    flex-grow: 1!important;
}
#country-code[data-v-0bbd6d31] {
    border: 1px solid #ccc;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    border-right: 0;
    color: #26273d;
    font-family: Roboto;
    font-size: 15px;
    width: 60px;
    text-align: center;
}

#country-code select[data-v-0bbd6d31] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.btn-primary[data-v-57b574e2], .btn-primary[data-v-57b574e2]:active {
    height: 45px;
    color: #ffffff;
    background-color: #eb595f !important;
    border-color: #eb595f !important;
    box-shadow: none !important;
}
.position-relative {
    position: relative!important;
}
.line[data-v-57b574e2] {
    height: 1px;
    background-color: #d9d6d8;
    margin: 30px 10px;
}

.line-label[data-v-57b574e2] {
    position: absolute;
    top: -11px;
    left: 49%;
    right: 0;
    width: 20px;
    background: #fff;
    color: #d8d8d8;
    font-size: 14px;
}

.position-absolute {
    position: absolute!important;
}
.secondary-text-color[data-v-57b574e2] {
    color: #26273d;
    font-family: Roboto;
}

.input-with-copy[data-v-3272081b] {
    position: relative;
    padding-right: 50px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
}

.social-icons-header[data-v-57b574e2] {
    color: #7a6e77;
    font-family: Roboto;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 16px;
}
#social-icons .icon[data-v-57b574e2] {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #60475c;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 24px;
    cursor: pointer;
}

.input-with-copy > input[data-v-3272081b] {
    border-width: 0;
    width: 100%;
    color: #8e7d8b;
    font-family: Roboto;
    font-size: 12px;
    letter-spacing: 0;
    line-height: 16px;
    border-color: #d9d6d8;
    text-overflow: ellipsis;
}
.align-items-center {
    align-items: center!important;
}
.input-with-copy .btn-copy[data-v-3272081b] {
    position: absolute;
    top: 0px;
    right: 0;
    color: #eb595f;
    font-family: Roboto;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 16px;
    text-transform: capitalize;
    cursor: pointer;
    background: #0000;
    border: 0;
}

#payment-section-wrap[data-v-d2d8182a] {
    position: relative;
    top: -4rem;
}
#payment-section[data-v-d2d8182a] {
    background-color: #f5f4f5;
    border-radius: 5px;
}

.text-center {
    text-align: center!important;
}


#frame {
  width: 95%;
  min-width: 360px;
  max-width: 1000px;
  min-height: 300px;
    height: 500px;
}
@media screen and (max-width: 360px) {
  #frame {
    width: 100%;
    height: 100vh;
  }
}
#frame #sidepanel {
  float: left;
  min-width: 280px;
  max-width: 340px;
  width: 40%;
  height: 100%;
  background: #2c3e50;
  color: #f5f5f5;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel {
    width: 58px;
    min-width: 58px;
  }
}
#frame #sidepanel #profile {
  width: 80%;
  margin: 25px auto;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile {
    width: 100%;
    margin: 0 auto;
    padding: 5px 0 0 0;
    background: #32465a;
  }
}
#frame #sidepanel #profile.expanded .wrap {
  height: 210px;
  line-height: initial;
}
#frame #sidepanel #profile.expanded .wrap p {
  margin-top: 20px;
}
#frame #sidepanel #profile.expanded .wrap i.expand-button {
  -moz-transform: scaleY(-1);
  -o-transform: scaleY(-1);
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}
#frame #sidepanel #profile .wrap {
  height: 60px;
  line-height: 60px;
  overflow: hidden;
  -moz-transition: 0.3s height ease;
  -o-transition: 0.3s height ease;
  -webkit-transition: 0.3s height ease;
  transition: 0.3s height ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap {
    height: 55px;
  }
}
#frame #sidepanel #profile .wrap img {
  width: 50px;
  border-radius: 50%;
  padding: 3px;
  border: 2px solid #309da1;
  height: auto;
  float: left;
  cursor: pointer;
  -moz-transition: 0.3s border ease;
  -o-transition: 0.3s border ease;
  -webkit-transition: 0.3s border ease;
  transition: 0.3s border ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap img {
    width: 40px;
    margin-left: 4px;
  }
}
#frame #sidepanel #profile .wrap img.online {
  border: 2px solid #2ecc71;
}
#frame #sidepanel #profile .wrap img.away {
  border: 2px solid #f1c40f;
}
#frame #sidepanel #profile .wrap img.busy {
  border: 2px solid #309da1;
}
#frame #sidepanel #profile .wrap img.offline {
  border: 2px solid #95a5a6;
}
#frame #sidepanel #profile .wrap p {
  float: left;
  margin-left: 15px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap i.expand-button {
  float: right;
  margin-top: 23px;
  font-size: 0.8em;
  cursor: pointer;
  color: #435f7a;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap i.expand-button {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 150px;
  margin: 70px 0 0 0;
  border-radius: 6px;
  z-index: 99;
  line-height: initial;
  background: #435f7a;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options {
    width: 58px;
    margin-top: 57px;
  }
}
#frame #sidepanel #profile .wrap #status-options.active {
  opacity: 1;
  visibility: visible;
  margin: 75px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options.active {
    margin-top: 62px;
  }
}
#frame #sidepanel #profile .wrap #status-options:before {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 8px solid #435f7a;
  margin: -8px 0 0 24px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options:before {
    margin-left: 23px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul {
  overflow: hidden;
  border-radius: 6px;
}
#frame #sidepanel #profile .wrap #status-options ul li {
  padding: 15px 0 30px 18px;
  display: block;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li {
    padding: 15px 0 35px 22px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li:hover {
  background: #496886;
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
    width: 14px;
    height: 14px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
  content: '';
  position: absolute;
  width: 14px;
  height: 14px;
  margin: -3px 0 0 -3px;
  background: transparent;
  border-radius: 50%;
  z-index: 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
    height: 18px;
    width: 18px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li p {
  padding-left: 12px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
  background: #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
  border: 1px solid #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
  background: #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
  border: 1px solid #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
  background: #309da1;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
  border: 1px solid #309da1;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
  background: #95a5a6;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
  border: 1px solid #95a5a6;
}
#frame #sidepanel #profile .wrap #expanded {
  padding: 100px 0 0 0;
  display: block;
  line-height: initial !important;
}
#frame #sidepanel #profile .wrap #expanded label {
  float: left;
  clear: both;
  margin: 0 8px 5px 0;
  padding: 5px 0;
}
#frame #sidepanel #profile .wrap #expanded input {
  border: none;
  margin-bottom: 6px;
  background: #32465a;
  border-radius: 3px;
  color: #f5f5f5;
  padding: 7px;
  width: calc(100% - 43px);
}
#frame #sidepanel #profile .wrap #expanded input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search {
  border-top: 1px solid #32465a;
  border-bottom: 1px solid #32465a;
  font-weight: 300;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #search {
    display: none;
  }
}
#frame #sidepanel #search label {
  position: absolute;
  margin: 10px 0 0 20px;
}
#frame #sidepanel #search input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  padding: 10px 0 10px 46px;
  width: calc(100% - 25px);
  border: none;
  background: #32465a;
  color: #f5f5f5;
}
#frame #sidepanel #search input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search input::-webkit-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input::-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-ms-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #contacts {
  height: calc(100% - 177px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts {
    height: calc(100% - 149px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  #frame #sidepanel #contacts::-webkit-scrollbar {
    display: none;
  }
}
#frame #sidepanel #contacts.expanded {
  height: calc(100% - 334px);
}
#frame #sidepanel #contacts::-webkit-scrollbar {
  width: 8px;
  background: #2c3e50;
}
#frame #sidepanel #contacts::-webkit-scrollbar-thumb {
  background-color: #243140;
}
#frame #sidepanel #contacts ul li.contact {
  position: relative;
  padding: 10px 0 15px 0;
  font-size: 0.9em;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact {
    padding: 6px 0 46px 8px;
  }
}
#frame #sidepanel #contacts ul li.contact:hover {
  background: #32465a;
}
#frame #sidepanel #contacts ul li.contact.active {
  background: #32465a;
  border-right: 5px solid #435f7a;
}
#frame #sidepanel #contacts ul li.contact.active span.contact-status {
  border: 2px solid #32465a !important;
}
#frame #sidepanel #contacts ul li.contact .wrap {
  width: 88%;
  margin: 0 auto;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap {
    width: 100%;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap span {
  position: absolute;
  left: 0;
  margin: -2px 0 0 -2px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 2px solid #2c3e50;
  background: #95a5a6;
}
#frame #sidepanel #contacts ul li.contact .wrap span.online {
  background: #2ecc71;
}
#frame #sidepanel #contacts ul li.contact .wrap span.away {
  background: #f1c40f;
}
#frame #sidepanel #contacts ul li.contact .wrap span.busy {
  background: #309da1;
}
#frame #sidepanel #contacts ul li.contact .wrap img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin-right: 10px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap img {
    margin-right: 0px;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta {
  padding: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap .meta {
    display: none;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .name {
  font-weight: 600;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
  margin: 5px 0 0 0;
  padding: 0 0 1px;
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -moz-transition: 1s all ease;
  -o-transition: 1s all ease;
  -webkit-transition: 1s all ease;
  transition: 1s all ease;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
  position: initial;
  border-radius: initial;
  background: none;
  border: none;
  padding: 0 2px 0 0;
  margin: 0 0 0 1px;
  opacity: .5;
}
#frame #sidepanel #bottom-bar {
  position: absolute;
  width: 100%;
  bottom: 0;
}
#frame #sidepanel #bottom-bar button {
  float: left;
  border: none;
  width: 50%;
  padding: 10px 0;
  background: #32465a;
  color: #f5f5f5;
  cursor: pointer;
  font-size: 0.85em;
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button {
    float: none;
    width: 100%;
    padding: 15px 0;
  }
}
#frame #sidepanel #bottom-bar button:focus {
  outline: none;
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
  border-right: 1px solid #2c3e50;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: none;
    border-bottom: 1px solid #2c3e50;
  }
}
#frame #sidepanel #bottom-bar button:hover {
  background: #435f7a;
}
#frame #sidepanel #bottom-bar button i {
  margin-right: 3px;
  font-size: 1em;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button i {
    font-size: 1.3em;
  }
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button span {
    display: none;
  }
}
#frame .content {
  width: 100%;
  height: 100%;
  overflow: visible;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame .content {
    width: calc(100% - 58px);
    min-width: 300px !important;
  }
}
@media screen and (min-width: 900px) {
  #frame .content {
  }
}
#frame .content .contact-profile {
  width: 100%;
  height: 60px;
  line-height: 60px;
  background: #f5f5f5;
}
#frame .content .contact-profile img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin: 9px 12px 0 9px;
}
#frame .content .contact-profile p {
  float: left;
}
#frame .content .contact-profile .social-media {
  float: right;
}
#frame .content .contact-profile .social-media i {
  margin-left: 14px;
  cursor: pointer;
}
#frame .content .contact-profile .social-media i:nth-last-child(1) {
  margin-right: 20px;
}
#frame .content .contact-profile .social-media i:hover {
  color: #435f7a;
}
#frame .content .messages {
  height: auto;
  min-height: calc(100% - 93px);
  max-height: calc(100% - 93px);
  overflow-y: scroll;
  overflow-x: hidden;
  box-shadow: 1px 1px 1px #ececec;
    border: 1px solid #ececec;
}
@media screen and (max-width: 735px) {
  #frame .content .messages {
    max-height: calc(100% - 105px);
  }
}
#frame .content .messages::-webkit-scrollbar {
  width: 8px;
  background: transparent;
}
#frame .content .messages::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
}
#frame .content .messages ul li {
  display: inline-block;
  clear: both;
  float: left;
  margin: 15px 15px 5px 15px;
  width: calc(100% - 25px);
  font-size: 0.9em;
}
#frame .content .messages ul li:nth-last-child(1) {
  margin-bottom: 20px;
}
#frame .content .messages ul li.sent img {
  margin: 6px 8px 0 0;
}
#frame .content .messages ul li.sent p {
  background: #435f7a;
  color: #f5f5f5;
}
#frame .content .messages ul li.replies img {
  float: right;
  margin: 6px 0 0 8px;
}
#frame .content .messages ul li.replies p {
  background: #f5f5f5;
  float: right;
}
#frame .content .messages ul li img {
  width: 22px;
  border-radius: 50%;
  float: left;
}
#frame .content .messages ul li p {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 20px;
  max-width: 205px;
  line-height: 130%;
}
@media screen and (min-width: 735px) {
  #frame .content .messages ul li p {
    max-width: 300px;
  }
}
#frame .content .message-input {
  position: relative;
  bottom: 0px;
  width: 100%;
  z-index: 99;
}
#frame .content .message-input .wrap {
  position: relative;
}
#frame .content .message-input .wrap input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  float: left;
  border: 1px solid #ececec;
  width: calc(100% - 90px);
  padding: 11px 32px 10px 8px;
  font-size: 0.8em;
  color: #32465a;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap input {
    padding: 15px 32px 16px 8px;
  }
}
#frame .content .message-input .wrap input:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment {
  position: absolute;
  right: 60px;
  z-index: 4;
  margin-top: 10px;
  font-size: 1.1em;
  color: #435f7a;
  opacity: .5;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap .attachment {
    margin-top: 17px;
    right: 65px;
  }
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 50px;
  padding: 12px 0;
  cursor: pointer;
  background: #32465a;
  color: #f5f5f5;
  margin-bottom:5px;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
  background: #435f7a;
}
#frame .content .message-input .wrap button:focus {
  outline: none;
}


.uploaded{
    width: 150px !important;
    border-radius: 0 !important;
}

</style>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<div class="full-section">
	<div class="dlab-bnr-inr  contact-page" >
		<div class="container">
			<div class="row justify-content-center">
            <div class="col-xs-12 ">
                <?php if($this->session->flashdata('success')!="" && $this->session->flashdata('success')!=null){?>
                    <div class="alert alert-dismissiable alert-success"><?php echo $this->session->flashdata('success');?></div>
                <?php } ?>
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Project </a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Updates</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Escalation</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Referral</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="app-container container mt-top mb-5">
                            <h5>Started On</h5>
                            <p><?php 
                                if (strtotime($project['project_start_date']) != '0000-00-00') {

                                    echo "N/A";
                                }else{
                                    echo date('m-d-Y',strtotime($project['project_start_date']));
                                }
                                    ?> </p>
                        
                            <h5>Promissed Handover </h5>
                            <p><?php 
                            if (strtotime($project['promissed_handover_date']) != '0000-00-00') {
                                    echo "N/A";
                                }else{
                                    echo date('m-d-Y',strtotime($project['promissed_handover_date']));
                                }
                                    ?></p>
                        
                            <h5> Project Cost</h5>
                            <p><?php if($project['total_project_cost']=="" && $project['total_project_cost']==null){
                                    echo "N/A";
                                }else{
                                    echo "Rs ". $project['total_project_cost'];
                                }
                                    ?></p>

                            <h5>Modular Cost</h5>
                            <p><?php if($project['factory_project_cost']=="" && $project['factory_project_cost']==null){
                                    echo "N/A";
                                }else{
                                    echo "Rs ". $project['factory_project_cost'];
                                }
                                    ?></p>


                            <h5>Custom Works Cost</h5>
                            <p><?php if($project['custom_cost']=="" && $project['custom_cost']==null){
                                    echo "N/A";
                                }else{
                                    echo "Rs ". $project['custom_cost'];
                                }
                                    ?></p>

                            

                            <h5>Signoff Document</h5>
                            <p><?php if($project['signoff']=="" && $project['signoff']==null){
                                    echo "N/A";
                                }else{?>
                                    <a href="<?php echo base_url()?>uploads/design/<?php echo $project['signoff']?>" target="blank">Click Here To View</a>
                                <?php }
                            ?>
                            </p>

                            <h5>Service Level Agreements</h5>
                            <p><?php if($project['sla']=="" && $project['sla']==null){
                                    echo "N/A";
                                }else{?>
                                    <a href="<?php echo base_url()?>uploads/design/<?php echo $project['sla']?>" target="blank">Click Here To View</a>
                                <?php }
                            ?>
                            </p>

                            <h5>Contract </h5>
                            <p><?php if($project['contract']=="" && $project['contract']==null){
                                    echo "N/A";
                                }else{?>
                                    <a href="<?php echo base_url()?>uploads/design/<?php echo $project['contract']?>" target="blank">Click Here To View</a>
                                <?php }
                            ?>
                            </p>

                            
                        

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="app-container container mt-top mb-5">
                            
                        <div id="frame">
                            
                            <div class="content">
                                                            
                                <div class="messages">
                                    <ul>
                                        <?php 
                                        $interaction_id = 0;
                                        foreach($chat as $c){
                                          
                                            if($c['interaction_from']=='client'){
                                            ?>
                                            
                                            <?php if($c['comment']!="" && $c['comment']!=""){?>
                                                <li class="sent">
                                                <img src="<?php echo base_url()?>assets/images/logo.png" alt="" />
                                                
                                                <p style="margin-bottom:0px;"><?php echo $c['comment'];?></p><br>
                                                
                                              </li>
                                            <?php } ?>

                                            <?php if($c['interaction_text']!="" && $c['interaction_text']!=""){?>

                                                <?php 
                                                $dir_contents = scandir($c['interaction_text']);
                                               

                                                foreach ($dir_contents as $file) {
                                                    if ($file !== '.' && $file !== '..') { 
                                                      $file_name = explode(".",$file);
                                                      
                                                      ?>
                                                    <li class="sent">
                                                    <img src="<?php echo base_url()?>assets/images/logo.png" alt="" /> 
                                                    <?php if($file_name[1]=='jpg' || $file_name[1]=='jpeg' || $file_name[1]=='png'){ ?>
                                                      <a href="<?php echo base_url()?><?php echo $c['interaction_text'];?><?php echo $file;?>" target="blank">
                                                        <img class="uploaded" src="<?php echo base_url()?><?php echo $c['interaction_text'];?><?php echo $file;?>" alt="" />
                                                      </a>
                                                    <?php }else{?>
                                                      <a href="<?php echo base_url()?><?php echo $c['interaction_text'];?><?php echo $file;?>" target="blank">
                                                      Click to view doc
                                                      </a>
                                                    <?php } ?>
                                                                                                  
                                                    
                                                    
                                                    </li>
                                                       <?php 
                                                    }
                                                }
                                                ?>
                                                
                                                


                                            <?php } ?>

                                            <?php }else{ ?>
                                                <?php if($c['comment']!="" && $c['comment']!=""){?>
                                                <li class="replies">
                                                <img src="<?php echo base_url()?>assets/images/logo.png" alt="" />
                                                
                                                <p><?php echo $c['comment'];?></p>
                                            </li>
                                            <?php } ?>

                                            <?php if($c['interaction_text']!="" && $c['interaction_text']!=""){?>

<?php 
$dir_contents = scandir($c['interaction_text']);


foreach ($dir_contents as $file) {
    if ($file !== '.' && $file !== '..') { 
      $file_name = explode(".",$file);
                                                      
                                                      ?>
                                                    <li class="replies">
                                                    <img src="<?php echo base_url()?>assets/images/logo.png" alt="" /> 
                                                    <?php if($file_name[1]=='jpg' || $file_name[1]=='jpeg' || $file_name[1]=='png'){ ?>
                                                      <a href="<?php echo base_url()?><?php echo $c['interaction_text'];?><?php echo $file;?>" target="blank">
                                                        <img class="uploaded" src="<?php echo base_url()?><?php echo $c['interaction_text'];?><?php echo $file;?>" alt="" />
                                                      </a>
                                                    <?php }else{?>
                                                      <a href="<?php echo base_url()?><?php echo $c['interaction_text'];?><?php echo $file;?>" target="blank">
                                                      Click to view doc
                                                      </a>
                                                    <?php } ?>
                                                                                                  
                                                    
                                                    
                                                    </li>
       <?php 
    }
}
?>




<?php } ?>

                                            <?php } ?>
                                        <?php $interaction_id = $c['interaction_id'];} ?>
                                        <input type="hidden" id="interaction_id" value="<?php echo $interaction_id;?>"/>   
 
                                    </ul>
                                </div>
                                <div class="message-input">
                                    <div class="wrap">
                                        <form method='post' enctype="multipart/form-data" id="chat" action="" >
                                            <input type="text" name="message" placeholder="Write your message..." />
                                            <input type="hidden" id="project_id" name="project_id" value="<?php echo $project['project_id'];?>"/>
                                            <input type="file" id='files' name="files[]" multiple><br>
                                            <button type="button" class="btn">
                                              <i class="fa fa-refresh " style="cursor:pointer" onclick="return getNewMessages()" aria-hidden="true"></i>
                                            </button>
                                            <button class="submit">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            
                                        </form>
                                        
                                    </div>
                                    <span id="resp-msg"></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="col-xs-12 ">
                    <nav>
                      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active show" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home1" aria-selected="false">
                          <img width="50px" src="<?php echo base_url()?>assets/smileys/1.jpeg" class="img img-responsive"/>
                        </a>
                        <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile1" aria-selected="false"> 
                          <img width="50px" src="<?php echo base_url()?>assets/smileys/2.png" class="img img-responsive"/>
                        </a>
                        <a class="nav-item nav-link " id="nav-contact-tab1" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-contact1" aria-selected="true">
                          <img width="50px" src="<?php echo base_url()?>assets/smileys/3.png" class="img img-responsive"/>
                        </a>
                        <a class="nav-item nav-link" id="nav-about-tab1" data-toggle="tab" href="#nav-about1" role="tab" aria-controls="nav-about1" aria-selected="false">
                        <img width="50px" src="<?php echo base_url()?>assets/smileys/4.jpg" class="img img-responsive"/>
                        </a>
                      </div>
                    </nav>
                      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                      <div class="tab-pane fade active show" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab1">
                        <div class="app-container container mt-top mb-5">
                            
                        <?php 
                            $today = date('Y-m-d');
                            $esc = "";
                            $submit = true;
                            $arraylength = count($escallation);
                            if($arraylength>0){
                            ?>
                                <h5>Escallation Date</h5>
                                <p><?php echo date('m-d-Y',strtotime($escallation[0]['escallation_on']));?> </p>
                            
                                <h5>Your Comment</h5>
                                <p><?php echo $escallation[0]['client_comments'];?></p>
                            
                                <h5>Admin Comment</h5>
                                <p><?php if($escallation[0]['admin_comments']=="" && $escallation[0]['admin_comments']==null){
                                    echo "N/A";
                                }else{
                                    echo $escallation[0]['admin_comments'];
                                }
                                    ?></p>

                            <?php 
                            $esc = $escallation[0]['escallation_on'];
                              }
                             
                            
                            if($esc!="" && $esc!=null){
                                $esc_date = date('Y-m-d',strtotime($esc. '+ 2 days'));
                                if(strtotime($esc_date)>strtotime($today)){
                                    $submit=false;
                                }
                            }else{

                            }
                            ?>				
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">
                        <div class="app-container container mt-top mb-5">
                        <?php 
                            
                            if($arraylength>1){
                            ?>
                                <h5>Escallation Date</h5>
                                <p><?php echo date('m-d-Y',strtotime($escallation[1]['escallation_on']));?> </p>
                            
                                <h5>Your Comment</h5>
                                <p><?php echo $escallation[1]['client_comments'];?></p>
                            
                                <h5>Admin Comment</h5>
                                <p><?php if($escallation[1]['admin_comments']=="" && $escallation[1]['admin_comments']==null){
                                    echo "N/A";
                                }else{
                                    echo $escallation[1]['admin_comments'];
                                }
                                    ?></p>

                            <?php 
                            $esc = $escallation[1]['escallation_on'];
                            if($esc!="" && $esc!=null){
                              $esc_date = date('Y-m-d',strtotime($esc. '+ 2 days'));
                              if(strtotime($esc_date)>strtotime($today)){
                                  $submit=false;
                              }
                          }else{

                          }
                              }else{
                                echo "N/A";
                              }
                             
                            
                            
                            ?>				
                        
                        </div>
                      </div>
                      <div class="tab-pane fade " id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">						
                        <div class="app-container container mt-top mb-5">	
                        <?php 
                            
                            if($arraylength>2){
                            ?>
                                <h5>Escallation Date</h5>
                                <p><?php echo date('m-d-Y',strtotime($escallation[2]['escallation_on']));?> </p>
                            
                                <h5>Your Comment</h5>
                                <p><?php echo $escallation[2]['client_comments'];?></p>
                            
                                <h5>Admin Comment</h5>
                                <p><?php if($escallation[2]['admin_comments']=="" && $escallation[2]['admin_comments']==null){
                                    echo "N/A";
                                }else{
                                    echo $escallation[2]['admin_comments'];
                                }
                                    ?></p>

                            <?php 
                            $esc = $escallation[2]['escallation_on'];
                            if($esc!="" && $esc!=null){
                              $esc_date = date('Y-m-d',strtotime($esc. '+ 2 days'));
                              if(strtotime($esc_date)>strtotime($today)){
                                  $submit=false;
                              }
                          }else{

                          }
                              }else{
                                echo "N/A";
                              }
                             
                            
                            
                            ?>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-about1" role="tabpanel" aria-labelledby="nav-about-tab1">
                        <div class="app-container container mt-top mb-5">
                        <?php 
                            
                            if($arraylength>3){
                            ?>
                                <h5>Escallation Date</h5>
                                <p><?php echo date('m-d-Y',strtotime($escallation[3]['escallation_on']));?> </p>
                            
                                <h5>Your Comment</h5>
                                <p><?php echo $escallation[3]['client_comments'];?></p>
                            
                                <h5>Admin Comment</h5>
                                <p><?php if($escallation[3]['admin_comments']=="" && $escallation[3]['admin_comments']==null){
                                    echo "N/A";
                                }else{
                                    echo $escallation[3]['admin_comments'];
                                }
                                    ?></p>

                            <?php 
                            $esc = $escallation[3]['escallation_on'];
                            if($esc!="" && $esc!=null){
                              $esc_date = date('Y-m-d',strtotime($esc. '+ 2 days'));
                              if(strtotime($esc_date)>strtotime($today)){
                                  $submit=false;
                              }
                          }else{

                          }
                              }else{
                                echo "N/A";
                              }
                             
                            
                            
                            ?>
                        </div>
                      </div>
                      </div>             
                  </div>
                        
                        
                        <div class="app-container container mt-top mb-5" style="margin-top:10px;">
                            
                            
                            
                            
                            <h5>Write Comment</h5>
                            <form action="<?php echo base_url()?>home/saveEscallation/<?php echo $project['project_id'];?>" method="POST">
                                <textarea required name="escallation" class="form-control"></textarea>
                                <button type="submit" <?php if($submit==false){ echo "disabled";}?> class="btn btn-default" style="margin-top:10px;float:right;">Submit</button>
                            </form>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <div class="app-container container mt-top mb-5">
                    <div class="d-flex wrapper"><!---->
                     <div class="content">
                     <div data-v-6eac0c7d="" id="referral" class="container-fluid bg-white">
                     <div data-v-6eac0c7d="" id="header-image">
                     <div data-v-6eac0c7d="" class="referral-content"><div data-v-6eac0c7d="" class="p-5"><h2 data-v-6eac0c7d="" class="primary-text-color">Referrals</h2> <h5 data-v-6eac0c7d="" class="secondary-text-color bold-400">
          Refer friends &amp; family to earn
          <span data-v-6eac0c7d="" class="text-bold" style="white-space: nowrap;">₹ 15,000</span></h5> <a data-v-6eac0c7d="" href="javascript:void 0" class="link">Learn More</a></div></div></div> <div data-v-6eac0c7d="" id="referal-content"><div data-v-6eac0c7d="" class="referal-content-wrap"><div data-v-57b574e2="" data-v-6eac0c7d="" id="referral-form-card" class="bg-white pt-5 pb-5"><div data-v-57b574e2="" class="referral-form"><h5 data-v-57b574e2="" class="secondary-text-color mb-4">Refer a friend</h5>
          
          <form action="<?php echo base_url()?>home/saveReferrals/<?php echo $project['project_id']?>" method="POST">
           <div data-v-57fbc572="" data-v-57b574e2="" class="form-input">
            <input data-v-57fbc572="" name="name" placeholder="Name" required type="text" pattern=".*" id="input-Name" class=""> 
            </div> 
            <div data-v-57fbc572="" data-v-57b574e2="" class="form-input">
            <input data-v-57fbc572="" name="email" placeholder="Email" type="text" pattern="^[a-zA-Z0-9.!#$%&amp;’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.([A-Za-z]{2,4})$" id="input-Email" class="">
             </div>
              <div data-v-0bbd6d31="" data-v-57b574e2="" class="d-flex form-input-phone" title="Phone Number">
              <input data-v-0bbd6d31="" name="mobile" placeholder="mobile" required type="text" pattern="^[6-9][0-9]{9}$" class="flex-grow-1"> 
              <div data-v-0bbd6d31="" id="country-code"><select data-v-0bbd6d31="" name="country-code" tabindex="-1" class="bg-transparent border-0 h-100 91">
              <option data-v-0bbd6d31="" value="91">+91</option></select>
               <svg data-v-0bbd6d31="" aria-hidden="true" width="11.200000000000001" height="12.8" viewBox="0 0 448 512" focusable="false" class="fa-icon" style="font-size: 0.8em;"><path d="M207 381.5l-194.3-194.3c-9.4-9.4-9.4-24.6 0-33.9l22.7-22.7c9.4-9.4 24.5-9.4 33.9 0l154.7 154 154.7-154c9.4-9.3 24.5-9.3 33.9 0l22.7 22.7c9.4 9.4 9.4 24.6 0 33.9l-194.3 194.3c-9.4 9.4-24.6 9.4-33.9 0z"></path></svg></div></div>
                <button data-v-57b574e2="" type="submit"  class="btn btn-primary btn-secondary btn-block disabled">Invite</button></div> 
            </form>
            
            
            <div data-v-57b574e2="" class="position-relative"><div data-v-57b574e2="" class="line"></div> <span data-v-57b574e2="" class="position-absolute line-label">OR</span></div> <div data-v-57b574e2="" class="referral-form"><h5 data-v-57b574e2="" class="secondary-text-color mb-3">Share with everyone</h5> <div data-v-3272081b="" data-v-57b574e2="" class="input-with-copy"><input data-v-3272081b="" type="text" id="referralUrl" class="d-flex align-items-center"> <button data-v-3272081b="" class="btn-copy">copy</button></div> <p data-v-57b574e2="" class="social-icons-header mt-3">Share via social media</p> <ul data-v-57b574e2="" id="social-icons" class="list-unstyled d-flex"><li data-v-57b574e2="" class="icon"><img data-v-57b574e2="" src="https://hub.livspace.com/my-account-assets/images/icon/ic_facebook.svg" alt="twitter" width="30"></li> <li data-v-57b574e2="" class="icon"><img data-v-57b574e2="" src="https://hub.livspace.com/my-account-assets/images/icon/ic_twitter.svg" alt="twitter" width="30"></li> <li data-v-57b574e2="" class="icon"><img data-v-57b574e2="" src="https://hub.livspace.com/my-account-assets/images/icon/watsapp_icon.svg" alt="whatsapp" width="30"></li></ul></div></div> <div style="visibility:hidden" data-v-d2d8182a="" data-v-6eac0c7d="" id="payment-section-wrap"><div data-v-d2d8182a="" id="payment-section" class="text-center p-4 mt-4"><h5 data-v-d2d8182a="">Bank Details</h5> <p data-v-d2d8182a="">
      Enter Bank Details, to refer and withdraw earned amounts directly to
      your bank account
    </p> <button data-v-d2d8182a="" class="btn btn-primary">
      Enter Bank Details
    </button></div> <!----></div> <!----></div></div> <!----></div></div></div></div>
                    </div>
                  </div>
                
                </div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'cmn_footer.php';?>

<script>
$(document).ready(function () {
  $("#nav-profile-tab").click(function(){
    $(".messages").animate({ scrollTop: $(document).height() }, "fast");
  });      
    $('.submit').click(function(event){
        var project_id = $("#project_id").val();
        $("#resp-msg").removeClass("alert alert-warning alert-danger alert-success");
        $("#resp-msg").addClass("alert alert-warning");
        $("#resp-msg").html("Please wait while the message is being submitted.").show().fadeOut(5000);
        event.preventDefault();
        var form_data = new FormData();
        message = $(".message-input input").val();	
        // Read selected files
        var totalfiles = document.getElementById('files').files.length;
        for (var index = 0; index < totalfiles; index++) {
        form_data.append("files[]", document.getElementById('files').files[index]);
        }
        var other_data = $('#chat').serializeArray();
        $.each(other_data,function(key,input){
            form_data.append(input.name,input.value);
        });
        // AJAX request
        $.ajax({
        url: '<?php echo base_url()?>home/saveChat', 
        type: 'post',
        data: form_data,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function (response) {
            for(var index = 0; index < response.length; index++) {
                var src = response[index];
                var file_name = src.split(".");
                // Add img element in <div id='preview'>
               // $('#preview').append('<img src="'+src+'" width="200px;" height="200px">');
                if(file_name[1]=='jpg' || file_name[1]=='jpeg' || file_name[1]=='png'){
                  $('<li class="sent"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /><a href="<?php echo base_url()?>'+src+'" target="blank" ><img class="uploaded" src="<?php echo base_url()?>'+src+'" ></a></li>').appendTo($('.messages ul'));
                }else{
                  $('<li class="sent"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /><a href="<?php echo base_url()?>'+src+'" target="blank" >Click to view doc</li>').appendTo($('.messages ul'));
                }
                
                $('.message-input input').val(null);
                $('.contact.active .preview').html('<span>You: </span>' + message);
                $(".messages").animate({ scrollTop: $(document).height() }, "fast");
            }
            if($.trim(message) != '') {
              $('<li class="sent"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
              $('.message-input input').val(null);
              $('.contact.active .preview').html('<span>You: </span>' + message);
              
            }
            if(response.length>0 || $.trim(message) != ''){
              $("#resp-msg").removeClass("alert alert-warning alert-danger alert-success");
              $("#resp-msg").addClass("alert alert-success");
              $("#resp-msg").html("Your message has been submitted.").show().fadeOut(5000);
              $(".messages").animate({ scrollTop: $(document).height() }, "fast");
            }else{
              $("#resp-msg").removeClass("alert alert-warning alert-danger alert-success");
              $("#resp-msg").addClass("alert alert-danger");
              $("#resp-msg").html("Sending your message has been failed.").show().fadeOut(5000);
            }
            $('#project_id').val(project_id);
            
        }

       
        });
        
        

    });

		$("#step1enter").on('click',function(){
			$(".stepone").hide();
			$(".steptwo").show();
		});

		$("#step2enter").on('click',function(){
			$(".steptwo").hide();
			$(".stepthree").show();
		});

		$("#login").on('click',function(){
			$(".stepthree").hide();
			$(".stepfour").show();
		});
	});
</script>

<script >
function getNewMessages(){
  var interaction_id = $("#interaction_id").val();
  var project_id = $("#project_id").val();

  $("#resp-msg").removeClass("alert alert-warning alert-danger alert-success");
  $("#resp-msg").addClass("alert alert-warning");
  $("#resp-msg").html("Please wait while we fetch messages.").show().fadeOut(5000);
  $.ajax({
    method:'POST',
    data:{'interaction_id':interaction_id,'project_id':project_id},
    url:'<?php echo base_url()?>home/getNewMessage',
    success:function(response){
      var data = jQuery.parseJSON(response);
      if(data.length>0){
        $.each(data,function(key,value){
        var txtdata = value.res;
        var imgdata = value.img;
        if(txtdata['comment']!="" && txtdata['comment']!=null){
          $('<li class="replies"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /><p>' + txtdata["comment"] + '</p></li>').appendTo($('.messages ul'));
        }
        if(imgdata.length>0){
          $.each(imgdata,function(key,value){
            var file_name = value.split(".");
            if(file_name[1]=='jpg' || file_name[1]=='jpeg' || file_name[1]=='png'){
              $('<li class="replies"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /><a href="<?php echo base_url()?>'+txtdata["interaction_text"]+'/'+value+'"><img class="uploaded" src="<?php echo base_url()?>'+txtdata["interaction_text"]+'/'+value+'"></a></li>').appendTo($('.messages ul'));
            }else{
              $('<li class="replies"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /><a href="<?php echo base_url()?>'+txtdata["interaction_text"]+'/'+value+'" target="blank" >Click to view doc</li>').appendTo($('.messages ul'));
            }
          });
        }
        
      });
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
        $("#resp-msg").removeClass("alert alert-warning alert-danger alert-success");
        $("#resp-msg").addClass("alert alert-success");
        $("#resp-msg").html("New messages displayed.").show().fadeOut(5000);
      }else{
        $("#resp-msg").removeClass("alert alert-warning alert-danger alert-success");
        $("#resp-msg").addClass("alert alert-danger");
        $("#resp-msg").html("No new messages found.").show().fadeOut(5000);
      }
      

      
    }
  });
}



$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");
	
	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};
	
	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
    var form_data = new FormData();

   // Read selected files
   var totalfiles = document.getElementById('files').files.length;
   for (var index = 0; index < totalfiles; index++) {
      form_data.append("files[]", document.getElementById('files').files[index]);
   }

    var other_data = $('#chat').serializeArray();
    $.each(other_data,function(key,input){
        form_data.append(input.name,input.value);
    });
    $.ajax({
        method:'POST',
        url:'<?php echo base_url()?>home/saveChat',
        data:form_data,
        contentType: false,
        processData: false,
        success:function(response){
            console.log(response);
        }
    });
	$('<li class="sent"><img src="http://localhost/space-ladders//assets/images/logo.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};



$(window).on('keydown', function(e) {
  if (e.which == 13) {
    $(".submit").click();
    //newMessage();
    return false;
  }
});
//# sourceURL=pen.js
</script>

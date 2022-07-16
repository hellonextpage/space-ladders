<?php include_once 'cmn_head.php';?>
<style>
html,body{margin:0;padding:0;height:100%;width:100%;min-height:100%;background-color:#fafafa}input{font-family:Lato,sans-serif}#__next{height:100%}.estimator-index .registerComponent{width:55%;padding:24px}.estimator-index .registerComponent h4{margin-bottom:16px;text-align:left}.estimator-index .registerComponent .frm-grp .error-lab{}.estimator-index .registerComponent .frm-grp{font-size:14px}.estimator-index .registerComponent .frm-grp svg{top:40%;right:4%}.indexMainContainer{width:100%;height:100%;min-height:100%;padding:0;margin:0;background-color:#fafafa;overflow:hidden}.flowIndicationTitle{height:36px;width:auto;color:#8e8e90;font-size:12px;line-height:18px;text-align:center;margin:20px auto}.flowIndicationTitle>.FITitle{height:22px;width:163px;color:#4a4a4a;font-size:18px;font-weight:700;letter-spacing:0;line-height:22px;text-align:center}.flowButtonsContainer{width:55%}.flowButtonsContainer>.mainButton{border-radius:5px;font-weight:700!important;border:none;font-size:16px!important;cursor:pointer;height:48px;width:120px;border-radius:8px;background-color:#309da1;color:#fff;font-size:16px;letter-spacing:0;line-height:19px;text-align:center}.flowButtonsContainer>.secondaryButton{border-radius:5px;font-weight:700!important;border:none;margin-top:0;font-size:16px!important;cursor:pointer;height:48px;width:120px;border-radius:8px;color:#309da1;border:1px solid #309da1;background-color:#fff;font-size:16px;margin-top:16px;letter-spacing:0;line-height:19px;text-align:center}#step2enter{margin-left:16px!important;margin-top:16px}.btnDisabled{background-color:#d2d2d2!important;color:#212121!important}.loginPage{width:60%;background-color:#fff;box-shadow:0 0 4px 0 rgba(0,0,0,.09);padding:0;display:flex;overflow:hidden;margin:auto;border-radius:9px;border:1px solid #ccc}.loginPage .closeBfc{display:none}.step-heading{width:auto;text-align:center;color:#8e8e90;font-size:12px;line-height:18px;margin-top:24px;margin-bottom:16px}.FICounts{padding-top:6px;color:#4a4a4a;display:block;font-size:13px;letter-spacing:0;line-height:16px}.step-heading>.FITitle{height:22px;width:299px;color:#4a4a4a;font-size:18px;font-weight:700;letter-spacing:0;line-height:22px;text-align:center}.sudeo{position:absolute}.our-banner__pattern-left{left:117px;top:60px}.our-banner__pattern-right{top:70px;right:2.5rem}.renovate_tagline{color:#fff;font-size:14px;padding:15px 30px;font-weight:500;letter-spacing:0;line-height:18px;text-align:center;margin:0;background-color:#309da1}.renovate-heading span{visibility:hidden}@media(min-width:768px){.our-banner__pattern-left{top:70px;left:1rem}}.mainButton:focus{outline:none}@media only screen and (max-width:1370px){.registerLoginContainer .sideImage{width:50%}}.alignItem{flex-direction:column}.backStep2{float:left;font-weight:600;border:none;margin-top:0;font-size:16px!important;height:48px;width:120px;border-radius:8px;color:#309da1;border:1px solid #309da1;background-color:#fff;font-size:16px;margin-top:16px;letter-spacing:0;line-height:19px;text-align:center}.button-container{width:60%;margin:10px auto}.btnDisabled{background-color:#d2d2d2!important;color:#212121!important}#step3back{position:absolute;left:20%!important}.yourFloorPlanContainer{height:400px;width:808px;margin:16px auto;display:flex}#areaInput{display:flex;position:relative}#sqErr{color:#309da1;font-size:12px;position:absolute;top:40px;left:0;width:100%}.yourFloorPlanContainer .FPCTitle{height:19px;width:120px;color:#222;font-size:16px;letter-spacing:0;line-height:19px}.sideOne *{font-size:100%}.FPC_Container{height:271px;width:356px;margin:20px 24px 0}.FPCFloorplans{height:67px;width:356px}.radio-buttons-container{height:32px;width:356px;margin-top:16px;display:flex;justify-content:space-between}.yourFloorPlanContainer .sideOne{height:400px;width:404px;display:inline-block;padding-right:0;box-sizing:border-box;border:1px solid #ccc;border-right:none;border-radius:8px 0 0 8px;background-color:#fff}.yourFloorPlanContainer .sideTwo{height:400px;width:403px;border:1px solid #ccc;border-radius:0 7px 7px 0;background-color:#fff}.sideImage{height:129px;width:355px;border-radius:6px;background-color:#fff;margin:77px 24px 0}.side2-desc{height:91px;width:355px;margin:24px 24px 0}.group-6{height:129px;width:308px;margin-left:24px;background-color:#fff}.yourFloorPlanContainer .sideTwo .sideTitle{height:19px;width:183px;color:#222;font-size:16px;letter-spacing:0;line-height:19px;margin:0 86px}.yourFloorPlanContainer .sideTwo .sideDesc{height:64px;width:355px;color:#4a4a4a;font-size:13px;letter-spacing:0;line-height:16px;margin-top:8px;text-align:center}.yourFloorPlanContainer .sideOne .FPSqft{border:none;padding-bottom:8px;width:52px;font-size:14px}input:-internal-autofill-selected{background-color:#fff!important}.yourFloorPlanContainer .sideOne .FPSqft:active,.yourFloorPlanContainer .sideOne .FPSqft:focus{outline:none}.yourFloorPlanContainer .sideOne .FPSqft::placeholder{color:#979797;opacity:1}.yourFloorPlanContainer .sideOne .FPSqft:-ms-input-placeholder{color:#979797}.yourFloorPlanContainer .sideOne .FPSqft::-ms-input-placeholder{color:#979797}.yourFloorPlanContainer .sideOne .FPSqftUnit{height:16px;width:42px;color:#888;font-size:14px;letter-spacing:0;line-height:16px}.sideOne .area-input{margin-top:16px;height:25px;width:94px;display:inline-flex;border-bottom:1px solid #ccc}.toggleBtn.btn-xs{margin:15px 0 0;padding:0;position:relative;border:none;height:36px;width:249px;border-radius:1rem;z-index:1072}.toggleBtn{margin:0 4rem;padding:0;position:relative;border:none;height:1.5rem;width:3rem;border-radius:1.5rem;color:#6b7381;background-color:#efefef;outline:none}.toggleBtn.btn-xs>.handle{position:absolute;top:0;left:0;width:134px;height:36px;border-radius:15px;background-color:#ff9800;transition:left .25s;color:#fff}.toggleBtn>.handle{position:absolute;top:.1875rem;left:.1875rem;width:1.125rem;height:1.125rem;border-radius:1.125rem;background:#fff}.toggleBtn.active{background-color:#efefef}.toggleBtn.active>.handle{left:114px;transition:left .25s}button.btn.btn-xs.toggleBtn:after{content:"Rent Out";font-size:13px;right:30px;position:absolute;top:8px;color:#000}button.btn.btn-xs.toggleBtn.active:before{content:"Move In";position:absolute;font-size:13px;left:35px;top:8px;color:#000}button.btn.btn-xs.toggleBtn.active:after{content:""}.toggleBtn.active>.handle:after{content:"Rent Out";position:absolute;font-size:13px;top:8px;right:30px}button.btn.btn-xs.toggleBtn:before{content:"Move In";position:absolute;font-size:13px;left:35px;z-index:9999;top:8px;color:#fff}.toggleBtn:focus{box-shadow:none}.purpose-section{margin-top:16px;width:100%;display:flex;color:#309da1;font-size:14px;letter-spacing:0;line-height:17px;text-align:center}.yourFloorPlanContainer .sideTwo .sideImage svg{width:308px;height:129px}.purpose-section .purpose-toggle-button{box-sizing:border-box;height:32px;width:114px;border:1px solid #309da1;border-radius:6px;background-color:#fff;background-color:#fff;-webkit-appearance:none;margin-right:10px;color:#309da1}.purpose-section .purpose-toggle-button:hover{color:#fff;background-color:#309da1}#purpose_btn3{padding-left:25px}#renovate{position:absolute;top:-3px;left:5px}.renovate-btn{height:44px;width:114px;position:relative}.purpose-section .purpose-toggle-button:focus{outline:none}.purpose-section .active{color:#fff;background-color:#309da1}@media only screen and (max-width:1370px){.yourFloorPlanContainer .sideTwo .sideImage svg{width:308px;height:129px}}#sqErr{color:#309da1;font-size:12px}.radio-toolbar{height:32px;width:83px}.radio-toolbar input[type=radio]{opacity:0;position:fixed;width:0}.radio-toolbar label{display:inline-block;height:32px;width:82.93px;box-sizing:border-box;border:1px solid #309da1;border-radius:6px;background-color:#fff;color:#309da1;font-size:14px;letter-spacing:0;line-height:17px;text-align:center;padding-top:7px;cursor:pointer}.radio-toolbar label:hover{background-color:#309da1;color:#fff}.radio-toolbar input[type=radio]:focus+label{}.radio-toolbar input[type=radio]:checked+label{background-color:#309da1;color:#fff}.estimateForContainer{height:400px;width:808px;margin:5px auto;display:flex}.estimateForContainer .sideOne{height:400px;width:404px;display:inline-block;padding-right:0;box-sizing:border-box;border:1px solid #ccc;border-radius:8px 0 0 8px;background-color:#fff}.estimateForContainer .sideTwo{height:400px;width:403px;border:1px solid #ccc;border-left:none;border-radius:0 7px 7px 0;background-color:#fff}.estimateForContainer .EFTitle{height:19px;width:100%;color:#222;font-size:16px;letter-spacing:0;line-height:19px;display:flex}.asterisk{color:#309da1}.estimateForContainer .sideOne .selectContainerMain{margin-top:30px}.estimateForContainer .sideOne .container{display:block;position:relative;padding-left:0;margin-bottom:55px;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;color:#868686;font-size:14px;height:18px;line-height:18px}.estimateForContainer .sideOne .container input[type=checkbox]{position:absolute;opacity:0;cursor:pointer;height:0;width:0}.estimateForContainer .sideOne .checkmark{position:absolute;top:0;right:0;height:18px;width:18px;border:1.5px solid #309da1;border-radius:2px}.estimateForContainer .sideOne .flex:hover input~.checkmark{background-color:#ccc}.estimateForContainer .sideOne .flex input:checked~.checkmark{background-color:#fff;color:#309da1}#bed_count{height:23px;width:30px;border:none;background-color:#ff4712;color:#fff;display:inline-block;position:relative;top:-6px;text-align:center}.addRemoveBtns{height:23px;width:23px;border:1px solid #ff4712;display:inline-block;overflow:hidden;text-align:center;line-height:20px;font-size:20px;color:#ff4712}.bedAddRemoveContainer{position:absolute;right:0;top:0}.FPC_Container_Estimate{height:324px;width:356px;margin:22px 24px 0}.estimateForContainer .sideTwo .sideImage{height:129px;width:355px;border-radius:6px;background-color:#fff;margin:77px 24px 0}.estimateForContainer .sideTwo .sideTitle{height:19px;width:100%;color:#222;font-size:16px;letter-spacing:0;line-height:19px;text-align:center}.estimateForContainer .sideTwo .sideDesc{height:64px;width:100%;color:#4a4a4a;font-size:13px;letter-spacing:0;line-height:16px;margin-top:8px;text-align:center}.removebtn{color:#309da1!important;border-color:#309da1!important}.group-6-estimate{height:129px;width:173px;margin:0 97px;background-color:#fff}.flexCont{display:flex;flex-direction:column;justify-content:space-evenly;color:gray}.flexCont>label.flex .addOnCount{display:flex;flex-direction:row;justify-content:space-around}.addOnCount *{font-weight:500}.quantBtn{width:18px;border:1.5px solid #309da1;height:18px;background:0 0;line-height:13px;color:#309da1;text-align:center;padding:0;display:inline-block;font-weight:700;border-radius:2px;vertical-align:middle}.abc{text-align:center;height:18px;width:18px;position:absolute;top:0;left:0;vertical-align:text-top}.quantBtn:focus{outline:none}.intQuant{height:18px;width:24px;color:#4a4a4a;text-align:center;background-color:#fff;font-size:100%;letter-spacing:0;line-height:20px;border-style:none;pointer-events:none;-webkit-text-fill-color:#4a4a4a;padding-bottom:0;vertical-align:middle}.flex{display:flex;flex-direction:row;height:37px;width:356px;border-bottom:1px solid #e4e4e4;justify-content:space-between;position:relative;margin-top:24px;color:#4a4a4a;font-size:14px!important;letter-spacing:0;line-height:17px}.wardrobe-inputgrp{height:24px;width:69px;align-items:center}.title{height:17px;width:48px;color:#4a4a4a;font-size:14px;letter-spacing:0;line-height:17px;margin-bottom:13px}.flex input:checked~.checkmark:after{display:block}.flex .checkmark:after{content:"";position:absolute;display:none}.flex .checkmark:after{right:5px;top:1px;width:6px;height:10px;border:solid #309da1;border-width:0 2px 2px 0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}@media only screen and (max-width:1400px){}@media only screen and (max-width:1400px){}.estimateForContainer .sideTwo .sideImage img{height:129px;width:173px}@media only screen and (max-width:1370px){.estimateForContainer{height:auto}}input[disabled]{-webkit-text-fill-color:#4a4a4a;color:#fff}#estimate_login #sideImageToggle img{background:#999376}


input[type=checkbox]+label:before, input[type=radio]+label:before {
    background-color: #fff;
    border: 0px solid #b6b7b8;
	width:0px;
}
input[type=radio]:checked+label:before {
    border-color: #3396d1;
    border-width: 0px;
}
.contact-page {
    padding-bottom: 50px;
    padding-top: 135px;
}
input[type=checkbox]+label, input[type=radio]+label {
    display: block;
    padding-left: 0 !important;
}

.radio-buttons-container.possession{
	width:270px !important;
}

.radio-buttons-container.city{
	width:175px !important;
}
</style>
<div class="full-section">
	<div class="dlab-bnr-inr  contact-page" >
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="indexMainContainer stepone" style="display:"><div class="flowIndicationTitle"><span class="FITitle" id="step1">LET'S GET STARTED</span><span class="FICounts">STEP <!-- -->1<!-- --> OF <!-- -->2</span></div><div class="componentswithbuttons" style="margin:0 auto"><div class="yourFloorPlanContainer"><div class="sideOne">
				<div class="FPC_Container">
				
				<div class="FPCFloorplans">				
				<div class="FPCTitle">Your floorplan</div>
				<div class="radio-buttons-container"><div><div class="radio-toolbar">
				<input type="radio" name="configHouse" id="configHouse0" alt="577" value="1BHK">
				<label for="configHouse0"><div class="individualFPCard">1 BHK</div></label></div></div>
				<div><div class="radio-toolbar">
				<input type="radio" name="configHouse" id="configHouse1" alt="980" value="2BHK">
				<label for="configHouse1"><div class="individualFPCard">2 BHK</div></label></div></div>
				<div><div class="radio-toolbar">
				<input type="radio" name="configHouse" id="configHouse2" alt="1575" value="3BHK" >
				<label for="configHouse2"><div class="individualFPCard">3 BHK</div></label></div></div>
				<div><div class="radio-toolbar">
				<input type="radio" name="configHouse" id="configHouse3" alt="2368" value="3+ BHK"><label for="configHouse3"><div class="individualFPCard">3+ BHK</div></label></div></div></div></div>
				

				<div class="FPCFloorplans" style="margin-top: 15px;">				
				<div class="FPCTitle">Possession In</div>
				<div class="radio-buttons-container possession"><div><div class="radio-toolbar">
				<input type="radio" name="possession_in" id="possession_in0" alt="577" value="<3months">
				<label for="possession_in0"><div class="individualFPCard"> < 3 Months </div></label></div></div>
				<div><div class="radio-toolbar">
				<input type="radio" name="possession_in" id="possession_in1" alt="980" value="3-6months">
				<label for="possession_in1"><div class="individualFPCard">3 Months</div></label></div></div>
				<div><div class="radio-toolbar">
				<input type="radio" name="possession_in" id="possession_in2" alt="1575" value=">6months" >
				<label for="possession_in2"><div class="individualFPCard"> > 3 Months</div></label></div></div>
				
				</div></div>




				<div class="FPCFloorplans" style="margin-top: 15px;">				
				<div class="FPCTitle">City</div>
				<div class="radio-buttons-container city"><div><div class="radio-toolbar"><input type="radio" name="city" id="city0" alt="577" value="Hyderabad"><label for="city0"><div class="individualFPCard"> Hyderabad </div></label></div></div><div><div class="radio-toolbar"><input type="radio" name="city" id="city1" alt="980" value="Pune"><label for="city1"><div class="individualFPCard">Pune</div></label></div></div>
				
				</div></div>



				<div class="FPCFloorplans" style="margin-top: 15px;">				
				<div class="FPCTitle">Purpose</div>
				<div class="radio-buttons-container possession"><div><div class="radio-toolbar">
				<input type="radio" name="purpose" id="purpose0" alt="577" value="Move in">
				<label for="purpose0"><div class="individualFPCard"> Move In</div></label></div></div>
				<div><div class="radio-toolbar">
				<input type="radio" name="purpose" id="purpose1" alt="980" value="Move out">
				<label for="purpose1"><div class="individualFPCard">Rent Out</div></label></div></div>
				<div><div class="radio-toolbar">
				<input type="radio" name="purpose" id="purpose2" alt="1575" value="Renovate" ><label for="purpose2"><div class="individualFPCard"> Renovate</div></label></div></div>
				
				</div></div>




				<div class="FPCTitle" style="margin-top: 15px;display:none;">Purpose</div><div class="purpose-section" style="margin-top: 15px;display:none;"><button class="purpose-toggle-button active" id="purpose_btn1" value="movein">Move In</button><button class="purpose-toggle-button " id="purpose_btn2" value="rental">Rent Out</button><div class="renovate-btn"><button class="purpose-toggle-button " id="purpose_btn3" value="renovate">Renovate</button><img id="renovate" src="https://super.homelane.com/Group14.svg"></div></div></div></div><div class="sideTwo"><div class="sideImage"><div class="group-6"><svg width="341px" height="147px" viewBox="0 0 341 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Floorplan" transform="translate(-741.000000, -339.000000)"><g id="Group-39" transform="translate(742.000000, 339.000000)"><rect id="Rectangle" stroke="#315873" stroke-width="2" fill="#FFFFFF" x="19.1376953" y="137" width="147" height="9"></rect><rect id="Rectangle" stroke="#245976" stroke-width="2" fill="#FFFFFF" x="26.1376953" y="51" width="133" height="86"></rect><rect id="Rectangle" stroke="#005B7C" stroke-width="2" fill="#D3DAE2" x="82.1376953" y="97" width="21" height="40"></rect><g id="Group-33" transform="translate(37.137695, 74.000000)" stroke-width="2"><rect id="Rectangle" stroke="#035A79" fill="#8399AB" x="1" y="1" width="30" height="28"></rect><path d="M1.5,15 L30.7246094,15" id="Line-12" stroke="#005B7C" stroke-linecap="square"></path><path d="M16,1.5 L16,28.1201172" id="Line-11" stroke="#035A79" stroke-linecap="square"></path></g><g id="Group-33-Copy" transform="translate(114.137695, 74.000000)" stroke-width="2"><rect id="Rectangle" stroke="#035A79" fill="#8399AB" x="1" y="1" width="30" height="28"></rect><path d="M1.5,15 L30.7246094,15" id="Line-12" stroke="#005B7C" stroke-linecap="square"></path><path d="M16,1.5 L16,28.1201172" id="Line-11" stroke="#035A79" stroke-linecap="square"></path></g><circle id="Oval" fill="#035A79" cx="98.1376953" cy="121" r="2"></circle><path d="M26.9550781,120 L44.5898438,120" id="Line-13" stroke="#245976" stroke-width="2" stroke-linecap="round"></path><path d="M41.7290039,124 L51.9116211,124" id="Line-13-Copy" stroke="#245976" stroke-width="2" stroke-linecap="round"></path><path d="M124.729004,127 L134.911621,127" id="Line-13-Copy-2" stroke="#245976" stroke-width="2" stroke-linecap="round"></path><path d="M141.137695,121 L145.911621,121" id="Line-13-Copy-3" stroke="#245976" stroke-width="2" stroke-linecap="round"></path><path d="M23.897781,17 L14.4533365,51 L170.822054,51 L161.37761,17 L23.897781,17 Z" id="Rectangle" stroke="#005C7F" stroke-width="2" fill="#D2DAE3"></path><path d="M20.6376953,33.5 L164.137695,33.5" id="Line-14" stroke="#035A79" stroke-width="2" stroke-linecap="square"></path><rect id="Rectangle" stroke="#005D82" stroke-width="2" fill="#FFFFFF" x="31.1376953" y="8" width="18" height="9"></rect><path d="M0.637695313,146 L338.724609,146" id="Line-15" stroke="#035A79" stroke-width="2" stroke-linecap="square"></path><rect id="Rectangle" stroke="#005D82" stroke-width="2" fill="#D0DAE4" x="186.137695" y="1" width="54" height="145"></rect><g id="Group-36-Copy" transform="translate(197.137695, 36.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-9" transform="translate(197.137695, 20.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-3" transform="translate(197.137695, 66.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-5" transform="translate(197.137695, 96.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-2" transform="translate(197.137695, 51.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-4" transform="translate(197.137695, 81.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-6" transform="translate(197.137695, 111.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><path d="M186.637695,9.5 L240.137695,9.5" id="Line-16" stroke="#005E86" stroke-width="2" stroke-linecap="square"></path><rect id="Rectangle" stroke="#005D82" stroke-width="2" fill="#FFFFFF" x="233.137695" y="57" width="68" height="89"></rect><path d="M233.637695,65 L301.137695,65" id="Line-19" stroke="#005E86" stroke-width="2" stroke-linecap="square"></path><g id="Group-37" transform="translate(252.137695, 123.000000)" stroke-width="2"><rect id="Rectangle" stroke="#245976" fill="#8399AB" x="1" y="1" width="29" height="22"></rect><path d="M15.5607329,1.5 L15.5607329,23" id="Line-18" stroke="#035A79" stroke-linecap="square"></path></g><g id="Group-37-Copy" transform="translate(196.137695, 123.000000)" stroke-width="2"><rect id="Rectangle" stroke="#245976" fill="#FFFFFF" x="1" y="1" width="29" height="22"></rect><path d="M15.5607329,1.5 L15.5607329,23" id="Line-18" stroke="#035A79" stroke-linecap="square"></path></g><g id="Group-38" transform="translate(253.137695, 76.000000)" stroke="#005E86" stroke-linecap="round" stroke-width="2"><g id="Group-36"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-7" transform="translate(0.000000, 17.000000)"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g><g id="Group-36-Copy-8" transform="translate(0.000000, 31.000000)"><path d="M0.560732937,0.35557567 L0.560732937,4.96875" id="Line-17"></path><path d="M14.5607329,0.35557567 L14.5607329,4.96875" id="Line-17-Copy"></path><path d="M28.5607329,0.35557567 L28.5607329,4.96875" id="Line-17-Copy-2"></path></g></g><circle id="Oval" stroke="#005E86" stroke-width="2" fill="#CEDAE5" cx="313.637695" cy="103.5" r="17.5"></circle><path d="M313.637695,146 L313.637695,103.5" id="Line-20" stroke="#005B7C" stroke-width="2" stroke-linecap="square"></path><path d="M313.637695,115.5 L323.637695,107" id="Line-21" stroke="#005F8A" stroke-width="2" stroke-linecap="square"></path><path d="M303.637695,115.5 L313.637695,107" id="Line-21-Copy" stroke="#005F8A" stroke-width="2" stroke-linecap="square" transform="translate(308.637695, 111.500000) scale(-1, 1) translate(-308.637695, -111.500000) "></path></g></g></g></svg></div></div><div class="side2-desc"><div class="sideTitle">Your Ideas. Our Expertise.</div><div class="sideDesc">Our 900+ design experts use state-of-the-art 3D design technology, SpaceCraft, to ensure that you get the perfect designs for your home. Wait no more! Start your home interiors journey with us.</div></div></div></div><div class="flowButtonsContainer">
				<p class="" id="err_msg"></p>
				<button id="step1enter" class="mainButton enterKeyBtn" title="">Next</button></div></div></div>
			
				<div class="indexMainContainer steptwo" style="display:none"><div class="flowIndicationTitle"><span class="FITitle" id="step02">TELL US WHAT YOU NEED</span><span class="FICounts">STEP <!-- -->2<!-- --> OF <!-- -->3</span></div><div class="componentswithbuttons" style="width:808px;margin:0 auto"><div class="estimateForContainer"><div class="sideOne"><div class="FPC_Container_Estimate"><div class="EFTitle">Your requirements<div class="asterisk">*</div></div><div class=" flexCont"><label class="flex">Kitchen<input type="checkbox" name="rooms" id="check" disabled="" value="Kitchen" checked=""><span class="checkmark"></span></label><label class=" flex">Wardrobe<div class="wardrobe-inputgrp"><div class="addOnCount"><button class="quantBtn removebtn" onClick="return decValue('bed_count_v','bed_count_v')" action="remove">−</button><input class="intQuant" type="text" id="bed_count_v" name="bed_count" disabled="" value="3"><button class="quantBtn" onClick="return incValue('bed_count_v','bed_count_v')" action="add">＋</button></div></div></label><label class=" flex">Entertainment unit<div class="wardrobe-inputgrp"><div class="addOnCount"><button class="quantBtn removebtn" inttype="entertainment" onClick="return decValue('entertainment','entertainment')" action="remove">−</button><input class="intQuant" id="entertainment" type="text" disabled="" value="1"><button class="quantBtn" inttype="entertainment" onClick="return incValue('entertainment','entertainment')" action="add">＋</button></div></div></label><label class=" flex">Study unit<div class="wardrobe-inputgrp"><div class="addOnCount"><button class="quantBtn removebtn" inttype="study" onClick="return decValue('study','study')" action="remove">−</button><input class="intQuant" id="study" type="text" disabled="" value="1"><button class="quantBtn" inttype="study" onClick="return incValue('study','study')" action="add">＋</button></div></div></label><label class=" flex">Crockery unit<div class="wardrobe-inputgrp"><div class="addOnCount"><button class="quantBtn removebtn" inttype="crockery" onClick="return decValue('crockery','crockery')" action="remove">−</button><input class="intQuant" id="crockery" type="text" disabled="" value="1"><button class="quantBtn" inttype="crockery" onClick="return incValue('crockery','crockery')" action="add">＋</button></div></div></label></div></div></div><div class="sideTwo"><div class="sideImage"><div class="group-6-estimate"><img src="https://super.homelane.com/kitchen-grey-2.png"></div></div><div class="side2-desc"><div class="sideTitle">Modular Kitchen</div><div class="sideDesc">Whether you are a Masterchef or a two-minute-noodle cook, our kitchen designs are personalised to suit your lifestyle, preferences and floor-plan.</div></div></div></div><div class="flowButtonsContainer"><button id="step2back" class="secondaryButton backKeyBtn">Back</button><button id="step2enter" class="mainButton enterKeyBtn">NEXT</button></div></div></div>
			
				<div class="indexMainContainer stepthree" style="display:none">
					<div class="step-heading " ><span class="FITitle">YOUR ESTIMATE IS ALMOST READY</span><span class="FICounts">STEP <!-- -->2<!-- --> OF <!-- -->2</span></div>
					<div class="loginPage " id="estimate_login" ><div id="registerLoginContainerForm" class="jsx-1332155556 registerLoginComponent_registerLoginContainer__1qgv1" style="display: flex;"><div id="leadForm" class="jsx-1332155556 registerLoginComponent_registerComponent__3Suqd undefined" style="display: block;"><div id="closeBfc" class="jsx-1332155556 closeBfc">X</div><h4 class="jsx-1332155556 registerLoginComponent_frm-title__15mdk">Sign up to view</h4>
					<form onsubmit="return validate();"  id="requirementform" action="<?php echo base_url()?>home/save" method="POST">
					<div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-"><label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label><input id="username" onkeypress="return ValidateAlpha(event);" type="text" name="name" autocomplete="off" placeholder="Name" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR" value="">
					
					<input type="hidden" id="configHouse" name="configHouse"/>
					<input type="hidden" id="possession" name="possession"/>

					<input type="hidden" id="prcity" name="prcity"/>
					<input type="hidden" id="purpose" name="purpose"/>
					<input type="hidden" id="uservalue" name="uservalue" value="<?php echo $this->session->userdata('user_id');?>"/>
					
					<svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none; position: absolute; top: 0px;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg></div><div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-"><label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label><input id="usermobile" onkeypress="return validateNumber(event);" maxlength="10" type="text" autocomplete="off" name="phone" placeholder="Phone number" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR">
					<div class="jsx-1332155556" style="margin-top: 5px;">
					<input type="checkbox" name="opt-whatsapp" class="jsx-1332155556 registerLoginComponent_whatsappCheck_box__Fq5E-">
					<label for="opt-whatsapp" class="jsx-1332155556 registerLoginComponent_optWhatsappLabel__1FNjV">You can reach me on WhatsApp</label></div><svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none; top: 0%;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg><div id="mobileExistError" class="jsx-1332155556 errMsg hide">This phone number is associated with the email id . Please log in using that email id. If this is not your email id, <a href="javaScript:void(0)" class="jsx-1332155556 registerLoginComponent_errLink__FpU2L">click here to report the error</a>.</div></div>
					
					<div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-">
					<label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label>
					<input id="useremail" type="email" formtype="register" name="email" placeholder="Email" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR" value="">
					

					<svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none; position: absolute; top: 0px;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg><div id="emailExistError" class="jsx-1332155556 errMsg hide">User Exists. Please <a href="javaScript:void(0)" class="jsx-1332155556 registerLoginComponent_errLink__FpU2L">login</a> or use a different email.</div></div>
					


					<div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-"><label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label>
					<input id="password" type="text" formtype="text" name="password" placeholder="Coupon Code" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR" value="">

					<svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none; position: absolute; top: 0px;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg><div id="emailExistError" class="jsx-1332155556 errMsg hide">User Exists. Please <a href="javaScript:void(0)" class="jsx-1332155556 registerLoginComponent_errLink__FpU2L">login</a> or use a different email.</div></div>

					
					
					
					<div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY- registerLoginComponent_btn-block__1m2W2">
					
					<div class="error">
						<p id="name_err" class=""></p>
						<p id="mobile_err" class=""></p>
						<p id="coupon_err" class=""></p>
					</div>
					<button id="step3enter" type="submit" class="jsx-1332155556 registerLoginComponent_mainBtn__1ROy8 undefined">Sign Up</button>
					
					</div>
					</form>

					<div class="jsx-1332155556 registerLoginComponent_orOtherSignOptionsMain__2KepN"><div class="jsx-1332155556 registerLoginComponent_orOtherSignOptions__2smmq"><div class="jsx-1332155556 registerLoginComponent_exist-user__2Z7Az"><span class="jsx-1332155556">Already have an account? </span><a id="login" href="javascript:void(0)" class="jsx-1332155556 registerLoginComponent_login__1RD5Q registerLoginComponent_reglog__1CXMi" style="color: #309da1;">Log in</a><span class="jsx-1332155556 registerLoginComponent_exist-user__2Z7Az"> here</span></div><div class="jsx-1332155556 "><p class="jsx-1332155556 registerLoginComponent_term-condition-line__2O9Z4"><a href="https://www.homelane.com/termsofuse" class="jsx-1332155556 registerLoginComponent_term-condition-link__7tdY2">Terms &amp; Conditions</a> | <a href="https://www.homelane.com/privacypolicy" class="jsx-1332155556 registerLoginComponent_term-condition-link__7tdY2">Privacy Policy</a></p></div></div></div></div><div id="proceed-anyway" class="jsx-1332155556 registerLoginComponent_registerComponent__3Suqd undefined" style="display: none;"><p class="jsx-1332155556 registerLoginComponent_closeProceedAnyway__-oRvp">x</p><div class="jsx-1332155556 registerLoginComponent_proceedAnywayWrapper__3aipi"><h2 class="jsx-1332155556">We're not there yet!</h2><svg xmlns="http://www.w3.org/2000/svg" width="240" height="130" viewBox="0 0 240 130"><g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g fill-rule="nonzero" transform="translate(-1037 -231)"><g transform="translate(1025 154)"><g transform="translate(12 77)"><g><path fill="#3F3D56" d="M51.834 128.774h-.54c0-14.015-11.362-25.377-25.377-25.377C11.902 103.397.54 114.76.54 128.774H0c0-14.314 11.603-25.917 25.917-25.917 14.313 0 25.917 11.603 25.917 25.917zM239.73 128.774h-.54c0-14.015-11.361-25.377-25.377-25.377-14.015 0-25.377 11.362-25.377 25.377h-.54c0-14.314 11.604-25.917 25.917-25.917 14.314 0 25.917 11.603 25.917 25.917zM176.288 66.952h-.54c0-25.604-20.83-46.435-46.434-46.435S82.88 41.347 82.88 66.952h-.54c0-25.902 21.072-46.974 46.974-46.974 25.902 0 46.974 21.072 46.974 46.974z"></path><circle cx="39.28" cy="10.664" r="10.664" fill="#309da1"></circle><path fill="#3F3D56" d="M41.5453768 84.0631721L59.8655568 62.2453093 95.8841845 62.2453093 117.895613 83.6849494 117.450979 83.9708436 117.609719 83.9708436 117.609719 128.565219 41.5704837 128.565219 41.5704837 83.9708436z"></path><path fill="#3F3D56" d="M52.568 60.202H56.721V74.577H52.568z" transform="rotate(-180 54.644 67.39)"></path><path fill="#F99D1C" d="M59.5799325 61.9594151L82.1628796 88.4358155 82.1628796 128.565219 41.5704837 128.565219 41.5704837 83.3990551z"></path><path fill="#3F3D56" d="M68.654 93.69H76.94399999999999V102.166H68.654z"></path><path fill="#3F3D56" d="M68.654 105.224H76.94399999999999V113.7H68.654z"></path><path fill="#FFF" d="M68.654 93.69H76.94399999999999V102.166H68.654z"></path><path fill="#FFF" d="M68.654 105.224H76.94399999999999V113.7H68.654z"></path><path fill="#3F3D56" d="M57.189 93.69H65.479V102.166H57.189z"></path><path fill="#3F3D56" d="M57.189 105.224H65.479V113.7H57.189z"></path><path fill="#FFF" d="M57.189 93.69H65.479V102.166H57.189z"></path><path fill="#FFF" d="M57.189 105.224H65.479V113.7H57.189z"></path><path fill="#3F3D56" d="M45.724 93.69H54.013999999999996V102.166H45.724z"></path><path fill="#3F3D56" d="M45.724 105.224H54.013999999999996V113.7H45.724z"></path><path fill="#FFF" d="M45.724 93.69H54.013999999999996V102.166H45.724z"></path><path fill="#FFF" d="M45.724 105.224H54.013999999999996V113.7H45.724z"></path><path fill="#F9A826" d="M130.934 10.799H134.714V20.247999999999998H130.934z"></path><path fill="#F99D1C" d="M102.317 19.438H134.44299999999998V128.774H102.317z"></path><path fill="#3F3D56" d="M134.443 19.438H147.401V128.774H134.443z"></path><path fill="#FFF" d="M108.121 28.886H112.97999999999999V33.745H108.121z"></path><path fill="#FFF" d="M115.951 28.886H120.80999999999999V33.745H115.951z"></path><path fill="#FFF" d="M123.78 28.886H128.639V33.745H123.78z"></path><path fill="#FFF" d="M108.256 39.955H113.115V44.814H108.256z"></path><path fill="#FFF" d="M116.085 39.955H120.94399999999999V44.814H116.085z"></path><path fill="#FFF" d="M123.915 39.955H128.774V44.814H123.915z"></path><path fill="#FFF" d="M108.391 51.024H113.25V55.883H108.391z"></path><path fill="#FFF" d="M116.22 51.024H121.079V55.883H116.22z"></path><path fill="#FFF" d="M124.049 51.024H128.90800000000002V55.883H124.049z"></path><path fill="#FFF" d="M108.526 62.092H113.38499999999999V66.951H108.526z"></path><path fill="#FFF" d="M116.355 62.092H121.214V66.951H116.355z"></path><path fill="#FFF" d="M124.184 62.092H129.043V66.951H124.184z"></path><path fill="#FFF" d="M108.661 73.161H113.52V78.02H108.661z"></path><path fill="#FFF" d="M116.49 73.161H121.34899999999999V78.02H116.49z"></path><path fill="#FFF" d="M124.319 73.161H129.178V78.02H124.319z"></path><path fill="#FFF" d="M108.796 84.229H113.655V89.088H108.796z"></path><path fill="#FFF" d="M116.625 84.229H121.484V89.088H116.625z"></path><path fill="#FFF" d="M124.454 84.229H129.313V89.088H124.454z"></path><path fill="#FFF" d="M108.931 95.298H113.78999999999999V100.157H108.931z"></path><path fill="#FFF" d="M116.76 95.298H121.619V100.157H116.76z"></path><path fill="#FFF" d="M124.589 95.298H129.448V100.157H124.589z"></path><path fill="#FFF" d="M109.066 106.367H113.925V111.226H109.066z"></path><path fill="#FFF" d="M116.895 106.367H121.75399999999999V111.226H116.895z"></path><path fill="#FFF" d="M116.895 119.325H121.75399999999999V128.504H116.895z"></path><path fill="#FFF" d="M124.724 106.367H129.583V111.226H124.724z"></path><path fill="#3F3D56" d="M134.443 10.799H136.603V19.978H134.443z"></path><path fill="#F9A826" d="M171.429 58.853H175.209V64.453H171.429z"></path><path fill="#F99D1C" d="M142.812 63.973H174.93800000000002V128.774H142.812z"></path><path fill="#3F3D56" d="M174.938 63.973H187.896V128.774H174.938z"></path><path fill="#FFF" d="M149.156 73.161H154.01500000000001V78.02H149.156z"></path><path fill="#FFF" d="M156.985 73.161H161.84400000000002V78.02H156.985z"></path><path fill="#FFF" d="M164.814 73.161H169.673V78.02H164.814z"></path><path fill="#FFF" d="M149.291 84.229H154.15V89.088H149.291z"></path><path fill="#FFF" d="M157.12 84.229H161.979V89.088H157.12z"></path><path fill="#FFF" d="M164.949 84.229H169.80800000000002V89.088H164.949z"></path><path fill="#FFF" d="M149.426 95.298H154.285V100.157H149.426z"></path><path fill="#FFF" d="M157.255 95.298H162.114V100.157H157.255z"></path><path fill="#FFF" d="M165.084 95.298H169.943V100.157H165.084z"></path><path fill="#FFF" d="M149.561 106.367H154.42000000000002V111.226H149.561z"></path><path fill="#FFF" d="M157.39 106.367H162.249V111.226H157.39z"></path><path fill="#FFF" d="M157.39 119.325H162.249V128.504H157.39z"></path><path fill="#FFF" d="M165.219 106.367H170.078V111.226H165.219z"></path><path fill="#3F3D56" d="M174.938 58.853H177.09799999999998V64.293H174.938z"></path><path fill="#3F3D56" d="M0.066 128.448H239.796V129.448H0.066z"></path><circle cx="197.793" cy="109.077" r="7.03" fill="#B3C89B"></circle><path fill="#000" d="M203.023 104.382a7.03 7.03 0 01-11.714 7.44 7.03 7.03 0 1011.714-7.44z" opacity="0.2"></path><path fill="#3F3D56" d="M197.812643 109.077435L197.832081 109.077435 198.179528 129.008774 197.445759 129.008774z"></path><path fill="#3F3D56" d="M198.257 119.429H199.257V120.742H198.257z" transform="rotate(62.234 198.43 120.086)"></path><circle cx="218.462" cy="98.699" r="10.69" fill="#B3C89B"></circle><path fill="#000" d="M226.414 91.56a10.691 10.691 0 01-17.814 11.314 10.691 10.691 0 1017.814-11.315z" opacity="0.2"></path><path fill="#3F3D56" d="M218.490979 98.6993926L218.520405 98.6993926 219.048999 129.008774 217.932958 129.008774z"></path><path fill="#3F3D56" d="M219.167 114.442H220.167V116.439H219.167z" transform="rotate(62.234 219.43 115.44)"></path><circle cx="7.197" cy="108.807" r="7.03" fill="#B3C89B"></circle><path fill="#000" d="M12.427 104.112a7.03 7.03 0 01-11.715 7.44 7.03 7.03 0 1011.715-7.44z" opacity="0.2"></path><path fill="#3F3D56" d="M7.21646794 108.807469L7.23590551 108.807469 7.58335208 128.738808 6.8495838 128.738808z"></path><path fill="#3F3D56" d="M7.661 119.159H8.661V120.47200000000001H7.661z" transform="rotate(62.234 7.835 119.816)"></path><path fill="#3F3D56" d="M163.711 10.08l2.485-1.988c-1.93-.213-2.724.84-3.048 1.673-1.509-.626-3.15.195-3.15.195l4.972 1.805a3.763 3.763 0 00-1.259-1.686zM38.987 20.068l2.485-1.988c-1.93-.213-2.724.84-3.049 1.674-1.508-.627-3.15.194-3.15.194l4.973 1.805a3.763 3.763 0 00-1.26-1.685zM201.506 30.327l2.486-1.988c-1.931-.213-2.724.84-3.049 1.674-1.508-.627-3.15.194-3.15.194l4.972 1.805a3.763 3.763 0 00-1.259-1.685zM59.504 14.669l2.485-1.988c-1.93-.213-2.724.84-3.048 1.673-1.508-.626-3.15.195-3.15.195l4.972 1.805a3.763 3.763 0 00-1.259-1.685zM64.094 36.266l2.485-1.988c-1.93-.213-2.724.84-3.049 1.674-1.508-.627-3.15.194-3.15.194l4.972 1.805a3.763 3.763 0 00-1.258-1.685zM160.742 47.605l2.485-1.988c-1.93-.213-2.724.84-3.049 1.673-1.508-.626-3.15.195-3.15.195L162 49.29a3.763 3.763 0 00-1.258-1.685z"></path><path fill="#3F3D56" d="M28.6164229 123.104612L11.8785152 123.104612 11.8785152 123.644544 14.4888189 123.644544 14.4888189 128.773903 15.0287514 128.773903 15.0287514 123.644544 25.1962205 123.644544 25.1962205 128.773903 25.736153 128.773903 25.736153 123.644544 28.6164229 123.644544z"></path><path fill="#3F3D56" d="M45.624 125.264c-.66 0-1.31.174-1.881.505a4.045 4.045 0 00-6.758 3.005H49.39a3.777 3.777 0 00-3.766-3.51zM109.606 125.264c-.66 0-1.31.174-1.881.505a4.045 4.045 0 00-6.758 3.005h12.405a3.777 3.777 0 00-3.766-3.51zM151.451 125.264c-.66 0-1.31.174-1.881.505a4.045 4.045 0 00-6.758 3.005h12.405a3.777 3.777 0 00-3.766-3.51zM206.524 125.264c-.66 0-1.31.174-1.881.505a4.045 4.045 0 00-6.758 3.005h12.405a3.777 3.777 0 00-3.766-3.51zM232.98 125.264c-.66 0-1.309.174-1.88.505a4.045 4.045 0 00-6.758 3.005h12.405a3.777 3.777 0 00-3.766-3.51z"></path><path fill="#3F3D56" d="M34.8256468 109.876265L30.5061867 109.876265 30.5061867 114.195726 32.5085264 114.195726 32.5085264 128.750146 33.0484589 128.750146 33.0484589 114.195726 34.8256468 114.195726z"></path><path fill="#3F3D56" d="M11.911 121.489H28.649V122.489H11.911z"></path><path fill="#3F3D56" d="M11.911 120.139H28.649V121.139H11.911z"></path><path fill="#3F3D56" d="M11.911 118.79H28.649V119.79H11.911z"></path></g></g></g></g></g></svg><p class="jsx-1332155556">Sorry, we currently do not service the entered PIN code area. However, we are continuously expanding.  Do you still wish to proceed?</p><button id="proceed-anyway-btn" class="jsx-1332155556">Proceed Anyway</button></div></div><div id="sideImageToggle" class="jsx-1332155556 registerLoginComponent_sideImage__36a_e registerLoginComponent_sideImageToggle__2_YdT"><img src="https://super.homelane.com/hlncr1.png" data-src="" alt="HomeLane Sign Up Logo" class="jsx-1332155556 "></div></div></div>
			
				</div>

				<div class="indexMainContainer stepfour" style="display:none">
					<div class="step-heading" style=""><span class="FITitle">YOUR ESTIMATE IS ALMOST READY</span><span class="FICounts">STEP <!-- -->2<!-- --> OF <!-- -->2</span></div>
					<div class="loginPage" id="estimate_login" style="display: block;">
					<div id="registerLoginContainerForm" class="jsx-1332155556 registerLoginComponent_registerLoginContainer__1qgv1" style="display: flex;"><div id="sideLogToggle" class="jsx-1332155556 registerLoginComponent_loginComponent__1-WlH undefined"><div id="closeBfc" class="jsx-1332155556 closeBfc">X</div><h4 class="jsx-1332155556 ">Login</h4><div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-"><label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label>
					<input placeholder="Enter Your Mobile" maxlength="10" type="text" onkeypress="return validateNumber(event)"  id="usermobile" formtype="login" name="email" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR" value="">
					<svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg></div><div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-" style="margin-bottom: 35px;"><label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label>
					<input id="loginpassword" placeholder="Enter Your Password" type="password" name="password" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR" value=""><svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg>
					
					<a id="forgotPassword" href="<?php echo base_url()?>home/forgotpassword" class="jsx-1332155556 registerLoginComponent_forgotPassword__3nzR4">Forgot Password?</a></div>
					<div id="forgot_error" class="jsx-1332155556" style="display: none; color: red; margin-top: -20px;"></div>
					
					<div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY- registerLoginComponent_btn-block__1m2W2">
					
					<a href="javaScript:void(0)" style="text-decoration:none" id="login-err" class="hide login-err jsx-1332155556 registerLoginComponent_errLink__FpU2L">
Please enter valid username and password.</a>
					<button type="submit" onclick="return validateLogin()" id="enterlogin" class="jsx-1332155556 registerLoginComponent_mainBtn__1ROy8 undefined">Log In</button>
					
					</div>
					
					<div class="jsx-1332155556 registerLoginComponent_orOtherSignOptionsMain__2KepN">
					<div class="jsx-1332155556 registerLoginComponent_orOtherSignOptions__2smmq">
					<div class="jsx-1332155556 registerLoginComponent_socialLinks__2Jazf">
					</div><div class="jsx-1332155556 registerLoginComponent_exist-user__2Z7Az">
					<span class="jsx-1332155556">First time User? </span><a href="javascript:void(0)" class="jsx-1332155556 registerLoginComponent_login__1RD5Q registerLoginComponent_reglog__1CXMi" id="signup" style="color: #309da1;">Sign up</a><span class="jsx-1332155556 registerLoginComponent_exist-user__2Z7Az"> here</span></div></div></div></div><div id="sideImageToggle" class="jsx-1332155556 registerLoginComponent_sideImage__36a_e registerLoginComponent_sideImageToggle__2_YdT sideImageToggle"><img src="https://super.homelane.com/hlncr1.png" data-src="" alt="HomeLane Sign Up Logo" class="jsx-1332155556 "></div></div></div>
				</div>
			
			</div>
		</div>
	</div>
</div>
<?php include_once 'cmn_footer.php';?>

<script>
	function validateLogin(){
        var mobile = $("#usermobile").val();
        var password = $("#loginpassword").val();
        $.ajax({
            method:'POST',
            data:{'mobile':mobile,'password':password},
            url:'<?php echo base_url()?>home/checkLogin',
            success:function(response){
                if(response==false){
                    $("#login-err").show().fadeOut(5000);
                    //alert('Please enter valid phone number and password.');
                }else{
					$("#uservalue").val(1);
					$("#requirementform").submit();
                    //window.location.reload();
                }
            }

        })
    }
	$(document).ready(function () {
		

		$("#step1enter").on('click',function(){
			var configHouse = $("input[name=configHouse]:checked").val();
			var possession_in = $("input[name=possession_in]:checked").val();
			var city = $("input[name=city]:checked").val();
			var purpose = $("input[name=purpose]:checked").val();
			if($('input[name=configHouse]').is(':checked')==false || $('input[name=possession_in]').is(':checked')==false || $('input[name=city]').is(':checked')==false || $('input[name=purpose]').is(':checked')==false){
				$("#err_msg").addClass("alert alert-danger");
				$("#err_msg").text('Please select fields').show().fadeOut(3000);
				return false;
			}else{
				$("#possession").val(possession_in);
				$("#prcity").val(city);
				$("#purpose").val(purpose);
				$("#configHouse").val(configHouse);
				var uservalue = $("#uservalue").val();
				if(uservalue!="" && uservalue!=null){
					$("#requirementform").submit();
				}else{
					$(".stepone").hide();
					$(".stepthree").show();
				}
				
			}
			
		});

		$("#step2enter").on('click',function(){

			$("#wardrobe").val($("#bed_count_v").val());
			$("#entertainmentunit").val($("#entertainment").val());
			$("#studyunit").val($("#study").val());
			$("#crockeryunit").val($("#crockery").val());
		
			$(".steptwo").hide();
			$(".stepthree").show();
		});

		$("#login").on('click',function(){
			$(".stepthree").hide();
			$(".stepfour").show();
		});

		$("#signup").on('click',function(){
			$(".stepthree").show();
			$(".stepfour").hide();
		});


		

	});

	function validate(){
		var error = 0;
		var coupon = $("#password").val();
		var mobile = $("#usermobile").val();
		var name = $("#username").val();
		var uservalue = $("#uservalue").val();
		if(uservalue!="" && uservalue!=null){
			return true;
		}
		if(name=="" || name==null){
			error += 1;
			$("#name_err").addClass("alert alert-danger");
			$("#name_err").html('Please enter name').show().fadeOut(3000);
		}
		if(mobile=="" || mobile==null || mobile.length<10){
			error += 1;
			$("#mobile_err").addClass("alert alert-danger");
			$("#mobile_err").html('Mobile number should not be empty and must be 10 digits').show().fadeOut(3000);
		}
		
		
		$.ajax({
			method:'POST',
			url:'<?php echo base_url()?>home/checkUser',
			data:{'coupon':coupon,'mobile':mobile},
			async:false,
			success:function(response){
				var result = jQuery.parseJSON(response);
				if(result.mobile == false){
					error += 1;
					$("#mobile_err").addClass("alert alert-danger");
					$("#mobile_err").html('Mobile has been already registered.').show().fadeOut(3000);
				}

				if(result.coupon == false){
					error += 1;
					$("#coupon_err").addClass("alert alert-danger");
					$("#coupon_err").html('Coupon is already used.').show().fadeOut(3000);
				}
			}
		});
		if(error == 0){
			return true;
		}else{
			return false;
		}
		
	}

	function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
	function validateNumber(event) {
		var key = window.event ? event.keyCode : event.which;
		if (event.keyCode === 8 || event.keyCode === 46) {
			return true;
		} else if ( key < 48 || key > 57 ) {
			return false;
		} else {
			return true;
		}
	}
</script>

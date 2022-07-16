<?php include_once 'cmn_head.php';?>
<style>
html,body{margin:0;padding:0;height:100%;width:100%;min-height:100%;background-color:#fafafa}input{font-family:Lato,sans-serif}#__next{height:100%}.estimator-index .registerComponent{width:55%;padding:24px}.estimator-index .registerComponent h4{margin-bottom:16px;text-align:left}.estimator-index .registerComponent .frm-grp .error-lab{}.estimator-index .registerComponent .frm-grp{font-size:14px}.estimator-index .registerComponent .frm-grp svg{top:40%;right:4%}.indexMainContainer{width:100%;height:100%;min-height:100%;padding:0;margin:0;background-color:#fafafa;overflow:hidden}.flowIndicationTitle{height:36px;width:auto;color:#8e8e90;font-size:12px;line-height:18px;text-align:center;margin:20px auto}.flowIndicationTitle>.FITitle{height:22px;width:163px;color:#4a4a4a;font-size:18px;font-weight:700;letter-spacing:0;line-height:22px;text-align:center}.flowButtonsContainer{width:55%}.flowButtonsContainer>.mainButton{border-radius:5px;font-weight:700!important;border:none;font-size:16px!important;cursor:pointer;height:48px;width:120px;border-radius:8px;background-color:#309da1;color:#fff;font-size:16px;letter-spacing:0;line-height:19px;text-align:center}.flowButtonsContainer>.secondaryButton{border-radius:5px;font-weight:700!important;border:none;margin-top:0;font-size:16px!important;cursor:pointer;height:48px;width:120px;border-radius:8px;color:#309da1;border:1px solid #309da1;background-color:#fff;font-size:16px;margin-top:16px;letter-spacing:0;line-height:19px;text-align:center}#step2enter{margin-left:16px!important;margin-top:16px}.btnDisabled{background-color:#d2d2d2!important;color:#212121!important}.loginPage{width:60%;background-color:#fff;box-shadow:0 0 4px 0 rgba(0,0,0,.09);padding:0;display:flex;overflow:hidden;margin:auto;border-radius:9px;border:1px solid #ccc}.loginPage .closeBfc{display:none}.step-heading{width:auto;text-align:center;color:#8e8e90;font-size:12px;line-height:18px;margin-top:24px;margin-bottom:16px}.FICounts{padding-top:6px;color:#4a4a4a;display:block;font-size:13px;letter-spacing:0;line-height:16px}.step-heading>.FITitle{height:22px;width:299px;color:#4a4a4a;font-size:18px;font-weight:700;letter-spacing:0;line-height:22px;text-align:center}.sudeo{position:absolute}.our-banner__pattern-left{left:117px;top:60px}.our-banner__pattern-right{top:70px;right:2.5rem}.renovate_tagline{color:#fff;font-size:14px;padding:15px 30px;font-weight:500;letter-spacing:0;line-height:18px;text-align:center;margin:0;background-color:#309da1}.renovate-heading span{visibility:hidden}@media(min-width:768px){.our-banner__pattern-left{top:70px;left:1rem}}.mainButton:focus{outline:none}@media only screen and (max-width:1370px){.registerLoginContainer .sideImage{width:50%}}.alignItem{flex-direction:column}.backStep2{float:left;font-weight:600;border:none;margin-top:0;font-size:16px!important;height:48px;width:120px;border-radius:8px;color:#309da1;border:1px solid #309da1;background-color:#fff;font-size:16px;margin-top:16px;letter-spacing:0;line-height:19px;text-align:center}.button-container{width:60%;margin:10px auto}.btnDisabled{background-color:#d2d2d2!important;color:#212121!important}#step3back{position:absolute;left:20%!important}.yourFloorPlanContainer{height:400px;width:808px;margin:16px auto;display:flex}#areaInput{display:flex;position:relative}#sqErr{color:#309da1;font-size:12px;position:absolute;top:40px;left:0;width:100%}.yourFloorPlanContainer .FPCTitle{height:19px;width:120px;color:#222;font-size:16px;letter-spacing:0;line-height:19px}.sideOne *{font-size:100%}.FPC_Container{height:271px;width:356px;margin:64px 24px 0}.FPCFloorplans{height:67px;width:356px}.radio-buttons-container{height:32px;width:356px;margin-top:16px;display:flex;justify-content:space-between}.yourFloorPlanContainer .sideOne{height:400px;width:404px;display:inline-block;padding-right:0;box-sizing:border-box;border:1px solid #ccc;border-right:none;border-radius:8px 0 0 8px;background-color:#fff}.yourFloorPlanContainer .sideTwo{height:400px;width:403px;border:1px solid #ccc;border-radius:0 7px 7px 0;background-color:#fff}.sideImage{height:129px;width:355px;border-radius:6px;background-color:#fff;margin:77px 24px 0}.side2-desc{height:91px;width:355px;margin:24px 24px 0}.group-6{height:129px;width:308px;margin-left:24px;background-color:#fff}.yourFloorPlanContainer .sideTwo .sideTitle{height:19px;width:183px;color:#222;font-size:16px;letter-spacing:0;line-height:19px;margin:0 86px}.yourFloorPlanContainer .sideTwo .sideDesc{height:64px;width:355px;color:#4a4a4a;font-size:13px;letter-spacing:0;line-height:16px;margin-top:8px;text-align:center}.yourFloorPlanContainer .sideOne .FPSqft{border:none;padding-bottom:8px;width:52px;font-size:14px}input:-internal-autofill-selected{background-color:#fff!important}.yourFloorPlanContainer .sideOne .FPSqft:active,.yourFloorPlanContainer .sideOne .FPSqft:focus{outline:none}.yourFloorPlanContainer .sideOne .FPSqft::placeholder{color:#979797;opacity:1}.yourFloorPlanContainer .sideOne .FPSqft:-ms-input-placeholder{color:#979797}.yourFloorPlanContainer .sideOne .FPSqft::-ms-input-placeholder{color:#979797}.yourFloorPlanContainer .sideOne .FPSqftUnit{height:16px;width:42px;color:#888;font-size:14px;letter-spacing:0;line-height:16px}.sideOne .area-input{margin-top:16px;height:25px;width:94px;display:inline-flex;border-bottom:1px solid #ccc}.toggleBtn.btn-xs{margin:15px 0 0;padding:0;position:relative;border:none;height:36px;width:249px;border-radius:1rem;z-index:1072}.toggleBtn{margin:0 4rem;padding:0;position:relative;border:none;height:1.5rem;width:3rem;border-radius:1.5rem;color:#6b7381;background-color:#efefef;outline:none}.toggleBtn.btn-xs>.handle{position:absolute;top:0;left:0;width:134px;height:36px;border-radius:15px;background-color:#ff9800;transition:left .25s;color:#fff}.toggleBtn>.handle{position:absolute;top:.1875rem;left:.1875rem;width:1.125rem;height:1.125rem;border-radius:1.125rem;background:#fff}.toggleBtn.active{background-color:#efefef}.toggleBtn.active>.handle{left:114px;transition:left .25s}button.btn.btn-xs.toggleBtn:after{content:"Rent Out";font-size:13px;right:30px;position:absolute;top:8px;color:#000}button.btn.btn-xs.toggleBtn.active:before{content:"Move In";position:absolute;font-size:13px;left:35px;top:8px;color:#000}button.btn.btn-xs.toggleBtn.active:after{content:""}.toggleBtn.active>.handle:after{content:"Rent Out";position:absolute;font-size:13px;top:8px;right:30px}button.btn.btn-xs.toggleBtn:before{content:"Move In";position:absolute;font-size:13px;left:35px;z-index:9999;top:8px;color:#fff}.toggleBtn:focus{box-shadow:none}.purpose-section{margin-top:16px;width:100%;display:flex;color:#309da1;font-size:14px;letter-spacing:0;line-height:17px;text-align:center}.yourFloorPlanContainer .sideTwo .sideImage svg{width:308px;height:129px}.purpose-section .purpose-toggle-button{box-sizing:border-box;height:32px;width:114px;border:1px solid #309da1;border-radius:6px;background-color:#fff;background-color:#fff;-webkit-appearance:none;margin-right:10px;color:#309da1}.purpose-section .purpose-toggle-button:hover{color:#fff;background-color:#309da1}#purpose_btn3{padding-left:25px}#renovate{position:absolute;top:-3px;left:5px}.renovate-btn{height:44px;width:114px;position:relative}.purpose-section .purpose-toggle-button:focus{outline:none}.purpose-section .active{color:#fff;background-color:#309da1}@media only screen and (max-width:1370px){.yourFloorPlanContainer .sideTwo .sideImage svg{width:308px;height:129px}}#sqErr{color:#309da1;font-size:12px}.radio-toolbar{height:32px;width:83px}.radio-toolbar input[type=radio]{opacity:0;position:fixed;width:0}.radio-toolbar label{display:inline-block;height:32px;width:82.93px;box-sizing:border-box;border:1px solid #309da1;border-radius:6px;background-color:#fff;color:#309da1;font-size:14px;letter-spacing:0;line-height:17px;text-align:center;padding-top:7px;cursor:pointer}.radio-toolbar label:hover{background-color:#309da1;color:#fff}.radio-toolbar input[type=radio]:focus+label{}.radio-toolbar input[type=radio]:checked+label{background-color:#309da1;color:#fff}.estimateForContainer{height:400px;width:808px;margin:5px auto;display:flex}.estimateForContainer .sideOne{height:400px;width:404px;display:inline-block;padding-right:0;box-sizing:border-box;border:1px solid #ccc;border-radius:8px 0 0 8px;background-color:#fff}.estimateForContainer .sideTwo{height:400px;width:403px;border:1px solid #ccc;border-left:none;border-radius:0 7px 7px 0;background-color:#fff}.estimateForContainer .EFTitle{height:19px;width:100%;color:#222;font-size:16px;letter-spacing:0;line-height:19px;display:flex}.asterisk{color:#309da1}.estimateForContainer .sideOne .selectContainerMain{margin-top:30px}.estimateForContainer .sideOne .container{display:block;position:relative;padding-left:0;margin-bottom:55px;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;color:#868686;font-size:14px;height:18px;line-height:18px}.estimateForContainer .sideOne .container input[type=checkbox]{position:absolute;opacity:0;cursor:pointer;height:0;width:0}.estimateForContainer .sideOne .checkmark{position:absolute;top:0;right:0;height:18px;width:18px;border:1.5px solid #309da1;border-radius:2px}.estimateForContainer .sideOne .flex:hover input~.checkmark{background-color:#ccc}.estimateForContainer .sideOne .flex input:checked~.checkmark{background-color:#fff;color:#309da1}#bed_count{height:23px;width:30px;border:none;background-color:#ff4712;color:#fff;display:inline-block;position:relative;top:-6px;text-align:center}.addRemoveBtns{height:23px;width:23px;border:1px solid #ff4712;display:inline-block;overflow:hidden;text-align:center;line-height:20px;font-size:20px;color:#ff4712}.bedAddRemoveContainer{position:absolute;right:0;top:0}.FPC_Container_Estimate{height:324px;width:356px;margin:22px 24px 0}.estimateForContainer .sideTwo .sideImage{height:129px;width:355px;border-radius:6px;background-color:#fff;margin:77px 24px 0}.estimateForContainer .sideTwo .sideTitle{height:19px;width:100%;color:#222;font-size:16px;letter-spacing:0;line-height:19px;text-align:center}.estimateForContainer .sideTwo .sideDesc{height:64px;width:100%;color:#4a4a4a;font-size:13px;letter-spacing:0;line-height:16px;margin-top:8px;text-align:center}.removebtn{color:#309da1!important;border-color:#309da1!important}.group-6-estimate{height:129px;width:173px;margin:0 97px;background-color:#fff}.flexCont{display:flex;flex-direction:column;justify-content:space-evenly;color:gray}.flexCont>label.flex .addOnCount{display:flex;flex-direction:row;justify-content:space-around}.addOnCount *{font-weight:500}.quantBtn{width:18px;border:1.5px solid #309da1;height:18px;background:0 0;line-height:13px;color:#309da1;text-align:center;padding:0;display:inline-block;font-weight:700;border-radius:2px;vertical-align:middle}.abc{text-align:center;height:18px;width:18px;position:absolute;top:0;left:0;vertical-align:text-top}.quantBtn:focus{outline:none}.intQuant{height:18px;width:24px;color:#4a4a4a;text-align:center;background-color:#fff;font-size:100%;letter-spacing:0;line-height:20px;border-style:none;pointer-events:none;-webkit-text-fill-color:#4a4a4a;padding-bottom:0;vertical-align:middle}.flex{display:flex;flex-direction:row;height:37px;width:356px;border-bottom:1px solid #e4e4e4;justify-content:space-between;position:relative;margin-top:24px;color:#4a4a4a;font-size:14px!important;letter-spacing:0;line-height:17px}.wardrobe-inputgrp{height:24px;width:69px;align-items:center}.title{height:17px;width:48px;color:#4a4a4a;font-size:14px;letter-spacing:0;line-height:17px;margin-bottom:13px}.flex input:checked~.checkmark:after{display:block}.flex .checkmark:after{content:"";position:absolute;display:none}.flex .checkmark:after{right:5px;top:1px;width:6px;height:10px;border:solid #309da1;border-width:0 2px 2px 0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}@media only screen and (max-width:1400px){}@media only screen and (max-width:1400px){}.estimateForContainer .sideTwo .sideImage img{height:129px;width:173px}@media only screen and (max-width:1370px){.estimateForContainer{height:auto}}input[disabled]{-webkit-text-fill-color:#4a4a4a;color:#fff}#estimate_login #sideImageToggle img{background:#999376}


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
</style>
<div class="full-section">
	<div class="dlab-bnr-inr  contact-page" >
		<div class="container-fluid">
			<div class="row justify-content-center">
				

				<div class="indexMainContainer stepfour" >

				
				
					<div class="loginPage" id="estimate_login" style="display: block;">
					<?php if($this->session->flashdata('success')!="" && $this->session->flashdata('success')!=null){?>
                    <div class="alert alert-dismissiable alert-success"><?php echo $this->session->flashdata('success');?></div>
                <?php } ?>


				<?php if($this->session->flashdata('error')!="" && $this->session->flashdata('error')!=null){?>
                    <div class="alert alert-dismissiable alert-danger"><?php echo $this->session->flashdata('error');?></div>
                <?php } ?>
					<div id="registerLoginContainerForm" class="jsx-1332155556 registerLoginComponent_registerLoginContainer__1qgv1" style="display: flex;">
					
					
					<div id="sideLogToggle" class="jsx-1332155556 registerLoginComponent_loginComponent__1-WlH undefined"><div id="closeBfc" class="jsx-1332155556 closeBfc">X</div><h4 class="jsx-1332155556 ">Change Password</h4>
					<form action="<?php echo base_url()?>home/changepassword" method="POST">
						<div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-"><label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label><input placeholder="Enter Password" type="password" required formtype="login" name="password" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR" value=""><svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg></div><div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY-" style="margin-bottom: 35px;"><label class="jsx-1332155556 registerLoginComponent_form-label__16ibY"></label><input placeholder="Re enter Your Password" type="password" required name="c_password" class="jsx-1332155556 registerLoginComponent_frm-input__3dwRR" value=""><svg viewBox="0 0 24 24" class="jsx-1332155556" style="display: none;"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" class="jsx-1332155556"></path></svg></div>
						
						
						<div id="forgot_error" class="jsx-1332155556" style="display: none; color: red; margin-top: -20px;"></div>
						
						<div class="jsx-1332155556 registerLoginComponent_frm-grp__2OuY- registerLoginComponent_btn-block__1m2W2"><button type="submit" id="enterlogin" class="jsx-1332155556 registerLoginComponent_mainBtn__1ROy8 undefined">Change Password</button>
						</div>
					</form>
					
					
					<div class="jsx-1332155556 registerLoginComponent_orOtherSignOptionsMain__2KepN">
					<div class="jsx-1332155556 registerLoginComponent_orOtherSignOptions__2smmq">
					
					
					
					<div class="jsx-1332155556 registerLoginComponent_exist-user__2Z7Az"></div></div></div></div><div id="sideImageToggle" class="jsx-1332155556 registerLoginComponent_sideImage__36a_e registerLoginComponent_sideImageToggle__2_YdT sideImageToggle"><img src="https://super.homelane.com/hlncr1.png" data-src="" alt="HomeLane Sign Up Logo" class="jsx-1332155556 "></div></div></div>
				</div>
			
			</div>
		</div>
	</div>
</div>
<?php include_once 'cmn_footer.php';?>

<script>
	$(document).ready(function () {
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

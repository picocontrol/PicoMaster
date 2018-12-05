<style>
    /*********************************
11. Footer
*********************************/

.footer
{
	display: block;
	position: relative;
	padding-top: 136px;
}
.newsletter_title
{
	font-family: 'Oswald', sans-serif;
	font-size: 36px;
	font-weight: 400;
	color: #FFFFFF;
	line-height: 1.2;
}
.newsletter_subtitle
{
	font-family: 'Open Sans', sans-serif;
	font-size: 18px;
	color: #FFFFFF;
	font-weight: 300;
	margin-top: 18px;
}
.newsletter_form_container
{
	margin-top: 84px;
}
.newsletter_input
{
	width: 100%;
	height: 50px;
	background: rgba(255,255,255,0.5);
	border: none;
	outline: none;
	padding-left: 22px;
	color: #FFFFFF;
}
.newsletter_input::-webkit-input-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_input:-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_input::-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
} 
.newsletter_input:-ms-input-placeholder
{ 
	font-size: 12px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_input::input-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_form > div:not(:last-child)
{
	margin-right: 15px;
}
.newsletter_form > div:first-child
{
	width: calc(100% - 176px);
}
.newsletter_form > div:first-child > div:first-child
{
	width: calc((100% - 15px) * 0.35);
}
.newsletter_form > div:first-child > div:last-child
{
	width: calc((100% - 15px) * 0.65);
}
.newsletter_form > div > div > div
{
	position: absolute;
	left: 0;
	bottom: -2px;
	width: 100%;
	height: 2px;
	background: #FFFFFF;
	visibility: hidden;
	opacity: 0;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.newsletter_button
{
	width: 161px;
	height: 50px;
	border-radius: 20px;
	background: rgba(255,255,255,0.5);
	font-family: 'Oswald', sans-serif;
	font-size: 16px;
	font-weight: 400;
	color: #FFFFFF;
	text-transform: uppercase;
	border: none;
	outline: none;
	cursor: pointer;
}
.footer_contact_row
{
	margin-top: 80px;
	padding-bottom: 50px;
}
.footer_contact_item
{
	width: 100%;

}
.footer_contact_icon
{
	width: 68px;
	height: 68px;
}
.footer_contact_icon img
{
	max-width: 100%;
}
.cr
{
	width: 100%;
	height: 68px;
}
.cr div
{
	font-size: 12px;
	font-weight: 400;
	color: rgba(255,255,255,0.48);
}
.footer_contact_title
{
	font-family: 'Oswald', sans-serif;
	font-size: 24px;
	color: #FFFFFF;
	font-weight: 400;
	text-transform: uppercase;
	margin-top: 18px;
}
.footer_contact_list
{
	margin-top: 19px;
}
.footer_contact_list ul li
{
	font-size: 14px;
	color: #FFFFFF;
	line-height: 1.71;
}
.footer_contact_list ul li:not(:last-child)
{
	margin-bottom: 7px;
}
</style>

<!-- Footer -->

<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/public/img/contact.jpeg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
							<div class="newsletter_subtitle">Join our database NOW!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">subscribe</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: +44 5567 32 664 567</li>
										<li>Mobile: +44 5567 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>4124 Barnes Street, Sanford, FL 32771</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f1889e8483949c90989db1969c90989ddf929e9c">[email&#160;protected]</a></li>
										<li><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4ebc2c2cdc7c1e4ddcbd1d6c6d1d7cdcac1d7d7cac5c9c18ac7cbc9">[email&#160;protected]</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

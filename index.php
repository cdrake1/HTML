<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PocketCreamery</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="assets/styles.css">

    <link rel="shortcut icon" href="assets/images/ice-cream-cone.png" type="image/png">
  </head>
  <body>
    <div id="container">
      <div id="header">
        <a class="no-style-link" style="color: white;" href="index.php">
          <img id="logo" src="assets/images/ice-cream-cone.png">
          <span id="name">PocketCreamery</span>
        </a>
        <br>
        <br>
        <br>
        <br>
  
        <span id="short-description">An ice cream shop in your pocket</span>
  
        <br>
        <br>
        <br>
  
        <a class="no-style-link" href="#"><div class="big-button" id="add-business-button">Add Your Business</div></a>
  
        <div id="buttons">
          &nbsp; &nbsp;
          <a class="no-style-link" href="#"><div class="custom-button" id="login-button">Login</div></a>
          &nbsp; &nbsp; <!-- These are no-break spaces - this is what separates the two buttons -->
          <a class="no-style-link" href="signup.html"><div class="custom-button" id="sign-up-button">Sign Up</div></a>
        </div>
      </div>
  
      <div id="content">
        <table class="info-table" id="info-table">
          <tr>
            <th>About Us</th>
            <th>Site Information</th>
            <th>FAQ (hover over each)</th>
          </tr>
  
          <tr>
            <td>
              PocketCreamery has completely revolutionized the way you buy ice cream.
              Using this website and our app you can order ice cream sundaes, shakes, and other specialties for pick up and delivery from 
              participating local ice cream shops.
            </td>
            <td>
              This is our home page. Here you can sign up for our service, view the products that our vendors offer, and
              find other general information!
            </td>
            <td>
              <ul>
                <div class="hoverbox">
                  <span class="text" id="faq-1">Simply press the "Sign Up" button on top and create an account.</span>
                </div>
                <li onmouseover="toggleHoverText(1)" onmouseleave="toggleHoverText(1)">How do I sign up?</li>

                <div class="hoverbox">
                  <span class="text" id="faq-2">When you place your order, our closest partner stores will pop up based on your zipcode.</span>
                </div>
                <li onmouseover="toggleHoverText(2)" onmouseleave="toggleHoverText(2)">How do I know which ice cream shops participate with PocketCreamery?</li>
                
                <div class="hoverbox">
                  <span class="text" id="faq-3">When you log in you should have an option to place an order.</span>
                </div>
                <li onmouseover="toggleHoverText(3)" onmouseleave="toggleHoverText(3)">How do I place an order?</li>
              </ul>
            </td>
          </tr>
        </table>
      </div>
      
      <div id="disclaimer-popup" class="overlay">  
        <div class="popup">
          <h2>Disclaimer</h2>
          <a class="close" href="#">×</a>
          <div class="content">
            <p>This disclaimer (&#8220;Disclaimer&#8221;) sets forth the general guidelines, disclosures, and terms of your use of the <a href="http://pocketcreamery.com">pocketcreamery.com</a> website (&#8220;Website&#8221; or &#8220;Service&#8221;) and any of its related products and services (collectively, &#8220;Services&#8221;). This Disclaimer is a legally binding agreement between you (&#8220;User&#8221;, &#8220;you&#8221; or &#8220;your&#8221;) and this Website operator (&#8220;Operator&#8221;, &#8220;we&#8221;, &#8220;us&#8221; or &#8220;our&#8221;). If you are entering into this agreement on behalf of a business or other legal entity, you represent that you have the authority to bind such entity to this agreement, in which case the terms &#8220;User&#8221;, &#8220;you&#8221; or &#8220;your&#8221; shall refer to such entity. If you do not have such authority, or if you do not agree with the terms of this agreement, you must not accept this agreement and may not access and use the Website and Services. By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Disclaimer. You acknowledge that this Disclaimer is a contract between you and the Operator, even though it is electronic and is not physically signed by you, and it governs your use of the Website and Services.</p>
            <div class="wpembed-index"><h3>Table of contents</h3><ol class="wpembed-index"><li><a href="#representation">Representation</a></li><li><a href="#content-and-postings">Content and postings</a></li><li><a href="#indemnification-and-warranties">Indemnification and warranties</a></li><li><a href="#changes-and-amendments">Changes and amendments</a></li><li><a href="#acceptance-of-this-disclaimer">Acceptance of this disclaimer</a></li><li><a href="#contacting-us">Contacting us</a></li></ol></div><h2 id="representation">Representation</h2>
            <p>Any views or opinions represented on the Website are personal and belong solely to the Operator and do not represent those of people, institutions or organizations that the Operator may or may not be associated with in professional or personal capacity unless explicitly stated. Any views or opinions are not intended to malign any religion, ethnic group, club, organization, company, or individual.</p>
            <h2 id="content-and-postings">Content and postings</h2>
            <p>You may print or copy any part of the Website and Services for your own personal, non-commercial use, but you may not copy any part of the Website and Services for any other purposes, and you may not modify any part of the Website and Services. Inclusion of any part of the Website and Services in another work, whether in printed or electronic or another form or inclusion of any part of the Website and Services on another resource by embedding, framing or otherwise without the express permission of the Operator is prohibited. </p>
            <h2 id="indemnification-and-warranties">Indemnification and warranties</h2>
            <p>The accuracy, reliability and completeness of the information and content, distributed through, linked, downloaded or accessed from the Website and Services are guaranteed by . However, all information on the Website is provided &#8220;as is&#8221;, with no guarantee of the results obtained from the use of this information, and without warranty of any kind, express or implied. In no event will the Operator be liable to you or anyone else for any decision made or action taken in reliance on the information on the Website, or for any consequential, special or similar damages, even if advised of the possibility of such damages. Information contained on the Website are subject to change at any time and without warning.</p>
            <h2 id="changes-and-amendments">Changes and amendments</h2>
            <p>We reserve the right to modify this Disclaimer or its terms related to the Website and Services at any time at our discretion. When we do, we will revise the updated date at the bottom of this page. We may also provide notice to you in other ways at our discretion, such as through the contact information you have provided.</p>
            <p>An updated version of this Disclaimer will be effective immediately upon the posting of the revised Disclaimer unless otherwise specified. Your continued use of the Website and Services after the effective date of the revised Disclaimer (or such other act specified at that time) will constitute your consent to those changes.</p>
            <h2 id="acceptance-of-this-disclaimer">Acceptance of this disclaimer</h2>
            <p>You acknowledge that you have read this Disclaimer and agree to all its terms and conditions. By accessing and using the Website and Services you agree to be bound by this Disclaimer. If you do not agree to abide by the terms of this Disclaimer, you are not authorized to access or use the Website and Services.
            <h2 id="contacting-us">Contacting us</h2>
            <p>If you have any questions, concerns, or complaints regarding this Disclaimer, we encourage you to contact us using the details below:</p>
            <p><a href="http://pocketcreamery.com/contact">http://pocketcreamery.com/contact</a></p>
            <p>This document was last updated on September 26, 2022</p>
          </div>
        </div>
      </div>
      
      <div id="footer">
        <table id="footer-table">
          <tr>
            <th><a style="color: white; text-decoration: underline;" href="#disclaimer-popup">Disclaimer</a></th>
            <th>&copy; 2022 PocketCreamery</th>
            <th>&nbsp;</th>
          </tr>
        </table>
      </div>  
    </div>

    <script type="text/javascript" src="scripts/index.js"></script>
  </body>
</html>
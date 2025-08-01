@include("home.header")
<div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>
                <section class="learn-and-plan-hero">
                    <div class="learn-and-plan-hero__grid">
                        <div class="grid-item"
                            style="background-image: url('templates/bank-pro/learn-and-plan-images/learn-and-plan-hero/Learn%20and%20Plan%20Page%20Updates%20-%20cafe.jpg');">
                        </div>
                        <div class="grid-item"
                            style="background-image: url('templates/bank-pro/learn-and-plan-images/learn-and-plan-hero/Learn%20and%20Plan%20Page%20Updates%20-%20wedding.jpg');">
                        </div>
                        <div class="grid-item"
                            style="background-image: url('templates/bank-pro/learn-and-plan-images/learn-and-plan-hero/Learn%20and%20Plan%20Page%20Updates%20-%20graduation.jpg');">
                        </div>
                        <div class="grid-item"
                            style="background-image: url('templates/bank-pro/learn-and-plan-images/learn-and-plan-hero/Learn%20and%20Plan%20Page%20Updateschecking%20-%20financials.jpg');">
                        </div>
                        <div class="grid-item grid-item--main"
                            style="background: linear-gradient(rgba(0,130,170,0),rgba(0,0,0,0.5),rgba(0,0,0,0.6)), url('templates/bank-pro/learn-and-plan-images/learn-and-plan-hero/Learn%20and%20Plan%20Page%20Updates%20-%20working%20together.jpg'); background-size: cover;">
                            <div class="learn-and-plan-hero__content">
                                <div class="content">
                                    <h1 class="content__title">Learn More. Make A Plan.</h1>
                                    <p class="content__text">It’s your money. Discover how to make the most of it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class='l-nav-secondary'>
                    <!-- notes:component
  title: Secondary Navigation / Breadcrumb
  general: This navigation will work as a hybrid breadcrumb/traditional secondary navigation. The user is on a page that has child pages, those child pages will be displayed to the right. If the user is at the lowest level (no child pages) the active page will be highlighted and its siblings will be displayed. The user will be able to jump back to items from previous sections by clicking on the breadcrumb item.
  -->

                    <nav class="js-nav-secondary nav-secondary ">
                        <ul class="nav-secondary__l1">
                            <li class="nav-secondary__l1-item">
                                <button type="button" data-toggle="section-nav-menu">Learn &amp; Plan <span
                                        class="button-icon"></span></button>
                                <div id="section-nav-menu" class="nav-secondary__l1-flyout" data-toggler=".is-active">
                                    <ul id="section-nav-drilldown"
                                        class="nav-secondary__l2 vertical menu accordion-menu" data-drilldown
                                        data-auto-height="true" data-animate-height="true" data-parent-link="true">

                                        < </ul>
                                </div>
                            </li>
                            <li class="nav-secondary__l1-item"><span>Learn &amp; Plan</span></li>
                        </ul>
                    </nav>

                    <script>
                        window.addEventListener('DOMContentLoaded', function () {
                          $(document).ready(function () {
                              $('#section-nav-drilldown').foundation('_showMenu', $('.nav-secondary_active_selector'), true);
                          });
                      });
                    </script>
                </div>

                <div class='bg-white u-pos-relative l-z-index-100 u-cf'>
                    <div class='content-nav-section' data-short-name='Learn &amp; Plan'>
                        <div class="u-pos-relative l-contain">
                            <div class="rtf h1">
                                <h1>Learn & Plan – Financial Education</h1>
                            </div>
                            <div class="social js-social">

                            </div>
                        </div>
                    </div>
                    <div class="content-nav-section" data-short-name="Learn &amp; Plan">

                        <div class="rtf mt-4 mb-2 l-contain">
                            <p>First not only provides the financial tools and accounts that help you manage your
                                money, but also the educational resources to help you build financial strength. Expand
                                your knowledge, learn new skills, and be able to make more informed decisions about your
                                financial well-being by exploring the articles below.</p>
                        </div>
                    </div>
                    <div class='l-learn-tiles'>
                    </div>


                </div>
            </div>
        </main>
    </div>
</div>
<div class='l-footer__top'>
    <div class='footer-quick-bar l-contain'>
        <div class='footer-quick-bar__item footer-quick-bar__item--routing'>
            <img src="templates/bank-pro/icons/footer-icons/citadel-credit-union-routing-number.svg" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'>Routing #</h2>
                <h3 class='footer-quick-bar__item-subtitle'>251480576</h3>
            </div>
        </div>
        <div class='footer-quick-bar__item footer-quick-bar__item--clock'>
            <img src="templates/bank-pro/icons/prefooter-icons/icoclock.png" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'>Branch Hours: <span class='weight-reg'>Mon - Thurs: 8:30
                        a.m.-5:00 p.m.</span></h2>
                <h2 class='footer-quick-bar__item-header'>Friday: <span class='weight-reg'>8:30 a.m.-6:00 p.m.</span>
                </h2>
                <h2 class='footer-quick-bar__item-header'>Saturday: <span class='weight-reg'>9:00 a.m.-1:00 p.m.</span>
                </h2>
            </div>
        </div>
        <div class='footer-quick-bar__item footer-quick-bar__item--phone'>
            <img src="templates/bank-pro/icons/footer-icons/call-citadel-credit-union.svg" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'><a
                        class="footer-quick-bar__item-header footer-quick-bar__item-header--phone"
                        href="mailto:support@unionreservebk.com">support@unionreservebk.com</a></h2>
                <h3 class='footer-quick-bar__item-subtitle'>Customer Service</h3>
            </div>
        </div>
        <div class='footer-quick-bar__item footer-quick-bar__item--video'>
            <img src="templates/bank-pro/footer-images/live-video-call.png" alt="" />
            <div class="footer-quick-bar__text">
                <h2 class='footer-quick-bar__item-header'><a
                        class="footer-quick-bar__item-header footer-quick-bar__item-header--video" href="#"
                        onclick="alert('Temporarily unavailable, please contact us via Email')">Video
                        Connect</a></h2>
                <h3 class='footer-quick-bar__item-subtitle'>Chat Virtually</h3>
            </div>
        </div>
    </div>
</div>
@include("home.footer")
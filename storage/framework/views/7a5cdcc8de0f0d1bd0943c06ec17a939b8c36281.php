

<?php $__env->startSection('content'); ?>
<div class="container">

        <!--====== Section 1 ======-->
        <?php $__env->startSection('title', 'Sign Up'); ?>

        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                    <form class="l-f-o__form">
                                        <div class="gl-s-api">
                                            <div class="u-s-m-b-15">

                                                <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>

                                                    <span>Signup with Facebook</span></button></div>
                                            <div class="u-s-m-b-30">

                                                <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>

                                                    <span>Signup with Google</span></button></div>
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="First Name"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-lname">LAST NAME *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Last Name"></div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <!--====== Date of Birth Select-Box ======-->

                                                <span class="gl-label">BIRTHDAY</span>
                                                <div class="gl-dob"><select class="select-box select-box--primary-style">
                                                        <option selected>Month</option>
                                                        <option value="male">January</option>
                                                        <option value="male">February</option>
                                                        <option value="male">March</option>
                                                        <option value="male">April</option>
                                                    </select><select class="select-box select-box--primary-style">
                                                        <option selected>Day</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                    </select><select class="select-box select-box--primary-style">
                                                        <option selected>Year</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                    </select></div>
                                                <!--====== End - Date of Birth Select-Box ======-->
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="gender">GENDER</label><select class="select-box select-box--primary-style u-w-100" id="gender">
                                                    <option selected>Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="male">Female</option>
                                                </select></div>
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-email" placeholder="Enter E-mail"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-password">PASSWORD *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-password" placeholder="Enter Password"></div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button></div>

                                        <a class="gl-link" href="<?php echo e(Route ('home')); ?>">Return to Store</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_ecomerce_project\resources\views/sign.blade.php ENDPATH**/ ?>